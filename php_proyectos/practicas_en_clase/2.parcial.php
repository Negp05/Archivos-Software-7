<?php
$paciente=["Juan","Pedro",
"Oracio","Octavio"];
 
$temp=[];

for($c=0;$c<4;$c++){
    $temp[$c]=rand(35,41);
    echo $paciente[$c]." Temperatura $temp[$c] <br>";
};
$prom=0;
$suma=0;
$maxi=max($temp);
$min=min($temp);

for($c=0; $c<count($temp) ;$c++){
    $suma=$suma +$temp[$c];
}

$prom=$suma/ count($temp);
echo"Promedio $prom <br>";
echo"Temperatura maxima $maxi <br> Y minima $min <br>";