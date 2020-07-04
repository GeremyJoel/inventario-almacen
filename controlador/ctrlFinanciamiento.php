<?php
require_once('../modelo/financiamiento.php');

$accion = $_REQUEST['accion'];

switch ($accion) {
    case 'agregar':
        $nombre = $_REQUEST['nombre'];
        $numero = $_REQUEST['numero'];
        $pro = new Financiamiento();
        $pro->addFinanciamiento($numero,$nombre);
        break;
    
    case 'eliminar':
            $id = $_POST['valor'];
            $fin = new Financiamiento();
            $fin -> delFinanciamiento($id);
        break;
       
    case 'editar':
            $id = $_POST['valor'];
            $num = $_POST['numero'];
            $nom = $_POST['nombre'];
            echo $id;
            echo $num;
            echo $nom;
            $fin = new Financiamiento();
            $fin->setFinanciamiento($num,$nom,$id);
            header('location:../vista/financiamiento.php');
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
