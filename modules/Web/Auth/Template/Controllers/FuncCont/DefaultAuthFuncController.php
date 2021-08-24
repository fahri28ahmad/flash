<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AuthTemplateFuncCont;
use Master\Controllers\FuncCont\FuncController;
use Config\Services as SVC;

class DefaultAuthFuncController extends FuncController{
	public function __construct(){
		parent::__construct();
		$this->set_session();
	}

	public function set_session(){
		$session_ent = SVC::session();
		if($session_ent->image = "none"){
			$session_ent->image = "user-profile.png";
		}
		$this->session = $session_ent->get('data');
	}
}
