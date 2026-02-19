<?php include("conexion.php"); ?>

<body style="
background-image: url('img/crud.webp');
background-size: cover;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
">

<p style="text-align: center; font-size: 75px; font-family:Georgia, 'Times New Roman', Times, serif; margin-bottom: 10px;">Registro de Personas</p>

<form style="text-align: center;" action="create.php" method="POST">
    <h3 style="margin-top: 0;">Ingresa tu nombre(s): </h3>
    <input type="text" name="nombres" placeholder="Nombre(s)" required>
    <h3>Ingresa tus apellidos: </h3>
    <input type="text" name="apellidos" placeholder="Apellidos" required>
    <h3>Ingresa tu edad: </h3>
    <input style="width: 170px" type="number" name="edad" placeholder="Edad" min="1" max="105" required>
    <h3>Ingresa tu coreo electronico: </h3>
    <input type="email" name="correo" placeholder="Correo" required>
    <br><br>

    <button type="submit">Guardar</button>
</form>
