<?php 
//codigo para eliminar el defecto seleccionado.
if (isset($_GET['id'])){
	include('base_datos.php');
	$defecto = new Database();
	$id=intval($_GET['id']);
	$res = $defecto->delete_defecto($id);
	if($res){
		header('location: create_defecto.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>