<?php
session_start();
require('../conex.php');
$miDB = conexion();
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <script src="https://kit.fontawesome.com/6f7d291e0c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="../../assets/css/main.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
  <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
<style>

</style>
<body class="is-preload">
<header id="header">
				<a class="logo" href="index.html">GRANADA C.F</a>
				<!-- <nav>
					<a href="#menu">Menu</a>
				</nav> -->
			</header>

		

		<!-- Heading -->
			<div id="heading" >
				<h1>GRÁFICAS DE INTERES PARA EL ABONADO</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12" ><h1 style="text-align:center;">Gráficos</h1></div>
                </div>
                <div class="row">
                    <div class="col-md-6" >
                    <canvas id="myChart" width="500px" height="500px"></canvas>
        <?php
        //Aqui voy a calcular el numero de personas qeu tienen un carnet de cada categoría

        //CATEGORIA SOCIAL:
        $sql = "SELECT COUNT('id') as 'social' FROM abonados WHERE categoria='Social'";
            foreach ($miDB->query($sql) as $fila) {
                  $social= $fila['social']; 
                }

        //CATEGORIA ADULTO
        $sql = "SELECT COUNT('id') as 'adulto' FROM abonados WHERE categoria='Adulto'";
            foreach ($miDB->query($sql) as $fila) {
                  $adulto= $fila['adulto']; 
                }

        //CATEGORIA JOVEN
        $sql = "SELECT COUNT('id') as 'joven' FROM abonados WHERE categoria='Joven'";
        foreach ($miDB->query($sql) as $fila) {
          $joven= $fila['joven']; 
        }    

        //CATEGORIA ANIMACIÓN
        $sql = "SELECT COUNT('id') as 'animacion' FROM abonados WHERE categoria='Animación'";
        foreach ($miDB->query($sql) as $fila) {
          $animacion= $fila['animacion']; 
        }   

        //CATEGORIA MAS65
        $sql = "SELECT COUNT('id') as 'mas65' FROM abonados WHERE categoria='Mas65'";
        foreach ($miDB->query($sql) as $fila) {
              $mas65= $fila['mas65']; 
        }   

        
        //CATEGORIA INFANTIL
        $sql = "SELECT COUNT('id') as 'infantil' FROM abonados WHERE categoria='Infantil'";
        foreach ($miDB->query($sql) as $fila) {
              $infantil= $fila['infantil']; 
        }  

       
            
        ?>
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        ctx.canvas.width = 400;
        ctx.canvas.height = 400;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Social', 'Adulto', 'Joven', 'Animación', 'Mas65', 'Infantil'],
                datasets: [{
                    label: 'Numero de abonados por categoria',
                    data:[<?php echo $social; ?>, <?php echo $adulto; ?>, <?php echo $joven; ?>, <?php echo $animacion; ?>, <?php echo $mas65; ?>, <?php echo $infantil; ?>],
                    backgroundColor: [
                        'red',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                legend: {display: false },
                title:{
                    display:true,
                    text:'Numero de abonados por categoria'
                },
                responsive:false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
                    </div>
                    <div class="col-md-6" >
                 <!-- Aqui voy a calcular el numero de abonados separados por edades -->
                 <?php
            //Rango de 0-20 años
            $sql="SELECT COUNT('id')  AS 'menoresde20' FROM abonados WHERE fecha_nacimiento > '2000-00-00 00:00:00'";
            foreach ($miDB->query($sql) as $fila) {
                  $menoresde20= $fila['menoresde20']; 
            }   
            //Rango de 20-30 años
            $sql="SELECT COUNT('id') AS 'entre20y30' FROM abonados WHERE fecha_nacimiento > '1990-00-00 00:00:00' AND fecha_nacimiento < '2000-00-00 00:00:00'  ";
            foreach ($miDB->query($sql) as $fila) {
                  $entre20y30= $fila['entre20y30']; 
            }   

             //Rango de 30-40 años
             $sql="SELECT COUNT('id') AS 'entre30y40' FROM abonados WHERE fecha_nacimiento > '1980-00-00 00:00:00' AND fecha_nacimiento < '1990-00-00 00:00:00'  ";
             foreach ($miDB->query($sql) as $fila) {
                   $entre30y40= $fila['entre30y40']; 
             }   

              //Rango de 40-50 años
              $sql="SELECT COUNT('id') AS 'entre40y50' FROM abonados WHERE fecha_nacimiento > '1970-00-00 00:00:00' AND fecha_nacimiento < '1980-00-00 00:00:00'  ";
              foreach ($miDB->query($sql) as $fila) {
                    $entre40y50= $fila['entre40y50']; 
              }   

               //Rango de 50-60 años
               $sql="SELECT COUNT('id') AS 'entre50y60' FROM abonados WHERE fecha_nacimiento > '1960-00-00 00:00:00' AND fecha_nacimiento < '1970-00-00 00:00:00'  ";
               foreach ($miDB->query($sql) as $fila) {
                     $entre50y60= $fila['entre50y60']; 
               }   
                //Mas de 60 años
                $sql="SELECT COUNT('id') AS 'masde60' FROM abonados WHERE fecha_nacimiento < '1960-00-00 00:00:00'";
                foreach ($miDB->query($sql) as $fila) {
                    $masde60= $fila['masde60']; 
                }   
            
            ?>
                    <canvas id="myChart1" width="500px" height="500px"></canvas>
                            <script>
                            var ctx1 = document.getElementById('myChart1').getContext('2d');
                            ctx1.canvas.width = 400;
                            ctx1.canvas.height = 400;
                            var myChart = new Chart(ctx1, {
                                type: 'bar',
                                data: {
                                    labels: ['Menores de 20', 'Entre 20-30 años', 'Entre 30-40', 'Entre 40-50', 'Entre 50-60', 'Mas de 60'],
                                    datasets: [{
                                        label: 'Edad media de nuestros abonados',
                                        data:[<?php echo $menoresde20; ?>, <?php echo $entre20y30; ?>, <?php echo $entre30y40; ?>, <?php echo $entre40y50; ?>, <?php echo $entre50y60; ?>, <?php echo $masde60; ?>],
                                        backgroundColor: [
                                            'yellow',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 2
                                    }]
                                },
                                options: {
                                    legend: {display: false },
                                    title:{
                                        display:true,
                                        text:'Edad media de nuestros abonados'
                                    },
                                    responsive:false,
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                        
                    </div>
                    <div class="col-md-6" ></div>
                    <div class="col-md-6" ></div>
                </div>
            </div>
            </section>