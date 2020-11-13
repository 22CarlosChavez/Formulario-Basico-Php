<?php
session_start();
?>
<?php
	$correo=$_POST['username'];
	$password=$_POST['password'];
	$conexion=mysqli_connect("localhost", "root", "", "proyecto_solicitudes");
	$consulta="SELECT * FROM login_usuarios WHERE Num_control = '$correo' or Correo = '$correo' and password='$password'";
	$resultado=mysqli_query($conexion, $consulta);
	$filas=mysqli_num_rows($resultado);
    	if($filas>0){
    		$_SESSION['loggedin'] = true;
    		$_SESSION['username'] = $correo;
    		$_SESSION['start'] = time();
    		$_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
    	if($correo==true){
    		header("location:home.php");
    	}
    }else{
   header("Refresh:0; url=index.php");
}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>
