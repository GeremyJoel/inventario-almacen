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
    case 'editar':
        $id = $_POST['valor'];
        $clave = $_POST['clave'];
        $descripcion = $_POST['nombre'];
        $unidad = $_POST['UM'];
        $prod = new Producto();
        $prod->setProductos($id,$clave,$descripcion,$unidad);
        header("location:../vista/productos.php");
        break;
    case 'borrar':
        $id = $_REQUEST['id'];
        $prod = new Producto();
        $prod->delProducto($id);
        break;
    case 'mostrar':
        $prod = new Producto();
        $datos  = $prod->getProductos();
        if(count($datos)>0){
            require_once('../vista/componentes/list-productos.php');
        }
        break;

    default:
        # code...
        break;
}
?>