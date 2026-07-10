<?php

$nivel = 1;

while ($nivel < 5) {

    echo "Tu nivel actual es: $nivel\n";
    echo "¿Deseas pelear o huir? : ";

    $accion = trim(fgets(STDIN));

    if ($accion == "pelear") {
        $nivel++;
        echo "Ganaste la batalla. Subes a nivel $nivel\n\n";
    } elseif ($accion == "huir") {
        if ($nivel > 0) {
            $nivel--;
        }
        echo "Huiste. Bajas a nivel $nivel\n\n";
    } else {
        echo "Opción inválida. Intenta de nuevo.\n\n";
    }
}

echo " Pikachu evolucionó al nivel 5 \n";

?>