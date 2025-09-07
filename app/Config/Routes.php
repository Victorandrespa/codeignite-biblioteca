<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home.php', 'Home::home');
$routes->get('log', 'Home::loginin');

$routes->post('login', 'EmpleadosController::index');


$routes->get('verEstudiantes', 'EstudiantesController::index');

$routes->get('verEditoriales', 'EditorialesController::index');
$routes->get('verEstados', 'EstadosController::index');
$routes->get('verGrados', 'GradosController::index');
$routes->get('verLibros', 'LibrosController::index');
$routes->get('verPrestamos', 'PrestamosController::index');
$routes->get('verEmpleados', 'EmpleadosController::index');

//Autores
$routes->get('verAutores', 'AutoresController::index');
$routes->get('eliminar_autor/(:segment)', 'AutoresController::eliminar/$1');
$routes->get('update_autor/(:segment)', 'AutoresController::buscar/$1');

$routes->post('agregarAutor', 'AutoresController::agregarAutor');
$routes->post('editar_autor', 'AutoresController::editar/$1');
