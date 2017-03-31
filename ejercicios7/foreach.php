<?php
for($i=100;$i>10;$i-=2) {
?>
<div>
  <h1><?php print $i ?></h1>
</div>
<?php
}
?>


<?php
$marcas = ["Saab", "Volvo", "BMW", "Audi"];
foreach($marcas as $posicion => $valor) {
  echo $posicion . " ". $valor ."<br />";
}
?>


<?php
$marcas = ["Saab", "Volvo", "BMW", "Audi"];
foreach($marcas as $valor) {
  echo $valor ."<br />";
}
?>
