<?php

namespace FrontEndViewCont;

<<<<<<< HEAD
use FrontEndTemplateViewCont\DefaultFrontEndAdminViewController;
use Config\Services as SVC;

class FrontEndAdmin extends DefaultFrontEndAdminViewController{
=======
use FrontEndTemplateViewCont\DefaultFrontEndUserViewController;
use Config\Services as SVC;

class FrontEndAdmin extends DefaultFrontEndUserViewController{
>>>>>>> daee17716a77fd83310cbc5f9660faabe28fd7d2
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
<<<<<<< HEAD
		return $this->tc_view("FrontEndView\content\admin\admin");
=======
		return $this->tc_view("FrontEndView\content\Admin\\admin");
>>>>>>> daee17716a77fd83310cbc5f9660faabe28fd7d2
	}
}