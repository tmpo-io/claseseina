<?php

$lista = array(
	"palabra 1",
	"palabra 2",
	"palabra 3",
	"palabra 4",
	"palabra 5",
	"palabra 6",
	"palabra 7",
	"palabra 8"
);

//forma 1

echo "<h1>forma 1:</h1>";

shuffle($lista);

echo $lista[2];

echo "<h1>forma 2:</h1>";

$maximo = count($lista)-1 ;
$aleatorio = rand(0, $maximo);

echo $lista[ $aleatorio ];





