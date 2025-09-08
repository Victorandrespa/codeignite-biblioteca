<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home.php', 'Home::home');
$routes->get('log', 'Home::loginin');

$routes->post('login', 'EmpleadosController::index');


//Vistas

$routes->get('verAutores', 'AutoresController::index');
$routes->get('verEstudiantes', 'EstudiantesController::index');
$routes->get('verEditoriales', 'EditorialesController::index');
$routes->get('verEstados', 'EstadosController::index');
$routes->get('verGrados', 'GradosController::index');
$routes->get('verLibros', 'LibrosController::index');
$routes->get('verPrestamos', 'PrestamosController::index');
$routes->get('verEmpleados', 'EmpleadosController::index');

//Autores
$routes->get('eliminar_autor/(:segment)', 'AutoresController::eliminar/$1');
$routes->get('update_autor/(:segment)', 'AutoresController::buscar/$1');

$routes->post('agregarAutor', 'AutoresController::agregarAutor');
$routes->post('editar_autor', 'AutoresController::editar/$1');

//Editoriales
$routes->get('eliminar_editorial/(:segment)', 'EditorialesController::eliminar/$1');
$routes->get('update_editorial/(:segment)', 'EditorialesController::buscar/$1');

$routes->post('agregarEditorial', 'EditorialesController::agregarEditorial');
$routes->post('editar_editorial', 'EditorialesController::editar/$1');

//Empleados
$routes->get('eliminar_empleado/(:segment)', 'EmpleadosController::eliminar/$1');
$routes->get('update_empleado/(:segment)', 'EmpleadosController::buscar/$1');

$routes->post('agregarEmpleado', 'EmpleadosController::agregarEmpleado');
$routes->post('editar_empleado', 'EmpleadosController::editar/$1');

//Estados
$routes->get('eliminar_estado/(:segment)', 'EstadosController::eliminar/$1');
$routes->get('update_estado/(:segment)', 'EstadosController::buscar/$1');

$routes->post('agregarEstado', 'EstadosController::agregarEstado');
$routes->post('editar_estado', 'EstadosController::editar/$1');

//Estudiantes
$routes->get('eliminar_estudiante/(:segment)', 'EstudiantesController::eliminar/$1');
$routes->get('update_estudiante/(:segment)', 'EstudiantesController::buscar/$1');

$routes->post('agregarEstudiante', 'EstudiantesController::agregarEstudiante');
$routes->post('editar_estudiante', 'EstudiantesController::editar/$1');

//Grados
$routes->get('eliminar_grado/(:segment)', 'GradosController::eliminar/$1');
$routes->get('update_grado/(:segment)', 'GradosController::buscar/$1');

$routes->post('agregarGrado', 'GradosController::agregarGrado');
$routes->post('editar_grado', 'GradosController::editar/$1');

//Libros
$routes->get('eliminar_libro/(:segment)', 'LibrosController::eliminar/$1');
$routes->get('update_libro/(:segment)', 'LibrosController::buscar/$1');

$routes->post('agregarLibro', 'LibrosController::agregarLibro');
$routes->post('editar_libro', 'LibrosController::editar/$1');

//Prestamos
$routes->get('eliminar_prestamo/(:segment)', 'PrestamosController::eliminar/$1');
$routes->get('update_prestamo/(:segment)', 'PrestamosController::buscar/$1');

$routes->post('agregarPrestamo', 'PrestamosController::agregarPrestamo');
$routes->post('editar_prestamo', 'PrestamosController::editar/$1');


