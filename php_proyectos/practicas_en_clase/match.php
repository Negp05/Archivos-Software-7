<?php

$number = 2 ; $letter = 'B';
echo match ($number)
{
    1 => 'Number is one <br>',
    2 => 'Number is two <br>',
    3 => 'Number is three <br>',
    default => 'Numero desconocido<br>'




};


echo match ($letter)
{
    'A' => 'La letra es A <br>',
    'B'=> 'La letra es B <br>',
    'C' => 'La letra es C <br>',
    default => 'La letra no es reconocida <br>'




} 


?>