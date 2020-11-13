<?php
session_start();
$varsesion = $_SESSION['username'];
if ($varsesion == null || $varsesion = '') {
	header('Location:index.php');
	die();
}	
?>
<?php
	include_once "bdd/Conexion_BDD.php";
	$sent = $BDD->query("SELECT Id, Usuario, Fecha_solicitud, Descripcion FROM usuarios_solicitudes ;");
	$solicitudes = $sent->fetchALL(PDO::FETCH_OBJ);
	if ($solicitudes == false) {
		echo "<script language = 'javascript' src = 'js/alert_notfound_solicitudes.js'></script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/body-mi-solicitud.css">
	<link rel="stylesheet" type="text/css" href="css/table_misolicitud.css">
	<title>Mi Solicitud</title>
</head>
<body>
	<?php include ('menu.php');?>
		<center>
			<br>
			<fieldset class="field">
					<center>
							<h3 style="color:#fff;font-family: Arial;">Tus solicitudes</h3>
							<hr>
							<table>
								<thead>
									<tr>
										<th>Numero de Control</th>
										<th>Fecha de la solicitud</th>
										<th>Problema a resolver</th>
										<th>Asignación</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($solicitudes as $user_solicitud){?>
									<tr>
										<td><?php echo $user_solicitud->Usuario ?></td>
										<td><?php echo $user_solicitud->Fecha_solicitud ?></td>
										<td><?php echo $user_solicitud->Descripcion ?></td>
										<td><!-- <?php echo $user_solicitud->Asignacion?> --></td>
										<td><a href="<?php echo "eliminar_solicitud.php?Id=" . $user_solicitud->Id?>"><div align="center"><img src="images/delete.jpg" height="30" width="30" class="delete"></div></a></td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
					</center>
			</fieldset>
		</center>
</body>
</html>