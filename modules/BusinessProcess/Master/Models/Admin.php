<?php

namespace BusinessProcessRoot\Master\Models;

use CodeIgniter\Model;
use BusinessProcessRoot\Master\Entities\User as UserEntities;
use BusinessProcessRoot\Master\Entities\Misc\AllowedAdminAction as AllowedAdminActionEntities;

class Admin extends Model
{
    protected $table      = 'admins';
    protected $primaryKey = 'admin_id';

    protected $returnType = "BusinessProcessRoot\Master\Entities\Admin";
    protected $allowedFields = array('admin_id', 'admin_password', 'admin_name', 'admin_email','admin_role');

    public function get_admin_master($admin){
        $db = \Config\Database::connect();

        $builder = $db->table('admin a');
        $builderClone = $builder;

        if(isset($admin->admin_id)){
            $builder->where("u.admin_id =",$admin->admin_id);
        }
        if(isset($admin->email)){
            $builder->where("u.admin_email =",$admin->email);
        }

        return $builder;
    }

    public function get_admin_paging($builder,$admin){
        if(isset($admin->limit)){
            if($admin->limit['start'] == "page_now"){
                if(isset($admin->page)){
                    if($admin->page <= 0){
                        $admin->page = 1;
                    }
                    $admin->limit['start'] = ($admin->page - 1) * $admin->limit['total'];
                }else{
                    $admin->limit['start'] = 0;
                }
            }
            $builder->limit($admin->limit['total'],$admin->limit['start']);
        }

        if(isset($admin->order_by)){
            $builder->orderBy($admin->order_by[0], $admin->order_by[1]);
        }
        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\Admin");

        return $query;   
    }

    public function get_admin_num_row($admin,$config){
        $builder = $this->get_admin_master($admin);
        $builderClone = clone $builder;
        $total_row = $builderClone->countAllResults();

        $config['total_data'] = $total_row;

        $total_halaman = ceil($config['total_data']/$config['data_per_page']);

        $config['current_page'] = abs((int)$config['current_page']);

        if($config['current_page'] <= 0){
            $config['current_page'] = 1;
        }

        if($config['current_page'] >= $total_halaman){
            $config['current_page'] = $total_halaman;
            $admin->page = $total_halaman;
        }

        if(isset($admin->no_limit)){
            unset($admin->limit);
        }

        $admin_list = $this->get_admin_paging($builder,$admin);

        $data_send = array(
            'config' => $config,
            'admin_list' => $admin_list
        );

        return $data_send;
    }

    public function get_admin_regular($class_session){
        $builder = $this->get_admin_master($class_session);

        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\Admin");

        return $query;
    }
}