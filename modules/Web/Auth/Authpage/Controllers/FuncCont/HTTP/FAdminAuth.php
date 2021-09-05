<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AuthpageFuncCont\HTTP;

use AuthTemplateFuncCont\DefaultAuthFuncController;
use Config\Services as SVC;
use BusinessProcessRoot\Master\Core\Auth\BPAuthAdmin;

class FAdminAuth extends DefaultAuthFuncController{
	public $request;
	use BPAuthAdmin;

	public function __construct(){
		parent::__construct();
		 $this->request = SVC::request();
	}

	public function login(){
		$request = $this->request;

		$accepted_param = array(
			'admin-email',
			'admin-password',
		);

		$mandatory_validation = array(
			'admin-email','admin-password'
		);

		$additional_validation = array(
			'admin-email' => array("required"),
			'admin-password' => array("required"),
		);

		$additional_param = array(
			'ACCEPTED_PARAM' => $accepted_param,
			'REQUEST_TYPE' => 'post',
			'ADDITIONAL_VALIDATION' => $additional_validation,
			'MANDATORY_VALIDATION' => $mandatory_validation
		);

		$resultVE = $this->BP_login($request,$additional_param);

		if($this->validateError($resultVE)){
			return redirect()->route("admin.login.view")->with('validate_error',$resultVE);
		}else{
			$session = SVC::session();

			$data_session = array(
				'data' =>$resultVE->result
			);

            $session->set($data_session);

			return redirect()->route('admin_panel.panel.index');
		}
	}
}
