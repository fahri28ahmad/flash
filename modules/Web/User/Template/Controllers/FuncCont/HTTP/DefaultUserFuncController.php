<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace UserTemplateFuncCont\HTTP;

use Master\Controllers\FuncCont\FuncController;
use BusinessProcessRoot\Master\Traits\RandomGenerator;
use Config\Services as SVC;

class DefaultUserFuncController extends FuncController{
	use RandomGenerator;

	public $session;

	public function __construct(){
		parent::__construct();
		$this->set_session();
	}

	public function set_session(){
		$session_ent = SVC::session();
		$this->session = $session_ent->get('data');
	}
}
