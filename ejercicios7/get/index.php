
<html>
<head>
<style>
body {
  margin: 0;
  padding: 0;
  background: #eaeaea;
}
* {
  box-sizing: border-box;
}
h1 {
  font-size: 18px;
}

header,
footer {
  background: white;
  margin: auto;
  width: 100%;
  max-width: 600px;
  padding: 20px;
}
footer {
  margin-top: 20px;
}

.seccion {
  margin: auto;
  width: 100%;
  max-width: 600px;
  background: white;
  padding: 20px;
  min-height: 500px;
}
.menu {
  padding: 20px;
  margin: auto;
  width: 100%;
  max-width: 600px;
}
.menu li {
  display: inline;
}

.proyecto {
  width: 31.33%;
  float: left;
  margin-left: 1%;
  margin-right: 1%;
  border: 1px solid grey;
  padding: 10px;
}
.proyecto img {
  width: 100%;
  height: auto;
}
.clear {
  clear: both;
}
</style>
</head>
<body>
  <?php include "inc/header.php"; ?>

  <?php include "inc/menu.php"; ?>


  <?php
  if(isset($_GET["sec"])==true) {
    $seccion = $_GET["sec"];
  } else {
    $seccion = "";
  }

  if($seccion=="proyectos") {
    include "inc/proyectos.php";
  } elseif($seccion=="contacto") {
    include "inc/contacto.php";
  } else {
    include "inc/home.php";
  }

  ?>
  <?php include "inc/footer.php"; ?>
</body>
</html>
