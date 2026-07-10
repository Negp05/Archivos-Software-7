<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora de suma</h2>

<form method="POST" action="">
    <label>Numero 1</label>
    <input type="number" name="num1" placeholder="Escriba un numero entero" required>
    <br><br> <!-- salto de linea -->

    <label>Numero 2</label>
    <input type="number" name="num2" placeholder="Escriba un numero entero" required>
    <br><br>

    <input type="submit" value="Sumar">
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {

    $numero1 = $_POST['num1']; 
    $numero2 = $_POST['num2'];

    $suma = $numero1 + $numero2;

    echo "<h3>$numero1 + $numero2 = $suma</h3>";
}
?>

</body>
</html>