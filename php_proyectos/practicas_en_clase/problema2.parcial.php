<?php
$pesos=[5,20,55,10,48];
$s=0;
$prom=0;

foreach($pesos as $peso){
    if($peso < 10){
        echo"Bulto liviano <br>";
    }elseif($pesos > 10 || $peso <=50){
        echo"Bulto estandar <br>";
    }else
        echo"Bulto pesado <br>";
}
echo "La cantidad de bultos procesados fue " .count($pesos);