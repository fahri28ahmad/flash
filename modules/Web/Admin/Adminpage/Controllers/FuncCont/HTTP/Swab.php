<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AdminpageFuncCont\HTTP;

use AdminTemplateFuncCont\HTTP\DefaultAdminFuncController;
use Config\Services as SVC;
use BusinessProcessRoot\Master\Core\Master\AdminCore\BPAdminSwab;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;


class Swab extends DefaultAdminFuncController{
	use BPAdminSwab;

	public function __construct(){
		parent::__construct();
	}

	public function update_swab(){
		$request = $this->request;

		$accepted_param = array(
			'result-pos',
			'patient-package-id'
		);

		$mandatory_validation = array(
			'result-pos',
			'patient-package-id',
		);

		$additional_param = array(
			'date_swab' => date('Y-m-d H:i:s'),
			'ACCEPTED_PARAM' => $accepted_param,
			'REQUEST_TYPE' => 'post',
			'MANDATORY_VALIDATION' => $mandatory_validation
		);

		$resultVE = $this->BPA_update_swab($request,$additional_param);

		return redirect()->route("admin_panel.panel.index");
	}
}
