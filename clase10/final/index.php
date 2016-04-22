<html>
<head>
  <meta charset="UTF-8">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/estilos.css" type="text/css" />
  <script src="jquery-2.2.3.js"></script>
  <script>
  $(document).ready(function () {

    function generate_color() {
      r = Math.round(Math.random()*100)+150
      g = Math.round(Math.random()*100)
      b = Math.round(Math.random()*100)
      a = Math.random()+0.2

      return [r, g, b, a]
    }

    $(".box").each(function (i, ele) {
      color = generate_color()
      $(ele).css("background", "rgba("+ color.join(",") +")")
    });


    var interval = setInterval(function () {
      for(i=0;i<50;i++) {
        rand = Math.round(Math.random()*(40*40))
        color = generate_color()
        $(".box:eq("+rand+")").css("background", "rgba("+ color.join(",") +")")
      }
    }, 50);
  });
  </script>
</head>
<body>
  <div class="container">
    <?php for($i=0;$i<(40*40);$i++) { ?>
      <div class="box"></div>
    <?php } ?>
  </div>
  <div class="wrapper">
    <h1>Mi web</h1>
    <h2>Oriol Collell</h2>
    <h3>o@tmpo.io</h3>
  </div>
</body>
</html>
