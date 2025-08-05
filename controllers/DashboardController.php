<?php 

namespace Controllers;
use MVC\Router;
use Model\Evento;
use Model\Usuario;
use Model\Registro;

class DashboardController {

    public static function index(Router $router) {
        if (!is_admin()) {
            header('Location: /login');
            return;
        }
        // Obtener ultimos registros:
        $registros = Registro::get(10);
        foreach ($registros as $registro) {
            $registro->usuario = Usuario::find($registro->usuario_id);
        }

        // Calcular los ingresos: 
        $virtuales = Registro::total('paquete_id', 2);
        $presenciales = Registro::total('paquete_id', 1);

        $ingresos = ($virtuales * 46.41) + ($presenciales * 189.54);

        // Eventos con mas y menos lugares disponibles: 
        $menos_disponibles = Evento::ordenarLimite('disponibles','3', 'ASC');
        $mas_disponibles = Evento::ordenarLimite('disponibles','3', 'DESC');

        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administracion', 
            'registros' => $registros,
            'ingresos' => $ingresos,
            'menos_disponibles' => $menos_disponibles,
            'mas_disponibles' => $mas_disponibles
        ]);
    }
    
}

?>