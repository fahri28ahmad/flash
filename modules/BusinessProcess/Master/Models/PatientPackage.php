<?php

namespace BusinessProcessRoot\Master\Models;

use CodeIgniter\Model;
use BusinessProcessRoot\Master\Entities\PatientPackage as PatientPackageEntities;
use BusinessProcessRoot\Master\Entities\Misc\AllowedAdminAction as AllowedAdminActionEntities;

class PatientPackage extends Model
{
    protected $table      = 'patient_package';
    protected $primaryKey = 'patient_package_id';

    protected $returnType = "BusinessProcessRoot\Master\Entities\PatientPackage";
    protected $allowedFields = array('patient_package_id', 'patient_id','package','date_inserted','date_swab','package_status');

    public function get_patient_package_master($patient_package){
        $db = \Config\Database::connect();

        $builder = $db->table('patient_package u');
        $builder->join('patients pt', 'pt.patient_id = u.patient_id');

        if(isset($patient_package->patient_package_id)){
            $builder->where("u.patient_package_id =",$patient_package->patient_package_id);
        }
        if(isset($patient_package->user_inputter)){
            $builder->where("pt.user_inputter =",$patient_package->user_inputter);
        }

        return $builder;
    }

    public function get_patient_package_paging($builder,$patient_package){
        if(isset($patient_package->limit)){
            if($patient_package->limit['start'] == "page_now"){
                if(isset($patient_package->page)){
                    if($patient_package->page <= 0){
                        $patient_package->page = 1;
                    }
                    $patient_package->limit['start'] = ($patient_package->page - 1) * $patient_package->limit['total'];
                }else{
                    $patient_package->limit['start'] = 0;
                }
            }
            $builder->limit($patient_package->limit['total'],$patient_package->limit['start']);
        }

        if(isset($patient_package->order_by)){
            $builder->orderBy($patient_package->order_by[0], $patient_package->order_by[1]);
        }else{
            $builder->orderBy("patient_package_id", "DESC");
        }
        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\PatientPackage");

        return $query;   
    }

    public function get_patient_package_num_row($patient_package,$config){
        $builder = $this->get_patient_package_master($patient_package);
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
            $patient_package->page = $total_halaman;
        }

        if(isset($patient_package->no_limit)){
            unset($patient_package->limit);
        }

        $patient_package_list = $this->get_patient_package_paging($builder,$patient_package);

        $data_send = array(
            'config' => $config,
            'patient_package_list' => $patient_package_list
        );

        return $data_send;
    }

    public function get_patient_package_regular($class_session){
        $builder = $this->get_patient_package_master($class_session);

        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\PatientPackage");

        return $query;
    }
}