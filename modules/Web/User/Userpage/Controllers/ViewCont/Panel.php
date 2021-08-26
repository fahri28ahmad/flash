<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace UserpageViewCont;

use UserTemplateViewCont\DefaultUserViewController;
use Config\Services as SVC;

class Panel extends DefaultUserViewController{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		return $this->tc_view("UserpageView\content\\test_user");
	}
}
