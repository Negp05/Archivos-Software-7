<?php

$estudiantes = [
    "nombre" => "Ana Lopez",
    "edad" => 20,
    "carrera" => "Informatica",
    "activo" => true,
];




//Acceso por clave



echo $estudiantes["nombre"];
echo $estudiantes["carrera"];



// Cambiar un valor 
$estudiantes["edad"]=21;

//
$estudiantes["promedio"]=90;

?>