<?php

namespace BusinessProcessRoot\Master\Traits\ValidateEntity;
use BusinessProcessRoot\Master\Entities\Patient as PatientEntities;
use BusinessProcessRoot\Master\Entities\PatientPackage as PatientPackageEntities;
use BusinessProcessRoot\Master\Helper\Validation\ValidationMaster;
use \Config\Services as SVC;

trait Patient{
	use ValidationMaster;

	public function validateInputPatientVE($request=array(),$opt_info=array()){
		$a_entities = new PatientEntities();

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
					case 'no-ktp':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['no_ktp'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['no_ktp']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'numeric:\-',
							"No KTP",
							'no_ktp'
						);

						$a_entities->no_ktp = $v;

						$rules['no_ktp'] = $ar;
					break;

					case 'complete-name':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['complete-name'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['complete-name']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'encode_html',
							"Complete Name",
							'complete_name'
						);

						$a_entities->complete_name = $v;

						$rules['complete_name'] = $ar;
					break;

					case 'address':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['address'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['address']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p,
							"Address",
							'address'
						);

						$a_entities->address = $v;

						$rules['address'] = $ar;
					break;

					case 'phone-number':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['phone-number'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['phone-number']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'none',
							"Phone number",
							'phone_number'
						);

						$a_entities->phone_number = $v;

						$rules['phone_number'] = $ar;

					case 'phone-number':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['phone-number'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['phone-number']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'valid_phone',
							"Phone number",
							'phone_number'
						);

						$a_entities->phone_number = $v;

						$rules['phone_number'] = $ar;
					break;

					case 'gender':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['gender'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['gender']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'isbetween:1.2',
							"Gender",
							'gender'
						);

						$a_entities->gender = $v;

						$rules['gender'] = $ar;
					break;

					case 'package':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['package'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['package']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'isbetween:1.2.3',
							"Package",
							'package'
						);

						$a_entities->package = $v;

						$rules['package'] = $ar;
					break;

					case 'birth-date':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['birth-date'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['birth-date']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'valid_date',
							"Birth date",
							'birth_date'
						);

						$a_entities->birth_date = $v;

						$rules['birth_date'] = $ar;
					break;
				}
			}
		}

		$result = $this->validateRule($rules,$a_entities);

		return $result;
	}

	public function validateInputPatientPackageVE($request=array(),$opt_info=array()){
		$a_entities = new PatientPackageEntities();

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
					case 'no-ktp':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['no_ktp'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['no_ktp']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'numeric:\-',
							"No KTP",
							'no_ktp'
						);

						$a_entities->no_ktp = $v;

						$rules['no_ktp'] = $ar;
					break;

					case 'complete-name':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['complete-name'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['complete-name']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'encode_html',
							"Complete Name",
							'complete_name'
						);

						$a_entities->complete_name = $v;

						$rules['complete_name'] = $ar;
					break;

					case 'address':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['address'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['address']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p,
							"Address",
							'address'
						);

						$a_entities->address = $v;

						$rules['address'] = $ar;
					break;

					case 'phone-number':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['phone-number'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['phone-number']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'none',
							"Phone number",
							'phone_number'
						);

						$a_entities->phone_number = $v;

						$rules['phone_number'] = $ar;

					case 'phone-number':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['phone-number'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['phone-number']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'valid_phone',
							"Phone number",
							'phone_number'
						);

						$a_entities->phone_number = $v;

						$rules['phone_number'] = $ar;
					break;

					case 'gender':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['gender'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['gender']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'isbetween:1.2',
							"Gender",
							'gender'
						);

						$a_entities->gender = $v;

						$rules['gender'] = $ar;
					break;

					case 'package':
						if(isset($opt_info['ADDITIONAL_VALIDATION']['package'])){
							$string_p = implode("|", $opt_info['ADDITIONAL_VALIDATION']['package']);
							$string_p .= "|";
						}else{
							$string_p = "";
						}

						$ar = array(
							$string_p . 'isbetween:1.2.3',
							"Package",
							'package'
						);

						$a_entities->package = $v;

						$rules['package'] = $ar;
					break;

					case 'page':
						if(strlen($v)>=1){
							$ar = array(
								'numeric|larger:0',
								"Page",
								'page'
							);

							$cv_entities->page = $v;

							$rules['page'] = $ar;
						}
					break;
				}
			}
		}

		$result = $this->validateRule($rules,$a_entities);

		return $result;
	}
}