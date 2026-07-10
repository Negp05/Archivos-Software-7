
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><h1>Practica <h1></title>
</head>
<body>
<?php


echo  "Ingrese su nombre y apellido";
$nombre=readline();


echo  "Ingrese su edad";

$edad = readline();

echo  "Ingrese un numero aleatorio";
$numero = readline();




if ($numero %2== 0)
    {echo' Su numero  ', $numero ,' es par ';}
else
    {echo' Su numero  ', $numero ,' es impar';}

if ($edad >= 18)
    {echo ' Es mayor de edad ,puede pasar ';}
else
    {echo 'Es menor no puede pasar ';}


echo  "Su nombre es ", $nombre;


?>    



</body>
</html>



