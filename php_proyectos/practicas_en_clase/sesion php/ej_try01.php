<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $firstNum = (int) ($_POST['firstNum'] ?? 0);
        $secondNum = (int) ($_POST['secondNum'] ?? 0);

        if ($secondNum === 0) {
            throw new Exception("Esta operación no puede realizarse.");
        }

        $resultado = round($firstNum / $secondNum, 2);
        $mensaje = "El resultado total fue: " . $resultado;

    } catch (Exception $e) {
        $mensaje = $e->getMessage();
    } finally {
        $finScript = "Fin del script.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="$_POST">
        <label>Primer Numero </label>
        <input type="number" name="firstNum" required>
        <br><br>
        <label>Segundo Numero </label>
        <input type="number" name="secondNum" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <hr>
    <?php
    if($mensaje !== ''){
        echo "<p> $mensaje </p>";
        echo "<p> $finScript </p>";
    }
    ?>


</body>
</html>