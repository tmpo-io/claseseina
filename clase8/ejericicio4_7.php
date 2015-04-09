<html>
<head>
<style>
form {
	margin:100px auto;
	width:500px;
}
</style>
</head>
<body>

<form method="post">
	<div>
  	<label for="valor1">Valor 1</label>
  	<input type="number" name="valor1" value="<?php if(isset($_POST["valor1"])) echo $_POST["valor1"] ?>" />
  	</div>
  <div>
  <label for="valor2">Valor 2</label>
  <input type="number" name="valor2" value="<?php if(isset($_POST["valor2"])) echo $_POST["valor2"] ?>"/>
	</div>
 	<div>
  <label for="operador">Operador</label>
  <input type="text" name="operador" value="<?php if(isset($_POST["operador"])) echo $_POST["operador"] ?>"/>
</div>
 	<div>
  <input type="submit" value="calcular" />
</div>
</form>

<?php
function suma($valor1, $valor2) {

	$resultado = $valor1 + $valor2 ;

	echo $resultado;
}

function resta($valor1, $valor2) {

	$resultado = $valor1 - $valor2 ;

	echo $resultado;
}

function multiplicar($valor1, $valor2) {

	$resultado = $valor1 * $valor2 ;

	echo $resultado;
}

function dividir($valor1, $valor2) {

	$resultado = $valor1 / $valor2 ;

	echo $resultado;
}


if(isset($_POST["valor1"])) {

	$valor1 = $_POST["valor1"];
	$valor2 = $_POST["valor2"];
	$operador = $_POST["operador"];

	if($operador == "+") {
		echo suma($valor1, $valor2);	
	}
	if($operador == "-") {
		echo resta($valor1, $valor2);	
	}
	if($operador == "*") {
		echo multiplicar($valor1, $valor2);	
	}
	if($operador == "/") {
		echo dividir($valor1, $valor2);	
	}
}

?>


</body>
</html>