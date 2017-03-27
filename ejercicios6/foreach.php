<?php
$marcas = ["Saab", "Volvo", "BMW", "Audi"];

//Loop: For (ejecuta un bloque de codigo un número specifico de veces).
for($i=0;$i<count($marcas);$i++) {
  echo $marcas[$i] ."<br />";
}
//Loop: Foreach (Sólo se utiliza para recorrer listas)
foreach($marcas as $marca) {
  echo $marca ."<br />";
}
?>
