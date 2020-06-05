<?php
require_once('../modelo/programa.php');

$accion = $_REQUEST['accion'];

switch ($accion) {
    case 'agregar':
        $nombre = $_REQUEST['nombre'];
        $importe = $_REQUEST['importe'];
        $numero = $_REQUEST['numero'];
        $pro = new Programa();
        $pro->addPrograma($numero,$nombre,$importe);

        break;
    
    case 'eliminar':
            # code...
        break;
    
    case 'mostrar':
        $pro = new Programa();
        $rows = $pro->getPrograma();
            require_once('../vista/componentes/list-programa.php');
        break;
    default:
        # code...
        break;
}
