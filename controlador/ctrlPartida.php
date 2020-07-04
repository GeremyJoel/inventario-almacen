<?php
require_once('../modelo/partida.php');

$accion = $_REQUEST['accion'];

switch ($accion) {
    case 'agregar':
        $nombre = $_REQUEST['nombre'];
        $numero = $_REQUEST['numero'];
        $pro = new Partida();
        $pro->addPartida($numero,$nombre);
        break;
    
    case 'editar':
            $nom = $_POST['nombre'];
            $num = $_POST['numero'];
            $id = $_POST['valor'];
            $par = new Partida();
            $par->setPartida($num,$nom,$id);
            header("location:../vista/partidas.php");
        break;
        
    case 'eliminar':
        $id = $_POST['valor'];
        $par = new Partida();
        $par->delPartida($id);
        header("location:../vista/partidas.php");
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
