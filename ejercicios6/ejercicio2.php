<html>
<head>
<style>
body {
  margin: 0;
  padding: 0;
}
.proyecto {
  width: 31.33%;
  float: left;
  margin-left: 1%;
  margin-right: 1%;
}
.proyecto img {
  width: 100%;
  height: auto;
}

</style>
</head>
<body>
<?php
  $proyectos  = [];
  $proyectos[0] = ['Proyecto 1', "Descripción 1", "img/img1.jpg"];
  $proyectos[1] = ['Proyecto 2', "Descripción 1", "img/img1.jpg"];
  $proyectos[2] = ['Proyecto 3', "Descripción 1", "img/img1.jpg"];
  $proyectos[3] = ['Proyecto 4', "Descripción 1", "img/img1.jpg"];
  $proyectos[4] = ['Proyecto 5', "Descripción 1", "img/img1.jpg"];
  $proyectos[5] = ['Proyecto 6', "Descripción 1", "img/img1.jpg"];
  $proyectos[6] = ['Proyecto 7', "Descripción 1", "img/img1.jpg"];
  $proyectos[7] = ['Proyecto 8', "Descripción 1", "img/img1.jpg"];
  $proyectos[8] = ['Proyecto 9', "Descripción 1", "img/img1.jpg"];
  $proyectos[9] = ['Proyecto 10', "Descripción 1", "img/img1.jpg"];
  $proyectos[10] = ['Proyecto 11', "Descripción 1", "img/img1.jpg"];
?>

<?php foreach($proyectos as $proyecto) { ?>
  <div class="proyecto">
    <h1><?php print $proyecto[0] ?></h1>
    <img src="<?php print $proyecto[2]; ?>" />
    <p><?php print $proyecto[1]; ?></p>
  </div>
<?php } ?>

</body>
</html>
