<?php
//validacion del usuario no administrador
    $conexion=@mysqli_connect("localhost","root","","calidadpaz") or die ("No se pudo extablecer conexión");
    
	$USER=$_POST['usuario'];
	$PASS=$_POST['passwords'];
	//$ROL=$_POST['rol'];



	$consulta="SELECT usuario,passwords,rol FROM login WHERE usuario='$USER' AND passwords='$PASS'";
	$resultado=mysqli_query($conexion,$consulta);
	$ver=mysqli_fetch_row($resultado);
	

	

	if($ver[2]=="TecnicoAnalista")
	{
		session_start();
		$_SESSION["activo"] = true;
		header("location:index.php");
	}
	elseif($ver[2]=="Administrador")
	{
		session_start();
		$_SESSION["activo"] = true;
		header("location:index.php");
	}
	elseif($ver[2]=="Auditor")
	{
		session_start();
		$_SESSION["activo"] = true;
		header("location:tabladeDatosVisor.php");
	}
	elseif($ver[2]=="Admin.Usuarios")
	{
		session_start();
		$_SESSION["activo"] = true;
		header("location:create_usuario.php");
		
	}
	else
	{ 
		//header("location:login.php");
		echo'<script type="text/javascript">
    	alert("Usuario o Contraseña incorrectos, intenta nuevamente.");
    	window.location.href="login.php";
    	</script>';
	}
	mysqli_free_result($resultado);
	//mysqli_free_result($resulta2);
	mysqli_close($conexion);
	?>