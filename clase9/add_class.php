<html>
<head>
	<script src="jquery.js"></script>
	<script>
	$(document).ready(function () {

		$("div").click(function () {

			$(this).toggleClass("altura")

		})

	});
	</script>
	<style>
		div {
			width:300px;
			border:1px solid red;
			height:200px;
			float:left;
			-webkit-transition: all 0.3s ease-out;
	        transition: all 0.3s ease-out; 
		}
		.altura {
			height:600px;
			width:260px;
			background-color:#ff0000;
			
		}
	</style>
</head>
<body>
	<div></div>

	<div></div>

	<div></div>

</body>
</html>