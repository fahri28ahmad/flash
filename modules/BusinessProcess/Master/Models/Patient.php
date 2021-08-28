<?php

namespace BusinessProcessRoot\Master\Models;

use CodeIgniter\Model;
use BusinessProcessRoot\Master\Entities\Patient as PatientEntities;
use BusinessProcessRoot\Master\Entities\Misc\AllowedAdminAction as AllowedAdminActionEntities;

class Patient extends Model
{
    protected $table      = 'patients';
    protected $primaryKey = 'patient_id';

    protected $returnType = "BusinessProcessRoot\Master\Entities\Patient";
    protected $allowedFields = array('patient_id', 'no_ktp', 'complete_name', 'address', 'phone_number', 'birth_date', 'gender', 'user_inputter');

    public function get_patient_master($patient){
        $db = \Config\Database::connect();

        $builder = $db->table('patients p');
        $builderClone = $builder;

        if(isset($patient->patient_id)){
            $builder->where("p.patient_id =",$patient->patient_id);
        }

        return $builder;
    }

    public function get_patient_paging($builder,$patient){
        if(isset($patient->limit)){
            if($patient->limit['start'] == "page_now"){
                if(isset($patient->page)){
                    if($patient->page <= 0){
                        $patient->page = 1;
                    }
                    $patient->limit['start'] = ($patient->page - 1) * $patient->limit['total'];
                }else{
                    $patient->limit['start'] = 0;
                }
            }
            $builder->limit($patient->limit['total'],$patient->limit['start']);
        }

        if(isset($patient->order_by)){
            $builder->orderBy($patient->order_by[0], $patient->order_by[1]);
        }
        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\Patient");

        return $query;   
    }

    public function get_patient_num_row($patient,$config){
        $builder = $this->get_patient_master($patient);
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
            $patient->page = $total_halaman;
        }

        if(isset($patient->no_limit)){
            unset($patient->limit);
        }

        $patient_list = $this->get_patient_paging($builder,$patient);

        $data_send = array(
            'config' => $config,
            'patient_list' => $patient_list
        );

        return $data_send;
    }

    public function get_patient_regular($class_session){
        $builder = $this->get_patient_master($class_session);

        $query = $builder->get()->getResult("BusinessProcessRoot\Master\Entities\Patient");

        return $query;
    }
}