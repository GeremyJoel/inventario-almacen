<?php
date_default_timezone_set("America/Tegucigalpa");
$accion = $_REQUEST['accion'];
require_once('../modelo/funciones.php');
require_once('../modelo/entrada.php');
require_once('../modelo/producto.php');
require_once('../modelo/entradaProducto.php');

switch($accion){
    case 'agregar':
        $folio = $_POST['folio'];
        $lote = $_POST['lote'];
        $fuente = $_POST['fuente'];
        $tipo = $_POST['tipo'];
        $cantidad = $_POST['cantidad'];
        $costo = $_POST['costo'];
        $producto = $_POST['producto'];
        $fechaC = $_POST['fecha'];
        $programa = $_POST['programa'];
        $fecha = date("Y:m:d H:i:s");
        $entrada = new Entrada();
        $EP = new enProducto();
        $entrada->addEntrada($programa,$fuente,$tipo,$fecha,$folio);
        $entradas = ultimoRegistroEntrada();
        $ent = $entradas['idEntrada'];
        $EP->addEP($lote,$cantidad,$fechaC,$costo,$ent,$producto);
        newStock($producto,$cantidad);
        break;

    case 'mostrar':

        break;

    case 'listar':
            $datos =mostrarUltimoEn();
            require_once('../vista/componentes/entradas_nuevas.php');
        break;
}

?>