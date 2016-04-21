<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
  </head>
  <body>
    <div class="container">
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

    </div>

    <script src="scrollreveal/dist/scrollreveal.js"></script>
    <script>
    window.sr = ScrollReveal({
      reset: true,
      container: document.querySelector('.container'),
    });
    sr.reveal('.box');
    </script>

  </body>
</html>
