<meta name="viewport" content="width=device-width, initial-scale=1">

<?php 
session_start();
require_once('conex.php');
$con = conexion();
$hoy = date("20"."y-m-d"); 
// var_dump($_POST);
// var_dump($_SESSION);
if (!empty($_POST["idasiento"]) && !empty($_POST["numero_abonado"]) && !empty($_POST["categoria_abonoFINAL"]) &&  !empty($_POST["provinciaFINAL"]) && !empty($_POST["localidadFINAL"]) && !empty($_POST["codigo_postalFINAL"]) && !empty($_POST["pisoFINAL"]) && !empty($_POST["numeroFINAL"]) && !empty($_POST["calleFINAL"]) && !empty($_POST["asientoFINAL"]) && !empty($_POST["filaFINAL"])  && !empty($_POST["zona"]) && !empty($_POST["nombreFINAL"]) && !empty($_POST["dniFINAL"]) && !empty($_POST["contrasenaFINAL"]) && !empty($_POST["fechanacimientoFINAL"])
&& !empty($_POST["telefonoFINAL"])  && !empty($_POST["apellidosFINAL"]) ){
    $idasiento=$_POST["idasiento"] ;
    $nombre=$_POST["nombreFINAL"] ;
    $dni=$_POST["dniFINAL"];
    $contrasena = $_POST["contrasenaFINAL"];
    $fechanacimiento = $_POST["fechanacimientoFINAL"];
    $telefono =$_POST["telefonoFINAL"];
    $apellidos = $_POST["apellidosFINAL"];
    $sector_elegido = $_POST["zona"];
    $fila= $_POST["filaFINAL"];
    $asiento = $_POST["asientoFINAL"];
    $calle = $_POST["calleFINAL"];
    $numero= $_POST["numeroFINAL"];
    $piso= $_POST["pisoFINAL"];
    $codigo_postal = $_POST["codigo_postalFINAL"];
    $localidad= $_POST["localidadFINAL"];
    $provincia= $_POST["provinciaFINAL"];
    $categoria=$_POST["categoria_abonoFINAL"];
    $numero_abonado=$_POST["numero_abonado"];
      echo "<p style='color:green;'> Todos los datos son corrrectos!</p>";
    añadirAdonadoBD($nombre,$dni,$contrasena,$apellidos,
$fechanacimiento,$telefono,$numero_abonado,
$categoria,$sector_elegido,$hoy,$fila,$asiento,
$calle,$numero,$piso,$codigo_postal,$localidad,
$provincia,$con);
        //aqui voy a asignar en una session el id del asiento para luego poder marcarlo como ocupado.
        $_SESSION['IDAsientoElegido']=$idasiento;
       

}else{
    echo "<p style='color:red;> no sabemos el nombre</p>";
}


?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!-- Icons font CSS-->
 <link href="../formulario/colorlib-regform-2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../formulario/colorlib-regform-2/../formulario/colorlib-regform-2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Vendor CSS-->
    <link href="../formulario/colorlib-regform-2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../formulario/colorlib-regform-2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../formulario/colorlib-regform-2/css/main.css" rel="stylesheet" media="all">
<style>
body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('../images/gif.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
div{
  text-align:center;
}

div>h5{
  display:inline-block;
		vertical-align:middle;
		line-height:normal;
}

</style>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

   
</script>
<div class="loader"></div>
<body class="is-preload">

		<!-- Header -->
			<header id="header2">
            <a class="logo" >GRANADA CF

        </a><img src="../images/granada.png" width="50px" height="50px">
				<nav> 
					
				</nav>
            </header>
            <div id="heading2" >
                <h1 style="color:black;"> CAMPAÑA DE ABONOS 2019/2020</h1>
               
            </div>
</header>
<!-- <section class="wrapper"> -->
<!-- <div class="inner">
    <header class="special">
        <h2>Rellene el formulario</h2>
        <p>A continuacion se le mostrará una serie de requisitos que ha de rellenar para poder completar el proceso
            del abono.
    </p>
    </header> -->
    

    <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                <?php
// var_dump($_POST);
               ?>
                    <h1>PAGO DEL CARNET</h1>
                    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="input-group">
            <HR>
            <BR>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Rellene todos los datos
                    </h3>
                    <div class="checkbox pull-right">
                        
                    </div>
                </div>
                <div class="panel-body">
                
                    <div class="form-group">
                    
                        <label for="cardNumber">
                            Numero de tarjeta</label>
                            <label><img src="../images/visa.png" width="40px" height="30px"></label>
                            <label><img src="../images/mastercard.png" width="40px" height="30px"></label>
                        <div class="input-group">
                            <input type="text"  class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            
                                <label for="expityMonth">
                                    Fecha expiración</label>
                                <div class="col-6 ">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-6 ">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            
                        </div>
                        <div class="col-12 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                   Código CV </label>
                                <input type="password"  style="text-align:center !important;" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                            <div class="col-12 ">
                            <div class="form-group">
                            <form action="final.php" method="POST">
                            <label for="correo">
                                Correo Electronico:</label>
                                <p style="text-align:center !important;width:100%;"><i>Recibirá un correo electrónico con los datos de su abono.</i></p>
                                <input style="text-align:center !important;width:100%;"  type="text" class="form-control"  name="correo" placeholder="Introduzca su correo electronico" required>

                                <label for="precio">
                                   Precio abono: </label>
                                   <input style="text-align:center !important;width:100%;" readonly="readonly" type="text" class="form-control"  name="precio" value="<?php
                            if($sector_elegido == 'Preferencia Baja'){
                                $precio=435;
                            }
                            if($sector_elegido == 'Preferencia Media'){
                                $precio=450;
                            }
                            if($sector_elegido == 'Preferencia Alta'){
                                $precio=435;
                            }
                            //TRIBUNA
                            if($sector_elegido == 'Tribuna Baja'){
                                $precio=650;
                            }
                            if($sector_elegido == 'Tribuna Media'){
                                $precio=625;
                            }
                            if($sector_elegido == 'Tribuna Alta'){
                                $precio=900;
                            }
                            //FONDO SUR
                            if($sector_elegido == 'Fondo Sur Bajo'){
                                $precio=300;
                            }
                            if($sector_elegido == 'Fondo Sur Medio'){
                                $precio=350;
                            }
                            if($sector_elegido == 'Fondo Sur Alto'){
                                $precio=320;
                            }
                             //FONDO NORTE
                             if($sector_elegido == 'Fondo Norte Bajo'){
                                $precio=300;
                            }
                            if($sector_elegido == 'Fondo Norte Medio'){
                                $precio=350;
                            }
                            if($sector_elegido == 'Fondo Norte Alto'){
                                $precio=320;
                            }
                            //ESQUINA
                            if($sector_elegido == 'Esquina A'){
                                $precio=290;
                            }
                            if($sector_elegido == 'Esquina B'){
                                $precio=290;
                            }
                            if($sector_elegido == 'Esquina C'){
                                $precio=290;
                            }
                            //CATEGORIA
                            //Con estos if lo que estoy haciendo es aplicando un porcentaje de descuento dependiento de el tipo de persona que se saque el carnet.
                            
                                if($categoria == 'Animación'){
                                    $costototal=$precio*0.6;
                                    echo $costototal."€";
                                }
                                if($categoria == 'Social'){
                                    $costototal=$precio*0.55;
                                    echo $costototal."€";
                                }
                                if($categoria == 'Joven'){
                                    $costototal=$precio*0.55;
                                    echo $costototal."€";
                                }
                                if($categoria == 'Mas65'){
                                    $costototal=$precio*0.50;
                                    echo $costototal."€";
                                }
                                if($categoria == 'Infantil'){
                                    $costototal=$precio*0.40;
                                    echo $costototal."€";
                                }
                                if($categoria == 'Adulto'){
                                    $costototal=$precio;
                                    echo $costototal."€";
                                }
                                
                            ?>" name="precio" required>
                             <div class="form-group"><hr></div>
                            <?php
                            // $numero_abonado=$_SESSION['numero_abonado'];
                            $_SESSION['numero_abonado']=$numero_abonado;
                                 echo "<label>Este precio es debido a que elegiste <b>$sector_elegido</b> cuyo precio base era $precio.€ ,pero tras hacerle
                                el descuento de la categoria <b>$categoria</b> se queda en $costototal €</label>"; ?>
                            
                          
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            
            <br/>
           
            <input type="submit" class="btn" value="Pagar" > 
            </form>
            
        </div>
    </div>
</div>
</div>
                    
                </div>
            </div>
        </div>
        <footer id="footer">
				<div class="inner">
					<div class="content">
					<div class="imagenesfooter">
							<div><img src="../images/puleva.png" width="200px" height="200px"></div>
							<div><img src="../images/cajarural.png" width="200px" height="200px"></div>
							<div><img src="../images/winamax.png" width="200px" height="200px"></div>
							<div><img src="../images/alhambra.png" width="200px" height="200px"></div>
							<div><img src="../images/nike.png" width="200px" height="200px"></div>
							<div><img src="../images/cocacola.png" width="200px" height="100px"></div>
							<div><img src="../images/coviran.png" width="200px" height="200px"></div>
							<div><img src="../images/caixa.png" width="200px" height="200px"></div>
							<div><img src="../images/besoccer.png" width="200px" height="200px"></div>
							<div><img src="../images/podologo.png" width="200px" height="200px"></div>
					</div>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">GranadaCF</a>,2019-2020</a>.
					</div>
				</div>
			</footer>
			<footer id="footer" style="background-color:#a61b2b !important;height:100% !important">
			<div class="inner">
					<div class="content">
						<section>
						<h4><b>Noticias</b></h4>
							<ul style="list-style:none;color:white;">
								<li><a href="#">Club</a></li>
								<li><a href="#">Primer equipo</a></li>
								<li><a href="#">Recreativo Granada</a></li>
								<li><a href="#">Granada Femenino</a></li>
								<li><a href="#">Cantera Nazarí</a></li>
								<li><a href="#">Patrocinados</a></li>
							</ul>
						</section>
						<section>
						<h4><b>Club</b></h4>
							<ul style="list-style:none;color:white;">
								<li><a href="#">Datos del club</a></li>
								<li><a href="#">Organización</a></li>
								<li><a href="#">Noticias</a></li>
								<li><a href="#">Agenda General</a></li>
								<li><a href="#">Asociaciones y peñas</a></li>
								<li><a href="#">Revista Social</a></li>
								<li><a href="#">Ley de transparencia</a></li>
								<li><a href="#">Trabaja con nosotros</a></li>
							</ul>
						</section>
						<section>
						<h4><b>Primer Equipo</b></h4>
							<ul style="list-style:none;color:white;">
								<li><a href="#">Plantilla</a></li>
								<li><a href="#">Agenda</a></li>
								<li><a href="#">Resultado</a></li>
								<li><a href="#">Calendario</a></li>
								<li><a href="#">Clasificación</a></li>
								<li><a href="#">Noticias</a></li>
							</ul>
						</section>
						<section>
						<h4><b>Equipos</b></h4>
							<ul style="list-style:none;color:white;">
								<li><a href="#">Club Recreativo Granada</a></li>
								<li><a href="#">Granada Femenino</a></li>
								<li><a href="#">Cantera</a></li>
								<li><a href="#">Escuela GranadaCF</a></li>
								<li><a href="#">Academia</a></li>

								
							</ul>
						</section>

					</div>
					<div class="content">
						<section>
						<h4><b>Fotogaleria</b></h4>
						</section>
						<section>
						<h4><b>Tienda</b></h4>
						</section>
						<section>
						<h4><b>Entradas</b></h4>
						<ul style="list-style:none;color:white;">
								<li><a href="#">Entradas primer equipo</a></li>
								<li><a href="#">Alhambra Sport Bar</a></li>
								<li><a href="#">VIP</a></li>
								<li><a href="#">Entradas desplazamientos</a></li>
								<li><a href="#">Duplicado Abono</a></li>
								<li><a href="#">Normativa de uso y acceso</a></li>
								
							</ul>
						</section>
						<section>
						<h4><b>Acceso Abonado</b></h4>
						</section>
						<section>
						<img src="../images/escudo-granada.png" width="200px" height="200px">
						</section>
					</div>
			</div>
			</footer>
   
  <!-- Jquery JS-->
  <script src="../formulario/colorlib-regform-2/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../formulario/colorlib-regform-2/vendor/select2/select2.min.js"></script>
    <script src="../formulario/colorlib-regform-2/vendor/datepicker/moment.min.js"></script>
    <script src="../formulario/colorlib-regform-2/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../formulario/colorlib-regform-2/js/global.js"></script>

