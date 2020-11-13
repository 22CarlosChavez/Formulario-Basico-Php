<?php
if(!isset($_GET["Id"])) exit();
$id = $_GET["Id"];
include_once "bdd/Conexion_BDD.php";
$sentencia = $BDD->prepare("DELETE FROM usuarios_solicitudes WHERE id = ?;");
$sentencia->execute([$id]);
if ($sentencia == TRUE) {
	header("Refresh:0; url=mi_solicitud.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar ?</title>
</head>
<body>
	<form action="mi_solicitud.php">
		
	</form>
</body>
</html>