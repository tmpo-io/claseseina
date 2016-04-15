
## Clase 9

### Php

####Include

El include es un elemento del PHP para para incluir y evaluar una pagina dentro de otra.

```php
<?php
include "ruta_del_archivo/archivo.php";
?>
```

##### Ejercicio
- Vamos a construir un site que tenga las siguientes secciones.
  - Header
  - Menú
  - Contenido
  - Footer
Debemos crear un archivo para cada una de las secciones e importarlos con un include.


####Variables mediante URL ($_GET)

Los archivos php pueden recibir variables mediante URL. De esta forma podemos recibir información externa a nuestra aplicación.
 - $_GET es un lista (Array) con todas las variables disponibles que se han pasado por la url.
 
- Tenemos un archivo llamado index.php
- Si en e navegador abrimos esta pagina http://localhost/get_ejemplo/index.php?variable1=prueba&variable2=prueba2

 ```php
<?php
echo $_GET["variable1];
?>
```
##### Ejercicio
- Utilizando una variable por GET y IF crea un sistema de múltiples secciones para el ejercicio anterior.

#### Switch
- Un switch es una sentencia similar a un conjunto de if, elseif else pero mucho mas limpia si queremos comparar una variable con diferentes valores.

 ```php
<?php
$seccion = "home";
switch($seccion) {
  case "seccion1":
    echo "$seccion es igual a seccion1"; 
  break;
  case "seccion2":
    echo "$seccion es igual a seccion2"; 
  break;
  case "home":
    echo "$seccion es igual a home"; 
  break;
  default:
    echo "Diferente a todos los casos definidos";
  break;
}
?>
```

##### Ejercicio
- Transforma el ejercicio anterior de ifs en un Switch.
- Una de las secciones de nuestra web debe ser un listado de noticias,
 - Creando un array con nuestras noticias y un foreach deberiamos imprimir el listado.
 
 ```php
<?php
  $noticias = array(
    array(
      "titulo"=>"Título 1",
      "desc"=>"Descripción 1",
      "img"=>"path/img1.jpg"
    ),
    array(
      "titulo"=>"Título 2",
      "desc"=>"Descripción 2",
      "img"=>"path/img2.jpg"
    )
  );
?>
```

 
