<?php
$estudiantes = [
    ["Juan",80,75,90],
    ["orlando",60,70,65],
    ["Ana",95,88,91]
];

foreach($estudiantes as $name ){
    $prom= ($name[1]+ $name[2]+$name[3]) /3;
    if ($prom>=71)
    echo"$name[0] aprobo <br>";
    else
    echo"$name[0] No aprobo valio queso XD <br>";

}


?>