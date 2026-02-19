<?php

$servidor = "localhost";
$usuario = "";
$password = "";
$bd = "";  //Aqui agrege sus datos de su usuario y de la bd de datos profe para que le agarre

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if(!$conexion){
    die("Error de conexión: " . mysqli_connect_error());
}

?>
