<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "phpdesdecero";

$conexion =mysqli_connect($host, $usuario, $clave, $bd);

// conexion a la base de datos y envio de parametros

if ($conexion){
header ("location: ../front/error.php");
}

?>

<!--password juan21, area51); -->