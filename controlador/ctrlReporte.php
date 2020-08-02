<?php
require_once('../modelo/funciones.php');
if(isset($_REQUEST['accion'])){
    $accion = $_REQUEST['accion'];

    switch ($accion) {
        case 'listar':
                $resp = mostrarDatos();
                require_once('../vista/componentes/tabla_registros.php');
            break;

        default:

            break;
    }
}
if(isset($_REQUEST['fechaI'])){
    $tipo = $_REQUEST['tipo'];
    $fechaI = $_REQUEST['fechaI'];
    $fechaF = $_REQUEST['fechaF'];
    switch ($tipo) {
        
        case 'programas':
            header('location:../vista/Reportes/programa.php?t='.$tipo.'&fi='.$fechaI.'&ff='.$fechaF);
            break;
        case 'partidas':
            header('location:../vista/Reportes/partidas.php?t='.$tipo.'&fi='.$fechaI.'&ff='.$fechaF);
            break;
        case 'financiamiento':
            header('location:../vista/Reportes/financiamiento.php?t='.$tipo.'&fi='.$fechaI.'&ff='.$fechaF);
            break;
        case 'inventario':
            header('location:../vista/Reportes/inventario.php?t='.$tipo.'&fi='.$fechaI.'&ff='.$fechaF);
            break;    
        case 'salidas':
            header('location:../vista/Reportes/salidas.php?t='.$tipo.'&fi='.$fechaI.'&ff='.$fechaF);
            break;    
        default:
            header('location:../vista/Reportes/fuentes.php?t='.$tipo.'&fi='.$fechaI.'&ff='.$fechaF);
            break;
    }
}
?>