<?php

//modules\Home\Homepage\Controllers\ViewCont;

namespace HomepageViewCont;

use HomeTemplateViewCont\DefaultHomeViewController;
use Config\Services as SVC;

class Home extends DefaultHomeViewController{
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data_css_nd = array(
			'fahri.css',
			'font-face.css'
		);

		$this->set_css_data($data_css_nd,"top","first","assets/css/");

		
		return $this->tc_view("HomepageView\content\main\homepage");
	}

	public function about(){
		return $this->tc_view("HomepageView\content\main\about");
	}
	public function contact(){
		return $this->tc_view("HomepageView\content\main\contact");
	}

}
