

## Clase 6

### Finalizar ejercicio sesión anterior.

### Ejercicio Imágenes

- Vamos a construir un pequeño visor de imágenes. Una imagen principal, y una lista de enlaces que nos permitan cambiar esta, al hacer click, y sin recargar la página donde estamos.

```
div>img

li>Item1

```
**Pasos**

- Montar el HTML
- Crear el script y adjuntar la librería jQuery
- Añadir un id a la imagen para poder referenciarla des de jQuery
- Añadir el código jQuery base (document.ready)
- Añadir un selector a los enlaces.
- Programar una función que nos cambie la imagen
- Responder al evento de cambio de imagen

- Lo mejoramos y lo volvemos genérico:

### jQuery: El elemento en curso en un evento

- Al hacer click en un elemento, podemos acceder a él mismo des de jQuery?

```
$('#el').on('click', function(e){
    $(this)
})
```

- Leer atributos escritos en el elemento (attr)

<img id="i1" src="asdf" opcion="1" />

```
$('#i1').attr('opcion')
```


### Repaso seleccionar elementos del Dom en jQuery

- A groso modo podríamos decir que hay 3 formas de seleccionar elementos en jQuery.
(El sistema de selección es exactamente el mismo que en CSS).
- Por clase la selección empieza por un . $(".nombre_classe")
- Por id la selección empieza por un # $("#nombre_id")
- Por un tipo de tag de html $("div")

### Los plugins de jQuery

Los plugins de jQuery son un conjunto de instrucciones mas o menos complejas reciclables con unas funcionalidades especificas. (Players, formularios, movimientos de scroll, etc.)


### Slick (http://kenwheeler.github.io/slick/)

Pluguin para jQuery que nos permite crear players de imagenes o contenido, responsive y configurable.

Para utilizar un pluguin de jQuery necesitamos incluir la jQuery y los js/css necesarios específicos del plugin.

```
<link rel="stylesheet" type="text/css" href="slick/slick.css" />
<script src="jquery.js"></script>
<script src="slick/slick.js"></script>
```

Necesitamos construir el html para el plugin.
- Un div contenedor
- Dentro del div contenedor un listado de 5 divs.


Una vez tenemos los archivos incluidos en nuestro documento HTML vamos a inicializar el plugin.

```
<script>
$(document).ready(function () {
  $('.contenedor').slick();
})
</script>
```


Para configurar el plugin Slick se le puede pasar un objeto javascript con las configuraciones especificas.

```
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
