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

Vamos a contruir una calculadora que tenga las operaciones básicas:

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

- No es necesario utilizar ; al final de linia
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
Las variables no deben empezar con el simbolo $ y al final de linia ; no es necesario.
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



