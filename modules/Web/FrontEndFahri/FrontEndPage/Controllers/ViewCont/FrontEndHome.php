<?php

namespace FrontEndViewCont;

use FrontEndTemplateViewCont\DefaultFrontEndHomeViewController;
use Config\Services as SVC;

class FrontEndHome extends DefaultFrontEndHomeViewController{
	public function __construct(){
		parent::__construct();
	}

	public function test_halaman_satu()
	{
		return $this->tc_view("FrontEndView\content\home\\test_halaman_satu");
	}

}
