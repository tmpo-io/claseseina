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
```php
$variable = $_GET['variable'];
```

http://localhost/?a=1&b=2&c=3
```php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
```

* Cliente/Servidor
![Esquema](./clase4/cliente_servidor.png)

### PHP Includes
http://php.net/manual/es/function.include.php

**La sentencia include incluye y evalúa el archivo especificado.**
```php
<?php include "archivo.php" ?>
```
Nos permite incluir un archivo externo.

Ejemplo:

> clase4/ejercicio1.php
```php
<?php
include "menu1.php";
?>
<h1>Página número 1</h1>
```

> clase4/ejercicio2.php
```php
<?php
include "menu1.php";
?>
<h1>Página número 2</h1>
```

> clase4/menu1.php
```php
<li><a href="ejercicio1.php">Ejercicio 1</a></li>
<li><a href="ejercicio2.php">Ejercicio 2</a></li>
```

#### Ejercicio 1

Vamos a contruir nuestro portafolio, usando 3 tipos de proyectos
(3 páginas) y construiremos un menú común.

> portafolio/index.php
> portafolio/menu.php
> portafolio/proyectos_grafico.php
> portafolio/proyectos_motion.php
> portafolio/proyectos_web.php

1. Para empezar crearemos una carpeta portafolio.
2. Los tres tipos de proyecos serán Diseño Gráfico / Motion Grafics y Diseño web
3. La página indice contendrá acceso a las tres categorías
4. El menú será compartido entre las tres páginas de proyectos.


