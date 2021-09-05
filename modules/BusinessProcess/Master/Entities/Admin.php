<?php

namespace BusinessProcessRoot\Master\Entities;

use CodeIgniter\Entity;

class Admin extends Entity
{
	protected $admin_id;
	protected $admin_password;
	protected $admin_name;
	protected $admin_email;
	protected $admin_role;
}