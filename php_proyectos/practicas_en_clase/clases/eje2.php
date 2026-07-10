<?php
class Producto {
    public $nombre;
    public $precio;
    public $stock;

    // Constructor - se ejecuta con new Producto(...)
    public function __construct($nombre, $precio, $stock = 0) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        echo "Producto creado: " . $this->nombre;
    }

    public function mostrar() {
        echo $this->nombre . " - $" . $this->precio;
    }
}