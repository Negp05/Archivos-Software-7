

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
<form  method="post">
    Nombre:<input type="Text" name="Nombre"><br>
    Edad:<input type="number" name="Edad"><br>
    Temperatura:<input type="float" name="Tempeatura"><br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>

<?php
$temperatura=$_POST['Temperatura'];
$nombre=$_POST['Nombre'];
$edad=$_POST['Edad'];

function diagnosticar($nombre,$edad,$temperatura){
    echo"$nombre,$edad,$temperatura";
} 

if($temperatura <36){
    echo"Hipotermia";
}elseif($temperatura>36 && $temperatura<=37.5){
    echo"Temperatura Normal";
}else{
    echo"Fiebre";
}



?>;