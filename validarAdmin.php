<?php
//validacion del usuario administrador.
    $conexion=@mysqli_connect("localhost","root","","calidadpaz") or die ("No se pudo extablecer conexión");
    
	$USER=$_POST['usuario'];
	$PASS=$_POST['passwords'];



	$consulta="SELECT * FROM admin WHERE usuario='$USER' and password='$PASS'";
	$resultado=$conexion->query($consulta);

	$fila=mysqli_num_rows($resultado);

	if($fila>0)
	{
		session_start();
		$_SESSION["activo"] = true;
		header("location:create_usuario.php");
	}

	else
	{ 
		header("location:logUsuario.html");
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>