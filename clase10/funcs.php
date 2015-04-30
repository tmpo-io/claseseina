<?php



// Dado un path, devuelve la lista de directorios que contiene
function GetDirs($path) {
	if( false === is_dir($path) ) {
		// Invalid path
		return false;
	}

	$dirs = scandir($path);
	$res = array();
	// Check if files are 
	foreach($dirs as $d) {
		// test if . file
		if( substr( $d, 0, 1 ) == ".") {
			continue;
		}
	
		if( is_dir( $path . $d ) ) {
			array_push($res, $d);
		}
	
	}
	return $res;
}


// Dado un path devuelve una lista con las imagenes
function GetImages($path, $only_one=false) {
	if( false === is_dir($path) ) {
		// Invalid path
		return false;
	}
	$res = array();
	foreach(scandir($path) as $file) {
		if( endsWith($file, ".jpg")  || 
			endsWith($file, ".jpeg") || 
			endsWith($file, ".gif")  || 
			endsWith($file, ".png") )
		{
			if($only_one === true) {
				return $file;
			}
			array_push($res, $file);
		}
	
	}
	
	if( count($res) == 0 )
		return false;
	
	return $res;
}

// Devuelve un mapa[path]imagen
// Para poder generar la lista de imagenes de nuestras galerias.

function GetImageForDir($path) {
	$dirs = GetDirs($path);
	if(false === $dirs) return false;
	
	$images = array();
	// For each directory
	foreach( $dirs as $d ) {
		$p = $path . $d;
		$image = GetImages($p, true);
		if( $image === false ) continue;
		
		$images[$d] = $d . "/" . $image;
	
	}
	
	return $images;
}


// Comprueba si una carpeta "proyecto" contiene un archivo de data, 
// que haya que adjuntar al proyecto...

function HasData($dir) {

	// normalize path
	if( !startsWith($dir, "/") ) {
		$currentPath = dirname(__FILE__);
		$dir = $currentPath . DIRECTORY_SEPARATOR . $dir;
	}
	
	if( file_exists( $dir . "/data.php" ) ) 
		return true;
	
	return false;

}



function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || 
    	(($temp = strlen($haystack) - strlen($needle)) >= 0 && 
    		strpos($haystack, $needle, $temp) !== FALSE);
}

function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}



/*
echo "Dirname: " . dirname(__FILE__);

echo "dirs: " . join(", ", GetDirs('/home/jordi/')) . "\n";

$imatges = GetImages( '/home/jordi/Escriptori/liatimbalet/' );

echo join("\n", $imatges);
echo "\n";

$desktop = GetImageForDir( '/home/jordi/Escriptori/' );

var_dump( $desktop );

echo "\n";

var_dump( HasData( 'test' ) );

*/