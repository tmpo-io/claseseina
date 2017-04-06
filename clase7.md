## Clase 7

### PHP

#### Foreach
Loop para Php
```php
<?php
$marcas = ["Saab", "Volvo", "BMW"];

foreach($marcas as $marca) {
  echo $marca ."<br />";
}
?>
```
##### Ejercicio 1
- Continuando la práctica anterior vamos a reemplazar el listado de proyectos por un loop.

#### Function

```php
<?php

function saluda() {
  echo " Saluda";
}
```
##### Ejercicio 2
- Continuando la práctica anterior vamos a crear una función que si le pasamos el nombre de una imagen nos escriba el tag <img />.


#### $_GET
- Es una lista asociativa de variables pasadas mediante la URL.

Si tenemos una url tipo:
http://localhost/?nombre=Oriol&apellido=Collell

```php
<?php
print $_GET["nombre"];
print $_GET["apellido"];
?>
```

##### Ejercicio 3
- Continuando la práctica anterior vamos a añadir un link para cada proyecto con una variable sección e imprimir esta variable en el contenido de la web.


#### Include
incluye y evalúa el archivo especificado.
```php
<?php
include "listado.php";
?>
```

##### Ejercicio 4
- Vamos a separar el listado de proyectos en otro archivo y vamos a crear una mini ficha para la descripción del proyecto.


##### Ejercicio 5
- En función del contenido de la variable sección vamos a incluir el archivo listado o ficha.php.
- El contenido de la sección ficha debe cambiar en función del link clickado.



