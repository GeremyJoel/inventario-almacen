<?php
require_once('../modelo/financiamiento.php');

$accion = $_REQUEST['accion'];

switch ($accion) {
    case 'agregar':
        $nombre = $_REQUEST['nombre'];
        $importe = $_REQUEST['importe'];
        $numero = $_REQUEST['numero'];
        $pro = new Financiamiento();
        $pro->addFinanciamiento($numero,$nombre,$importe);
        break;
    
    case 'eliminar':
            # code...
        break;
    
    case 'mostrar':
        $pro = new Financiamiento();
        $rows = $pro->getFinanciamiento();
            require_once('../vista/componentes/list-Ffinanciamiento.php');
        break;
    default:
        # code...
        break;
}
