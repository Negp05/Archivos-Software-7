<?php
 session_start();
 if (!isset($_SESSION['usuario'])) {
 header("Location: login.php");
 exit();
 }
 require "dbconn.php";
 if (isset($_POST['nombre']) && isset($_POST['cedula']) && isset($_POST['mail'])) {
 $nombre = trim($_POST['nombre']);
 $cedula = trim($_POST['cedula']);
 $mail = trim($_POST['mail']);
 $sql = $conectar->prepare("INSERT INTO estudiante (nombre, cedula, email) VALUES
(?, ?, ?)");
 // enlaza variables PHP a parámetros de consulta SQL
 $sql->bind_param('sss', $nombre, $cedula, $mail);
 if ($sql->execute()) {
 $mensaje = "Registro guardado correctamente.";
 } else {
 $mensaje = "Se ha producido un error al guardar el registro.";
 }
 echo "<script language='javascript'>alert('$mensaje');</script>";
 $sql->close();
 }
 mysqli_close($conectar); // cierra conexión BD
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registro de Estudiante</title>
</head>
<body>
 <h2>Formulario de Registro Nuevo Estudiante</h2>
 <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>
 <form action="registro.php" method="post">
 Nombre: <input type="text" name="nombre" placeholder="nombre apellido"><br><br>
 Cédula: <input type="text" name="cedula" placeholder="4-123-4567"><br><br>
 E-mail: <input type="email" name="mail"><br><br>
 <input type="submit" value="Guardar">
 </form>
 <p><a href="consulta.php">Ir a Consultas</a> | <a href="logout.php">Cerrar
Sesión</a></p>
</body>
</html>