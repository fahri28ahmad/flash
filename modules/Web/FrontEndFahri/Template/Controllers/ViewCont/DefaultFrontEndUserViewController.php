<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace FrontEndTemplateViewCont;
use Master\Controllers\ViewCont\ViewController;
use Master\Traits\SessionRole;
use Master\Helper\FormHandling;
use Config\Services as SVC;
//contains all assets

class DefaultFrontEndUserViewController extends ViewController{
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
			'assets/assets/vendora/css/font-face.css',
			'assets/assets/vendora/font-awesome-4.7/css/font-awesome.min.css',
			'assets/assets/vendora/font-awesome-5/css/fontawesome-all.min.css',
			'assets/assets/vendora/mdi-font/css/material-design-iconic-font.min.css',
			'assets/assets/vendora/bootstrap-4.1/bootstrap.min.css',
			'assets/assets/vendora/animsition/animsition.min.css',
			'assets/assets/vendora/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css',
			'assets/assets/vendora/wow/animate.cssvendor/css-hamburgers/hamburgers.min.css',
			'assets/assets/vendora/slick/slick.css',
			'assets/assets/vendora/select2/select2.min.css',
			'assets/assets/vendora/perfect-scrollbar/perfect-scrollbar.css',
			'assets/css/theme.css',
		);

		$data_css_nd = array(
			'assets/assets/css/style.css',
		);

		$this->set_css_data($data_css_st,"top","last","");
		$this->set_css_data($data_css_nd,"top","last","");
	}

	public function set_script(){

		$data_js_st = array(
			'assets/assets/vendora/aos/aos.js',
			'assets/assets/vendora/bootstrap/js/bootstrap.bundle.min.js',
			'assets/assets/vendora/glightbox/js/glightbox.min.js','assets/assets/vendor/php-email-form/validate.js',
			'assets/assets/vendora/swiper/swiper-bundle.min.js',
			'assets/assets/vendora/jquery-3.2.1.min.js',
			'assets/assets/vendora/bootstrap/popper.min.js',
			'assets/assets/vendora/bootstrap/bootstrap.min.js',
			'assets/assets/vendora/slick/slick.min.js',
			'assets/assets/vendora/wow/wow.min.js',
			'assets/assets/vendora/animsition/animsition.min.js',
			'assets/assets/vendora/bootstrap-progressbar/bootstrap-progressbar.min.js',
			'assets/assets/vendora/counter-up/jquery.waypoints.min.js',
			'assets/assets/vendora/counter-up/jquery.counterup.min.js',
			'assets/assets/vendora/circle-progress/circle-progress.min.js',
			'assets/assets/vendora/perfect-scrollbar/perfect-scrollbar.js',
			'assets/assets/vendora/chartjs/Chart.bundle.min.js',
			'assets/assets/vendora/select2/select2.min.js',
			'assets/assets/js/main.js',
			'assets/assets/js/bootstrap.js',
			
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
