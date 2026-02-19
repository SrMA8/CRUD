<?php
include("conexion.php");

// ======== SI SE PRESIONÓ EL BOTÓN ACTUALIZAR ========
// (AQUÍ COMIENZA LA PARTE UPDATE - ACTUALIZAR)

if(isset($_POST['actualizar'])){

    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];

    $sql = "UPDATE personas SET
    nombres='$nombres',
    apellidos='$apellidos',
    edad='$edad',
    correo='$correo'
    WHERE id='$id'";

    mysqli_query($conexion, $sql);

    header("Location: index.php");
}

// ======== SI VIENE DESDE EDITAR ========
// (AQUÍ COMIENZA LA PARTE DE MOSTRAR DATOS)

$id = $_GET['id'];

$sql = "SELECT * FROM personas WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
?>

<!-- ======== FORMULARIO PARA EDITAR ======== -->

<form action="Update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

<label>Nombres:</label>
<input type="text" name="nombres" value="<?php echo $fila['nombres']; ?>" required>

<label>Apellidos:</label>
<input type="text" name="apellidos" value="<?php echo $fila['apellidos']; ?>" required>

<label>Edad:</label>
<input type="number" name="edad" value="<?php echo $fila['edad']; ?>" required>

<label>Correo:</label>
<input type="email" name="correo" value="<?php echo $fila['correo']; ?>" required>

<button type="submit" name="actualizar">Actualizar</button>

</form>
