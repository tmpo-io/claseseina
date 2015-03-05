<?php
// http://localhost/clase3/ejercicio4.php?precio=64.7

$precio = $_GET['precio'];
$descuento = $_GET['descuento'];

// 50 --> 50 - (50 * 0.3)
$resultado = $precio - ($precio*$descuento/100);

echo "El resultado es " . $resultado;
