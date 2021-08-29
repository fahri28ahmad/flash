<?php

namespace FrontEndViewCont;

use FrontEndTemplateViewCont\DefaultFrontEndAdminViewController;
use Config\Services as SVC;

class FrontEndAdmin extends DefaultFrontEndAdminViewController{
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		return $this->tc_view("FrontEndView\content\admin\admin");
	}
}