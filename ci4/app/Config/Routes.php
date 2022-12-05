<?php namespace Config;

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
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//routes to Home controller
$routes->get('/records', 'Home::records'); 
$routes->get('/create', 'Home::create');
$routes->get('/edit/(:num)', 'Home::edit');
$routes->get('/delete/(:num)', 'Home::delete');

//routes to Login controller
$routes->get('/login', 'Login::login');
$routes->get('/register', 'Login::register');
$routes->get('/secret', 'Login::secret');
$routes->get('/logout', 'Login::logout');

//routes to API controller
$routes->get('/api/records', 'Api::records');
$routes->get('/api/records/(:num)', 'Api::selectRecord');
$routes->post('/api/records/new', 'Api::new');
$routes->post('/api/records/update/(:num)', 'Api::update');
$routes->get('/api/records/delete/(:num)', 'Api::delete');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
