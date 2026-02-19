<?php include("conexion.php"); ?>

<h2 style="text-align: center; font-size : 400px">Registro Persona</h2>

<form style="text-align: center;" action="create.php" method="POST">
    <input type="text" name="nombres" placeholder="Nombre(s)" required>
    <input type="text" name="apellidos" placeholder="Apellidos" required>
    <input type="number" name="edad" placeholder="Edad" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <button type="submit">Guardar</button>
</form>