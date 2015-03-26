<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
$lista = array();

$lista[0] = array(
	"nombre"=>"oriol",
	"telefono"=>"666333486",
	"email"=>"oriol@oriol.com",
);

$lista[1] = array(
	"nombre"=>"jordi",
	"telefono"=>"666333486",
	"email"=>"jordi@oriol.com",
);

$lista[2] = array(
	"nombre"=>"eli",
	"telefono"=>"666333486",
	"email"=>"eli@oriol.com",
);

$lista[3] = array(
	"nombre"=>"oriol",
	"telefono"=>"777444888",
	"email"=>"eli@oriol.com",
);

$lista[4] = array(
	"nombre"=>"jose",
	"telefono"=>"666333489",
	"email"=>"jose@oriol.com",
);
$nombre = "";
if(isset( $_GET["nombre"] ) ) {
	$nombre = $_GET["nombre"];
} else {
	echo "buscador de la agenda";
}

foreach($lista as $item) {

	if($nombre == $item["nombre"]) {
		echo $item["nombre"] ."<br />";
		echo $item["telefono"]."<br />";
		echo $item["email"];
		echo "<br />----<br />";
	}

}

?>

<form method="get">
  <input type="text" name="nombre" value="<?php echo $nombre ?>" />
  <input type="submit" value="buscar" />
</form>

</body>
</html>


