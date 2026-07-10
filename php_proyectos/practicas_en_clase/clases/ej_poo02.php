<?php
class Producto {
    public $nombre;
    public $precio;
    public $stock;

    // El constructor se ejecuta automáticamente al instanciar el objeto
    public function __construct($nombre, $precio, $stock = 0){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock  = $stock;
        echo "Producto creado: " . $this->nombre . "<br>";
    }

    // Corregido el nombre a 'mostrar' y el cierre de la etiqueta <br>
    public function mostrar(){
        echo $this->nombre . " - $ " . $this->precio . "<br>";
    }
}

// Instanciar el objeto
$producto01 = new Producto("mouse", 5.75, 7);

// Llamar al método corregido
$producto01->mostrar();