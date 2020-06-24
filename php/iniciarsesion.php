<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html>
	<head>
	
		<title>GRANADA C.F</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link  rel="icon"   href="../images/granada.png" type="image/png" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script>
	  function myFunction() {
  var x = document.getElementById("contraseña");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
	<style>
	body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
.imagenesfooter{
	margin:10px;
	display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(2, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}
	</style>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">GRANADA C.F</a>
				<!-- <nav>
					<a href="#menu">Menu</a>
				</nav> -->
			</header>

		<!-- Nav -->
			<!-- <nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav> -->

		<!-- Heading -->
			<div id="heading" >
				<h1>GRANADA C.F</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						
						<div class="login-page">
			<div class="form">
				<h2 align="center">INICIO DE SESIÓN</h2>
				<form class="login-form" action="iniciarsesion.php" method="post">
				<label>DNI:</label>
				<input type="text" name="dni" id="numeroabonado" placeholder="DNI ..."/>
				<label>Contraseña:</label>
				<input type="password" name="pw" id="contraseña" placeholder="Su contraseña ..."/><br>
				<label><input type="checkbox" style="margin-right:0px; !important" onclick="myFunction()">    Mostrar contraseña</br></label>

				<input class="botonlogin" type="submit" value="Acceder"><br><br>
				<h4 style="color:red;">Aun no eres socio? <a href="registro.php">Hazte abonado</a></h4>
				</form>
					</div>
				</div>
			</section>
			
			

		<!-- Footer -->
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
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
			require_once('conex.php');
			$miDB = conexion();
			if (!empty($dni)){
				if(isset($_SESSION['sesion'])){
					unset($_SESSION['sesion']);
					echo "Sesion borrada";
				}
			}
				if( !empty($_POST["dni"]) && !empty($_POST["pw"]) ){
					$a = $_POST['dni'];
					$b = $_POST['pw'];

					$sql= "SELECT id,nombre,DNI,apellidos,fecha_nacimiento,pw,piso,zona,calle,telefono,numero,provincia,localidad,codigo_postal,numero_abonado,DNI,fila,asiento,categoria,fecha_alta FROM abonados WHERE DNI= :a";
					$consulta_prep = $miDB->prepare($sql);
					if($consulta_prep->execute(array(':a'=>$a))){
						$resultado=$consulta_prep->fetch();
						var_dump($resultado);
						$fecha_nacimiento=$resultado['fecha_nacimiento'];
						$codigo_postal=$resultado['codigo_postal'];
						$dni=$resultado['DNI'];
						$provincia=$resultado['provincia'];
						$nombreabonado=$resultado['nombre'];
						$categoria = $resultado['categoria'];
						$apellidosabonado=$resultado['apellidos'];
						$localidad=$resultado['localidad'];
						$id_abonado=$resultado['id'];
						$contrasena=$resultado['pw'];
						$numeroabonado=$resultado['numero_abonado'];
						$zona=$resultado['zona'];
						$numero=$resultado['numero'];
						$telefono=$resultado['telefono'];
						$fecha_alta=$resultado['fecha_alta'];
						$fila=$resultado['fila'];
						$calle=$resultado['calle'];
						$piso=$resultado['piso'];
						$asiento=$resultado['asiento'];
						if($resultado['DNI'] == $a  && $resultado['pw'] == $b ){
								// echo "Usuario correcto! Usted es el socio Nª".$numeroabonado;
								// var_dump($_SESSION['sesion']);
								if (!isset($_SESSION['sesion'])){
								
									$_SESSION['sesion'] = 0;
								}
								if(isset($_SESSION['sesion'])){
									$_SESSION['sesion']=array('nombre'=>$resultado['nombre'],'numeroabonado'=>$resultado['numero_abonado'],
									'id'=>$resultado['id'],'apellidos'=>$resultado['apellidos'],'dni'=>$resultado['DNI'],'categoria'=>$resultado['categoria'],
								'zona'=>$resultado['zona'],'fecha_alta'=>$resultado['fecha_alta'],'fila'=>$resultado['fila'],'asiento'=>$resultado['asiento'],
							'fecha_nacimiento'=>$resultado['fecha_nacimiento'],'telefono'=>$resultado['telefono'],'calle'=>$resultado['calle'],'numero'=>$resultado['numero'],
						'piso'=>$resultado['piso'],'codigo_postal'=>$resultado['codigo_postal'],'provincia'=>$resultado['provincia'],'localidad'=>$resultado['localidad'],
						'contrasena'=>$resultado['pw']);
									// echo "BIENVENIDO".$_SESSION['sesion']['nombre'].$_SESSION['sesion']['apellidos'];
									// header( "Location: panelabonado.php" );
									echo '<script type="text/javascript">window.location.href = "http://localhost/proyectofinal/php/panelabonado.php"</script>';
								}else{
									echo "No se ha iniciado sesion";
								}
						}
						else {
							// echo "Numero de abonado o contraseña incorrecta";
							// echo '<script type="text/javascript">alert("Numero de abonado o contraseña incorrecta")</script>';
							echo '<script type="text/javascript">
							
    Swal.fire({
        icon: "error",
        title: "Nº abonado o contraseña incorrecta...",
        text: "Intentalo de nuevo",
        footer: "<a href>Why do I have this issue?</a>"
      })
    //   window.location.href="cerrarsesion.php";
   </script>';
							
	
						} 
					}
						else {
							echo "Cagada";
						}

			}
			?>