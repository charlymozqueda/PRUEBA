<?php
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
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="icon" href="image/LogoPazstor.ico">
	<title> Agregar registro de inspeccion.</title>
	<script type="text/javascript">
            function habilitar(value)
            {
                if(value=="REPROCESO")
                {
                    // habilitamos
                    //document.getElementById("codigo").disabled=true;
					//document.getElementById("defecto").disabled=true;
					//document.getElementById("estilo").disabled=true;
					//document.getElementById("color").disabled=true;
					//document.getElementById("piel").disabled=true;
					document.getElementById("talla").disabled=true;
					//document.getElementById("linea").disabled=true;
					//document.getElementById("selectdepartamentos").disabled=true;
					//ocultar imput o select
					//$("#selectdepartamentos").hide();
					//$("#departamentos").show();

                }else if(value!="REPROCESO"){
                    // deshabilitamos
					document.getElementById("talla").disabled=false;
					/*document.getElementById("defecto").disabled=false;
					document.getElementById("estilo").disabled=false;
					document.getElementById("color").disabled=false;
					document.getElementById("piel").disabled=false;
					document.getElementById("talla").disabled=false;
					document.getElementById("linea").disabled=false;
					document.getElementById("departamentos").disabled=true;
					$("#selectdepartamentos").show();
					$("#departamentos").hide();*/
					
                }
            }
    </script>
	</head>
	<body>
		<div class="container">
			<div class="table-wrapper"id="box">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-8"><h2><b>Agregar registro de inspeccion de producto en proceso.</b></h2></div>
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
							<a href="index.php" onclick="return Confirmacionsalir()" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
							<!--<a href="create.php" type="button" class="btn btn-warning"><svg width="6em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      						<path fill-rule="evenodd" d="M12.83 6.706a5 5 0 0 0-7.103-3.16.5.5 0 1 1-.454-.892A6 6 0 1 1 2.545 5.5a.5.5 0 1 1 .91.417 5 5 0 1 0 9.375.789z"/>
      						<path fill-rule="evenodd" d="M7.854.146a.5.5 0 0 0-.708 0l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 1 0 .708-.708L5.707 3 7.854.854a.5.5 0 0 0 0-.708z"/>
      						</svg><span></a>-->
						</div>
						<div>

						</div>
					</div>
				</div>
				<?php
					error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
						//$linea = $registros->sanitize($_POST['linea']);
						$banda = $registros->sanitize($_POST['banda']);
						$cantidad = $registros->sanitize($_POST['cantidad']);
						$fecha = $registros->sanitize($_POST['fecha']);
						$res = $registros->create($codigo,$tipo,$departamento,$defecto,$estilo,$color,$piel,$talla,$banda,$cantidad,$fecha);
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
					<form method="post" id="form1" name="form1">
						<div class="col-md-6">
							<label>Tipo</label>
							<datalist id="listat">
								<?php
									$tipos = new Database();
									$lista=$tipos->read_tipo();
									while($valores = mysqli_fetch_array($lista)){
										echo '<option value='.$valores[tipo].'>'.$valores[tipo].'</option>';
									}
								?>
							</datalist>
							<input list="listat" type="text" class='form-control' name="tipo" id="tipo" onchange="habilitar(this.value);" autocomplete="off" maxlength="10" placeholder="Ingresa el tipo." required>
							
						</div>
						<div class="col-md-6">
							<label>Codigo</label>
								<datalist id="lista1">
									<?php
										$codigos = new Database();
										$lista=$codigos->read_codigo();
										while($valores = mysqli_fetch_array($lista)){
											echo '<option value='.$valores[codigo].'>'.$valores[codigo].'</option>';
										}
									?>
								</datalist>
								<input list="lista1" type="text" name="codigo" id="codigo" class='form-control' autocomplete="off" maxlength="10" placeholder="Ingresa el codigo."required>
							</select>					
						</div>
						<!--<div class="col-md-6" id="selectdepartamentos">
									
						</div>
						<script type="text/javascript"> $("#selectdepartamentos").hide(); </script>-->
						<div class="col-md-6" id="selectdepartamentos">
							<!--<label>Departamento</label>
							<select class='form-control' name="departamento" id="departamento">
								<option type="text" value="0">Selecciona el departamento.</option>
								<?php/*
									$departamentos = new Database();
									$lista=$departamentos->read_departamento();
									while($valores = mysqli_fetch_array($lista)){
										echo '<option value='.$valores[departamento].'>'.$valores[departamento].'</option>';
									}*/
								?>
							</select>-->
						</div>

						<div class="col-md-6" id="selectdefectos">
									
						</div>
						<div class="col-md-6">
							<label>Estilo</label>
							<datalist id="lista2">
								<!--<option type="text" value="0">Selecciona el departamento.</option>-->
								<?php
									$estilos = new Database();
									$lista=$estilos->read_estilo();
									while($valores = mysqli_fetch_array($lista)){
										echo '<option>'.$valores[linea]."->".$valores[estilo].'</option>';
									}
								?>
							</datalist>
							<input list="lista2" class='form-control' id="estilo" name="estilo" placeholder="Ingresa el estilo" autocomplete="off" required>
						</div>
						<!--<div class="col-md-6" id="selectlinea">
									
						</div>-->
						<div class="col-md-6">
							<label>Color</label>
							<input type="text" name="color" id="color" class='form-control' autocomplete="off" maxlength="50" placeholder="Ingresa el color." required>
						</div>
						<div class="col-md-6">
							<label>Piel</label>
							<input type="text" name="piel" id="piel" class='form-control' autocomplete="off" maxlength="50" placeholder="Ingresa la piel." required>
						</div>
						<div class="col-md-6">
							<label>Talla</label>
							<input type="text" name="talla" id="talla" class='form-control' autocomplete="off" maxlength="10" placeholder="Ingresa la talla." required>
						</div>
						<div class="col-md-6">
							<datalist id="lista3">
								<?php
									$bandas = new Database();
									$lista=$bandas->read_banda();
									while($valores = mysqli_fetch_array($lista)){
										echo '<option>'.$valores[banda].'</option>';
									}
								?>
							</datalist>
							<label>Banda/Linea</label>
							<input list="lista3" type="text" name="banda" id="banda" class='form-control' autocomplete="off" maxlength="50" placeholder="Ingresa la banda." required>
						</div>
						<div class="col-md-6">
							<label>Cantidad</label>
							<input type="text" name="cantidad" id="cantidad" class='form-control' autocomplete="off" maxlength="10" placeholder="Ingresa la cantidad." required>
						</div>
						<div class="col-md-6">
							<label>Fecha</label>
							<input type="date" name="fecha" id="fecha" class='form-control' maxlength="50" required>
						</div>
						<div class="col-md-12 pull-right">
							<br>
							<button type="submit" class="btn btn-success" onclick="submitForm()">Guardar datos</button>
						</div>
					</form>
					<script type="text/javascript">
						(function() {
							var form = document.getElementById('form1');
							form.addEventListener('submit', function(event) {
							// si es false entonces que no haga el submit
							if (!confirm('¿Realmente desea guardar el registro?')) {
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#codigo').val();
		recargarListacod();

		$('#codigo').change(function(){
			recargarListacod();
		});
	})

	function recargarListacod(){
		$.ajax({
			type:"POST",
			url:"datos_departamentos.php",
			data:"codigo=" + $('#codigo').val(),
			success:function(r){
				$('#selectdepartamentos').html(r);
			}
		});
	}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#codigo').val();
		recargarListade();

		$('#codigo').change(function(){
			recargarListade();
		});
	})

	function recargarListade(){
		$.ajax({
			type:"POST",
			url:"datos_defectos.php",
			data:"codigo=" + $('#codigo').val(),
			success:function(r){
				$('#selectdefectos').html(r);
			}
		});
	}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#departamento').val();
		recargarListabanda();

		$('#departamento').change(function(){
			recargarListabanda();
		});
	})

	function recargarListabanda(){
		$.ajax({
			type:"POST",
			url:"datos_bandas.php",
			data:"departamento=" + $('#departamento').val(),
			success:function(r){
				$('#selectbandas').html(r);
			}
		});
	}
</script>
<?php
}
else{
    header("location:login.php");
}
?>