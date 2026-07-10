<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];

    $pasos = 0;

    echo "<h3>Secuencia:</h3>";

    while ($n > 1) {
        echo $n . " → ";

        if ($n % 3 == 0) {
            // Salto largo
            $n = $n / 3;
        } else {
            // Salto corto
            $n = $n - 1;
        }

        $pasos++;
    }

    // Mostrar el último valor (1)
    echo "1";

    echo "<br>Total de pasos:<br> " . $pasos;
}

?>