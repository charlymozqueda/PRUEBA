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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/men.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/botones.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    <link rel="icon" href="image/LogoPazstor.ico">
    <title>Registros del Area de Calidad.</title>
    <style>
        body{
        background: url(css/calidad.jpeg) no-repeat center center fixed;
        background-size: 60%;
        background-position-y: top;
        
        }
    </style>
</head>
<body >
    <header>
        <h2 class="header"><b>Capturar registro.</b></h2>
    </header>
    <br>
    <div class="centrar">   
        <a href='create.php' class="btnmen">Registro de inspeccion de producto en proceso</a>
        <a href='create_produccion.php' class="btnmen">Registro de produccion diaria por fabrica</a>
        <script type="text/javascript">
			function Confirmacion(){
				if (confirm('¿Desea salir?')==true) {
					//alert('Se cerro la sesion correctamente!!!');
					return true;
				}else{
			//alert('Cancelo el cerrar sesion');
			        return false;
			    }
			}
		</script>
        <a href="index.php" class="btncerr" onclick="return Confirmacion()">Regresar</a>
    </div>
    <div class = "footer" >
        <h5>MANUFACTURERA DE CALZADO MIPAZSTOR S.A. DE C.V.</h5>
    </div>     
</body>
</html>
<?php
}
else{
    header("location:login.php");
}
?>