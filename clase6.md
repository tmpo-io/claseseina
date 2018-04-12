
## Javascript

### JQuery

- jQuery es una librería que nos ayuda a trabajar con las distintas API de los navegadores.
- Con jQuery podemos manipular elementos del DOM.

```javascript
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

```javascript
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

```javascript
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



