<?php

namespace BusinessProcessRoot\Master\Entities;

use CodeIgniter\Entity;
use BusinessProcessRoot\Master\Models\User as UserModel;

class MasterEntity extends Entity
{
	public $limit = array("total"=>10,'start'=>0);
	public $page = 1;
	public $default_data_per_page = 10;
	public $pagination_config;
	public $order_by;
}