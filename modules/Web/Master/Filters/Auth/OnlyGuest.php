<?php

namespace WebRoot\Master\Filters\Auth;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services as SVC;

class OnlyGuest implements FilterInterface
{
	public $redirect = array(
		'admin_redirect' => "admin.login.view",
		'user_redirect' => "user.login.view"
	);

    public function before(RequestInterface $request, $arguments = null)
    {
    	$session = SVC::session();
    	$userdata = $session->get('data');

    	if(isset($userdata->fix_role)){
    		$redirect_route_p = $userdata->fix_role . "_redirect";

    		$redirect_route = $this->redirect[$redirect_route_p];

			return redirect()->route($redirect_route);
    	}
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}