<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace AuthTemplateViewCont;
use Master\Controllers\ViewCont\ViewController;
use Master\Traits\SessionRole;
use Master\Helper\FormHandling;
use Config\Services as SVC;
//contains all assets

class DefaultAuthViewController extends ViewController{
	use SessionRole;
	public $security;

	public $session_handling;

	public function __construct(){
		parent::__construct();
		//My Own CSS

		$this->session_handling = SVC::session();
		$this->security = SVC::security();
		$this->INDEX = 1;

		$this->set_data_view("INDEX",$this->INDEX);

		helper("form_handling");
		$this->set_style();
		$this->set_script();
		// $this->set_menu();
		$this->set_language();
		// $this->set_locale();
	}

	public function set_session(){
		$session_ent = SVC::session();
		$this->session = $session_ent->get('data');
		$this->set_data_view("session",$this->session);
	}

	// public function set_locale(){
	// 	$l = lang('Home.list');
	// 	$this->set_data_view('sl',$l);
	// }

	public function set_style(){
		$data_css_st = array(
			'empty',
		);

		$data_css_nd = array(
			'empty',
		);

		$data_css_rd = array(
			'empty',
		);

		$this->set_css_data($data_css_st,"top","last","");
		$this->set_css_data($data_css_nd,"top","last","");
		$this->set_css_data($data_css_rd,"top","last","");
	}

	public function set_script(){

		$data_js_st = array(
			'empty'
		);

		$data_js_nd = array(
			'empty'
		);

		$data_js_top = array(
			"empty"
		);

		$data_js_rd = array(
			"empty"
		);

		$this->set_js_data($data_js_top,"top","first","assets/js/");
		$this->set_js_data($data_js_st,"bottom","last","assets/vendor/");

		$this->set_js_data($data_js_rd,"bottom","last","assets/js/");

		$this->set_js_data("assets/js/theme/home/main.js","bottom","last");
	}

	// public function set_menu(){

	// }

	public function set_language(){
		$this->set_data_view('language',"english");
	}
}
