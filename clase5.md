

## Clase 4

### Repaso Sesion anterior

- Sabemos: variable, instrucción, condicional, lista, iteración for
- Sabemos que es una función.
- Sabemos que es un objeto
- Sabemos que es JSON

### Objetos

```
// un objeto
var a = {}
a.color = "rojo"
a.precio = 100
a.unidades = 3
```

#### Ejercicio

Sabemos calcular el total?

```
// Un objeto
a["color"] = "verde"
a["tallas"] = [1,2,3,4]
a["propiedades"] = {
    "mangas": "cortas",
    "material": "algodón"
}

```

**Nota**: Recordad el uso de la **,** en las listas: Siempre para separar elementos, pero en la última posición es incorrecta:

```
// Incorrecto
a = [1,2,3,4,5,]
```

### JQuery

- jQuery es una librería que nos ayuda a trabajar con las distintas API de los navegadores.
- Con jQuery podemos manipular elementos del DOM.

```
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

```
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

```
$('#selector').on('click', function(){
    // Aqui va el código que se ejecutará al hacer click
    alert('hola')
});
```

#### Ejercicio

- Vamos a crear un ejercicio que cada vez que cliquemos en el documento, (en cualquier parte) lance un mensaje. P.e. un alert

- Evolucionaremos el ejercicio para que en lugar de lanzar un alert, nos escriba el mensaje en un div (previamente preparado)

- Finalmente, queremos tener un contador, para las veces que el usuario hace clic en el mensaje.

