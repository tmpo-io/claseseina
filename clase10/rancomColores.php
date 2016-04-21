<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <meta http-equiv="refresh" content="0.5">
  </head>
  <body>
    <?php
    ?>
    <?php for($i=0;$i<160;$i++) { ?>
    <?php
      $r = rand(0, 200);
      $g = rand(0, 200);
      $b = rand(0, 200);
      $a = rand(5, 10)/10;
    ?>
    <div class="box" style="background-color:rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, <?php echo $a ?>)">
    </div>
    <?php } ?>
  </body>
</html>
