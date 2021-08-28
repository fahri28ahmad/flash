<?php

namespace FrontEndViewCont;

use FrontEndTemplateViewCont\DefaultFrontEndUserViewController;
use Config\Services as SVC;

class FrontEndUser extends DefaultFrontEndUserViewController{
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		return $this->tc_view("FrontEndView\content\User\\test_user");
	}
	public function admin()
	{
		return $this->tc_view("FrontEndView\content\Admin\\admin");
	}

	public function pdf()
	{
		return $this->tc_view("FrontEndView\content\User\\hasil");
	}
	public function invoice()
	{
		return $this->tc_view("FrontEndView\content\User\\invoice");
	}
}