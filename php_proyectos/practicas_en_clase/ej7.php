<?php
$titulo = "Calculadora simple";
$fecha = date ("d/m/y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo ?></title>
</head>
<body>

<h1><?php echo $titulo ?></h1>

<p>Pagina generada por Php al: <?php echo $fecha ?></p>

<button onclick="calcular()">Iniciar calculo</button>

<p id="resultado"></p>

<script>
function calcular() {
    let num1 = prompt("Ingrese el primer numero:");
    let num2 = prompt("Ingrese el segundo numero:");

    num1 = parseFloat(num1);
    num2 = parseFloat(num2);

    let suma = num1 + num2;
    let resta = num1 - num2;
    let multi = num1 * num2;
    let divis = num1 / num2;

    document.getElementById("resultado").innerHTML =
        "<b>Resultado:</b><br>" +
        num1 + " + " + num2 + " = " + suma + "<br>" +
        num1 + " - " + num2 + " = " + resta + "<br>" +
        num1 + " x " + num2 + " = " + multi + "<br>" +
        num1 + " / " + num2 + " = " + divis;
}
</script>

</body>
</html>