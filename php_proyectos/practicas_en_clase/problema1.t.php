<?php

//Norvis Gonzalez y Yelisneth Velasquez



//Problema 1 de transformar los grados

if (isset($_GET["celsius"])) {

    $c = $_GET["celsius"];
    $f = ($c * 1.8) + 32;

    echo "$c °C = $f °F";

} elseif (isset($_GET["fahrenheit"])) {

    $f = $_GET["fahrenheit"];
    $c = ($f - 32) / 1.8;

    echo "$f °F = $c °C";



} 

?>  
 



<?php

// Problema 2 de numeros enteros

if (isset($_GET['n1']) && isset($_GET['n2'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    // Mayor
    if ($n1 > $n2) {
        echo "El mayor es: $n1<br>";
    } elseif ($n2 > $n1) {
        echo "El mayor es: $n2<br>";
    } else {
        echo "Ambos números son iguales<br>";
    }

    // Positivo
    if ($n1 > 0) {
        echo "El primer número es positivo<br>";
    }

    // Incremento
    if (($n1 + 1) >= $n2) {
        echo "Al aumentar n1 en 1, es mayor o igual que n2<br>";
    }

    // Par
    if ($n2 % 2 == 0) {
        echo "El segundo número es par<br>";
    }
}
?>






<?php

// Problema 3 Triángulos
if (isset($_GET['lado1']) && isset($_GET['lado2']) && isset($_GET['lado3'])) {

    $lad1 = $_GET['lado1'];
    $lad2 = $_GET['lado2'];
    $lad3 = $_GET['lado3'];

    if (($lad1 + $lad2 > $lad3) && ($lad1 + $lad3 > $lad2) && ($lad2 + $lad3 > $lad1)) {

        if ($lad1 == $lad2 && $lad2 == $lad3) {
            echo "Triángulo Equilátero";
        } elseif ($lad1 == $lad2 || $lad1 == $lad3 || $lad2 == $lad3) {
            echo "Triángulo Isósceles";
        } else {
            echo "Triángulo Escaleno";
        }

    } else {
        echo "Los valores no forman un triángulo";
    }

} else {
    echo "Debes enviar los 3 lados por la URL";
}

?>





<?php
// Problema 4 de temperatura


if (isset($_GET["inicio"]) && isset($_GET["final"])) {

    $inicio = $_GET["inicio"];
    $final = $_GET["final"];

    $i = $inicio;

    while ($i <= $final) {

        if ($i < 15) {
            $estado = "Fría";
        } elseif ($i <= 30) {
            $estado = "Templada";
        } else {
            $estado = "Caliente";
        }

        echo "$i °C - $estado<br>";

        $i++;
    }
}
?>