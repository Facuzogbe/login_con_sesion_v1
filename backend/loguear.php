<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// recibo los post del form



//armo la query con la consulta a la tabla de la base de datos
$q = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and clave = '$clave'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

//guardo todos los datos que traigo en el array


// si lo que trae es mayor a cero redirecciono
if($array['contar'] > 0){
    $_SESSION ['username'] = $usuario;
    header ("location:../front/welcome.php");

}

?>