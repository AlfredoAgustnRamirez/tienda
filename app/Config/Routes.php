<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Controlador vista
$routes->get('/', 'Home::index');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/terminos', 'Home::terminos');
$routes->get('/comercializacion', 'Home::comercializacion');

//Controlador usuario
$routes->get('/registrar', 'UsuarioController::create');
$routes->post('/enviar-form', 'UsuarioController::formValidation');

//Controlador logueo
$routes->get('/login', 'LoginController::inicio');
$routes->post('/enviar-login', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/dashboard_view', 'Dashboard::index');
$routes->match(['get','post'],'profile', 'LoginController::perfil');

//Controlador Crud
$routes->get('/namelist', 'CrudController::index');
$routes->get('/addname', 'CrudController::create');
$routes->get('/editnames', 'CrudController::singleUser');
$routes->post('/update', 'CrudController::update');
$routes->get('/activar/(:num)', 'CrudController::activar/$1');
$routes->get('/desactivar/(:num)', 'CrudController::desactivar/$1');
$routes->get('/eliminados', 'CrudController::eliminados');

//Controlador producto
$routes->get('/listado_producto', 'ProductoController::index');
$routes->get('/mostrar_productos', 'ProductoController::mostrar_todos');
$routes->get('/producto', 'ProductoController::mostrar_todos');
$routes->get('/addproducto', 'ProductoController::create');
$routes->post('/enviar-product', 'ProductoController::store');
$routes->get('/editproducto/(:num)', 'ProductoController::singleProducto/$1');
$routes->post('/update_producto', 'ProductoController::update_producto');
$routes->get('/quitar/(:num)', 'ProductoController::quitar/$1');
$routes->get('/colocar/(:num)', 'ProductoController::colocar/$1');
$routes->get('/productos_eliminados', 'ProductoController::eliminados');
$routes->get('/mostrar_productos', 'ProductoController::muestra_categoria');

//Controlador carrito
$routes->get('/mostrar_carrito', 'CarritoController::index');
$routes->post('/actualizar_carrito', 'CarritoController::carrito_actualiza');
$routes->post('/carrito_agrega', 'CarritoController::agregar');
$routes->get('/borrar', 'CarritoController::borrar_carrito');
$routes->post('/verificar_compra', 'CarritoController::verificar_compra');
$routes->post('/compra_realizada', 'CarritoController::verificar_compra');
$routes->get('/finalizar_compra', 'CarritoController::finalizar_compra');
$routes->get('/quitar_carrito/(:any)', 'CarritoController::quitar_carrito/$1');
$routes->get('/compra_realizada', 'CarritoController::verCompras');
$routes->post('/comprar_carrito/(:num)', 'CarritoController::comprar_carrito/$1');
$routes->get('/compra_detalles', 'CarritoController::muestra_detalle');


//Contralador consulta
$routes->get('/contacto', 'ConsultaController::contacto');
$routes->post('/verificar_contacto', 'ConsultaController::verificar_contacto');
$routes->get('/listado_consultas', 'ConsultaController::listado_consultas');
$routes->get('/listado_consulta', 'ConsultaController::listado_consulta');
$routes->get('/gracias', 'ConsultaController::gracias');
$routes->post('/verificar_consulta', 'ConsultaController::verificar_consulta');

//controlador cliente 
$routes->get('/cliente', 'ClienteController::index');

//controlador categorias
$routes->get('/categorias', 'CategoriaController::categorias');
$routes->post('/registrar_categoria', 'CategoriaController::registrar_categoria');
$routes->get('/listado_categoria', 'CategoriaController::mostrar_categoria');
$routes->get('/eliminar_categoria/(:num)', 'CategoriaController::eliminar_categoria/$1');
$routes->get('/activar_categoria/(:num)', 'CategoriaController::activar_categoria/$1');
$routes->get('/editar_categoria/(:num)', 'CategoriaController::single_categoria/$1');
$routes->post('/editar_categoria', 'CategoriaController::editar_categoria');
$routes->get('/gracias', 'CategoriaController::gracias');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
