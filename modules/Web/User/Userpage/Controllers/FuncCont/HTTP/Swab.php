<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace UserpageFuncCont\HTTP;

use UserTemplateFuncCont\HTTP\DefaultUserFuncController;
use Config\Services as SVC;
use BusinessProcessRoot\Master\Core\Master\UserCore\BPUserSwab;

class Swab extends DefaultUserFuncController{
	use BPUserSwab;

	public function __construct(){
		parent::__construct();
	}

	public function register_swab(){
		$request = $this->request;

		$accepted_param = array(
			'no-ktp',
			'complete-name',
			'address',
			'phone-number',
			'birth-date',
			'gender',
			'package'
		);

		$mandatory_validation = array(
			'no-ktp',
			'complete-name',
			'address',
			'phone-number',
			'birth-date',
			'gender',
			'package'
		);

		$additional_validation = array(
			'user-email' => array("required"),
			'user-password' => array("required"),
		);

		$additional_param = array(
			'user_inputter' => $this->session->user_id,
			'date_inserted' => date("Y-m-d H:i:s"),
			'package_status' => 0,
			'date_swab' => date('Y-m-d H:i:s'),
			'ACCEPTED_PARAM' => $accepted_param,
			'REQUEST_TYPE' => 'post',
			'ADDITIONAL_VALIDATION' => $additional_validation,
			'MANDATORY_VALIDATION' => $mandatory_validation
		);

		$resultVE = $this->BPU_insert_swab($request,$additional_param);

		if($this->validateError($resultVE)){
			return redirect()->route("user_panel.panel.index")->with('validate_error',$resultVE);
		}else{
			return redirect()->route("user_panel.panel.index");
		}
	}
}
