<?php
$dia = 3;
$nombre = match ($dia) {
    1=> "Lunes",
    2=> "Martes",
    3=> "Miercoles",
    4=> "Jueves",
    5=> "Viernes",
    6=> "Sabado",
    7=> "Domingo",
    default => "Dia invalido , error ."
};

echo "El dia  $dia corresponde a : $nombre";


?>