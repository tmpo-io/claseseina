## Clase 6

### PHP

A diferencia del Javascript el PHP es un lenguaje interpretado en el lado del servidor.
- Para poder trabajar en php necesitamos tener instalado el [XAMPP](https://www.apachefriends.org/es/index.html)
- EL xampp contiene:
  * Apache servidor web
  * Mysql servidor de bases de datos.
  * El interprete de PHP

#### Diferencias de sintaxis entre javascript y php
```html
<script>
//código javascript
</script>
<?php
//código php
?>
```
#### TIPS

- Es necesario utilizar ; al final de línea
- Para concatenar cadenas y variables se utiliza el . y no el +
- Las variables tienen que empezar por $

 #### Imprimir contenido
```php
echo "cotenido ";
```
##### Ejercicio 1
- Vamos a crear un listado de 9 proyectos (Imagen + titular + descripción en columnas de 3).
- El contenido imagen, titular y descripción lo vamos a imprimir en php.

#### Variables
Las variables deben empezar con el símbolo $ y al final de línea ;.
```php
<?php
$variable1 = "una variable string";
$variable2 = 12;
?>
```

##### Ejercicio 2
- Continuando la práctica anterior vamos a definir 3 variables para cada proyecto e imprimiremos el contenido anterior.

#### Listas

Se pueden inicializar de diferentes maneras

```php
<?php
$marcas = array("Saab", "Volvo", "BMW");
$marcas = ["Saab", "Volvo", "BMW"];
?>
```

##### Ejercicio 3
- Continuando la práctica anterior vamos a crear 3 listas:
  - Títulos
  - Imágenes
  - Contenidos
- Necesitamos escribir el valor de cada posición para cada proyecto.

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
##### Ejercicio 4
- Continuando la práctica anterior vamos a reemplazar el listado de proyectos por un loop.

#### Function

```php
<?php

function saluda() {
  echo " Saluda";
}
```
##### Ejercicio 5
- Continuando la práctica anterior vamos a crear una función que si le pasamos el nombre de una imagen nos escriba el tag <img />.
