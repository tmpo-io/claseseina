<h1>Lista simple</h1>
<?php
$proyectos = ["Proyecto 1", "Proyecto 2", "Proyecto 3"];
print $proyectos[2];

?>
<h1>Lista atributos</h1>
<?php
$proyectos = [];
$proyectos[0] = ['Proyecto 2', "Descripción 2", "img/img1.jpg"];
$proyectos[1] = ['Proyecto 2', "Descripción 2", "img/img1.jpg"];


?>

<?php print $proyectos[1][1] ; ?>


<?php
// print == echo
// [] == array();
$proyectos = [];
$proyectos[0] = array(
  'titulo' => 'Proyecto 1',
  'desc' => "Descripción 1",
  'img' => "img/img1.jpg"
);

$proyectos[1] = [];
$proyectos[1]['titulo'] = 'Proyecto 2';
$proyectos[1]['desc'] = "Descripción 2";
$proyectos[1]['img'] = "img/img1.jpg";


print $proyectos[0]['titulo'];
print "<br />";
print $proyectos[1]['titulo'];

?>
















 <?php //
 ?>
