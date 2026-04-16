<?php
class Vehiculo {
private $marca;
private $color;
private $velocidad;

public function __construct($marca, $color) {
$this->marca = $marca;
$this->color = $color;
$this->velocidad = 0;
}

public function mostrarDatos() {
    echo "Marca: ".$this ->marca."<br>";
    echo "Color: ".$this ->color."<br>";
    echo "Velocidad: ".$this ->velocidad." <br>";
}

public function mover(){
    echo "El vehiculo se esta moviendo <br>";
}

public function acelerar($valor){
    $this->velocidad=$this->velocidad+$valor;
    echo "Acelerando... nueva velocidad: ".$this->velocidad."<br>";
}
}
?>