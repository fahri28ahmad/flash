<?php

namespace BusinessProcessRoot\Master\Core\Auth;

use \Config\Services as SVC;
use BusinessProcessRoot\Master\Entities\Request\Auth\StudentRegisterRequest as SRREntity;

use BusinessProcessRoot\Master\Entities\User as UserEntities;
use BusinessProcessRoot\Master\Entities\SessionCookies\UserSession;

use BusinessProcessRoot\Master\Models\User as UserModel;

use BusinessProcessRoot\Master\Traits\RandomGenerator;
use BusinessProcessRoot\Master\Helper\Validation\ValidationMaster;
use BusinessProcessRoot\Master\Traits\ValidateEntity\User as UserVE;

trait BPAuthUser{
	use ValidationMaster;
	use RandomGenerator;
	use UserVE;

	public function BP_login($request,$additional_param){
		$user_model = new UserModel();

		$p = $this->filterValidateRequestParam($request,$additional_param);
		$req = $p['all_param'];
		$additional_param = $p['additional_param'];
		$optional_info = $p['optional_info'];

		$resultVE = $this->validateInputUserVE($req,$optional_info);

		if($this->validateError($resultVE)){
			return $resultVE;
		}else{
			if(isset($additional_param)){
				foreach($additional_param as $ap => $ap_v){
					$resultVE->result->$ap = $ap_v;
				}
			}

			$user_ent = $user_model->where("user_email",$resultVE->result->user_email)->findAll();

			if(sizeof($user_ent) == 1){
				$pass = $user_ent[0]->user_password;
	            if(password_verify($resultVE->result->user_password, $pass)){
					$us = new UserSession();

					$us->user_id = $user_ent[0]->user_id;
					$us->user_name = $user_ent[0]->user_name;
					$us->user_email = $user_ent[0]->user_email;
		        	$resultVE->result = $us;
	            }else{
		            $resultVE = $this->addValidateError($resultVE, array("user_email","Password is incorrect"));
	            }
			}else{
	            $resultVE = $this->addValidateError($resultVE, array("user_email","Password is incorrect"));
			}

			return $resultVE;
		}
	}

	public function BP_register($request,$additional_param){
		$p = $this->filterValidateRequestParam($request,$additional_param);
		$req = $p['all_param'];
		$additional_param = $p['additional_param'];
		$optional_info = $p['optional_info'];

		$resultVE = $this->validateInputUserVE($req,$optional_info);

		if($this->validateError($resultVE)){
			return $resultVE;
		}else{
			if(isset($additional_param)){
				foreach($additional_param as $ap => $ap_v){
					$resultVE->result->$ap = $ap_v;
				}
			}
			$user_model = new UserModel();

			$user_model->insert($resultVE->result);

			$user_id = $user_model->getInsertId();

			$user_ent = new UserEntities();

			$user_detail = $user_model->find($user_id);

			$us = new UserSession();

			$us->user_name = $user_detail->user_name;
			$us->user_email = $user_detail->user_email;
        	$resultVE->result = $us;

			return $resultVE;
		}
	}
}