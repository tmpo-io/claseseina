<?php
// Ejercicio 5 5/3/2015
$v1 = $v2 = "";
if(isset($_POST["valor1"])) {
    $v1 = $_POST["valor1"];
    $v2 = $_POST["valor2"];
}
// Otra
?>

<form action="" method="POST">
    <label>Valor 1</label>
    <input type="number" name="valor1"
        value="<?php echo $v1 ?>" id="n"/>
    <label>Valor 2</label>
    <input type="number" name="valor2"
        value="<?php echo $v2 ?>" />
    <button type="submit">Sumar</button>
</form>

<?php
if(isset($_POST['valor1']))
    echo $v1 + $v2;


?>

<script>
var test = prompt("Numero 1")
t = document.getElementById("n")
t.value = test;
</script>