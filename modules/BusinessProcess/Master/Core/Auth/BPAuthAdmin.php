<?php

namespace BusinessProcessRoot\Master\Core\Auth;

use \Config\Services as SVC;
use BusinessProcessRoot\Master\Entities\Request\Auth\StudentRegisterRequest as SRREntity;

use BusinessProcessRoot\Master\Entities\Admin as AdminEntities;
use BusinessProcessRoot\Master\Entities\SessionCookies\AdminSession;

use BusinessProcessRoot\Master\Models\Admin as AdminModel;

use BusinessProcessRoot\Master\Traits\RandomGenerator;
use BusinessProcessRoot\Master\Helper\Validation\ValidationMaster;
use BusinessProcessRoot\Master\Traits\ValidateEntity\Admin as AdminVE;

trait BPAuthAdmin{
	use ValidationMaster;
	use RandomGenerator;
	use AdminVE;

	public function BP_login($request,$additional_param){
		$admin_model = new AdminModel();

		$p = $this->filterValidateRequestParam($request,$additional_param);
		$req = $p['all_param'];
		$additional_param = $p['additional_param'];
		$optional_info = $p['optional_info'];

		$resultVE = $this->validateInputAdminVE($req,$optional_info);

		if($this->validateError($resultVE)){
			return $resultVE;
		}else{
			if(isset($additional_param)){
				foreach($additional_param as $ap => $ap_v){
					$resultVE->result->$ap = $ap_v;
				}
			}

			$admin_ent = $admin_model->where("admin_email",$resultVE->result->admin_email)->findAll();

			if(sizeof($admin_ent) == 1){
				$pass = $admin_ent[0]->admin_password;
	            if(password_verify($resultVE->result->admin_password, $pass)){
					$ad = new AdminSession();

					$ad->admin_id = $admin_ent[0]->admin_id;
					$ad->admin_name = $admin_ent[0]->admin_name;
					$ad->admin_email = $admin_ent[0]->admin_email;
		        	$resultVE->result = $ad;
	            }else{
		            $resultVE = $this->addValidateError($resultVE, array("admin_email","Password is incorrect"));
	            }
			}else{
	            $resultVE = $this->addValidateError($resultVE, array("admin_email","Password is incorrect"));
			}

			return $resultVE;
		}
	}
}