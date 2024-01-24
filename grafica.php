<?php
//Grafica.
session_start();
if($_SESSION["activo"]){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="image/LogoPazstor.ico">
    <title>Grafica.</title>
  </head>
<body>
  <div class="" align="center">
    <h3 style="backgroun-color:black">Generar grafica.</h3>
    <form class="" method="POST" action="">
      <label>Fecha inicial:</label>
      <input type="date" class="form-control" placeholder="Start" style="width : 500px; heigth : 30px" name="date1"/>
      <label>Hasta:</label>
      <br><input type="date" class="form-control" placeholder="End" style="width : 500px; heigth : 30px" name="date2"/>
      <br>
      <script type="text/javascript">
				function ConfirmacionBuscar(){
					if (confirm('¿Quiere buscar y generar grafica entre las fechas seleccionadas?')==true) {
						//alert('El registro ha sido eliminado correctamente!!!');
						return true;
					}else{
						//alert('Cancelo la eliminacion');
						return false;
					}
				}
			</script>
      <button class="btn btn-primary" name="search" onclick="return ConfirmacionBuscar()"><svg width="4em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
      </svg></button>
      <script type="text/javascript">
				function ConfirmacionRecargar(){
					if (confirm('¿Quiere recargar la pestaña?')==true) {
						//alert('El registro ha sido eliminado correctamente!!!');
						return true;
					}else{
						//alert('Cancelo la eliminacion');
						return false;
					}
				}
			</script>
      <a href="grafica.php" type="button" class="btn btn-success" onclick="return ConfirmacionRecargar()"><svg width="4em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 0 0-7.103-3.16.5.5 0 1 1-.454-.892A6 6 0 1 1 2.545 5.5a.5.5 0 1 1 .91.417 5 5 0 1 0 9.375.789z"/>
      <path fill-rule="evenodd" d="M7.854.146a.5.5 0 0 0-.708 0l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 1 0 .708-.708L5.707 3 7.854.854a.5.5 0 0 0 0-.708z"/>
      </svg><span></a>
      <script type="text/javascript">
				function ConfirmacionSalir(){
					if (confirm('¿Quiere regresar al menu?')==true) {
						//alert('El registro ha sido eliminado correctamente!!!');
						return true;
					}else{
						//alert('Cancelo la eliminacion');
						return false;
					}
				}
			</script>
      <a href="tabladedatos.php" type="button" class="btn btn-warning" onclick="return ConfirmacionSalir()"><svg width="4em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
      <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg><span></a>
    </form>
    <br /><br />
    <div>    
      <?php include'rangos.php'?> 
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