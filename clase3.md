
# Clase 3

## Repaso anteriores

- Sabemos que es un cliente
- Sabemos que es un servidor
- Sabemos que es un protocolo
- Sabemos que es un lenguaje de programación
- Sabemos que es una variable
- Sabemos que es una instrucción
- Sabemos la diferencia entre == y ===
- Sabemos que es un condicional

```javascript
if(a < 1) {
    console.log("Muy deficiente")
} else if(a < 5) {
    console.log("Suspenso")
} else if(a < 6) {
    console.log("Aprobado")
} else if(a < 8) {
    console.log("Aprobado")
} else {
    console.log("Sobresaliente")
}
```

### Ejercicio 1

Imaginemos que debemos programar la entrada organizada a un avión. El programa
debe de recibir el número de fila y devolver la puerta delantera o trasera.
El avión tiene 30 filas. Hasta la fila 15 deben de entrar por la delantera. El resto
por la trasera

## DOM

Es una API que nos permite acceder de forma programática al contenido de una web. El DOM nos ofrece una instantánea de lo que el navegador está en eso momento mostrando, y nos permite des de javascript consultar y realizar modificaciones.

Supongamos que en nuestro html tenemos la siguiente etiqueta

```html
<img src="assets/imagen.png" id="imagen" />
```

Des de javascript podremos  
```js
let imagen = document.getElementById('imagen')
console.log(imagen.src)
```


### Ejercicio 2

Construiremos un archivo html e insertaremos una imágen, en él. 

Queremos que cada vez que se recargue la página la imágen que carga sea distinta, de entre un grupo de 3.


#### Ayuda para el ejercicio

```javascript
function random(inicio, fin) {
    return Math.floor(Math.random() * fin) + inicio;
}
```


## Listas (Arrays)

- Una lista en javascript es una variable que puede conenter muchas mas variables
 b b 
```javascript
lista = [1,2,3,4]
nombre = ["jose", "pablo", "marco", "tere"]
```
- Igual que las cadenas de texto, podemos acceder a las listas por indice:

```javascript
lista[0]
lista[1]
```

- Las listas o Arrays, son al mismo tiempo un objeto que puede tener propiedades o 
métodos

```javascript
lista.length
lista.push(4)
lista.pop()
lista.shift()
lista.unshift(1)
lista.sort()
```

- En un Array en javascript podemos almacenar cualquier tipo de dato

```javascript
lista = [1,"cadena texto",fale,[1,2,3]]
```

### Ejercicio 3

Modificaremos el ejercicio2, con una lista de imágenes que situaremos en una carpeta, 
y haremos que nos muestre aleatoriamente una imágen de la lista.

## Bloque for

```javascript
for(i=0; i<50; i++) {
    document.write("valor de i: ", i)
}
```

- El bloque de control for sirve para repetir una operación **n** veces. (50)
- El fragmento generará 50 instrucciones, des de i=0 hasta i<50
- Un bloque de control, siempre va entre {}. De momento conocemos uno para repetir 
instrucciones y otro para generar elementos.

### Ejercicio 4

Construiremos una lista con los nombres de los alumnos de la clase, y mediante un bloque
for, iteraremos por ella, para saludar a todos los alumnos, podemos agregar "html" al documento
creando un contenedor `div` seleccionandolo con `getElementById` y añadiendole con `innerHTML`


### Ejercicio 5

Almacenaremos las notas de los alumnos de la clase en una lista, y calcularemos la media.

```javascript
notas = [10,8,4,7,5,3,2,7,6,6,5,5,4]
```

### Ejercicio 6.

Dada la lista anterior, somos capaces de saber cual es la nota mínima y la nota máxima? 
Y la del medio?


### Ejercicio 7.

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

### Ejercicio 8

Podéis crear una función que realice restas, y otra que multiplque, y otra que divida?

### Ejercicio 9

Somos capaces de convertir el código que nos calculava la media de notas de una lista, 
en una función?

### Ejercicio 10

Crearemos una calculadora que pueda sumar, restar, multiplicar o dividir los valore que 
los usuarios introduzcan.


```html
...
<input type=number id="valor1" />
<select id="operacion">
  <option value="suma">+</option>
  <option value="resta">-</option>
  <option value="multiplicacion">*</option>
  <option value="division">/</option>
</select>

<input type=number id="valor2" />
<button onclick="calcula()" />Calcula</button>
...
```

* Para acceder al valor que contiene un campo obteniendo su referencia lo podemos hacer con: `refcampo.value `

