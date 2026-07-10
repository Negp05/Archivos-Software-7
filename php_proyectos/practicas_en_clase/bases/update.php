<?php
 session_start();
 if (!isset($_SESSION['usuario'])) {
 header("Location: login.php");
 exit();
 }
 require "dbconn.php";
 if (isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['mail']))
{
 $cedula = trim($_POST['cedula']);
 $nombre = trim($_POST['nombre']);
 $mail = trim($_POST['mail']);
 $sql = $conectar->prepare("UPDATE estudiante SET nombre = ?, email = ? WHERE
cedula = ?");
 $sql->bind_param('sss', $nombre, $mail, $cedula);
 if ($sql->execute()) {
    
    $mensaje = "Datos actualizados correctamente. Filas afectadas: " . $sql-
>affected_rows;
 } else {
 $mensaje = "Se ha producido un error al actualizar el registro.";
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
 <title>Actualizar Estudiante</title>
</head>
<body>
 <h2>Actualizar Datos de Estudiante</h2>
 <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>
 <form action="update.php" method="post">
 Cédula a actualizar: <input type="text" name="cedula" placeholder="4-123-
4567"><br><br>
 Nuevo Nombre: <input type="text" name="nombre"><br><br>
 Nuevo Email: <input type="email" name="mail"><br><br>
 <input type="submit" value="Actualizar">
 </form>
 <p><a href="consulta.php">Ir a Consultas</a> | <a href="logout.php">Cerrar
Sesión</a></p>
</body>
</html>
