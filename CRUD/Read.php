<h2>Lista de Personas</h2>

<?php
$sql = "SELECT * FROM personas";
$resultado = mysqli_query($conexion, $sql);
?>

<table border="1">
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Edad</th>
<th>Correo</th>
<th>Acciones</th>
</tr>




<?php } ?>

</table>