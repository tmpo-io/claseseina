# Javascript

## Ejemplos de mini-animaciones usando TweenMax.
- menu.html
- list.html
- bodegon.html

## Svg (Scalable Vector Graphics)

Los ficheros SVG se definen en XML y permiten usar formas gráficas, mapas de bits o texto.

```html
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455 140">
    <rect x="1" y="1" width="157" height="139.35" style="fill:#c12823;stroke:#211915;stroke-miterlimit:10"/>
    <circle cx="247" cy="70" r="63" style="fill:#313c8c;stroke:#211915;stroke-miterlimit:10"/>
    <polygon points="377 115 351 70 377 25 429 25 455 70 429 115 377 115" style="fill:#dad240;stroke:#211915;stroke-miterlimit:10"/>
</svg>
```

### viewBox
Esta compuesto de 4 valores que delimitarán la parte del svg que se mostrará: 

```html
viewBox="10 10 300 400"
```

Empezará en la x = 10 y = 10 y tendrá un width y height de 300 400. Normalmente su formato es 
```html
viewBox="0 0 width height"
```

### Ejercicio 1
Abrimos el ilustrator vamos a generar diferentes símbolos, en las capas vamos a cambiar el nombre de cada capa, y lo exportaremos como svg.
Una vez exportado lo insertaremos en un documento html y vamos hacer algunas animaciones con TweenMax.

### Ejercicio 2
Utilizando el ejercicio número 1 vamos a controlar las animaciones mediante click.


### Ejercicio 4
Vamos a construir nuestra máquina en svg.

#### Ejemplos
- http://codepen.io/sdras/pen/MYQxXe
- http://codepen.io/sdras/pen/waXKPw
- https://codepen.io/liabru/pen/Edinj


### Ejercicio Final