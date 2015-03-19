<?php

/*
for($i=16;$i>0;$i--) {

	echo "<br />titular ".$i ;
}
*/

$lista = array(
	"proyecto 1",
	"proyecto 2",
	"proyecto 3",	
	"proyecto 4"
);

$lista2 = array(
	"proyecto 1",
	"proyecto 2",
	"proyecto 3",	
	"proyecto 4"
);

for($i=0;$i<4;$i++) {
	
	echo $lista[$i] ."<br />";

	echo $lista2[$i] ."<br />";
}
foreach($lista as $item) {
	echo $item ."<br />";
}






