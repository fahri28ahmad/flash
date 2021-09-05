<?php

namespace BusinessProcessRoot\Master\Traits\ValidateEntity;
use BusinessProcessRoot\Master\Entities\Admin as AdminEntities;
use BusinessProcessRoot\Master\Helper\Validation\ValidationMaster;
use \Config\Services as SVC;

trait Admin{
	use ValidationMaster;

	public function validateInputAdminVE($request=array(),$opt_info=array()){
		$a_entities = new AdminEntities();

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
					case 'admin-email':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['admin-email'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['admin-email']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'valid_email',
							"Admin Email",
							'admin_email'
						);

						$a_entities->admin_email = $v;

						$rules['admin_email'] = $ar;
					break;

					case 'admin-password':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['admin_password'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['admin_password']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p,
							"Admin Password",
							'admin_password'
						);

						$a_entities->admin_password = $v;

						$rules['admin_password'] = $ar;
					break;
				}
			}
		}

		$result = $this->validateRule($rules,$a_entities);

		return $result;
	}
}