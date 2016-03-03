 
# Clase 4
 
## Repaso sesión anterior

- Sabemos que es una variable
- Sabemos que es una instrucción
- Sabemos hacer condicionales
- Sabemos que es una lista.
- Sabemos que es una iteración for


### Ejercicio 1

### Ejercicio 2

Almacenaremos las notas de los alumnos de la clase en una lista, y calcularemos la media.

```javascript
notas = [10,8,4,7,5,3,2,7,6,6,5,5,4]
```

### Ejercicio 3.

Dada la lista anterior, somos capaces de saber cual es la nota mínima y la nota máxima? 
Y la del medio?


### Ejercicio 4.

Serías capaz de generar un programa que fuera capaz de calcular el factorial de n?

El factorial de 5! es: 5*4*3*2*1


## Funciones

- Una función es un conjunto de instrucciones agrupado como una nueva instrucción.
- Una función recibe unas variables (parámetros) y puede (o no) devolver un resultado.
- El objetivo de una función es agrupar código que luego podamos reutilizar
- Así mismo una función nos resolverá un problema pequeño que podremos aislar del problema 
  grande.
- El código de una función no se ejecuta hasta que la llamamos.


Una función que no recibe parámetros y tampoco devuelve:

```javascript
// definimos la función
funciton saluda() {
    console.log("hola clase")
}
// la ejecutamos
saluda()
```

Una función que devuelve parámetros
```javascript
// Definimos una funcion suma, que suma dos numeros
function suma(a, b) {
    return a + b
}

// Llamamos a la funcion
resultado  = suma(1,3)
console.log(suma(5,4))
```

- Si queremos que una función devuelve algo, tiene que terminar con la 
instruccion __return__
- las variables que definamos como parámetros en la función, solo existen 
en el contexto de esta.

### Ejercicio 5

Podéis crear una función que realice restas, y otra que multiplque, y otra que divida?

### Ejercicio 6

Somos capaces de convertir el código que nos calculaba la media de notas de una lista, en una función?


## JQuery

- jQuery es una librería que nos ayuda a trabajar con el DOM del navegador.
- Que es el DOM?
  - El DOM es la representación del html y el css en memoria. Más o menos lo que podemos ver en el Inspector web.
- Con jQuery podemos modificar elementos, cambiar estilos, o realizar animaciones en un documento html des de javascript. 
- Con jQuery nos es muy simple reaccionar y programar eventos. Que es un evento?
  - Un evento es un suceso en una sessión. Por ejemplo, un click en un botón, o mover el scroll de la página. Mediante javascript, podemos programar estos eventos, con jQuery nos lo ponen muy fácil.



```html
<html>
<head>
<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script>
$(document).ready(function(){

});
</script>
</head>
<body>


</body>
</html>

```

### Ejercicio 7 

Crearemos una calculadora que pueda sumar, restar, multiplicar o dividir los valore que los usuarios introduzcan.
