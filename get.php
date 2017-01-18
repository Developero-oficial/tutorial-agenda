<?php 

if ( (isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];

	$agenda = Agenda::soloId($id);

	$array = $agenda->selectId();

	$datos = $array->fetch_array();

	$accion = 'update';
	
}

if ((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'eliminar')) {

	
	
}




?>