# Javascript

## VegasJs (http://vegas.jaysalvat.com/)

Pluguin para jQuery que nos permite crear background players de imagenes.

Para utilizar un pluguin de jQuery necesitamos incluir la jQuery y los js/css necesarios específicos del plugin.

```javascript
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="js/vegas/vegas.min.css">
<script src="js/vegas/vegas.min.js"></script>
```

Una vez tenemos los archivos incluidos en nuestro documento HTML vamos a inicializar el plugin.

```javascript
<script>
$(document).ready(function () {
  $('.contenedor').vegas();
})
</script>
```

Para configurar el plugin se le debe pasar un objeto javascript con las configuraciones especificas.

```javascript
<script>
$(function() {
    $('body').vegas({
        slides: [
            { src: 'img1.jpg' },
            { src: 'img2.jpg' },
            { src: 'img3.jpg' }
        ]
    });
});
</script>
```

## GSAP (https://greensock.com/)

GSAP es una biblioteca de JavaScript para animaciones HTML5 que funcionan en los principales navegadores.


```javascript
<script src="greensock-js/src/uncompressed/TweenMax.js"></script>
```

### TweenMax.to
El método to nos permite animar elementos desde su estado inicial hasta las propiedades que le definamos

```javascript
// El formato es elemento, tiempo, {propiedades}
TweenMax.to("elemento", 2, {backgroundColor:"#ff0000", width:"50%", ease:Power1.easeOut});
```

### TweenMax.from
El método to nos permite animar elementos desde las propiedades que le definamos hasta su estado inicial.

```javascript
// El formato es elemento, tiempo, {propiedades}
TweenMax.from("elemento", 2, {backgroundColor:"#ff0000", width:"50%", ease:Power1.easeOut});
```

### Propiedad ease: (https://greensock.com/ease-visualizer)
Nos permite modificar el tipo de animación, en el enlace anterior tenemos un visualizador.

### TimelineMax

EL timeline es una línea de tiempo donde podemos crear conjuntos de animaciones complejas y controlar su reproducción.

```javascript
var tl = new TimelineMax();
tl.to("#box5", 0.3, { width: "30%");
tl.to("#box6", 0.3, { width: "20%", backgroundColor:"#ff00cc"});
tl.to("#box5", 0.3, { height: 100, backgroundColor:"#ddcc00"});
tl.to("#box6", 0.3, { width: 200, backgroundColor:"#ff00cc"});
tl.pause();
tl.play();
tl.reverse();
```

### staggerFrom || staggerTo
Si le pasamos una lista de elementos nos anima todos los elementos y nos permite modificar el delay entre ellos.

```javascript
tll.staggerFrom(".listImg img", 0.3, { scale: 1.5, opacity: 0, 0.1);
```
