<?php
 session_start();
 $usuarios_validos = array(
 "profesor" => "utp2026"
 );
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $usuario = trim($_POST['usuario']);
 $clave = trim($_POST['clave']);
 if (isset($usuarios_validos[$usuario]) && $usuarios_validos[$usuario] ==
$clave) {
 $_SESSION['usuario'] = $usuario;
 header("Location: consulta.php");
 exit();
 } else {
 $error = "Usuario o contraseña incorrectos.";
 }
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Iniciar Sesión</title>
</head>
<body>
 <h2>Iniciar Sesión</h2>
 <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
 <form action="login.php" method="post">
 Usuario: <input type="text" name="usuario"><br><br>
 Contraseña: <input type="password" name="clave"><br><br>
 <input type="submit" value="Ingresar">
 </form>
</body>
</html>