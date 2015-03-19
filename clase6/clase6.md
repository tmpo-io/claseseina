## CLASE 6

#### Repaso de las sesiones anteriores

```php
$lista = array(1,2,3,4,5);

foreach($lista as $ele) {
    echo $ele*3;
}
```
```php
shuffle($lista);
foreach($lista as $ele) {
    echo $ele*3;
}
```
```php
$resultado = array_sum( $lista );
echo $resultado;
```
```php
$inicio = 1;
$final = 999;
$aleatorio = rand ( $inicio , $final );
echo $aleatorio;
```


##### Ejercicio 1

Construiremos un listado de proyectos con los títulos de proyecto en una lista. El listado de proyectos tiene que ser un div en html para cada proyecto + una imagen. ( función foreach )


##### Ejercicio 2

Utilizando el ejercicio anterior, construiremos otra lista con una imagen para cada proyecto, (la imagen debe reemplazar la imagen anterior).



#### Mapas 

Un mapa es una lista que asocia valores con claves. Puede ser usado como una lista (array), una tabla asociativa, etc.

```php

$mapa = array(
	"clave_1" => "valor para clave 1";
	"clave_2" => "valor para clave 1";
);

echo $mapa["clave_1"] ;
```

##### Ejercicio 3

Crea un mapa con los nombre de los alumnos y el link a su web. A partir de un formulario con un campo nombre se debe mostrar el link de su web.



#### Combinación de listas y mapas

Se pueden combinar listas normales y mapas, consiguiendo un sistema parecido a una Base de Datos.

```php
$lista = array();
$lista[0] = array(
	"titulo"=> "título del proyecto",
	"img"=> "Imagen del proyecto",
	"url"=> "Link del proyecto",
);
$lista[1] = array(
	"titulo"=> "título del proyecto 2",
	"img"=> "Imagen del proyecto 2",
	"url"=> "Link del proyecto 2",
);

foreach($lista as $proyecto) {
	echo $proyecto["titulo"];
	echo $proyecto["img"] ;
}
```

##### Ejercicio 4
Construye un listado para tu portfolio con titulos, descripición, imagenes, urls y fechas de los proyectos.


