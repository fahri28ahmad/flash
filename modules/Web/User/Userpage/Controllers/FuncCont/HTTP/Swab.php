<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace UserpageFuncCont\HTTP;

use UserTemplateFuncCont\HTTP\DefaultUserFuncController;
use Config\Services as SVC;

class Swab extends DefaultUserFuncController{
	public function __construct(){
		parent::__construct();
	}

	public function register_self(){
		echo "Janda yang mana";
	}
}
