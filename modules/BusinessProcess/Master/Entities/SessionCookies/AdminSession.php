<?php

namespace BusinessProcessRoot\Master\Entities\SessionCookies;

use BusinessProcessRoot\Master\Models\Admin as AdminModel;
use CodeIgniter\Entity;

class AdminSession extends Entity
{
	protected $admin_id;
	protected $admin_name;
	protected $admin_email;
	public $fix_role = "admin";
}