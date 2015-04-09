<html>
<head>
<style>
* {
	margin:0;
	padding:0;
}
div {
	width:30%;
	height:400px;

	float:left;

	border:1px solid red;
}
</style>
</head>
<body>

<?php
$valor = 12;

$marcas = array("Saab", "Volvo", "BMW");

$mapa = array(
  "clave1": "Valor clave 1",
  "clave2": "Valor clave 2"
);

?>

<div class="classe1" id="div1"> </div>
<div class="classe1" id="div2"> </div>
<div class="classe1" id="div3"> </div>
<div class="classe1" id="div4"> </div>

<div class="classe2" id="div5"> </div>
<div class="classe2" id="div6"> </div>
<div class="classe2" id="div7"> </div>
<div class="classe2" id="div8"> </div>


<script>
var valor = 23
//document.write("inicio");

//alert("contenido alert " + valor )

//console.log("contenido en la consola"+ valor)

//document.write("contenido al final del documento");

document.getElementById("div6").innerHTML = "Contenido dentro de la etiqueta";

document.getElementById("div3").innerHTML = "<img src='http://placehold.it/350x150' width='100%' />";
var variable1 = 12;

var marcas = ["Saab", "Volvo", "BMW"];

document.getElementById("div7").innerHTML = marcas[ 1 ]

var mapa = {
  "clave1": "Valor clave 1",
  "clave2": "Valor clave 2"
}

</script>



</body>
</html>