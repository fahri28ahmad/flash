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

	public function pdf()
	{
		$data_css = array(
			'assets/pdf/style.css',
		);

		$this->set_css_data($data_css,"top","last","");
		return $this->tc_view("FrontEndView\content\User\\hasil");
	}
	public function invoice()
	{
		$data_css = array(
			'assets/pdf/style1.css',
		);

		$this->set_css_data($data_css,"top","last","");
		return $this->tc_view("FrontEndView\content\User\\invoice");
	}
}