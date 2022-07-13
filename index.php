<?php
require_once 'autoload.php';

// Compruebo que me llegue el CONTROLADOR por la url
if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
}else{
	echo "La pagina que buscas no existe";
	exit();
}

// Compruebo que existe la CLASE de ese controlador. Creo el objeto
if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	// Comprobamos que existe la ACCION
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}else{
		echo "La pagina que buscas no existe";
	}
}else{
	echo "La pagina que buscas no existe";
}

