<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicios en PHP</title>
</head>
<body>

<!-- ================= PROMEDIO ================= -->
<h2>Promedio de edades</h2>
<form method="POST">
    Edad 1: <input type="number" name="p1" required><br><br>
    Edad 2: <input type="number" name="p2" required><br><br>
    Edad 3: <input type="number" name="p3" required><br><br>
    <input type="submit" name="btnPromedio" value="Calcular promedio">
</form>

<?php
if (isset($_POST['btnPromedio'])) {
    $n1 = $_POST['p1'];
    $n2 = $_POST['p2'];
    $n3 = $_POST['p3'];

    $promedio = ($n1 + $n2 + $n3) / 3;

    echo "<h3>Promedio: $promedio</h3>";
}
?>

<hr>

<!-- ================= TRIANGULO ================= -->
<h2>Área de triángulo</h2>
<form method="POST">
    Base: <input type="number" name="base" required><br><br>
    Altura: <input type="number" name="altura" required><br><br>
    <input type="submit" name="btnTriangulo" value="Calcular área">
</form>

<?php
if (isset($_POST['btnTriangulo'])) {
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $area = ($base * $altura) / 2;

    echo "<h3>Área: $area</h3>";
}
?>

<hr>

<!-- ================= MAYOR ================= -->
<h2>Número mayor</h2>
<form method="POST">
    Número 1: <input type="number" name="n1" required><br><br>
    Número 2: <input type="number" name="n2" required><br><br>
    <input type="submit" name="btnMayor" value="Comparar">
</form>

<?php
if (isset($_POST['btnMayor'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];

    if ($a > $b) {
        echo "<h3>El mayor es: $a</h3>";
    } elseif ($b > $a) {
        echo "<h3>El mayor es: $b</h3>";
    } else {
        echo "<h3>Ambos son iguales</h3>";
    }
}
?>

</body>
</html>