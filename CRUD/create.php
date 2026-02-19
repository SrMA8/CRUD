<?php
include("conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];

$sql = "INSERT INTO personas(nombres, apellidos, edad, correo_electronico)
VALUES('$nombres','$apellidos','$edad','$correo')";

mysqli_query($conexion, $sql);

header("Location: index.php");

?>
