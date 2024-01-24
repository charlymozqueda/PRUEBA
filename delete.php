<?php 
//Codigo para eliminar el registro seleccionado.
if (isset($_GET['id'])){
	include('base_datos.php');
	$registro = new Database();
	$id=intval($_GET['id']);
	$res = $registro->delete($id);
	if($res){
		header('location: tabladeDatos.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>