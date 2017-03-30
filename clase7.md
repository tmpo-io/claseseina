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


### Javascript

### JQuery

- jQuery es una librería que nos ayuda a trabajar con las distintas API de los navegadores.
- Con jQuery podemos manipular elementos del DOM.

```
$('#elemento')
    .html("<p>Hola</p>")
$('#elemento')
    .css({'color': 'rojo', 'padding-top': '10px'})
$('.elemento')
    .show()
$('.elemento')
    .hide()
$('.elemento')
    .fadeIn()
$('.elemento')
    .fadeOut()

// Si el elemento es un campo de formulario.
$('#campo').val()

```

De las expresiones:

```
    $('#element').css(    {'color': 'rojo'})
       ^          ^       ^ 
       Selector   Método  Objeto de configuración 
```
  
- Los selectores siguen las mismas reglas que los de CSS (con alguna excepción)
- Métodos hay muchos (http://jquery.com)

### Eventos de Usuario

Un evento es una cosa que pasa, y es programable, pe:

 - Un click a un objeto.
 - Cuando el mouse pasa por encima de algo.
 - Al hacer scroll
 - ... 
 
jQuery unifica la forma de usar los eventos a través de los distintos navegadores:

```
$('#selector').on('click', function(){
    // Aqui va el código que se ejecutará al hacer click
    alert('hola')
});
```

Tenemos la lista completa de eventos que admite jQuery aquí:
https://api.jquery.com/category/events/


#### Ejercicio

- Vamos a crear un ejercicio que cada vez que cliquemos en el documento, (en cualquier parte) lance un mensaje. P.e. un alert

- Evolucionaremos el ejercicio para que en lugar de lanzar un alert, nos escriba el mensaje en un div (previamente preparado)

- Finalmente, queremos tener un contador de las veces que un usuario hace clic en el mensaje.


#### Ejercicio Imágenes

- Vamos a construir un pequeño visor de imágenes. Una imagen principal, y una lista de enlaces que nos permitan cambiar esta, al hacer click, y sin recargar la página donde estamos.
