<?php

namespace BusinessProcessRoot\Master\Models;

use CodeIgniter\Model;
use BusinessProcessRoot\Master\Entities\Package as PackageEntities;

class Package extends Model
{
    protected $table      = 'package';
    protected $primaryKey = 'package_id';

    protected $returnType = "BusinessProcessRoot\Master\Entities\Package";
    protected $allowedFields = array('package_name', 'price');

    public function get_package_master($package){
        $db = \Config\Database::connect();

        $builder = $db->table('package pc');
        $builderClone = $builder;

        if(isset($package->package_id)){
            $builder->where("pc.package_id =",$package->package_id);
        }

        return $builder;
    }

    public function get_package_paging($builder,$package){
        if(isset($package->limit)){
            if($package->limit['start'] == "page_now"){
                if(isset($package->page)){
                    if($package->page <= 0){
                        $package->page = 1;
                    }
                    $package->limit['start'] = ($package->page - 1) * $package->limit['total'];
                }else{
                    $package->limit['start'] = 0;
                }
            }
            $builder->limit($package->limit['total'],$package->limit['start']);
        }

        if(isset($package->order_by)){
            $builder->orderBy($package->order_by[0], $package->order_by[1]);
        }
        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\Package");

        return $query;   
    }

    public function get_package_num_row($package,$config){
        $builder = $this->get_package_master($package);
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
            $package->page = $total_halaman;
        }

        if(isset($package->no_limit)){
            unset($package->limit);
        }

        $package_list = $this->get_package_paging($builder,$package);

        $data_send = array(
            'config' => $config,
            'package_list' => $package_list
        );

        return $data_send;
    }

    public function get_package_regular($class_session){
        $builder = $this->get_package_master($class_session);

        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\Package");

        return $query;
    }
}