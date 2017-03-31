<?php
$proyectos = [];

$proyectos[0] = [];
$proyectos[0]["titulo"] = "Proyecto 1";
$proyectos[0]["desc"] = "Proyecto 1";
$proyectos[0]["img"] = "img/img1.jpg";

$proyectos[1] = [];
$proyectos[1]["titulo"] = "Proyecto 2";
$proyectos[1]["desc"] = "Proyecto 2";
$proyectos[1]["img"] = "img/img1.jpg";

$proyectos[2] = [];
$proyectos[2]["titulo"] = "Proyecto 2";
$proyectos[2]["desc"] = "Proyecto 2";
$proyectos[2]["img"] = "img/img1.jpg";

$proyectos[3] = [];
$proyectos[3]["titulo"] = "Proyecto 3";
$proyectos[3]["desc"] = "Proyecto 3";
$proyectos[3]["img"] = "img/img1.jpg";

$proyectos[4] = [];
$proyectos[4]["titulo"] = "Proyecto 4";
$proyectos[4]["desc"] = "Proyecto 4";
$proyectos[4]["img"] = "img/img1.jpg";

$proyectos[5] = [];
$proyectos[5]["titulo"] = "Proyecto 5";
$proyectos[5]["desc"] = "Proyecto 5";
$proyectos[5]["img"] = "img/img1.jpg";

$proyectos[5] = [];
$proyectos[5]["titulo"] = "Proyecto 6";
$proyectos[5]["desc"] = "Proyecto 6";
$proyectos[5]["img"] = "img/img1.jpg";

$proyectos[6] = [];
$proyectos[6]["titulo"] = "Proyecto 7";
$proyectos[6]["desc"] = "Proyecto 7";
$proyectos[6]["img"] = "img/img1.jpg";

?>
<div class="seccion">
  <h1>Proyectos</h1>
  <?php
  foreach($proyectos as $p) {
  ?>
  <div class="proyecto">
    <h1><?php print $p["titulo"]; ?></h1>
    <img src="<?php print $p["img"]; ?>" />
    <p><?php print $p["desc"]; ?></p>
  </div>
  <?php
  }
  ?>
  <div class="clear"></div>
</div>
