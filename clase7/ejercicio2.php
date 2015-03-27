<?php

function imagen($url) {
	echo "<img src='".$url."' width='100' >";
}

//imagen("http://placekitten.com/200/300");

for($i=0;$i<100;$i++) {
	imagen("parallax2.jpg");
}