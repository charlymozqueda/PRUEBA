<?php 
$conexion=mysqli_connect('localhost','root','','calidadpaz');
$codigo=$_POST['codigo'];

	$sql="SELECT id,departamento,codigo from codigos where codigo='{$codigo}' ORDER BY `codigo` ASC";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Departamento</label> 
			<select class='form-control' id='departamento' name='departamento' placeholder='Ingresa el departamento.'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option  value='.$ver[1].' option:selectd.$ver[1].>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";
?>