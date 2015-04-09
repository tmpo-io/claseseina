## CLASE 8

#### Repaso de las sesiones anteriores

```php

function nombre_funcion($argumento1, $argumento2) {
  echo "argunmento 1: ". $argumento1 ."<br />";
  echo "argunmento 2: ". $argumento2 ."<br />";
  
  $suma = $argumento1 + $argumento2;
  
  echo "suma: ". $suma ."<br />;

}

//llamamos a la función
nombre_funcion(9, 5);

$variable1 = 12;
$variable2 = 23;

nombre_funcion($variable1, $variable2);

```
##### Ejercicio 4 clase 7

Vamos a construir una calculadora que tenga las operaciones básicas:

1. Sumar
2. Restar
3. Multiplicar
4. Dividir

Cada una de las operaciones anteriores debe ser una función.

Para la entrada de datos vamos a utilizar al siguiente formulario.
```html
<form method="get">
  <label for="valor1">Valor 1</label>
  <input type="text" name="valor1" />
  
  <label for="valor2">Valor 2</label>
  <input type="text" name="valor2" />
  
  <label for="operador">Operador</label>
  <input type="text" name="operador" />
  
  <input type="submit" value="calcular" />
</form>
```
###### TIP
Vamos a necesitar un if elseif else para seleccionar el tipo de operación.

### Introducción Javascript 

A diferencia del PHP el Javascript es un lenguaje interpretado en el lado del cliente (navegador).

EL javascript se puede incluir externamente a partis de archivos .js o dentro del html con las etiquetas <sript></script>
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

- No es necesario utilizar ; al final de línea
- Para concatenar cadenas y variables se utiliza el + y no el punto
- Las variables no tienen que empezar por $

###Imprimir contenido
```javascript
<script>
//Muestra una ventana alert
alert("contenido a imprimir")

//Escribir en la consola del navegador
console.log("contenido en la consola")

//Escribir en el documento html
document.write("contenido al final del documento");

//Escribir contenido en una etiqueta html especifica
document.getElementById("id_etiqueta").innerHTML = "Contenido dentro de la etiqueta";
</script>
```

####Variables
Las variables no deben empezar con el símbolo $ y al final de línea ; no es necesario.
```javascript
<script>
var variable1 = "una variable string"
var variable2 = 12
</script>
```

####Listas

Se pueden inicializar de diferentes maneras

```javascript
<script>
var marcas = new Array("Saab", "Volvo", "BMW");
var marcas = ["Saab", "Volvo", "BMW"];
</script>
```

####Maps
```javascript
<script>
var mapa = {
  "clave1": "Valor clave 1",
  "clave2": "Valor clave 2"
}
mapa["clave3"] = "Valor clave 3"

</script>
```
####Foreach
No existe un loop exactamente igual que el foreach en javascript, pero podemos utilizar el for o el for in
```javascript
<script>
var marcas = ["Saab", "Volvo", "BMW"];

//for normal
for(i=0;i<marcas.length;i++) {
  alert(marcas[i]);
}

var mapa = {
  "clave1": "Valor clave 1",
  "clave2": "Valor clave 2"
}
//for para maps
for(key in mapa) {
  alert("la clave: "+key);
  alert("el contenido: "+ mapa[key])
}
</script>
```

####Interval

Un interval es una función de javascript que te permite hacer una acción cada X milisegundos.

```javascript

function funcion_interval () {
  //acciones q se ejecutaran
}

mi_interval = setInterval(funcion_interval, 3000)
```
##### Ejercicio 1
Crea un grid de divs de diferentes colores que cada X segundos vaya añadiendo nuevos elementos.


###jQuery

jQuery es una librería de javascript que permite la manipulación de elementos html, gestión de eventos, AJAX y animaciones de una forma sencilla y transversal para todos los navegadores.

Para utilizar jQuery se debe incluir la librería
```javascript
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function () {
  //Código javascript 
})
</script>
```

#### Selección de elementos

Manipulación de etiquetas html, funciona con el mismo sistema de selección que CSS

```javascript
$("#etiqueta_id").html("contenido dentro de la id")

$(".etiqueta_clase").html("contenido dentro de la classe")

$("p").html("contenido dentro de una etiqueta p")
```

##### Edición de propiedades
```javascript
//modifica propiedades css de una etiqueta
$(".classe").css({
  "width": "300px",
  "background-color": "red",
});

//sistema de mostrar y esconder etiquetas con display:none;
$(".classe").hide();
$(".classe").show();
```

##### Ejercicio 2
Crea un player de imágenes automático


##### Eventos
Un evento es algo que desencadena una acción especifica en el navegador, cuando haces click, cuando se carga la página, hover, etc.

```javascript
//registar una función cuando se clicka en un elemento
function boton_clicado() {
  alert("el botón se ha clicado")
}

$(".classe").click(boton_clicado)
```
##### Ejercicio 3
Recicla el ejercicio anterior eliminando el pase automática y añadiendo unos botones de next / prev.

