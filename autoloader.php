<?php
function cargador($clases){

	$dir = ["clases","contracts"];
	$fileexists = false;
	foreach ($dir as $directorio){
		$fichero = "$directorio/{$clase}.php";
		if(file_exists($fichero)){
			requiere_once $fichero;
			$fileexists = true;
		}
	}
	if(!$fileexists){
		die("el fichero de clase {$clase}.php no encontrado");
	}
}
spl_autoload_register("cargador");
?>