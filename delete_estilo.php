<?php 
//Codigo para eliminar el modelo seleccionado.
if (isset($_GET['id'])){
	include('base_datos.php');
	$estilo = new Database();
	$id=intval($_GET['id']);
	$res = $estilo->delete_estilo($id);
	if($res){
		header('location: create_estilo.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>