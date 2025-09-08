<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/categorias', 'CategoriaController::index');
$routes->get('/categorias/crear', 'CategoriaController::crear');
$routes->post('/categorias/registrar', 'CategoriaController::registrar');
$routes->get('/categorias/editar/(:num)', 'CategoriaController::editar/$1');
$routes->post('/categorias/actualizar', 'CategoriaController::actualizar/$1');
$routes->get('/categorias/borrar/(:num)', 'CategoriaController::borrar/$1');






// Rutas: Subcategorias
$routes->get('/subcategorias', 'SubcategoriaController::index');
$routes->get('/subcategorias/crear', 'SubcategoriaController::crear'); // Renderiza el FORM
$routes->get('/subcategorias/editar/(:num)', 'SubcategoriaController::editar/$1');
$routes->post('/subcategorias/guardar', 'SubcategoriaController::registrar');  
$routes->post('/Subcategorias/actualizar/(:num)', 'SubcategoriaController::actualizar/$1');
$routes->get('/subcategorias/borrar/(:num)', 'SubcategoriaController::borrar/$1');



// Rutas Editoriales
$routes->get('/editoriales', 'EditorialController::index');
$routes->get('/editoriales/crear', 'EditorialController::crear');
$routes->post('/editoriales/registrar', 'EditorialController::registrar');
$routes->get('/editoriales/editar/(:num)', 'EditorialController::editar/$1');
$routes->post('/editoriales/actualizar/(:num)', 'EditorialController::actualizar/$1');
$routes->get('/editoriales/borrar/(:num)', 'EditorialController::borrar/$1');


$routes->get('/recursos', 'RecursosController::index');
$routes->get('/recursos/crear', 'RecursosController::crear');
$routes->post('/recursos/registrar', 'RecursosController::registrar');
$routes->get('/recursos/editar/(:num)', 'RecursosController::editar/$1');
$routes->post('/recursos/actualizar/(:num)', 'RecursosController::actualizar/$1');
$routes->get('/recursos/borrar/(:num)', 'RecursosController::borrar/$1');
