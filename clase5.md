## CLASE 5

#### Repaso de las sesiones anteriores

```php
$a = 1;
$b = "clase";
$c = true;

if($a == "clase") {
	include "clase.php";
} else {
	inlcude "noclase.php";
}

$_GET['v1']
```

* Servidor / Cliente
* Javascript / PHP
* HTML / CSS


### Listas

http://php.net/manual/es/book.array.php
Las listas es un tipo de variable que nos permite almacenar un número ilimitado de datos.
```php
$a = array(1,2,3,4,5);
```
Podremos acceder a los datos que continene, usando su índice:
```php
$a[0];
$a[1];
```

Los índices siempre empiezan por 0.
Podemos contar cuantos elementos tiene una lista con la función:

```php
count($a)
```

##### Ejercicio 1

Crearemos una lista de frases, y usando una variable GET, que nos diga el 
indice, mostraremos el valor que contenga. Debemos de comprobar que el número
de índice que nos solicitan está dentro del rango de la lista.


### Iteraciones Foreach

Dada una lista, podremos utilizar un búcle o iteración, para recorrer uno por uno
los elementos de esta.

```php
foreach($a as $ele) {
	echo $ele*3
}
```

##### Ejercicio 2

Construiremos una galería de imágenes poniendo los nombres de archivo de las imágenes dentro de una lista $imagenes, y utilizando una iteración foreach para recorrerla, para cada elemento mostraremos el html que deseemos.

### Iteraciones for

Al igual que las iteraciones foreach, los búcles for, sirven para recorrer elementos, en este caso no nos hace falta una lista, y podemos construir un bucle for, para generar repeticiones.

```php
for($i=0; $i<=100; $i++) {
	echo "La iteración es" . $i . "<br/>";
}
```

##### Ejercicio 3

Construiremos un mosaico de elementos div en html, que nos construya una página muy grande.

Las iteraciones for, también pueden usarse para recorrer los elementos de una lista:

```php
for($i=0; $i<count($lista); $i++) {
	echo "La " . $i . " contiene el valor" . $lista[$i];
}
```

##### Ejercicio 4

Construiremos dos listas distintas, una que contendrá títulos, y otra que contendrá colores. Las dos listas tienen que tener el mismo tamaño. Iteraremos por una de las listas, generando un html con cajas del color y con el texto que les toca en la lista


### shuffle. Las listas se pueden "aleatorizar"

```php
$a = (1,2,3,4,5,6);
shuffle($a);
// $a == (5,4,3,2,1)
```

##### Ejercicio 5

Construiremos una cabecera que cada vez que se cargue nos muestre una imágen diferente, las imágenes las meteremos en una lista. Y usaremos el método shuffle para mezclar. 

##### Ejercicio 6

¿Soys capaces de dar un poco de aleatoriedad al ejercicio 4?

### Operaciones matemáticas en listas

```php
$resultado = array_sum( $arr );
```

Nos retorna la suma de todos los elemntos de la clase.

#### Ejercicio 7

Crearemos una lista con las notas de todos los alumnos de la clase y calcularemos la media.


#### Ejercicio 8

http://en.wikipedia.org/wiki/Generative_art
Vamos a crear un poco de arte generativo, usando los conocimientos que tenemos de php. 

- Podemos crear listas, 
- Podemos crear textos,
- Podemos crear colores,
- Podemos crear ....

Nos podemos ayudar de la función 

```php
rand ( int $min , int $max )
```
que nos devuelve un número aleatorio entre el rango especificado.

