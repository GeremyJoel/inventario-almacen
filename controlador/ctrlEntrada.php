<?php
date_default_timezone_set("America/Tegucigalpa");
$accion = $_REQUEST['accion'];
require_once('../modelo/funciones.php');
require_once('../modelo/entrada.php');
require_once('../modelo/producto.php');
require_once('../modelo/entradaProducto.php');

switch ($accion) {
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
        $partida = $_POST['partida'];
        $fecha = date("Y:m:d H:i:s");
        $entrada = new Entrada();
        $EP = new enProducto();
        $entrada->addEntrada($programa, $fuente, $tipo, $fecha, $folio,$partida);
        $entradas = ultimoRegistroEntrada();
        $ent = $entradas['idEntrada'];
        $EP->addEP($lote, $cantidad, $fechaC, $costo, $ent, $producto);
        newStock($producto, $cantidad);
        break;

    case 'listar':
        require_once('../modelo/programa.php');
        $prog = new Programa();
        require_once('../modelo/producto.php');
        $prod = new Producto();
        $pr = $prod->getProductos();
        require_once('../modelo/financiamiento.php');
        $finan = new Financiamiento();
        $fin = $finan->getFinanciamiento();
        $pro = $prog->getPrograma();
        $datos =mostrarUltimoEn();
        if($datos != NULL){
            require_once('../vista/componentes/entradas_nuevas.php');
        }
        break;

    case 'editar':
        $idE = $_POST['id'];
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
        $entrada->setEntrada($idE,$programa,$fuente,$tipo,$fecha,$folio);
        $EP->setEP($lote,$cantidad,$fechaC,$costo,$producto,$idE);
        echo "Hasta aqui llego";
        break;
    case 'del':
        $valor = $_POST['valor'];
        $entrada = new Entrada();
        $EP = new enProducto();
        $entrada->delEntrada($valor);
        $EP->delEP($valor);
        break;
}
