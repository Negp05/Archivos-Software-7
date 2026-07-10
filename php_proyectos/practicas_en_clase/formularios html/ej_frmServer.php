<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Nombre: <input Type="text" nmae="nombre"></label>
        <button type ="submit">Enviar</button>
    </form>
    <hr>
    <p>
    <?php
    echo $_SERVER["REQUEST_METHOD"]." - ";
    echo $_SERVER["SERVER_NAME"]." - ";
    echo $_SERVER["DOCUMENT_ROOT"]."<BR>";
    if($_SERVER["REQUEST_METHOD"]) == "POST"){
        $nombre = $_POST["nombre"];
        echo "Este dato: $nombre fue enviado mediante POST";
    }
    ?>
</body>
</html>