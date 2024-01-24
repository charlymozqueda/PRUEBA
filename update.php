<?php
//Editar un registro. 
session_start();
if($_SESSION["activo"]){
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
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
	<link rel="icon" href="image/LogoPazstor.ico">
	<title>Editar registro.</title>
</head>
<body style="background-color:#f7efed">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Editar Registro</b></h2></div>
                    <div class="col-sm-4">
                        <a href="menuinspeccion.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				
				include ("base_datos.php");
				$registros= new Database();
				
				if(isset($_POST) && !empty($_POST)){
                    $codigo = $registros->sanitize($_POST['codigo']);
                    $tipo = $registros->sanitize($_POST['tipo']);
                    $departamento = $registros->sanitize($_POST['departamento']);
                    $defecto = $registros->sanitize($_POST['defecto']);
                    $estilo = $registros->sanitize($_POST['estilo']);
                    $color = $registros->sanitize($_POST['color']);
                    $piel = $registros->sanitize($_POST['piel']);
                    $talla = $registros->sanitize($_POST['talla']);
                    $linea = $registros->sanitize($_POST['linea']);
                    $banda = $registros->sanitize($_POST['banda']);
                    $cantidad = $registros->sanitize($_POST['cantidad']);
                    $fecha = $registros->sanitize($_POST['fecha']);
					$id_registro=intval($_POST['id_registro']);
					$res = $registros->update($codigo, $tipo, $departamento, $defecto, $estilo, $color, $piel, $talla, $linea, $banda, $cantidad, $fecha, $id_registro);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_registro=$registros->single_record($id);
			?>
			<div class="row">
				<form method="post" id="frupdate">
				<div class="col-md-6">
					<label>Codigo:</label>
					<br>
					<select name="codigo" id="codigo">
						<option value="<?php echo $datos_registro->codigo;?>"><?php echo $datos_registro->codigo;?></option>
						<?php
							$codigos = new Database();
							$lista=$codigos->read_codigo();
							while($valores = mysqli_fetch_array($lista)){
								echo '<option>'.$valores[codigo].'</option>';
							}
						?>
					</select>
					<input type="hidden" name="id_registro" id="id_registro" class='form-control' maxlength="100"   value="<?php echo $datos_registro->id;?>">
				</div>
				<div class="col-md-6">
					<label>Tipo:</label>
					<br>
					<select name="tipo" id="tipo">
						<option type="text" value="<?php echo $datos_registro->tipo;?>"><?php echo $datos_registro->tipo;?></option>
						<?php
							$tipos = new Database();
							$lista=$tipos->read_tipo();
							while($valores = mysqli_fetch_array($lista)){
								echo '<option >'.$valores[tipo].'</option>';
							}
						?>
					</select>
				</div>
				<div class="col-md-6">
					<label>Departamento:</label>
					<br>
					<select name="departamento" id="departamento">
						<option type="text" value="<?php echo $datos_registro->departamento;?>"><?php echo $datos_registro->departamento;?></option>
							<?php
								$departamentos = new Database();
								$lista=$departamentos->read_departamento();
								while($valores = mysqli_fetch_array($lista)){
									echo '<option >'.$valores[departamento].'</option>';
								}
							?>
					</select>
				</div>
				<div class="col-md-6">
					<label>Defecto:</label>
						<select name="defecto" id="defecto">
							<option value="<?php echo $datos_registro->defecto;?>"><?php echo $datos_registro->defecto;?></option>
							<?php
								$defectos = new Database();
								$lista=$defectos->read_defecto();
								while($valores = mysqli_fetch_array($lista)){
									echo '<option>'.$valores[defecto].'</option>';
								}
							?>
						</select>
				</div>
				<div class="col-md-6">
					<label>Modelo</label>
					<br>	
					<select name="estilo" id="estilo">
						<option value="<?php echo $datos_registro->estilo;?>"><?php echo $datos_registro->estilo;?></option>
						<?php
							$estilos = new Database();
							$lista=$estilos->read_estilo();
							while($valores = mysqli_fetch_array($lista)){
								echo '<option>'.$valores[estilo].'</option>';
							}
						?>
					</select>
				</div>
				<div class="col-md-6">
					<label>Color</label>
					<input type="text" name="color" id="color" class='form-control' autocomplete="off" maxlength="64" required value = "<?php echo $datos_registro->color;?>">
                </div>
                <div class="col-md-6">
					<label>Piel</label>
					<input type="text" name="piel" id="piel" class='form-control' autocomplete="off" maxlength="64" required value = "<?php echo $datos_registro->piel;?>">
                </div>
                <div class="col-md-6">
					<label>Talla</label>
					<input type="text" name="talla" id="talla" class='form-control' autocomplete="off" maxlength="64" required value = "<?php echo $datos_registro->talla;?>">
                </div>
                <div class="col-md-6">
					<label>Linea</label>
					<input type="text" name="linea" id="linea" class='form-control' autocomplete="off" maxlength="64" required value = "<?php echo $datos_registro->linea;?>"> 
                </div>
                <div class="col-md-6">
					<label>Banda</label>
					<input type="text" name="banda" id="banda" class='form-control' autocomplete="off" maxlength="64" required value = "<?php echo $datos_registro->banda;?>">
                </div>
                <div class="col-md-6">
					<label>Cantidad</label>
					<input type="text" name="cantidad" id="cantidad" class='form-control' autocomplete="off" maxlength="64" required value = "<?php echo $datos_registro->cantidad;?>">
                </div>
                <div class="col-md-6">
					<label>Fecha</label>
					<input type="date" name="fecha" id="fecha" class='form-control' autocomplete="off" maxlength="64" required value = "<?php echo $datos_registro->fecha;?>">
				</div>
				
				<div class="col-md-12 pull-right">
					<br>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
				<script type="text/javascript">
					(function() {
						var form = document.getElementById('forupdate');
						form.addEventListener('submit', function(event) {
						// si es false entonces que no haga el submit
						if (!confirm('¿Realmente desea guardar?')) {
							event.preventDefault();
						}
						}, false);
					})();
				</script>
			</div>
        </div>
    </div>     
</body>
</html>
<?php
}
else{
    header("location:login.php");
}
?>