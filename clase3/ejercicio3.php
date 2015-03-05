<?php
header('Content-Type: text/html; charset=utf-8');

$a =20;
if($a<1) {
	echo "mas pequeño que 1";
} else if ($a<2) {
	echo "mas pequeño que 2";
} else if ($a<=10) {
	echo "mas pequeño que 10";
} else {
    echo "mas grande o igual a 10";
}