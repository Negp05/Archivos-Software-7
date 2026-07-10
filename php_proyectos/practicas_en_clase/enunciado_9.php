<?php

$productos = [
    "Cinnamon Rolls" => 1.25,
    "Mamallena"=> 0.75,
    "Torta de Chocolate"=> 3.50,
    "Empanada de Piña"=>0.50
    ];

foreach($productos as $nombre => $precio)
    echo"Lleva un $nombre por solo $precio<br>";



?>