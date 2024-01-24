<?php
  $conn=mysqli_connect("localhost", "root", "", "calidadpaz");

  if(!$conn){
    die("Error: Failed to connect to database!");
  }
//mandar los post con fechas y mediante query(consulta) especificar que informacion se buscara.
  if(ISSET($_POST['search'])){
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query=mysqli_query($conn, "SELECT defecto, cantidad FROM registro WHERE fecha BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){ 
?>
    <html>
      <head>
        <link rel="icon" href="image/LogoPazstor.ico">
        <!--Grafica-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawStuff);

          function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
              ['Defecto', 'Cantidad'],
              <?php
              //fetch_assoc() nos indica la asociasion filas con encontradas porparte del query.
              while($fila = $query->fetch_assoc()){
                  echo "['".$fila["defecto"]."', ".$fila["cantidad"]."],";
              }
              ?>
            ]);

            var options = {
              width: 800,
              legend: { position: 'none' },
              chart: {
                title: 'MANUFACTURERA DE CALZADO MIPAZSTOR S.A. DE C.V.',
                subtitle: 'Departamento de calidad.' },
              axes: {
                x: {
                  0: { side: 'top', label: 'Reporte de defectos.'} // Top x-axis.
                }
              },
              bar: { groupWidth: "90%" }
            };

            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            // Convert the Classic options to Material options.
            chart.draw(data, google.charts.Bar.convertOptions(options));
          };
        </script>
      </head>
      <body>
        <div id="top_x_div" style="width: 800px; height: 600px;"></div>
      </body>
    </html>
<?php
    }
    }else{
      echo'
      <tr>
        <td colspan = "4"><center>Selecciona las fechas para generar grafico..</center></td>
      </tr>';
    }
  
?>