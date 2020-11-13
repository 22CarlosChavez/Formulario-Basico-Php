<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="css/body-index.css">
	<meta vie="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,minimun-scale=1.0">
	<title>Bienvenido!</title>
</head>
<body>
<div class="contenedor">
	<h2 class="h2-index">Bienvenido...</h2>
	<hr>
	<br>
	<fieldset class="fieldset-index">
		<form action="login.php" method="POST" class="form-index">
			<label class="label-index-user-correo">Numero Control o Correo:</label>
			<hr class="hr-form">
			<input type="text" name="username" required maxlength="30" title="Ingresa tu usuario correctamente" placeholder="Numero Control o Correo" class="input-index">
			<br>
			<label class="label-index">Contraseña:</label>
			<br>
			<hr  class="hr-form">
			<input type="password"  name="password" required maxlength="20" title="Ingresa tu contraseña correctamente" placeholder="&#128272; Contraseña" class="input-index">
			<br>
			<br>
			<input type="submit" name="Enviar" value="Continuar" class="input-index-submit">
			<br>
			<!-- <a href="sign_up/sign_up.php" onMouseover="this.style.color='blue'" onMouseout="this.style.color='#fff'">¿Aún no tienes cuenta?</a> -->
		</form>
	</fieldset>
<!-- 	<a class="english" href="indexE.php" title="English">[EN]</a> -->
</div>
</body>
</html>