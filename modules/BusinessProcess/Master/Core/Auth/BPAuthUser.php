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

			$user_detail->

			return $resultVE;
		}
	}
}