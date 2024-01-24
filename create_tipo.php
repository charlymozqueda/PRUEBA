<?php
//Crear un nuevo tipo y eliminar alguno.
session_start();
if($_SESSION["activo"]){
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/botones.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
		<link rel="icon" href="image/LogoPazstor.ico">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<title>Agregar y eliminar tipo.</title>
	</head>
	<body>
		<div class="container">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-8"><h2><b>Agregar nuevo tipo.</b></h2></div>
						<div class="col-sm-4">
							<script type="text/javascript">
								function Confirmacionsalir(){
									if (confirm('¿Desea salir?')==true) {
										//alert('Se cerro la sesion correctamente!!!');
										return true;
									}else{
										//alert('Cancelo el cerrar sesion');
										return false;
									}
								}
							</script>
							<a href="index.php" onclick="Confirmacionsalir()" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
						</div>
					</div>
				</div>
				<?php
					include ("base_datos.php");
					$tipos= new Database();
					if(isset($_POST) && !empty($_POST)){
						$tipo = $tipos->sanitize($_POST['tipo']);
						$res = $tipos->create_tipo($tipo);
						if($res){
							$message= "Datos insertados con éxito";
							$class="alert alert-success";
						}else{
							$message="No se pudieron insertar los datos";
							$class="alert alert-danger";
						}
						
						?>
					<div class="<?php echo $class?>">
					<?php echo $message;?>
					</div>	
						<?php
					}
		
				?>
				<div class="row">
					<form method="post" id="frtipo">
						<div class="col-md-6">
							<label>Tipo</label>
							<input type="text" name="tipo" id="tipo" class='form-control' autocomplete="off" maxlength="20" placeholder="Ingresa el tipo." required>
						</div>
						<div class="col-md-12 pull-right">
							<br>
							<button type="submit" class="btn btn-success">Guardar tipo</button>
						</div>
					</form>
					<script type="text/javascript">
						(function() {
							var form = document.getElementById('frtipo');
							form.addEventListener('submit', function(event) {
							// si es false entonces que no haga el submit
							if (!confirm('¿Realmente desea guardar el tipo?')) {
								event.preventDefault();
							}
							}, false);
						})();
					</script>
				</div>
				<br>
				<table  class ="pure-table pure-table-bordered" width = "100%" id="creaco">
					<thead>
						<tr>
							<th>Tipo</th>
							<th>Borrar</th>
						</tr>
					</thead>
					<?php 
						$listado=$tipos->read_tipo();
					?>
					<tbody>
						<?php 
							while ($row=mysqli_fetch_object($listado)){
							$id = $row->id;
							$tipo = $row->tipo;
						?>
						<tr>
							<td><?php echo $tipo; ?></td>
							<script type="text/javascript">
									function Confirmacion(){
										if (confirm('¿Esta seguro de eliminar el tipo?')==true) {
											alert('El tipo ha sido eliminado correctamente!!!');
											return true;
										}else{
											//alert('Cancelo la eliminacion');
											return false;
										}
									}
							</script>
							<td>
							<a href="delete_tipo.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip" onclick="return Confirmacion()"><i class="material-icons" >&#xE872;</i></a>
							</td>
						</tr>	
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
			<script>
				$(document).ready(function(){
				$('#creaco').DataTable( {
					"columnDefs": [
					{
						"visible": false,
						"searchable": true
					}
					],
					"language": {
					"sProcessing":     "Procesando...",
					"sLengthMenu":     "Mostrar _MENU_ registros",
					"sZeroRecords":    "No se encontraron resultados",
					"sEmptyTable":     "Ningún dato disponible en esta tabla",
					"sInfo":           "Mostrando registros del _START_ al _END_ de _TOTAL_ registros en total",
					"sInfoEmpty":      "Mostrando registros del 0 al 0 de 0 registros en total",
					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					"sInfoPostFix":    "",
					"sSearch":         "Buscar:",
					"sUrl":            "",
					"sInfoThousands":  ",",
					"sLoadingRecords": "Cargando...",
					"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
					},
					"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
					}
					}
				});
				});
			</script>
		</div>     
	</body>
</html>
<?php
}
else{
    header("location:login.php");
}
?>