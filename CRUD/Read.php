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

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>
<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombres']; ?></td>
<td><?php echo $fila['apellidos']; ?></td>
<td><?php echo $fila['edad']; ?></td>
<td><?php echo $fila['correo']; ?></td>


<?php } ?>

</table>