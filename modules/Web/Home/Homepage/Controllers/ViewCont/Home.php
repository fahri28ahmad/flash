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
		return $this->tc_view("HomepageView\content\main\homepage");
	}

}
