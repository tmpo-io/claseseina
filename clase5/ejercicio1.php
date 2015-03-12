<?php

$lista = array(
    "Fernanda",
    "Marta", 
    "Anna",
    "Eladi",
    "Olga",
    "Cristina",
    "Eduard",
    "Andrea",
    "Marina",
    "Eric",
    "Santi",
    "Toni",
    "Marga",
    "Anna",
    "Cristina",
    "Julia",
    "Javier",
    "Miriam",
    "Andrea",
    "Ariadna",
    "Julia",
    "Andrea",
    "Javi",
    "Laura",
    "Malu",
    "Isabel",
    "Cristina",
    "Clara"
    );

//$posicion = $_GET['f'];

//echo $lista[$posicion];
//echo "<br/>";
echo count($lista) . " alumnos y alumnas en clase<br /><br />";
//echo "<br/>";

sort($lista);

foreach($lista as $alumno) {
    echo "Alumno " . $alumno . "</br>";
}