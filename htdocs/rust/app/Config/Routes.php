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
$routes->get('/', 'Home::index', ['filter' => 'noauth']);
$routes->get('about', 'Home::about', ['filter' => 'noauth']);
$routes->match(['get', 'post'], '/admission/(:alpha)', 'Home::admission/$1', ['filter' => 'noauth']);
$routes->get('/logout/(:alpha)', 'LecturerController::logout/$1');

$routes->match(['get', 'post'], '/login', 'Login::checkUser', ['filter' => 'noauth']);
$routes->match(["get", "post"], "/lecturer-dashboard/(:alpha)", "LecturerController::lecturer_dashboard/$1", ['filter' => 'auth']);

$routes->match(["get", "post"], "/student-list/(:alpha)/(:any)/(:any)", "AdminController::all_student_list/$1/$2/$3", ['filter' => 'auth']);
$routes->match(["get", "post"], "/courses/(:alpha)/(:any)/(:any)", "AdminController::data_sheet/$1/$2/$3", ['filter' => 'auth']);
$routes->match(["get", "post"], "/student-data-sheet-record/(:alpha)/(:any)/(:any)", "AdminController::data_sheet_record/$1/$2/$3", ['filter' => 'auth']);

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
