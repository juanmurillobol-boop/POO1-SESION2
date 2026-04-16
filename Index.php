<?php

require_once "Carro.php";
require_once "Moto.php";

$carro=new Carro("Toyota", "Rojo", 4);
$moto=new Moto("Honda", "Negro", 150);

echo "CARRO ". "<br>";
$carro->mostrarDatos();
$carro->mostrarCarro();
$carro->mover();
$carro->acelerar(50);

echo "<br>";

echo "MOTO ". "<br>";
$moto->mostrarDatos();
$moto->mostrarMoto();
$moto->mover();
$moto->acelerar(30);

echo "<br>";

unset ($carro);
unset ($moto);

?>