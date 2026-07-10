<?php
$nota = $_GET ['nota'];
echo "Resultado de evalacion del estudiante";
echo "<hr>";

if ($nota >= 90 &&  $nota <= 100); {
    echo "Calificacion : Excelente" ;
} elseif ($nota >= 75 && $nota < 90) {
    echo "Calificacion : bueno";
} elseif ($nota >= 60 && $nota < 75){
    echo "Calificacion : aprobado";
} else {
    echo "Calificacion : Reprobado";
}


?>