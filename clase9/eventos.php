<html>
<head>

<script src="jquery.js"></script>
<script>
$(document).ready(function () {
	$("div").click(function () {

		$("div").css({
			"background":"blue"
		});

	})
	
	$("div").mouseover(function () {

		$("div").css({
			"background":"red"
		});

	})

	$(window).resize(function () {
		alert("cambio de medida");
	});

	$("#img_externa").load(function () {
		alert("img ok")
	})

});
</script>
<style>
div {
	width:30%;
	height:20px;
	border:1px solid red;
	float:left;
}

.abierto {

	height:500px;

}

</style>
</head>
<body>
<div></div>
<img id="img_externa" src="http://placehold.it/450x150" />















</body>
</html>