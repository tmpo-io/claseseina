<?php
date_default_timezone_set('Europe/Madrid');
?>
<p style="color: rgb(3, 88, 252);font-family: Helvetica;">
La hora es <span style="color:green">
<?php echo date("d-M-Y H:i:s");
?></span></p>

<p>Una suma <?php echo 1200+30; ?> </p>

<p><?php
$numero1 = 3456;
$numero2 = 4356;

echo $numero1 + $numero2;

?></p>