## Javascript

### Los plugins de jQuery

Los plugins de jQuery son un conjunto de instrucciones mas o menos complejas reciclables con unas funcionalidades especificas. (Players, formularios, movimientos de scroll, etc.)


### Slick (http://kenwheeler.github.io/slick/)

Pluguin para jQuery que nos permite crear players de imagenes o contenido, responsive y configurable.

Para utilizar un pluguin de jQuery necesitamos incluir la jQuery y los js/css necesarios específicos del plugin.

```javascript
<link rel="stylesheet" type="text/css" href="slick/slick.css" />
<script src="jquery.js"></script>
<script src="slick/slick.js"></script>
```

Necesitamos construir el html para el plugin.
- Un div contenedor
- Dentro del div contenedor un listado de 5 divs.


Una vez tenemos los archivos incluidos en nuestro documento HTML vamos a inicializar el plugin.

```javascript
<script>
$(document).ready(function () {
  $('.contenedor').slick();
})
</script>
```


Para configurar el plugin Slick se le puede pasar un objeto javascript con las configuraciones especificas.

```javascript
<script>
$(document).ready(function () {
  settings = {
    arrows: false,
    centerMode: true
  }
  $('.contenedor').slick(settings);
})
</script>
```

En la sección settings del plugin tenemos todas las posibilidades del plugin.
http://kenwheeler.github.io/slick/#settings

### Ejercicio

- Crear un listado de noticias que cada una de ellas tenga un player.
- Crear una cabecera de fotografías con un texto que pasen automáticamente.
