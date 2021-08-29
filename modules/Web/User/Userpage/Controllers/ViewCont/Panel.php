<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace UserpageViewCont;

use UserTemplateViewCont\DefaultUserViewController;
use Config\Services as SVC;
use BusinessProcessRoot\Master\Models\PatientPackage as PatientPackageModel;
use BusinessProcessRoot\Master\Core\Master\UserCore\BPUserSwab;

class Panel extends DefaultUserViewController{
	use BPUserSwab;
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$request = $this->request;
		$ppm_model = new PatientPackageModel();

		$accepted_param = array(
			'page',
		);

		$additional_param = array(
			'user_inputter' => $this->session->user_id,
			'limit' => array(
				'total' => 12,
				'start' => 0
			),
			'ACCEPTED_PARAM' => $accepted_param,
			'REQUEST_TYPE' => 'get'
		);

		$BP_get_class = $this->BPU_get_swab_list($request,$additional_param);

		$this->set_data_view("patient_package",$BP_get_class->result['result_patient_package']['patient_package_list']);
		$this->set_data_view("pager",$BP_get_class->result['result_pagination']);
		$this->set_data_view("query_param",$request->getGet());

		return $this->tc_view("UserpageView\content\\test_user");
	}
}
