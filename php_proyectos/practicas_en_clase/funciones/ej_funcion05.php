<?php
/* Escriba una función que permite leer un arreglo de
   números enteros y calcular el promedio de los
   números. Considere que es una función con parámetros
   y retorno. */

function calcularPromedio($arregloNumeros) {

    $cantidadElementos = count($arregloNumeros);
    
    if ($cantidadElementos === 0) {
        return 0; 
    }
    
    $sumaTotal = array_sum($arregloNumeros); 
    

    $promedio = $sumaTotal / $cantidadElementos;
    
    return $promedio; 
}


$misNumeros = [10, 15, 20, 25, 30];


$resultadoPromedio = calcularPromedio($misNumeros);


echo "Los números son: " . implode(", ", $misNumeros) . "<br>";
echo "El promedio calculado es: " . $resultadoPromedio;
?>