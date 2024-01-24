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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <title>Registros del Area de Calidad.</title>
    <script>
        function descargarExcel(){
            //Creamos un Elemento Temporal en forma de enlace
            var tmpElemento = document.createElement('a');
            // obtenemos la información desde el div que lo contiene en el html
            // Obtenemos la información de la tabla
            var data_type = 'data:application/vnd.ms-excel';
            var tabla_div = document.getElementById('datos');
            var tabla_html = tabla_div.outerHTML.replace(/ /g, '%20');
            tmpElemento.href = data_type + ', ' + tabla_html;
            //Asignamos el nombre a nuestro EXCEL
            tmpElemento.download = 'Registros Exportados.xls';
            // Simulamos el click al elemento creado para descargarlo
            tmpElemento.click();
        }
        descargarExcel();
    </script>
    <style>
        table {
        border-collapse: collapse;
        border: 1px solid #ddd;
        width: 100%;
        }

        th, td {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd;

        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
        background-color: #384561;
        color: white;
        }
    </style>
</head>
<body style="background-color:#f7efed">
    <header>
        <h2 class="header"><b>Tabla de datos.</b></h2>
    </header>
    <!--<div id="menu">
        <ul >
            <li ><a href="create.php" >Agregar registro</a></li>
            <li ><a href="create_departamento.php">Agregar nuevo departameto</a></li>
            <li ><a href="create_codigo.php" >Agregar nuevo codigo</a></li>
            <li ><a href="create_defecto.php">Agregar nuevo defecto</a></li>
            <li ><a href="create_tipo.php" >Agregar nuevo tipo</a></li>
            <li ><a href="create_estilo.php">Agregar nuevo estilo</a></li>
            <li ><a href="index.php">Salir</a></li>
        </ul>
    </div>-->
    <div>
        <br>
        <script type="text/javascript">
			function Confirmacionsalir(){
				if (confirm('¿Quiere cerrar sesion?')==true) {
					//alert('Se cerro la sesion correctamente!!!');
					return true;
				}else{
			//alert('Cancelo el cerrar sesion');
			        return false;
			    }
			}
		</script>
        <a href="cerrar.php" class="btncerr" onclick="return Confirmacionsalir()">Cerrar sesion</a>
        <a href='javascript:;' onclick='descargarExcel()'; class="excel">Exportar a Excel</a>
        <a href="grafica.php" class="excel">Grafica</a>
        <br>
    </div>
    <div class="centrar">
        <table class="table" id="datos" >
            <thead>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Codigo</th>
                <th>Departamento</th>
                <th>Defecto</th>
                <th>Estilo</th>
                <th>Color</th>
                <th>Piel</th>
                <th>Talla</th>
                <!--<th>Linea</th>-->
                <th>Banda/Linea</th>
                <th>Cantidad</th>
            </thead>
            <?php 
                include ('base_datos.php');
                $registros = new Database();
                $listado=$registros->read();
            ?>
            <tbody>
                <?php 
                    while ($row=mysqli_fetch_object($listado)){
                        $id = $row->id;
                        $codigo = $row->codigo;
                        $tipo = $row->tipo;
                        $departamento = $row->departamento;
                        $defecto = $row->defecto;
                        $estilo = $row->estilo;
                        $color = $row->color;
                        $piel = $row->piel;
                        $talla = $row->talla;
                        //$linea = $row->linea;
                        $banda = $row->banda;
                        $cantidad = $row->cantidad;
                        $fecha = $row->fecha;
                ?>
                <tr>
                    <td><?php echo $fecha; ?></td>
                    <td><?php echo $tipo; ?></td>
                    <td><?php echo $codigo; ?></td>
                    <td><?php echo $departamento; ?></td>
                    <td><?php echo $defecto; ?></td>
                    <td><?php echo $estilo; ?></td>
                    <td><?php echo $color; ?></td>
                    <td><?php echo $piel; ?></td>
                    <td><?php echo $talla; ?></td>
                    <td><?php echo $banda; ?></td>
                    <td><?php echo $cantidad; ?></td>
                    <script type="text/javascript">
                        function Confirmacion(){
                            if (confirm('¿Esta seguro de eliminar el registro?')==true) {
                                alert('El registro ha sido eliminado correctamente!!!');
                                    return true;
                                }else{
                                    //alert('Cancelo la eliminacion');
                                    return false;
                                }
                            }
                    </script>
                </tr>
                <?php
                    }
                ?>	
            </tbody>
        </table>
        <script>
			$(document).ready(function(){
			$('#datos').DataTable( {
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
    <br>
    <br>
    <br>
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