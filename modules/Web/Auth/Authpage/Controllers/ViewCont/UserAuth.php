<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AuthpageViewCont;

use BusinessProcessRoot\Master\Models\User as UserModel;

use BusinessProcessRoot\Master\Entities\User as UserEntities;

use BusinessProcessRoot\Master\Entities\SessionCookies\UserSession;

use AuthTemplateViewCont\DefaultAuthViewController;
use Config\Services as SVC;

class UserAuth extends DefaultAuthViewController{
	public function __construct(){
		parent::__construct();


		$data_js_rd = array(
			"custom/auth/auth.js"
		);

		$this->set_js_data($data_js_rd,"bottom","last","assets/js/");
	}

	public function login(){
		$error = $this->session_handling->getFlashdata('error');

		if(!empty($error)){
			if(isset($error->error_message)){
				$this->set_data_view("error",$error->error_message);
			}else{
				$this->set_data_view("error",array($error));
			}
		}else{
			$this->set_data_view("error",null);
		}

		return $this->tc_view("AuthpageView\user\login");
	}

	public function register(){
		$error = $this->session_handling->getFlashdata('error');

		if(!empty($error)){
			if(isset($error->error_message)){
				$this->set_data_view("error",$error->error_message);
			}else{
				$this->set_data_view("error",array($error));
			}
		}else{
			$this->set_data_view("error",null);
		}

		return $this->tc_view("AuthpageView\user\\register");
	}
}
