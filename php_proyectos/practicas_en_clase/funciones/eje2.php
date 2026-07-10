<?php
//Ejemplo 1
$num = 1;

echo "Global : $num <br>";
function show_local()
{
$num = 100;
    echo "Local: $num<hr>";
}
show_local();



// Ejemplo 2 (ámbito de variables)
$nivelGlobentrenador = 5;

function mejorarPokemon($nombre, $poderBase) {
    $bonosLocal = 3;   //variable local
    global $nivelGlobentrenador; //variable global
    $poderTotal = $poderBase + $nivelGlobentrenador + $bonosLocal;
    echo "$nombre -> Poder total: $poderTotal <br>";
    $nivelGlobentrenador++; //se modifica variable global
}

echo "Nivel inicial del entrenador: $nivelGlobentrenador<br>";
mejorarPokemon("Pikachu", 10);
mejorarPokemon("Charizard", 20);
echo "\nNivel final del entrenador: $nivelGlobentrenador\n";