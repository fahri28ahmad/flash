<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('\HomepageViewCont\Home');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//for WEB{
    $routes->get('/', '\HomepageViewCont\Home::index',['as' => 'homepage']);
    $routes->get('/about', '\HomepageViewCont\Home::about',['as' => 'homepage.about']);
    $routes->get('/contact', '\HomepageViewCont\Home::contact',['as' => 'homepage.contact']);
    
    //For Logout{
        $routes->get('/logout', '\AuthpageFuncCont\HTTP\FGeneralAuth::logout',['as'=>'logout']);
        $routes->get('/admin-panel/logout', '\AuthpageFuncCont\HTTP\FGeneralAuth::logout',['as'=>'admin.logout']);
        $routes->get('/user-panel/logout', '\AuthpageFuncCont\HTTP\FGeneralAuth::logout',['as'=>'user.logout']);
    //}

    //for auth{
        $routes->group('',['filter' => 'onlyguest'], function($routes)
        {
            $routes->get('/admin-login', '\AuthpageViewCont\AdminAuth::login',['as' => 'admin.login.view']);

            $routes->post('/admin-login', '\AuthpageFuncCont\HTTP\FAdminAuth::login');

            $routes->get('/user-login', '\AuthpageViewCont\UserAuth::login',['as' => 'user.login.view']);
            $routes->get('/user-register', '\AuthpageViewCont\UserAuth::register',['as' => 'user.register.view']);

            $routes->post('/user-login', '\AuthpageFuncCont\HTTP\FUserAuth::login');
            $routes->post('/user-register', '\AuthpageFuncCont\HTTP\FUserAuth::register',);
        });
    //}

    //for user{
        $routes->group('user-panel',['filter' => 'authfilter:user'], function($routes)
        {
            $routes->get('/', '\UserpageViewCont\Panel::index',['as' => 'user_panel.panel.index']);

            $routes->group('swab',['filter' => 'authfilter:user'], function($routes){
                $routes->group('web', function($routes){
                    $routes->post('register', '\UserpageFuncCont\HTTP\Swab::register_swab',['as' => 'user_panel.swab.swab.register']);
                    $routes->post('delete', '\UserpageFuncCont\HTTP\Swab::delete_swab',['as' => 'user_panel.swab.swab.delete_swab']);

                    $routes->get('print-pdf/(:any)', '\UserpageFuncCont\HTTP\Swab::print_swab/$1',['as' => 'user_panel.swab.swab.print_swab']);
                    $routes->get('print-pdf-invoice/(:any)', '\UserpageFuncCont\HTTP\Swab::print_swab_invoice/$1',['as' => 'user_panel.swab.swab.print_swab_invoice']);
                });
            });
        });
    //}


    //for admin{
        $routes->group('admin-panel',['filter' => 'authfilter:admin'], function($routes)
        {
            $routes->get('/', '\AdminpageViewCont\Panel::index',['as' => 'admin_panel.panel.index']);

            $routes->group('swab',['filter' => 'authfilter:admin'], function($routes){
                $routes->group('web', function($routes){
                    $routes->post('update', '\AdminpageFuncCont\HTTP\Swab::update_swab',['as' => 'admin_panel.swab.swab.update_swab']);
                });
            });
        });
    //}
//}

//for FRONTEND{
    //for home{
        $routes->group('frontendhome', function($routes)
        {
            $routes->get('test-halaman-satu', '\FrontEndViewCont\FrontEndHome::test_halaman_satu',['as' => 'front_end.test_halaman_satu.view']);
        });

        $routes->group('frontendauth', function($routes)
        {
        });

        $routes->group('frontenduser', function($routes)
        {
            $routes->get('/', '\FrontEndViewCont\FrontEndUser::index',['as' => 'frontenduser.frontenduser.index']);
            $routes->get('pdf', '\FrontEndViewCont\FrontEndUser::pdf',['as' => 'frontenduser.frontenduser.print']);
            $routes->get('invoice', '\FrontEndViewCont\FrontEndUser::invoice',['as' => 'frontenduser.frontenduser.invoice']);
        });

        $routes->group('frontendadmin', function($routes)
        {
            $routes->get('/', '\FrontEndViewCont\FrontEndAdmin::index',['as' => 'frontendadmin.frontendadmin.admin']);
        });
    //}
//}
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
