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
}