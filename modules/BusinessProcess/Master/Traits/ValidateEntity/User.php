<?php

namespace BusinessProcessRoot\Master\Traits\ValidateEntity;
use BusinessProcessRoot\Master\Entities\User as UserEntities;
use BusinessProcessRoot\Master\Helper\Validation\ValidationMaster;
use \Config\Services as SVC;

trait User{
	use ValidationMaster;

	public function validateInputUserVE($request=array(),$opt_info=array()){
		$a_entities = new UserEntities();

		if(isset($opt_info['MANDATORY_VALIDATION'])){
			foreach($opt_info['MANDATORY_VALIDATION'] as $omv){
				if(isset($request[$omv])){

				}else{
					$request[$omv] = "";
				}
			}
		}

		$rules = array();
		if(!empty($request)){
			foreach($request as $m => $v){
				switch($m){
					case 'user-name':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['user-name'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['user-name']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'encode_html',
							"Name",
							'name'
						);

						$a_entities->user_name = $v;

						$rules['user_name'] = $ar;
					break;

					case 'user-email':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['user-email'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['user-email']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'valid_email',
							"User Email",
							'user_email'
						);

						$a_entities->user_email = $v;

						$rules['user_email'] = $ar;
					break;

					case 'user-password':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['password'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['password']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p,
							"Password",
							'password'
						);

						$a_entities->user_password = $v;

						$rules['user_password'] = $ar;
					break;

					case 'user-password-conf':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['user-password-conf'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['user-password-conf']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'none',
							"Password Confirmation",
							'user_password_conf'
						);

						$a_entities->user_password_conf = $v;

						$rules['user_password_conf'] = $ar;
					break;
				}
			}
		}

		$result = $this->validateRule($rules,$a_entities);

		return $result;
	}
}