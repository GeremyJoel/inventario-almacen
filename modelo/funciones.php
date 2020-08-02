<?php
include "conexion.php";

function ultimoRegistroEntrada(){
    global $conn;
    $res = mysqli_query($conn,'SELECT * FROM entradas ORDER BY idEntrada DESC LIMIT 1');
    if($resul = mysqli_fetch_array($res)){
        return $resul;
    }else{
        return NULL;
    }
}
function mostrarUltimoEn(){
    global $conn;
    $sql = mysqli_query($conn,'SELECT * FROM entradas AS en INNER JOIN entradaproducto AS ep INNER JOIN producto AS pr ON en.idEntrada=ep.entrada AND ep.producto=pr.idProducto ORDER BY idEntrada DESC LIMIT 1');
    if($resul = mysqli_fetch_array($sql)){
        return $resul;
    }else{
        return NULL;
    }
}

function mostrarDatos(){
    global $conn;
    $sql = mysqli_query($conn,'SELECT * FROM entradas AS en INNER JOIN entradaproducto AS ep INNER JOIN producto AS pr ON en.idEntrada=ep.entrada AND ep.producto=pr.idProducto');
    return $sql;
}

function newStock($id,$cant){
    global $conn;
    $sql = mysqli_query($conn,'SELECT * FROM producto WHERE idProducto='.$id) or die('Error actualizar existencia '.mysqli_error($conn));
    $res = mysqli_fetch_array($sql);
    $new_stock = $cant + $res['existencia'];
    echo $res['existencia'];
    echo $new_stock;
    mysqli_query($conn,'UPDATE producto SET existencia='.$new_stock.' WHERE idProducto='.$id);
}

function newStockMenos($id,$cant){
    global $conn;
    $sql = mysqli_query($conn,'SELECT * FROM producto WHERE idProducto = '.$id);
    $res = mysqli_fetch_array($sql);
    $stock = $res['existencia'] - $cant;
    mysqli_query($conn,'UPDATE producto SET existencia='.$stock.' WHERE idProducto='.$id);
}

function newPartida($id,$costo,$cantidad){
    global $conn;
    $total = $costo * $cantidad;

}

function Mostrar($valor){
    global $conn;

    $sql = 'SELECT * FROM '.$valor;
    if($res = mysqli_query($conn,$sql)){
        return $res;
    }else{
        return NULL;
    }
}

function UpEntrada(){}

function newFfinanciamiento($id,$costo,$cantidad){

}

function newPrograma($id,$costo,$cantidad){

}
?>