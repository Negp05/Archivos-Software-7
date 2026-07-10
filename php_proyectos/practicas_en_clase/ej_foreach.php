<?php

/*$frutas = ["manzana","pera","uva","melon"];
foreach ($frutas as $fruta){
    echo ($fruta. "<br>");
}

//con clave e indice
foreach ($frutas as $indice => $fruta){
    echo "$indice : $fruta <br>";
}
*/




$producto = [
    "nombre" => "laptop",
    "marca" => "dell",
    "precio" => 850.00,
    "stock" => 14
];

foreach ($producto as $clave => $valor){
    echo "<strong> $clave </strong> : $valor <br>"; // strong 
}




?>