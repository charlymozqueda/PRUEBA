<?php 
$conexion=mysqli_connect('localhost','root','','calidadpaz');
$departamento=$_POST['departamento'];

	$sql="SELECT id,departamento,codigo from codigos where departamento='{$departamento}' ORDER BY `codigo` ASC";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Codigo</label> 
			<select class='form-control' id='codigo' name='codigo' placeholder='Ingresa el codigo.'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option  value='.$ver[2].' option:selectd.$ver[2].>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
?>