<?php
    $accion = $_REQUEST['accion'];
    require_once('../modelo/producto.php');

switch ($accion) {
    case 'agregar':
        $clave = $_POST['clave'];
        $desc = $_POST['descripcion'];
        $unidad = $_POST['unidad'];
        $pro = new Producto();
        if($clave != ''&& $desc != ''&& $unidad != ''){
            $pro->addProducto($clave,$desc,$unidad);
        }
        header("location:../vista/productos.php");
        break;
    case 'actualizar':

        break;
    case 'borrar':
        $id = $_REQUEST['id'];
        $prod = new Producto();
        $prod->delProducto($id);
        break;
    case 'mostrar':
        $prod = new Producto();
        $datos  = $prod->getProductos();
        require_once('../vista/componentes/list-productos.php');
        break;

    default:
        # code...
        break;
}
?>