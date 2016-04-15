<nav>
	<a class="<?php if($_GET["seccion"]=="home") { echo "current"; } ?>" href="index.php?seccion=home">Homepage</a>
	
	<a class="<?php if($_GET["seccion"]=="contacto") { echo "current"; } ?>" href="index.php?seccion=contacto">Contacto</a>
	
	<a class="<?php if($_GET["seccion"]=="news") { echo "current"; } ?>" href="index.php?seccion=news">News</a>
</nav>