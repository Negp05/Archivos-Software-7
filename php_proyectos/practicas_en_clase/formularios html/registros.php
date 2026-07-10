<form method="POST" action="registro.php">
Nombre: <input type="text" name="nombre"><br>
Cédula: <input type="text" name="cedula"><br>
Fecha de nacimiento: <input type="date" name="fecha_nacimiento"><br>
Correo: <input type="text" name="correo"><br>
Teléfono: <input type="text" name="telefono"><br>
<button type="submit">Registrar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$errores = [];

$nombre = trim($_POST["nombre"] ?? "");
$cedula = trim($_POST["cedula"] ?? "");
$fecha = trim($_POST["fecha_nacimiento"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$telefono = trim($_POST["telefono"] ?? "");
if (empty($nombre)) $errores[] = "Nombre vacío";
if (empty($cedula)) $errores[] = "Cédula vacía";
if (empty($fecha)) $errores[] = "Fecha vacía";
if (empty($correo)) $errores[] = "Correo vacío";
if (empty($telefono)) $errores[] = "Teléfono vacío";
$nombre_limpio = strip_tags($nombre);
if ($nombre != $nombre_limpio) {$errores[] = "Nombre contenía HTML";}
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores[] = "Email inválido";
$cedula_num = intval($cedula);

if ($cedula_num == 0 && !empty($cedula)) $errores[] = "Cédula debe ser número";
$telefono_num = intval($telefono);
if ($telefono_num == 0 && !empty($telefono)) $errores[] = "Teléfono debe ser número";
$nombre_seguro = htmlspecialchars($nombre_limpio);
$cedula_segura = htmlspecialchars($cedula_num);
$fecha_segura = htmlspecialchars($fecha);
$correo_seguro = htmlspecialchars($correo);
$telefono_seguro = htmlspecialchars($telefono_num);

if (empty($errores)) {
echo "<h2>Registro exitoso</h2>
<p>Nombre: $nombre_seguro</p>
<p>Cédula: $cedula_segura</p>
<p>Fecha: $fecha_segura</p>
<p>Correo: $correo_seguro</p>
<p>Teléfono: $telefono_seguro</p>";
} else {
echo "<h2>Errores:</h2><ul><li>" . implode("</li><li>", $errores) .
"</li></ul>";
echo "<a href='lab_validacion.php'>← Volver</a>";
}
} else {
echo "Envía el formulario para validar.";
}
?>