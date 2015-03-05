<?php
// Ejercicio 5 5/3/2015
$v1 = $v2 = "";
if(isset($_GET["valor1"])) {
    $v1 = $_GET["valor1"];
    $v2 = $_GET["valor2"];
}
// Otra
?>
<form action="" method="GET">
    <label>Valor 1</label>
    <input type="number" name="valor1"
        value="<?php echo $v1 ?>" />
    <label>Valor 2</label>
    <input type="number" name="valor2"
        value="<?php echo $v2 ?>" />
    <button type="submit">Sumar</button>
</form>

<?php
if(isset($_GET['valor1']))
    echo $v1 + $v2;
