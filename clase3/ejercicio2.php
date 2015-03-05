<?php
header('Content-Type: text/html; charset=utf-8');
// Comparaciones

$v1 = 10; 
$v2 = 20;

var_dump($v1 == $v2);
var_dump($v1 != $v2);
var_dump($v1 > $v2);
var_dump($v1 < $v2);


echo "<br/>Comparo si son iguales :<br/>";
$v3 = "10";
var_dump($v1 == $v3);
echo "<br/>";
var_dump($v1 === $v3);
var_dump($v3+$v1);

$resultado = 5;

$resultado += 1000*1000;

echo $resultado;


?>
<p><p>
<?php

$uno = 5;
$uno = $uno + 10;

echo $uno;




















?>