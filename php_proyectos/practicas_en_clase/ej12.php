

<?php
$velocidad = $_GET['velocidad'];

echo "Resultado de la multa";
echo "<hr>";

if ($velocidad <= 60) {
    echo "Sin multa";
} elseif ($velocidad > 60 && $velocidad < 80) {
    echo "Multa de 100";
} elseif ($velocidad >= 80) {
    echo "Multa de 500";
} else {
    echo "Valor inválido";
}
?>

//23 de abril