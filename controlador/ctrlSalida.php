<?php
date_default_timezone_set("America/Tegucigalpa");
require_once '../modelo/salida.php';
require_once '../modelo/funciones.php';
$accion = $_REQUEST['accion'];

    if ($accion == "agregar") {
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $fecha = date("Y:m:d H:i:s");
        $salida = new Salida();
        $salida->addSalida($producto,$cantidad,$fecha);
        newStockMenos($producto,$cantidad);
        echo 'SI llego hasta aqui';
    }
    else
    if($accion == 'mostrar'){
        $salida = new Salida();
        $rows = $salida->getSalida();
        require_once('../vista/componentes/tabla_salidas.php');
    }

?>