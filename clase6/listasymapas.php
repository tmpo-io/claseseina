<?php

$lista = array();


$lista[0] = array(
    "titulo"=> "título del proyecto",
    "img"=> "http://placehold.it/200x180",
    "url"=> "http://www.google.es",
);
$lista[1] = array(
    "titulo"=> "título del proyecto 2",
    "img"=> "http://placehold.it/200x130",
    "url"=> "http://www.meneame.net",
);
$lista[2] = array(
    "titulo"=> "título del proyecto 3",
    "img"=> "http://placehold.it/200x160",
    "url"=> "http://www.github.com",
);
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio 1</title>
		<style>
		/*estilos div*/

		.proyecto {
			float:left;
			width:200px;
			height:300px;
			margin:20px;
		}

		</style>
	</head>
	<body>
	<?php
	foreach($lista as $proyecto) { ?>
		<div class="proyecto">
			<h2><?php echo $proyecto["titulo"] ?></h2>
			<a href="<?php echo $proyecto["url"] ?>">
				<img src="<?php echo $proyecto["img"] ?>" />
			</a>
		</div>
	<?php
	}
	?>

	</body>
</html>
