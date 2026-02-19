<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM personas WHERE id='$id'";
mysqli_query($conexion, $sql);

header("Location: index.php");
?>