<?php

namespace BusinessProcessRoot\Master\Entities;

use CodeIgniter\Entity;
use BusinessProcessRoot\Master\Entities\MasterEntity;

use BusinessProcessRoot\Master\Models\Patient as PatientModel;
use BusinessProcessRoot\Master\Models\Package as PackageModel;

class PatientPackage extends MasterEntity
{
	protected $patient_package_id;
	protected $patient_id;
	protected $package;
	protected $date_inserted;
	protected $date_swab;
	protected $swab_status;
	protected $result_pos;
	protected $public_key;

	public function get_patient_detail(){
        $pModel = new PatientModel();

        $ins = $pModel->where('patient_id',$this->attributes['patient_id'])
        ->findAll();

        return $ins;
	}

	public function get_package_detail(){
        $pModel = new PackageModel();

        $ins = $pModel->where('package_id',$this->attributes['package'])
        ->findAll();

        return $ins;
	}

	public function get_date_inserted(){
		$date_inserted = new \DateTime($this->attributes['date_inserted']);

        return $date_inserted->format("d F Y H:i:s");
	}

	public function get_date_swab(){
		$date_inserted = new \DateTime($this->attributes['date_swab']);

        return $date_inserted->format("d F Y H:i:s");
	}

	public function get_result_string(){
		switch($this->attributes['result_pos']){
			case '0':
			return "Not Yet";
			break;

			case '1':
			return "Positive";
			break;

			case '2':
			return "Negative";
			break;
		}
	}

	public function allowed_swab_result_to_be_printed(){
		if($this->attributes['result_pos'] == 0){
			return 0;
		}else{
			return 1;
		}
	}
}