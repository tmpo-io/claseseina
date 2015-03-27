<?php

$post = array(
  "fecha"=>"12-12-2015",
  "titulo"=>"Ocho videojuegos con mucho futuro",
  "descripcion"=>"Ocho minutos. Este ha sido el tiempo del que han dispuesto los ocho equipos de desarrollo de GameBCN para convencer al público, y especialmente a los inversores...",
  "link"=>"http://www.google.com"
);

$variable = array(
  "fecha"=>"12-12-2018",
  "titulo"=>"Ocho videojuegos con mucho futuro",
  "descripcion"=>"Ocho minutos. Este ha sido el tiempo del que han dispuesto los ocho equipos de desarrollo de GameBCN para convencer al público, y especialmente a los inversores...",
  "link"=>"http://www.google.com"
);


function entrada($articulo, $segundo) {
?>
<div class="post">
	<h1><?php echo $articulo["titulo"] ?></h1>
	<h2><?php echo $articulo["fecha"] ?></h2>
	<p><?php echo $articulo["descripcion"] ?></p>
	<p><?php echo $segundo ?></p>
</div>
<?php
}

entrada($post, "google.com");

entrada($variable, "yahoo.com");


