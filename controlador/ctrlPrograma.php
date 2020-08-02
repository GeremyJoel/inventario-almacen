<?php
require_once('../modelo/programa.php');

$accion = $_REQUEST['accion'];

switch ($accion) {
    case 'agregar':
        $nombre = $_REQUEST['nombre'];
        $numero = $_REQUEST['numero'];
        $pro = new Programa();
        $pro->addPrograma($numero,$nombre);

        break;
    
    case 'eliminar':
            $id = $_POST['valor'];
            $pro = new Programa();
            $pro->delPrograma($id);
        break;

    case 'editar':
            $id = $_POST['valor'];
            $num = $_POST['numero'];
            $nom = $_POST['nombre'];
            $pro = new Programa();
            $pro -> setPrograma($num,$nom,$id);
            header("location:../vista/programas.php");
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
