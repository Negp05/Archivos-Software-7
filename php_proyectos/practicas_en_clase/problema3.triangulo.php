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