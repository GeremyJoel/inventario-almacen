<?php
require_once('../modelo/partida.php');

$accion = $_REQUEST['accion'];

switch ($accion) {
    case 'agregar':
        $nombre = $_REQUEST['nombre'];
        $importe = $_REQUEST['importe'];
        $numero = $_REQUEST['numero'];
        $pro = new Partida();
        $pro->addPartida($numero,$nombre,$importe);
        break;
    
    case 'eliminar':
            # code...
        break;
    
    case 'mostrar':
        $pro = new Partida();
        $rows = $pro->getPartida();
        require_once('../vista/componentes/list-partidas.php');
        break;
    default:
        # code...
        break;
}
