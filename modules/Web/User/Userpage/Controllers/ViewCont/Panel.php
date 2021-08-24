<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace UserpageViewCont;

use AuthTemplateViewCont\DefaultAuthViewController;
use Config\Services as SVC;

class Panel extends DefaultAuthViewController{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		echo "Apaan sih";
	}
}
