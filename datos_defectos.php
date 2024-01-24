<?php 
$conexion=mysqli_connect('localhost','root','','calidadpaz');
$codigo=$_POST['codigo'];

	$sql="SELECT id,codigo,defecto from defectos where codigo='{$codigo}'ORDER BY `codigo` ASC";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Defecto</label> 
			<select class='form-control' id='defecto' name='defecto' placeholder='Ingresa el defecto.'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option option:selectd.$ver[2].>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
?>