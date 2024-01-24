<?php 
//codigo para eliminar el tipo seleccionado.
if (isset($_GET['id'])){
	include('base_datos.php');
	$tipo = new Database();
	$id=intval($_GET['id']);
	$res = $tipo->delete_tipo($id);
	if($res){
		header('location: create_tipo.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>