<?php
$pais="Panama";

$paises=[
"Mexico"=>"3",
"Portugal"=> "5",
"Argentina"=>"1",
"Panama"=>"3",
"Francia"=>"4",
"Uruguay"=>"5",
"Brasil"=>"1",
"Inglaterra"=>"4",
"Alemania"=>"2",
"España"=>"2",
];




foreach($paises as $nombre => $grupo){
    if($pais==$nombre ){
        echo"El rival de $nombre es $pais <br>";
    }
}

