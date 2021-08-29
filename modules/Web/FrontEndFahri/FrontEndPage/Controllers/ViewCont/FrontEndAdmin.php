<?php

namespace FrontEndViewCont;

use FrontEndTemplateViewCont\DefaultFrontEndUserViewController;
use Config\Services as SVC;

class FrontEndAdmin extends DefaultFrontEndUserViewController{
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		return $this->tc_view("FrontEndView\content\Admin\\admin");
	}
}