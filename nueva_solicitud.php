<?php
session_start();
$varsesion = $_SESSION['username'];
if ($varsesion == null || $varsesion = '') {
	header('Location:index.php');
	die();
}?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/body-index.css">
	<title>Solicitud</title>
</head>
<body>
	<?php
		include_once('menu.php');
	?>
		<form action="enviar_datos_n_solicitud.php" method="post" class="form-nueva-solicitud">
	<fieldset class="fieldset-nueva-solicitud">
		<legend class="legend-nueva-solicitud">Nueva Solicitud</legend>
		<label class="label-nueva-solicitud">Solicitante:</label>
			<input class="input-nueva-solicitud" value="<?php echo $_SESSION['username']?>" name="Usuario" readonly>
		<br><br>
		<label class="label-nueva-solicitud">Carrera:</label>
			<select class="select-nueva-solicitud" required name="Carrera">
				<option disabled selected class="option-value">Carrera</option>
				<option value="ISC">ISC</option>
				<option value="IGE">IGE</option>
				<option value="IAMB">IAMB</option>
				<option value="IIA">IIA</option>
				<option value="II">II</option>
			</select>
		<br><br>
		<label class="label-nueva-solicitud">Semestre:</label>
			<select class="select-nueva-solicitud" required name="Semestre">
				<option disabled selected>Semestre</option>
				<option value="Primero">Primero</option>
          		<option value="Segundo">Segundo</option>
          		<option value="Tercero">Tercero</option>
          		<option value="Cuarto">Cuarto</option>
          		<option value="Quinto">Quinto</option>
          		<option value="Sexto">Sexto</option>
          		<option value="Septimo">Septimo</option>
          		<option value="Octavo">Octavo</option>
          		<option value="Noveno">Noveno</option>
			</select>
		<br><br>
		<label class="label-nueva-solicitud">Grupo:</label>
			<select class="select-nueva-solicitud" required name="Grupo">
          		<option disabled selected>Grupo</option>
          		<option value="A">A</option>
          		<option value="B">B</option>
          		<option value="C">C</option>          
        	</select>
	</fieldset>
	<br>
	<fieldset class="fieldset-nueva-solicitud">
		<label class="label-nueva-solicitud">Telefono:</label>
			<input type="text" name="Telefono" required placeholder="Example: 123-456-78-90" class="input-nueva-solicitud">
		<br><br>
		<label class="label-nueva-solicitud">Fecha:</label>
			<input type="date" name="Fecha_solicitud" class="input-nueva-solicitud">
		<br><br>
		<label class="label-nueva-solicitud">Descripción del servicio solicitado:</label>
			<textarea name="Descripcion" rows="10" cols="30" placeholder="Especifique su problema en max: 100 caracteres" class="textarea-nueva-solicitud" required></textarea>
		<br><br>
			<input type="submit" name="Enviar" value="Enviar Solicitud" style="width: 200px; height: 30px; font-size: 15px; font-family: Arial; border-radius: 4px;" onMouseover="this.style.backgroundColor='#0a8a39'" onMouseout="this.style.backgroundColor='#fff'">
	</fieldset>	
</form>
</body>
</html>