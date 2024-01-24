<?php 
//codigo para eliminar el usuario seleccionado.
if (isset($_GET['id'])){
	include('base_datos.php');
	$usuario = new Database();
	$id=intval($_GET['id']);
	$res = $usuario->delete_usuario($id);
	if($res){
		header('location: create_usuario.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>