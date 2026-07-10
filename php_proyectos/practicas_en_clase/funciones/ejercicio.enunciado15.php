<?php
function inic_array($n_elementos, $min, $max) {
    $mi_array = []; 
    

    for ($i = 0; $i < $n_elementos; $i++) {

        $array[] = rand($min, $max);
    }
    
    return $array;
}


$cantidad = 5;
$minimo = 10;
$maximo = 50;

$resultado = inic_array($cantidad, $minimo, $maximo);


echo "Array generado con $cantidad elementos (entre $minimo y $maximo): <br>";
print_r($resultado);

?>