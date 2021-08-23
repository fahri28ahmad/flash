<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace FrontEndTemplateViewCont;
use Master\Controllers\ViewCont\ViewController;
use Master\Traits\SessionRole;
use Master\Helper\FormHandling;
use Config\Services as SVC;
//contains all assets

class DefaultFrontEndHomeViewController extends ViewController{
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
			'assets/assets/vendor/aos/aos.css','assets/assets/vendor/bootstrap-icons/bootstrap-icons.css',
			'assets/assets/vendor/bootstrap/css/bootstrap.min.css',
			'assets/assets/vendor/glightbox/css/glightbox.min.css','assets/assets/vendor/swiper/swiper-bundle.min.css'
		);

		$data_css_nd = array(
			'assets/assets/css/style.css',
		);

		$this->set_css_data($data_css_st,"top","last","");
		$this->set_css_data($data_css_nd,"top","last","");
	}

	public function set_script(){

		$data_js_st = array(
			'assets/assets/vendor/aos/aos.js','assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
			'assets/assets/vendor/glightbox/js/glightbox.min.js','assets/assets/vendor/php-email-form/validate.js',
			'assets/assets/vendor/swiper/swiper-bundle.min.js'
		);

		$data_js_bottom = array(
			"assets/assets/js/main.js"
		);

		$this->set_js_data($data_js_st,"bottom","last","");
		$this->set_js_data($data_js_bottom,"bottom","last","");
	}

	// public function set_menu(){

	// }

	public function set_language(){
		$this->set_data_view('language',"english");
	}
}
