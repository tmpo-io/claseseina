## CLASE 4
#### <?php includes ?>

#### Repaso de la sesión anterior

* Operadores lógicos
```php
($a == $b)
($a != $b)
($a > $b && $a <=$c)
($a >= $b || $b < $c)
$a == true
$b == false
```

* Condicionales
```php
if($a==”un valor”) {
	echo ‘la resupuesta 1’;
} else {
	echo ‘la respuesta 2’;
}
```

```php
if($a==$b) {
	// bloque
} else if($a==$c) {
	// bloque
} else {
	// bloque
}
```

```php
$a = 5;
if($a < 5) {
	echo "suspenso";
} else if($a <6) {
	echo "aprobado";
} else if($a <8) {
	echo "notable";
} else {
	echo "sobresaliente";
}
```

* Recojer variables por parámetros

http://localhost/?variable=1
$variable = $_GET['variable'];

http://localhost/?a=1&b=2&c=3
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

* Cliente/Servidor
![Esquema](./clase4/cliente_servidor.png)

### PHP Includes
http://php.net/manual/es/function.include.php
*La sentencia include incluye y evalúa el archivo especificado.*

