<?php
require_once('../modelo/funciones.php');
$accion = $_REQUEST['accion'];

switch ($accion) {
    case 'listar':
            $resp = mostrarDatos();
            require_once('../vista/componentes/tabla_registros.php');
        break;

    default:

        break;
}

?>