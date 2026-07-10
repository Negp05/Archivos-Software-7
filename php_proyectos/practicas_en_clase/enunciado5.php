<?php
$estado = 500 ;
$error = match ($estado) {
    200=> "Peticion exitosa",
    403=> "Peticion denegada",
    404=> "No encontrado",
    410=> "No disponible ",
    500=> "Problema inesperado",
    default => "Dia invalido , error ."
};

echo "La peticion o estado $estado corresponde  corresponde al error  : $error ";



/*$num = $_GET['num'] ;
$cod = match ($num) {
    200=> "Peticion exitosa",
    403=> "Peticion denegada",
    404=> "No encontrado",
    410=> "No disponible ",
    500=> "Problema inesperado",
    default => "Dia invalido , error ."
};

echo "La peticion o estado $num corresponde  corresponde al error  : $cod ";
*/







?>