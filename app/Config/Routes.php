<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
//$routes->method('nombre de la ruta', 'nombre del controlador::nombre del método');
$routes->get('clientes','ClienteControlador::verClientes');
$routes->get('lineas_telefonicas','VistaDatosPlanesControlador::verDatosLineasTelefonicas');
$routes->get('planes','PlanesControlador::verPlanes');
$routes->post('guardar_plan','PlanesControlador::guardarPlan');
$routes->get('eliminar_plan/(:num)','PlanesControlador::eliminarPlan/$1');
$routes->get('eliminar_clientes/(:num)','ClienteControlador::eliminarCliente/$1');
$routes->get('datos_actualizar/(:num)','PlanesControlador::datosActualizar/$1');
$routes->post('modificar_plan','PlanesControlador::modificarPlan');
$routes->post('iniciar_sesion','UsuariosController::iniciarSesion');
$routes->get('cerrar_sesion','UsuariosController::cerrarSesion');
