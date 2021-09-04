<?php

namespace BusinessProcessRoot\Master\Core\Master\UserCore;

use \Config\Services as SVC;
use BusinessProcessRoot\Master\Traits\Pagination;
use BusinessProcessRoot\Master\Entities\Request\Auth\StudentRegisterRequest as SRREntity;

use BusinessProcessRoot\Master\Entities\Patient as PatientEntities;
use BusinessProcessRoot\Master\Entities\PatientPackage as PatientPackageEntities;
use BusinessProcessRoot\Master\Entities\SessionCookies\UserSession;

use BusinessProcessRoot\Master\Models\Patient as PatientModel;
use BusinessProcessRoot\Master\Models\PatientPackage as PatientPackageModel;

use BusinessProcessRoot\Master\Traits\RandomGenerator;
use BusinessProcessRoot\Master\Helper\Validation\ValidationMaster;
use BusinessProcessRoot\Master\Traits\ValidateEntity\Patient as PatientVE;

trait BPUserSwab{
	use ValidationMaster;
	use RandomGenerator;
	use PatientVE;
	use Pagination;

	public function BPU_insert_swab($request,$additional_param){
		$patient_model = new PatientModel();
		$patient_package_model = new PatientPackageModel();

		$p = $this->filterValidateRequestParam($request,$additional_param);
		$req = $p['all_param'];
		$additional_param = $p['additional_param'];
		$optional_info = $p['optional_info'];

		$resultVE = $this->validateInputPatientVE($req,$optional_info);

		if($this->validateError($resultVE)){
			return $resultVE;
		}else{
			if(isset($additional_param)){
				foreach($additional_param as $ap => $ap_v){
					$resultVE->result->$ap = $ap_v;
				}
			}

			$param = $resultVE->result;

			#check-patient
			$cp = $patient_model->where("no_ktp",$resultVE->result->no_ktp)->where("user_inputter",$resultVE->result->user_inputter)->findAll();

			if(sizeof($cp)==1){
				$patient_model->update($cp[0]->patient_id,$resultVE->result);
				$patient_id = $cp[0]->patient_id;
			}else{
				$patient_model->save($resultVE->result);
				$patient_id = $patient_model->getInsertId();
			}

			$p_ent = new PatientPackageEntities();

			$p_ent->package = $resultVE->result->package;
			$p_ent->patient_id = $patient_id;
			$p_ent->date_inserted = $resultVE->result->date_inserted;
			$p_ent->date_swab = $resultVE->result->date_swab;
			$p_ent->status = $resultVE->result->status;

			$patient_package_model->save($p_ent);

			return $resultVE;
		}
	}

	public function BPU_delete_swab($request,$additional_param){
		$patient_package_model = new PatientPackageModel();

		$p = $this->filterValidateRequestParam($request,$additional_param);
		$req = $p['all_param'];
		$additional_param = $p['additional_param'];
		$optional_info = $p['optional_info'];

		$resultVE = $this->validateInputPatientVE($req,$optional_info);

		if($this->validateError($resultVE)){
			return $resultVE;
		}else{
			if(isset($additional_param)){
				foreach($additional_param as $ap => $ap_v){
					$resultVE->result->$ap = $ap_v;
				}
			}

			$param = $resultVE->result;

			#check-patient
			$cp = $patient_package_model->join('patients p','p.patient_id = patient_package.patient_id')->where("patient_package_id",$resultVE->result->patient_package_id)->where("user_inputter",$resultVE->result->user_inputter)->findAll();

			if(sizeof($cp)==1){
				$patient_package_model->delete($cp[0]->patient_package_id);
			}

			return $resultVE;
		}
	}

	public function BPU_get_swab_list($request,$additional_param){
		$patient_package_model = new PatientPackageModel();

		$p = $this->filterValidateRequestParam($request,$additional_param);
		$req = $p['all_param'];
		$additional_param = $p['additional_param'];
		$optional_info = $p['optional_info'];

		$resultVE = $this->validateInputPatientPackageVE($req,$optional_info);

		if($this->validateError($resultVE)){
			return $resultVE;
		}else{
			if(isset($additional_param)){
				foreach($additional_param as $ap => $ap_v){
					$resultVE->result->$ap = $ap_v;
				}
			}
			
			$config = array(
				'data_per_page' => $resultVE->result->limit['total'],
				'current_page' => $resultVE->result->page,
				'side_page' => 3,
				'prev_next' => true,
				'query_param' => $request
			);

			$cs_total  = $patient_package_model->get_patient_package_num_row($resultVE->result,$config);
			$pagination = $this->setPagination($cs_total['config']);

			$data_send = array(
				'request' => $resultVE->result,
				'result_patient_package' => $cs_total,
				'result_pagination' => $pagination
			);
			$resultVE->result = $data_send;

			return $resultVE;
		}
	}
}