<?php
session_start();
// if(empty($_SESSION['datos'])){
//   $_SESSION['datos'] = $_POST;
//   echo "La sesion de datos contiene:";
//   var_dump($_SESSION['datos']);
// }
require('conex.php');
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/> -->

    <meta name="viewport" content="width=device-width, initial-scale=0">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
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
.tittle{
  margin:5px;
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
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});

function comoseve(b){
  if(b.id =='Preferencia Baja'){
          Swal.fire({
      title: 'Preferencia Baja!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/preferencia_baja.jpg',
      width:'1100px',
      height:'450px',
      
    })
    
    }
    if(b.id =='Preferencia Media'){
      Swal.fire({
      title: 'Preferencia Media!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/preferencia_media.jpg',
      width:'750px',
      height:'500px',
      
    })
    
    }
    if(b.id =='Preferencia Alta'){
      Swal.fire({
      title: 'Preferencia Alta!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/preferencia_alta.jpg',
      width:'1100px',
      height:'450px',
    })
    
    }
    
    if(b.id =='Fondo Sur Bajo'){
      Swal.fire({
      title: 'Fondo Sur Bajo!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_sur_bajo.jpg',
      width:'1100px',
      height:'450px',
    })
 
    }
    if(b.id =='Fondo Sur Medio'){
      Swal.fire({
      title: 'Fondo Sur Medio!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_sur_medio.jpg',
      width:'1100px',
      height:'450px',
    })
    
    }
    if(b.id =='Fondo Sur Alto'){
      Swal.fire({
      title: 'Fondo Sur Alto!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_sur_alto.jpg',
      width:'1100px',
      height:'450px',
    })
    
    }
    if(b.id =='Fondo Norte Alto'){
      Swal.fire({
      title: 'Fondo Norte Alto!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_norte_alto.jpg',
      width:'1100px',
      height:'450px',
    })
    
    }
    if(b.id =='Fondo Norte Medio'){
      Swal.fire({
      title: 'Fondo Norte Medio!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_norte_medio.jpg',
      width:'1100px',
      height:'450px',
    })
    
    }
    if(b.id =='Fondo Norte Bajo'){
      Swal.fire({
      title: 'Fondo Norte Bajo!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_norte_bajo.jpg',
      width:'1100px',
      height:'450px',
    })
    
    }
}
function placeImage()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/fondo_sur_alto_marcado.png";

}
function placeImage1()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/fondo_sur_medio_marcado.png";

}
function placeImage2()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/fondo_sur_bajo_marcado.png";

}
function placeImage3()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/preferencia_baja_marcada.png";

}
function placeImage4()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/preferencia_media_marcada.png";

}
function placeImage5()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/preferencia_alta_marcada.png";

}
function placeImage6()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/fondo_norte_alto_marcado.png";

}
function placeImage7()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/fondo_norte_medio_marcado.png";

}
function placeImage8()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/fondo_norte_bajo_marcado.png";

}
function placeImage9()
{
  document.getElementById("myImg").src = "../images/LosCarmenes/tribuna.png";

}
function saleraton(){
  
  document.getElementById("myImg").src = "../images/LosCarmenes/principal.png";

}
</script>
<script>
    function myFunction(){
        var x = document.getElementById("contrasena");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
    }
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
    

    <div class="wrapper wrapper--w960"     style="margin-left: 14%; !important">
            <div class="card card-2" stye="margin-left: -6px;!important;">
                <div class="card-heading"></div>
                <div class="card-body" style="display:initial !important">
                    <h2 class="title" style="margin:15px; !important">Comprobar disponibilidad</h2>
                   
                    
            
                    <form method="POST" action="registro-3.php" enctype="multipart/form-data">
                  <!-- Image Map Generated by http://www.image-map.net/ -->
                  
                    <img id="myImg" src="../images/LosCarmenes/principal.png" usemap="#image-map" style="margin:5px;">

                    <map name="image-map">
                        <area target="" alt="Fondo_Norte_Bajo"  id="Fondo Norte Bajo" onMouseOver="placeImage8()" onmousedown="comoseve(this)" onmouseleave="saleraton()" title="Fondo_Norte_Bajo" href="Fondo_Norte_Bajo-DISPO.php" coords="738,224,783,192,789,203,794,213,798,224,799,234,789,237,794,247,796,261,796,274,796,289,799,303,799,315,801,361,801,386,801,421,798,455,796,490,791,518,789,542,799,549,791,563,785,573,775,566,765,560,754,553,738,541,743,531,748,486,752,428,752,363,748,311,739,252" shape="poly">
                        <area target="" alt="Fondo_Norte_Medio" id="Fondo Norte Medio" onMouseOver="placeImage7()" ondblclick="comoseve(this)" onmouseleave="saleraton()" title="Fondo_Norte_Medio" href="Fondo_Norte_Medio-DISPO.php" coords="793,239,836,232,841,281,844,311,844,340,848,368,846,394,844,418,844,439,844,465,844,481,841,502,838,524,836,553,793,544,798,499,801,436,802,368,799,302" shape="poly">
                        <area target="" alt="Fondo_Norte_Alto" id="Fondo Norte Alto" onMouseOver="placeImage6()" ondblclick="comoseve(this)" onmouseleave="saleraton()" title="Fondo_Norte_Alto" href="Fondo_Norte_Alto.php" coords="841,229,882,224,888,273,891,303,891,369,893,400,890,442,886,484,883,536,878,561,836,555,844,515,848,484,848,415,849,381,848,315,848,286" shape="poly">
                        <area target="" alt="Preferencia_Baja" id="Preferencia Baja" onmouseleave="saleraton()" ondblclick="comoseve(this)" onMouseOver="placeImage3()" title="Preferencia_Baja" href="Preferencia_Baja-DISPO.php" coords="242,553,258,555,278,558,304,561,333,565,357,565,378,568,408,568,428,568,457,570,473,570,473,586,473,603,497,605,497,570,515,571,551,571,583,568,622,565,659,561,691,558,714,557,723,552,756,597,744,605,725,611,720,600,702,602,683,603,643,608,601,610,555,611,512,613,462,613,420,615,376,610,331,608,291,603,252,602,245,613,211,599" shape="poly">
                        <area target="" alt="Preferencia_Media" id="Preferencia Media" onmouseleave="saleraton()" ondblclick="comoseve(this)" onMouseOver="placeImage4()" title="Preferencia_Media" href="Preferencia_Media-DISPO.php" coords="730,644,693,647,639,649,596,655,549,655,502,657,455,658,410,657,363,652,316,652,274,649,242,647,252,603,283,607,326,610,371,613,415,616,459,616,507,615,552,616,594,615,641,613,685,608,718,605" shape="poly">
                        <area target="" alt="Preferencia_Alta" id="Preferencia Alta"  onmouseleave="saleraton()" ondblclick="comoseve(this)" onMouseOver="placeImage5()"  title="Preferencia_Alta" href="Preferencia_Alta-DISPO.php" coords="236,687,284,691,349,695,376,697,444,699,471,700,544,699,573,699,639,695,668,691,741,687,733,652,665,658,643,662,604,660,551,663,504,662,446,663,383,662,354,662,291,655,244,650" shape="poly">
                        <area target="" alt="Fondo_Sur_Alto" id="Fondo Sur Alto" onmouseleave="saleraton()" ondblclick="comoseve(this)" onMouseOver="placeImage()" title="Fondo_Sur_Alto" href="Fondo_Sur_Alto-DISPO.php" coords="95,537,134,532,129,476,124,408,126,340,129,274,139,215,98,207,95,227,92,248,89,276,86,349,86,379,87,455,89,486" shape="poly">
                        <area target="" alt="Fondo_Sur_Medio" id="Fondo Sur Medio" onmouseleave="saleraton()" ondblclick="comoseve(this)" onMouseOver="placeImage1()" title="Fondo_Sur_Medio" href="Fondo_Sur_Medio-DISPO.php" coords="139,531,178,526,173,466,168,403,170,337,173,276,181,226,144,216,139,258,137,274,134,324,131,392,131,411,134,458,134,474" shape="poly">
                        <area target="" alt="Fondo_Sur_Bajo" id="Fondo Sur Bajo" onmouseleave="saleraton()" ondblclick="comoseve(this)" onMouseOver="placeImage2()" title="Fondo_Sur_Bajo" href="Fondo_Sur_Bajo-DISPO.php" coords="181,202,231,227,226,255,221,284,220,316,216,353,216,392,218,423,218,461,220,492,224,524,229,541,211,553,186,570,171,531,181,524,174,478,171,431,171,379,171,329,174,276,181,227,171,224" shape="poly">
                        <area target="" alt="Tibuna" id="Tribuna" onmouseleave="saleraton()" ondblclick="comoseve(this)" onMouseOver="placeImage9()" title="Tibuna" href="Tribuna-DISPO.php" coords="205,171,239,213,258,208,299,203,344,200,376,198,399,198,428,198,473,198,473,158,499,158,497,195,546,197,599,198,638,200,681,205,710,208,725,213,756,165,743,158,728,160,697,157,647,155,602,153,555,152,512,148,457,148,413,150,368,150,325,153,283,157,242,163,236,153" shape="poly">
                    </map>

                        <!-- <div class="p-t-30">
                            <input class="btn btn--radius btn" type="submit" value="Elegir zona del estadio"></button>
                        </div> -->
                    </form>
                </div>
                <?php

                ?>
            </div>
        </div>
  
       <?php


if(isset($_FILES['image'])){
  
    //Declaro errores como array ya que voy a ir almacenando los errores que tenga la subida, ya sea de tipo de formato o de tamaño o de subida.

    $errores= array();
    $nombre_fichero = $_POST['nombre']."_".$_POST['dni'].".png";
    $tamaño_fichero =$_FILES['image']['size'];
    $nombretemporal_fichero =$_FILES['image']['tmp_name'];
    $extension_fichero=$_FILES['image']['type'];
    $tmp = explode('.',$_FILES['image']['name']);
    $file_ext=end($tmp);
    
    $extensions= array("jpeg","jpg","png","gif");
    
    if(in_array($file_ext,$extensions)=== false){
       $errores[]="Esta extension no esta permitida, solo admitimos JPG,JPEG,PNG Y GIF.";
    }
    
    if($tamaño_fichero > 500000000){
       $errores[]='Imagen demasiado pesada';
    }
    
    if(empty($errores)==true){
       move_uploaded_file($nombretemporal_fichero,"../images/ImagenesAbonados/".$nombre_fichero);
   

    }else{
       var_dump($errores);
    }
 }


// echo "Nombre:".$_POST['nombre'];
// echo "Apellidos:".$_POST['apellidos'];
?>
       ?>
    <!-- <form id="form">
        <label>Nombre Y Apellidos </label>
        <input type="text" placeholder="Introduzca su nombre y apellidos" required>
        <label>Fecha de nacimiento </label><br>
        <input type="date">
    </form> -->
<!-- <form id="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
<!-- </div>
</section> -->
<!-- /*Primero voy a comprobar que aqui no puede acceder nadie de ningun otra manera que no sea median
te el logeo anterior.Es decir, si accede mediante url compruebo si la sesión está vacia o no,
si está vacia le redirigo al login*/ -->
  <!-- Jquery JS-->
  <script src="../formulario/colorlib-regform-2/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../formulario/colorlib-regform-2/vendor/select2/select2.min.js"></script>
    <script src="../formulario/colorlib-regform-2/vendor/datepicker/moment.min.js"></script>
    <script src="../formulario/colorlib-regform-2/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../formulario/colorlib-regform-2/js/global.js"></script>
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
