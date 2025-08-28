<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home.php', 'Home::home');
$routes->get('log', 'Home::loginin');
$routes->get('estudiantes', 'EstudiantesController::index');


$routes->post('login', 'EmpleadosController::index');
