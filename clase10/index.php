<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <meta http-equiv="refresh" content="0.5">
  </head>
  <body>
    <?php
    $colores = array("black", "yellow", "blue", "red", "pink", "orange");
    ?>
    <?php for($i=0;$i<160;$i++) { ?>
    <div class="box" style="background-color: <?php echo $colores[ rand(0,5) ]; ?>">
    </div>
    <?php } ?>
  </body>
</html>
