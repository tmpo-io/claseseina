
<meta http-equiv="Content-type" 
    content="text/html; charset=utf-8" />
<h1>Hola</h1>

<?php
$hora=date("H"); // devuelve la hora
?>

<?php if($tipo=="tarde") { ?>
    <h2>Muy buenas tardes</h2>
<?php } else { ?>
    <h2>Buenos días</h2>   
<?php } ?>
