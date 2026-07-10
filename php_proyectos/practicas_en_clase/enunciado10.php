<?php
$temperatura=[28,31,27,33,30,29,32];
$max =max($temperatura);
$min=min($temperatura);
$sumar=0;



for($c=0;$c<count($temperatura);$c++){
    $sumar=$sumar+$temperatura[$c];



}
$promedio= $sumar /count($temperatura);
$promedio=round($promedio,2);

for($c=0;$c<count($temperatura);$c++){
    echo "Dia ".($c+1).": ".$temperatura[$c]."°C ";
    if($temperatura[$c] >$promedio)
    echo"la temperatura del día está por encima  <br>";
else
    
    echo"la temperatura del día está por debajo <br>";
}










echo" La temperatura mas alta fue $max <br> Y la temperaura mas baja fue $min";



?>