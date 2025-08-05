<?php 

namespace Controllers;

use MVC\Router;

class PaginasController
{

    public static function index(Router $router)
    {

        $router->render('paginas/home', [
            'title' => 'Home'
        ]);
    }

    public static function proyectos(Router $router)
    {

        $router->render('paginas/proyectos', [
            'title' => 'Proyectos'
        ]);
    }

    public static function productos(Router $router)
    {

        $router->render('paginas/productos', [
            'title' => 'Productos'
        ]);
    }

    public static function contact(Router $router)
    {
        $router->render('paginas/contact', [
            'title' => 'Contacto'
        ]);
    }
}

?>