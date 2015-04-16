<html>
<head>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function () {

	$("#box1").html("box 1")
	
	$("#box2").html("box 2")
	
	$("#box3").html("box 3")

	$("#box3").css({
		"background":"red",
		"color": "#000"
	});

	$(".box").delay(3000).fadeOut()

	$("div").delay(6000).fadeIn()

})
</script>
<style>
.box {
	border:1px solid red;
	width:30%;
	height:100px;
}
</style>
</head>
<body>

<div class="box" id="box1"></div>
<div class="box" id="box2"></div>
<div class="box" id="box3"></div>

</body>
</html>