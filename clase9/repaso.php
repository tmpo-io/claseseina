<html>
<head>
<script src="jquery.js"></script>
<script>
$(document).ready(function () {
	
	$("div").css({
		"background": "#000000"
	})

	$("#box_id").css({
		"background": "#ff0000"
	})

	$(".box_class").delay(3000).fadeOut(300)

	$(".box_class").html( "hola" )

	$("img").attr("src", "http://placehold.it/450x150")	
});
</script>
<style>
div {
	width:30%;
	height:200px;
	border:1px solid red;
	float:left;
}
</style>
</head>
<body>

<div id="box_id"></div>

<div class="box_class"></div>

<div>Hola</div>

<img />

















</body>
</html>