

## Clase 8

### Vegas

Terminar la práctica de Vegas JS.


### jQuery One Page Nav (https://github.com/davist11/jQuery-One-Page-Nav)

Plugin para crear una navegación mediante el scroll. Agrega el desplazamiento suave al hacer clic en la barra de navegación y selecciona automáticamente los elementos de navegación correctos a medida que van pasando las diferentes secciones.

```
$('#nav').onePageNav({
    currentClass: 'current',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
    begin: function() {
        //I get fired when the animation is starting
    },
    end: function() {
        //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
    }
});
```

### Ejercicio
  - Reutilizando el ejercicio de Vegas vamos a implementar el OnePageNav.


### PHP

A diferencia del Javascript el PHP es un lenguaje interpretado en el lado del servidor.

####Diferencias de sintaxis entre javascript y php
```html
<script>
//código javascript
</script>
<?php
//código php
?>
```
###TIPS

- Es necesario utilizar ; al final de línea
- Para concatenar cadenas y variables se utiliza el . y no el +
- Las variables tienen que empezar por $

###Imprimir contenido
```php
echo "cotenido ";
```

####Variables
Las variables deben empezar con el símbolo $ y al final de línea ;.
```php
<?php
$variable1 = "una variable string";
$variable2 = 12;
</script>
```

####Listas

Se pueden inicializar de diferentes maneras

```php
<?php
$marcas = array("Saab", "Volvo", "BMW");
$marcas = ["Saab", "Volvo", "BMW"];
?>
```

```php
####Foreach
Loop para Php

<?
$marcas = ["Saab", "Volvo", "BMW"];

foreach($marcas as $marca) {
  echo $marca ."<br />";
}
?>
```

```php
####Foreach
Loop para Php

<?
$marcas = ["Saab", "Volvo", "BMW"];

foreach($marcas as $marca) {
  echo $marca ."<br />";
}
?>
```

```
####Function
Funciones
```php
<?php

function saluda() {
  echo " Saluda";
}
?>
