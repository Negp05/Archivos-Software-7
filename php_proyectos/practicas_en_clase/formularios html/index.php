<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario de contacto</title>
</head>
<body>

<h3 style="font-family: tahoma;">Formulario de contacto</h3>

<form action="action_handler.php" method="POST">
    <table border="0" cellpadding="8" cellspacing="0">
        <tr>
            <td align="right"><label for="nombre">Nombre:</label></td>
            <td><input type="text" id="nombre" name="nombre" size="30" required placeholder="Tu nombre completo"></td>
        </tr>
        <tr>
            <td align="right"><label for="mail">Correo electrónico:</label></td>
            <td><input type="email" id="mail" name="correo" size="30" required placeholder="ejemplo@dominio.com"></td>
        </tr>
        <tr>
            <td align="right" valign="top"><label for="comment">Comentarios:</label></td>
            <td><textarea id="comment" name="comentarios" rows="6" cols="35" placeholder="Escribe aquí tu mensaje..."></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Enviar comentarios">
            </td>
        </tr>
    </table>
</form>

</body>
</html>