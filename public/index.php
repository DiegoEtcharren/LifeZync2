<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

// Area Publica:
$router->get('/home', [PaginasController::class, 'home']);
$router->get('/proyectos', [PaginasController::class, 'proyectos']);
$router->get('/productos', [PaginasController::class, 'productos']);
$router->get('/contacto', [PaginasController::class, 'contact']);


$router->comprobarRutas();