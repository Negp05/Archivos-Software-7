<?php

//Metodo 1: array() vacio

$notas = array ();
$notas[0]= 85;
$notas[1]= 92;
$notas[2]= 78;


//metodo 2 : Inicializacion derecta con array ()

$notas = array (85,92.78,90,88);

//metodo 3 : notacion corta [] (recomendado)

$notas=[85,92.78,90,88];

//asociativo en una dimension
$config = [
    "host" => "localhost",
    "usuario"=> "root",
    "password" => "12345",
    "bd"       => "mi_base"
];

//funciones especiales 
print_r($notas);   //muestra la estructura
echo"<br>";
var_dump($notas);  //muestra tipos y valores
echo "<br>";
echo count ($notas);

?>