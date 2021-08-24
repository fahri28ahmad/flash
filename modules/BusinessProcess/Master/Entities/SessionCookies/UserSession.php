<?php

namespace BusinessProcessRoot\Master\Entities\SessionCookies;

use BusinessProcessRoot\Master\Models\User as UserModel;
use CodeIgniter\Entity;

class UserSession extends Entity
{
	protected $user_id;
	protected $user_name;
	protected $user_email;
	public $fix_role = "user";
}