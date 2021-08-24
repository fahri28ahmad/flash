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
        $routes->get('/logout', '\AuthpageFuncCont\FGeneralAuth::logout');
        $routes->get('/admin-panel/logout', '\AuthpageFuncCont\FGeneralAuth::logout',['as'=>'user.logout']);
        $routes->get('/user-panel/logout', '\AuthpageFuncCont\FGeneralAuth::logout');
    //}

    //for auth{
        $routes->group('',['filter' => 'onlyguest'], function($routes)
        {
            $routes->get('/admin-login', '\AuthpageViewCont\AdminAuth::login',['as' => 'admin.login.view']);

            $routes->post('/admin-login', '\AuthpageFuncCont\FAdminAuth::login');

            $routes->get('/user-login', '\AuthpageViewCont\UserAuth::login',['as' => 'user.login.view']);
            $routes->get('/user-register', '\AuthpageViewCont\UserAuth::register',['as' => 'user.register.view']);

            $routes->post('/user-login', '\AuthpageFuncCont\HTTP\FUserAuth::login');
            $routes->post('/user-register', '\AuthpageFuncCont\HTTP\FUserAuth::register',);
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
        });

        $routes->group('frontendadmin', function($routes)
        {
        });
    //}
//}
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
