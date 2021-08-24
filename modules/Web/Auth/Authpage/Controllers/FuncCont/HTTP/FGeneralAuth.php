<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AuthpageFuncCont\HTTP;

use AuthTemplateFuncCont\DefaultAuthFuncController;
use Config\Services as SVC;

class FGeneralAuth extends DefaultAuthFuncController{
	public function __construct(){
		parent::__construct();
	}

	public function logout(){
		$session = SVC::session();
		$session->destroy();
		return redirect()->route('homepage');
	}
}
