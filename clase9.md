## CLASE 9

#### Repaso de las sesiones anteriores

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

```javascript
$("#id_etiqueta_html")
$(".clase_html")
$("etiqueta_html")
```

#### Edición de propiedades
```javascript
//modifica propiedades css de una etiqueta
$(".classe").css({
  "width": "300px",
  "background-color": "red",
});

//modificar la ruta de una imagen
$(".classe").attr("src", "nueva_ruta.jpg")

//sistema de mostrar y esconder etiquetas con display:none;
$(".classe").hide();
$(".classe").show();
```

##### Eventos
Es algo que desencadena una acción, permitiendonos programar una serie de acciones que se ejecutaran cuando el evento sea llamado

Los principales eventos son:
- click
- mouseover / mouseout
- resize (cuando el navegador cambia de dimensión) 
- load (cuando un elemento externo es cargado, imagen, documento, etc.)

###### Sintaxis:
```javascript
$(".clase_click").click(function () {
  alert("elemento clickado")
})
```
##### Ejercicio 1
Dada una lista de imagenes crea un botón que vaya cambiado la imagen al ser clickada.
```javascript
lista_img = ["img/img1.jpg", "img/img2.jpg", "img/img3.jpg"]
```
AYUDA: 
 - La propiedad que se debe actualizar de una etiqueta img es src
 - Necesitaremos una variable que se vaya incrementado cada vez que se hace click.


### Plugins de Jquery
Los plugins de jQuery son componentes que nos permiten implementar de una manera sencilla funcionalidades complejas.

### Lightbox

Url del plugin
http://lokeshdhakar.com/projects/lightbox2/

Javascripts que debemos incluir al documento
```javascript
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>
```
```html
<link href="css/lightbox.css" rel="stylesheet" />
```
Inicializamos el lightbox
```html
<a href="img/image-1.jpg" data-lightbox="image-1" data-title="My caption">Image #1</a>
```

#### Propiedades

- data-lightbox Identificador por si necesitamos mas de una galeria en la misma pagina
- data-title Añadir un título a la imagen

### Easy Tabs

Permite crear un sistema de tabs
url: http://os.alfajango.com/easytabs/

Javascripts que debemos incluir al documento
```javascripts
<script src="/javascripts/jquery.js" type="text/javascript"></script> 
<script src="/javascripts/jquery.hashchange.js" type="text/javascript"></script> 
<script src="/javascripts/jquery.easytabs.js" type="text/javascript"></script>  

```

Inicializamos los tabs
```javascripts
<script type="text/javascript"> 
  $(document).ready(function(){ 
    $('#tab-container').easytabs(); 
  });
</script>
```

#### Estructura del html
- Un div contenedor de los tabs y del menu
- Un menu de ul y con elementos li
- un div contenido para cada tab
