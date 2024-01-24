<?php 
//codigo para eliminar el departamento seleccionado.
if (isset($_GET['id'])){
	include('base_datos.php');
	$departamento = new Database();
	$id=intval($_GET['id']);
	$res = $departamento->delete_departamento($id);
	if($res){
		header('location: create_departamento.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>