<?php

namespace BusinessProcessRoot\Master\Entities;

use CodeIgniter\Entity;

class Patient extends Entity
{
	protected $patient_id;
	protected $no_ktp;
	protected $complete_name;
	protected $address;
	protected $phone_number;
	protected $birth_date;
	protected $gender;
	protected $user_inputter;

	public function get_birth_date(){
		$date_inserted = new \DateTime($this->attributes['birth_date']);

        return $date_inserted->format("d F Y");
	}

	public function get_gender(){
		if($this->attributes['gender'] == 1){
			return "Laki-laki";
		}else{
			return "Perempuan";
		}
	}
}