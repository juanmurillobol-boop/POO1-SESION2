<?php
require_once "Vehiculo.php";

class Carro extends Vehiculo {
 private $puertas;

 public function __construct($marca, $color, $puertas) {
    $this->puertas = $puertas;
    parent::__construct($marca, $color);
 }

 public function mostrarCarro() {
    echo "Carro con ". $this->puertas ." Puertas <br>";
 }

 public function mover(){
    echo "El carro se mueve con 4 ruedas <br>";
}

}
?>