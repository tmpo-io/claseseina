<html>
<head>
<script src="tabs/vendor/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="tabs/vendor/jquery.hashchange.min.js" type="text/javascript"></script> 
<script src="tabs/lib/jquery.easytabs.js" type="text/javascript"></script> 

<script type="text/javascript"> 
$(document).ready(function(){ 
	
	$('.tab-container').easytabs({
	}); 

});
</script> 

<style>
* {
	margin:0;
	padding:0;
}
li { 
	display:inline-block;
	border:1px solid #000;
}

li.active {
	background:#000;
	color:#fff;
}

div {
	border:1px solid #000;
	padding:20px;
}
</style>
</head>
<body>

<div class="tab-container">
  <ul>
    <li><a href="#tab-1-div">Tab 1</a></li>
    <li><a href="#that-other-tab">The Second Tab</a></li>
    <li><a href="#lastly">Tab C</a></li>
  </ul>
  <div id="tab-1-div">
    <h2>Heading 1</h2>
    <p>This is the content of the first tab.</p>
  </div>
    <div id="that-other-tab">
    <h2>Heading 2</h2>
    <p>Stuff from the second tab.</p>
  </div>
  <div id="lastly">
    <h2>Heading 3</h2>
    <p>More stuff from the last tab.</p>
  </div>
</div>

<div class="tab-container">
  <ul>
    <li><a href="#s-tab-1-div">Tab 1</a></li>
    <li><a href="#s-that-other-tab">The Second Tab</a></li>
    <li><a href="#s-lastly">Tab C</a></li>
  </ul>
  <div id="s-tab-1-div">
    <h2>Heading 1</h2>
    <p>This is the content of the first tab.</p>
  </div>
    <div id="s-that-other-tab">
    <h2>Heading 2</h2>
    <p>Stuff from the second tab.</p>
  </div>
  <div id="s-lastly">
    <h2>Heading 3</h2>
    <p>More stuff from the last tab.</p>
  </div>
</div>


</body>
</html>