<h1>Lista simple</h1>
<?php
$proyectos = ["Proyecto 1", "Proyecto 2", "Proyecto 3"];
print $proyectos[2];

?>
<h1>Lista multidimensional</h1>
<?php
$proyectos = [];
$proyectos[0] = ['Proyecto 2', "Descripción 2", "img/img1.jpg"];
$proyectos[1] = ['Proyecto 2', "Descripción 2", "img/img1.jpg"];


?>

<?php print $proyectos[1][1] ; ?>
