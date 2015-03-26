<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
$lista = array();

$lista["oriol"] = array(
	"nombre"=>"oriol",
	"telefono"=>"666333486",
	"email"=>"oriol@oriol.com",
);

$lista["jordi"] = array(
	"nombre"=>"jordi",
	"telefono"=>"666333486",
	"email"=>"jordi@oriol.com",
);

$lista["eli"] = array(
	"nombre"=>"eli",
	"telefono"=>"666333486",
	"email"=>"eli@oriol.com",
);

$lista["jose"] = array(
	"nombre"=>"jose",
	"telefono"=>"666333489",
	"email"=>"jose@oriol.com",
);
$nombre = "";
if(isset( $_GET["nombre"] ) ) {
	$nombre = $_GET["nombre"];

	echo $lista[ $nombre ]["nombre"] ."<br />";
	echo $lista[ $nombre ]["telefono"];
} else {
	echo "buscador de la agenda";
}
?>

<form method="get">
  <input type="text" name="nombre" value="<?php echo $nombre ?>" />
  <input type="submit" value="buscar" />
</form>

</body>
</html>


