<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>
<body>
	<div class="contenedor">

	<?php include "inc/header.php"; ?>

	<?php include "inc/menu.php"; ?>

	<?php
	if(isset($_GET["seccion"])!=true) {
		$_GET["seccion"] = "";
	} 

	switch($_GET["seccion"]) {
		default:
			include "inc/home.php";
		break;
		case "contacto":
			include "inc/contacto.php";
		break;
		case "news":
			include "inc/news.php";
		break;
	}
	?>


	<?php include "inc/footer.php"; ?>
	</div>
</body>
</html>
