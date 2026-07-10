<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Gestor PHP de Formularios</title>
</head>
<body>
    <?php
    $name = $_POST['nombre']; //usar isset
    $mail = $_POST['correo'];
    $comment = $_POST['comentarios'];
    echo"<p> Muchas gracias pro tus comentarios $name ....</p>";
    echo"<p><i>$comment </i></p>";
    echo"<p> Te estaremos respondiendo a: $mail</p>";

    ?>
</body>
</html>