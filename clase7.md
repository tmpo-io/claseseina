## CLASE 7

#### Repaso de las sesiones anteriores

```php

$lista = array();

$lista[0] = array(
  "clave1"=>"valor 1",
  "clave2"=>"valor 2",
  "clave3"=>"valor 3"
)

$lista[1] = array(
  "clave1"=>"valor 1",
  "clave2"=>"valor 2",
  "clave3"=>"valor 3"
)
```

##### Ejercicio 1

Construiremos una agenda que contenga: nombre, teléfono, email, con al menos 4 personas. 
A partir del siguiente formulario deberemos mostrar por pantalla la información del nombre seleccionado.

```html
<form method="get">
  <input type="text" name="nombre" />
  <input type="submit" value="buscar" />
</form>
```

#### Funciones

Una función es un conjunto de instrucciones reutilizable durante la ejecución de un programa.
Las funciones no se ejecutan inmediatamente cuando se carga el programa, se ejecutan cuando son llamadas.

##### Sintaxis

```php

// Definición de una función
function doSth() {
  echo "hola soy una función";
}

//llamar a la función 
doSth();
```

Las funciones pueden recibir argumentos, los argumentos son como variables.
Una función puede tener N argumentos y son separados por comas.
```php

// Definición de una función que recibe de argumento el nombre
function saluda($nombre) {
  echo "hola ". $nombre ;
}

//llamar a la función saluda 
saluda("oriol");

$un_nombre = "carlos";
saluda($un_nombre);
```
Una función con mas de un argumento
```php
function saluda_apellido($nombre, $apellido) {
  echo "Hola ".$nombre ." ". $apellido ;
}
saluda_apellido("oriol", "collell");

$nombre = "carlos";
$apellido = "ruiz";
saluda_apellido($nombre, $apellido);
```
##### Ejercicio 2
Contruye una función que recibiendo como argumento una ruta de imagen pueda escribir una etiqueta html con la imagen.

##### Ejercicio 3
Construye una función que recibiendo un map pueda escribir un post de un blog.

```php
$post = array(
  "fecha"=>"12-12-2015",
  "titulo"=>"Ocho videojuegos con mucho futuro",
  "descripcion"=>"Ocho minutos. Este ha sido el tiempo del que han dispuesto los ocho equipos de desarrollo de GameBCN para convencer al público, y especialmente a los inversores...",
  "link"=>"http://www.google.com"
);
```


##### Ejercicio 4
Vamos a contruir una calculadora que tenga las operaciones básicas:

1. Sumar
2. Restar
3. Multiplicar
4. Dividir

Cada una de las operaciones anteriores debe ser una función.

Para la entrada de datos vamos a utilizar al siguiente formulario.
```html
<form method="get">
  <label for="valor1">Valor 1</label>
  <input type="text" name="valor1" />
  
  <label for="valor2">Valor 2</label>
  <input type="text" name="valor2" />
  
  <label for="operador">Operador</label>
  <input type="text" name="operador" />
  
  <input type="submit" value="calcular" />
</form>
```
###### TIP
Vamos a necesitar un if elseif else para seleccionar el tipo de operación.







