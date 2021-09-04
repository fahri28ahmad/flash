<?php

namespace BusinessProcessRoot\Master\Entities;

use CodeIgniter\Entity;

class Package extends Entity
{
	protected $package_id;
	protected $package_name;
	protected $price;

	public function get_package_price(){
        return "Rp. " . number_format($this->attributes['price'],2,',','.');
	}
}