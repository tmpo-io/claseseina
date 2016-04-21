
## Clase 10

### Php

#### Loop for

El loop for funciona exactamente igual que el for de javascipt

```php
<?php
for($i=0;$i<10;$i++) {
?>
contenido html para el loop 
<img src="" />
<h2>texto</h2>
etc..
<?php
}
?>
```

##### Ejercicio

- Vamos a construir un reticula de cajas de colores 8x20

####Random

La función de php rand(0, 20) nos permite obtener números aleatorios entre el rango que le especifiquemos
```php
<?php
echo rand(0, 100);
?>
```

##### Ejercicio

- Vamos a construir un Array (lista) con diferentes colores hexadecimales y vamos ha hacer que cada vez que el navegador se recargue pinte el color del body con un color diferente

```php
<?php
$colores = array("posición 1", "posición 2");
?>
```

- Ahora vamos a mezclar los 2 ejercicios anteriores, obteniendo como resultado un grid de diferentes colores. 

### Javascript

#### Scrollreveal Plugin (https://scrollrevealjs.org/)

Plugin para animar bloques de contenido sincronizado con el scroll

Este plugin no necesita jQuery, pero debemos añadir el js al final de la pagina.
Necesitamos construir un contenedor con un height 100% con la classe .container

```javascript
<script src="scrollreveal/dist/scrollreveal.js"></script>
<script>
// JavaScript
window.sr = ScrollReveal({
  reset: true,
  container: document.querySelector('.container'),
});
sr.reveal('.boxes');
</script>
```

La clase box debe estar inicializada con visibility: hidden;

##### Ejercicio
Reutilizando la practica anterior vamos a añadir a nuestro grid de 8x20 el efecto de entrada
