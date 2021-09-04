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
	protected $status;

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
}