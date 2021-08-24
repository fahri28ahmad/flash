<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AuthpageFuncCont\HTTP;

use AuthTemplateFuncCont\DefaultAuthFuncController;
use Config\Services as SVC;
use BusinessProcessRoot\Master\Core\Auth\BPAuthUser;

class FUserAuth extends DefaultAuthFuncController{
	public $request;
	use BPAuthUser;

	public function __construct(){
		parent::__construct();
		 $this->request = SVC::request();
	}

	public function register(){
		$request = $this->request;

		$accepted_param = array(
			'user-name',
			'user-email',
			'user-password',
			'user-password-conf'
		);

		$mandatory_validation = array(
			'user-name','user-email','user-password','user-password-conf'
		);

		$additional_validation = array(
			'user-name' => array("required"),
			'user-email' => array("required",'unique:users.user_email'),
			'user-password' => array("required",'min_length:8'),
			'user-password-conf' => array("required",'min_length:8',"is_same:[user_password]")
		);

		$additional_param = array(
			'ACCEPTED_PARAM' => $accepted_param,
			'REQUEST_TYPE' => 'post',
			'ADDITIONAL_VALIDATION' => $additional_validation,
			'MANDATORY_VALIDATION' => $mandatory_validation
		);

		$result = $this->BP_register($request,$additional_param);

		if($this->validateError($result)){
			return redirect()->route("user.register.view")->with('validate_error',$result);
		}else{
			$session = SVC::session();

            $session->set($data_session);

			return redirect()->route('user.panel.dashboard');
		}
	}
}
