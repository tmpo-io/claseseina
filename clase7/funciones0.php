<?php

// Definición de una función
function doSth() {
  echo "hola soy una funcion";
  $hola = 3;
  $hola +=1;

  echo "<br />".$hola;

  echo "<br />";
}

doSth();

//funcion con 1 argumento
function saluda($nombre) {
  echo "hola ". $nombre ."<br />";
}
saluda("Jordi");

$name = "Eli";

saluda($name);


?>



