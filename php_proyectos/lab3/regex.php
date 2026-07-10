<?php

try {
    if (!isset($_POST["correo"])) {
        throw new Exception("No se recibió ningún dato.");
    }

    $correo = trim($_POST["correo"]);


    $patron = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    if (!preg_match($patron, $correo)) {
        throw new Exception("El correo electrónico no tiene un formato válido.");
    }

    echo "<h2>Correo válido: $correo</h2>";

} catch (Exception $e) {
    echo "<h2>Error:</h2>";
    echo $e->getMessage();
}
?>