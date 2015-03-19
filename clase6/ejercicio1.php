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
	$lista = array(
		"elemento 1",
		"elemento 2",
		"elemento 3",
		"elemento 4",
	);

	$imagenes = array(
		" http://placehold.it/200x180",
		" http://placehold.it/200x100",
		" http://placehold.it/200x140",
		" http://placehold.it/200x200",
	);

	?>
	<?php
	$i = 0;
	foreach($lista as $item) { ?> 
		<div class="proyecto">
			<?php echo $item ; ?>
			<img src="<?php echo $imagenes[$i] ?>" />
		</div>
		<?php 
		$i++;
	} ?>
	</body>
</html>