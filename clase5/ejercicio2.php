<style>
.es { width:100px; 
    margin:20px; 
    height:100px; 
    padding: 5px; 
    position:absolute;
    }
</style>
<?php

$colors = array(
    "red",
    "blue",
    "green",
    "black",
    "grey",
    "brown",
    "red",
    "blue",
    "green",
    "black",
    "grey",
    "brown",
    "red",
    "blue",
    "green",
    "black",
    "grey",
    "brown",
    "red",
    "blue",
    "green",
    "black",
    "grey",
    "brown",
    );
    shuffle($colors);
?>

<?php
$palabras = array("hola", "hello", "bonjour");
$i = 0;
foreach($colors as $color) { ?>

<div class="es" 
    style="background-color:<?php echo $color ?>;
        width: <?php echo rand(100, 500) ?>;
        height: <?php echo rand(100, 400) ?>;
        top: <?php echo rand(0,800) ?>px;
        left: <?php echo rand(0,600) ?>px;
        opacity: <?php echo rand(0,100)/100; ?>">
    <?php
    shuffle($palabras);
    echo $palabras[0];
    ?>
</div>

<?php 
$i++;
//$i = $i + 1;
} ?>