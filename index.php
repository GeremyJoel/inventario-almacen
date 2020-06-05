<?php

require_once("./modelo/conexion.php");
header("location:./vista/productos.php");
$obj = new conexion();
$obj->conectDB();

