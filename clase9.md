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



