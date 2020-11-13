<?php
session_start();
$varsesion = $_SESSION['username'];
if ($varsesion == null || $varsesion = '') {
	header('Location:index.php');
	die();
}?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/body-index.css">
	<title>Home</title>	
</head>
<body>
	<?php
		include_once('menu.php');
	?>	
</body>
</html>