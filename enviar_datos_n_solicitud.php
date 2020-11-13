<?php
	echo "<body style='background-color:#000'>";
	if(!isset($_POST["Usuario"]) 	||	!isset($_POST["Carrera"])
	|| !isset($_POST["Semestre"])	|| !isset($_POST["Grupo"])
	|| !isset($_POST["Telefono"])	|| !isset($_POST["Fecha_solicitud"])
	|| !isset($_POST["Descripcion"]))exit();
	
	include_once "bdd/Conexion_BDD.php";
	
	$user = $_POST["Usuario"];
	$carrer = $_POST["Carrera"];
	$semester = $_POST["Semestre"];
	$group = $_POST["Grupo"];
	$phone = $_POST["Telefono"];
	$date = $_POST["Fecha_solicitud"];
	$description = $_POST["Descripcion"];

	$Send_Table_BDD = $BDD->prepare("INSERT INTO usuarios_solicitudes (Usuario, Carrera, Semestre, Grupo, Telefono, Fecha_solicitud, Descripcion) VALUES (?,?,?,?,?,?,?);");
	$final = $Send_Table_BDD->execute([$user, $carrer, $semester, $group, $phone, $date, $description]);
	if ($final === TRUE) {
			echo "<script language = 'javascript' src = 'js/alert_great_solicitud.js'></script>";
	 		header("Refresh:0; url=nueva_solicitud.php");
	}else{
			echo "<script language = 'javascript' src = 'js/alert_denied_solicitud.js'></script>";
			header("Refresh:0; url=nueva_solicitud.php");
	}
?>