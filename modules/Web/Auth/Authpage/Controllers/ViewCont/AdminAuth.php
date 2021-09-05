<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AuthpageViewCont;

use BusinessProcessRoot\Master\Models\Admin as UserModel;

use BusinessProcessRoot\Master\Entities\Admin as AdminEntities;

use BusinessProcessRoot\Master\Entities\SessionCookies\AdminSession;

use AuthTemplateViewCont\DefaultAuthViewController;
use Config\Services as SVC;

class AdminAuth extends DefaultAuthViewController{
	protected $systemMenu;

	public function __construct(){
		parent::__construct();


		$data_js_rd = array(
			"custom/auth/auth.js"
		);

		$this->set_js_data($data_js_rd,"bottom","last","assets/js/");
	}

	public function login(){
		$error = $this->session_handling->getFlashdata('validate_error');

		if(!empty($error)){
			if(isset($error->error_message)){
				$this->set_data_view("validate_error",$error->error_message);
			}else{
				$this->set_data_view("validate_error",array($error));
			}
		}else{
			$this->set_data_view("validate_error",null);
		}

		return $this->tc_view("AuthpageView\admin\login");
	}

}
