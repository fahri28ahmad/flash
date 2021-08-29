<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace UserpageFuncCont\HTTP;

use UserTemplateFuncCont\HTTP\DefaultUserFuncController;
use Config\Services as SVC;
use BusinessProcessRoot\Master\Core\Master\UserCore\BPUserSwab;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;


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

	public function print_swab($swab_id){
		$request = $this->request;

		$accepted_param = array(
			'none'
		);

		$additional_param = array(
			'patient_package_id' => $swab_id,
			'user_inputter' => $this->session->user_id,
			'ACCEPTED_PARAM' => $accepted_param,
			'REQUEST_TYPE' => 'post',
		);

		$resultVE = $this->BPU_get_swab_list($request,$additional_param);

		$patient_package = $resultVE->result['result_patient_package']['patient_package_list'];
		$data = array(
			'patient_data' => $patient_package
		);

		if(sizeof($patient_package)==1){

			$result = Builder::create()
			    ->writer(new PngWriter())
			    ->writerOptions([])
			    ->data('https://google.com')
			    ->encoding(new Encoding('UTF-8'))
			    ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
			    ->size(300)
			    ->margin(10)
			    ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
			    ->labelText('Scan Disini')
			    ->labelFont(new NotoSans(20))
			    ->labelAlignment(new LabelAlignmentCenter())
			    ->build();			

		    $dataUri = $result->getDataUri();

		    $data['barcode'] = $dataUri;

	        $dompdf = new \Dompdf\Dompdf(); 
	        $dompdf->loadHtml(view("UserpageView\pdf\\swab_print",$data));
	        $dompdf->setPaper('A4', 'portrait');
	        $dompdf->render();
	        $dompdf->stream();
			//return view("UserpageView\pdf\\swab_print",$data);
		}else{
			return redirect()->route("user_panel.panel.index");
		}
	}
}
