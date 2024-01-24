<?php 
//Codigo para eliminar el codigo seleccionado.
if (isset($_GET['id'])){
	include('base_datos.php');
	$codigo = new Database();
	$id=intval($_GET['id']);
	$res = $codigo->delete_codigo($id);
	if($res){
		header('location: create_codigo.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>