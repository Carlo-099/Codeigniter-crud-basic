<?php namespace Config;

// We will create a new instance of the RouteCollection class in the crud codeigniter project.
$routes = Services::routes();


// Then we will load the system's routing file first so that the app and ENVIRONMENT
// can override as per their need in the crud codeigniter project
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Setup of the Router in the crud codeigniter project
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
 * Definitions of the Routes in the crud codeigniter project
 * --------------------------------------------------------------------
 */


// We will get a performance increase by specifying the default
// route since we don't have to scan any directories.
$routes->get('/', 'Home::index');


// We will add these CRUD Routes.
$routes->get('listname', 'CrudController::index');
$routes->get('insertname', 'CrudController::create');
$routes->post('submit-form', 'CrudController::store');
$routes->get('editname/(:num)', 'CrudController::singleUser/$1');
$routes->post('update', 'CrudController::update');
$routes->get('delete/(:num)', 'CrudController::delete/$1');


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
