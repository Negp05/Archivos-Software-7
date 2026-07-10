<?php
class Estudiante {
    public $nombre;
    public $nota;

    public function calificacion(){
        if ($this->nota >= 60){ 
            return "Aprobado";
        } else {
            return "Reprobado";
        }
    }

    public function mostrar(){
        echo $this->nombre . ": " . $this->calificacion() . "<br>";
    }
} // <-- Aquí se cierra la clase Estudiante

// El código de abajo va AFUERA de la clase
$est01 = new Estudiante();
$est01->nombre = "Andres";
$est01->nota = 96; // Se puede pasar como número directo

$est01->mostrar();