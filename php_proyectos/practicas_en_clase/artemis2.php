<?php

/*
Enunciado 4:

El 10 de abril de 2026, la cápsula Orión de la NASA completó su regreso a la Tierra 
tras el histórico sobrevuelo lunar de la misión Artemis II.

Durante la reentrada a la atmósfera, la nave atraviesa distintas fases críticas 
según su altitud:

- Por encima de los 400,000 pies: se separa el módulo de servicio.
- Entre 100,000 y 400,000 pies: el calor genera una capa de plasma que interrumpe 
  todas las comunicaciones durante aproximadamente 6 minutos.
- Por debajo de los 100,000 pies: se recupera la señal y se despliegan los 
  paracaídas de freno alrededor de los 22,000 pies.
- Cerca de los 6,000 pies: se abren los tres paracaídas principales para reducir 
  la velocidad.
- Por debajo de esa altitud: la cápsula ameriza en el océano.

Se pide:

Escriba un programa en PHP que, dada una variable llamada "altitud", determine 
en cuál de las cinco fases se encuentra la cápsula e imprima el mensaje 
correspondiente en pantalla.
*/



$altitud = 120000;

if ($altitud > 400000) {
    echo "Fase 1: Se separa el módulo de servicio.";
} elseif ($altitud > 100000) {
    // Si llegó aquí, es porque es menor a 400,000 pero mayor a 100,000
    echo "Fase 2: Interrupción de comunicaciones por plasma (Blackout).";
} elseif ($altitud > 22000) {
    echo "Fase 3: Recuperación de señal.";
} elseif ($altitud > 6000) {
    echo "Fase 4: Despliegue de paracaídas de freno y principales.";
} else {
    echo "Fase 5: Amerizaje en el océano. ¡Misión cumplida!";
}
?>
