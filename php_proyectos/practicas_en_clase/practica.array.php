<?php

$nota =[72,85,90,68,78];
$max=max($nota);
$min = min($nota);



$prom = array_sum($nota)/count($nota);

echo "El promedio de notas es , $prom";
echo "La nota maxima es, maxima es: $max y la nota minima es: $min";

?>