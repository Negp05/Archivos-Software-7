<?php

$k=1;
$result=0;


echo "<dt>Aplicando do ... while Loop </dt>";
do {
    $result += $k;
    echo"<dd> Intento $k, total acumulado es $result </dd>";
    $k++;
} while ($k <5);



?>