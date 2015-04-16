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
</body>
</html>