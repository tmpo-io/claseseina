## Javascript

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
  $('body').vegas();
})
</script>
```

Para configurar el plugin se le debe pasar un objeto javascript con las configuraciones especificas.

```javascript
<script>
$("#example, body").vegas({
    slides: [
        { src: "/img/slide1.jpg" },
        { src: "/img/slide2.jpg" },
        { src: "/img/slide3.jpg" },
        { src: "/img/slide4.jpg" }
    ]
});
</script>
```

### Ejercicio

- Crear microsite de un producto.



## AOS - Animate On Scroll Library (https://github.com/michalsnik/aos)

Libreria para animar elementos al hacer scroll.

```html
<link rel="stylesheet" href="aos/dist/aos.css" />
<script src="aos/dist/aos.js"></script>
<script>
    AOS.init();
</script>
```

```html
<div
    data-aos="zoom-in-up"
    data-aos-offset="120"
    data-aos-duration="400"
    data-aos-easing="ease-in-sine"
    data-aos-delay="0"
    data-aos-once="false"
></div>
```

### Listado de animaciones

- Animaciones fade:
fade fade-up, fade-down, fade-left, fade-right
fade-up-right, fade-up-left, fade-down-right, fade-down-left

- Animaciones Zoom:
 zoom-in, zoom-in-up, zoom-in-down, zoom-in-left, zoom-in-right
 zoom-out, zoom-out-up, zoom-out-down, zoom-out-left, zoom-out-right 

- Animaciones Slide:
slide-up, slide-down, slide-right, slide-left

- Animaciones Flip:
flip-left, flip-right, flip-up, flip-down