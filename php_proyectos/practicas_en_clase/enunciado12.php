<?php
$temperatura=[];
for($c=0;$c<10;$c++){
    $temperatura[]=rand(1,30);
    echo "$temperatura[$c] <br>";
}

$max =max($temperatura);
$min=min($temperatura);
$sumar=0;



for($c=0;$c<count($temperatura);$c++){
    $sumar=$sumar+$temperatura[$c];
}

$promedio = $sumar /count($temperatura);
echo"El promedio es $promedio <br>";


echo" La temperatura mas alta fue $max <br> Y la temperaura mas baja fue $min";






?>