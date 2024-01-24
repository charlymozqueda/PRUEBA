<?php 
$conexion=mysqli_connect('localhost','root','','calidadpaz');
$departamento=$_POST['departamento'];

	$sql="SELECT id,departamento,banda from bandas where departamento='{$departamento}' ORDER BY `banda` ASC";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Banda/Linea</label>
			<select class='form-control' id='banda' name='banda' placeholder='Ingresa la banda.'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option  value='.$ver[2].' option:selectd.$ver[2].>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
?>