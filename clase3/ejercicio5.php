<?php

$precio = $_GET['precio'];
$descuento = 30;

if($precio <=50):
	$descuento = 10;
	$descuento = 10;
	$descuento = 10;
	$descuento = 10;
elseif ($precio<=100):
	$descuento = 20;
	$descuento = 10;
	$descuento = 10;
	$descuento = 10;


$resultado = $precio - $precio * $descuento/100;
echo "El resultado es" . $resultado;