<?php 
session_start();
if($_SESSION['datos'] == null){
  $_SESSION['datos'] =$_POST;
  // echo "La sesion de datos contiene:";
  // var_dump($_SESSION['datos']);
}
require('conex.php');

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!-- Icons font CSS-->
 <link  rel="icon"   href="../images/granada.png" type="image/png" />

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

    .grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-areas: "Esquina_A Esquina_A Esquina_A Tribuna Tribuna Tribuna Tribuna Afición-Visitante Afición-Visitante Afición-Visitante" "Esquina_A Esquina_A Esquina_A Tribuna Tribuna Tribuna Tribuna Afición-Visitante Afición-Visitante Afición-Visitante" "Esquina_A Esquina_A Esquina_A Tribuna Tribuna Tribuna Tribuna Afición-Visitante Afición-Visitante Afición-Visitante" "Fondo_Sur Fondo_Sur Fondo_Sur Cesped Cesped Cesped Cesped Fondo_Norte Fondo_Norte Fondo_Norte" "Fondo_Sur Fondo_Sur Fondo_Sur Cesped Cesped Cesped Cesped Fondo_Norte Fondo_Norte Fondo_Norte" "Fondo_Sur Fondo_Sur Fondo_Sur Cesped Cesped Cesped Cesped Fondo_Norte Fondo_Norte Fondo_Norte" "Esquina_B Esquina_B Esquina_B Preferencia Preferencia Preferencia Preferencia Esquina_C Esquina_C Esquina_C" "Esquina_B Esquina_B Esquina_B Preferencia Preferencia Preferencia Preferencia Esquina_C Esquina_C Esquina_C" "Esquina_B Esquina_B Esquina_B Preferencia Preferencia Preferencia Preferencia Esquina_C Esquina_C Esquina_C";
}

.Cesped { grid-area: Cesped; background-size: 100% 100%;
  background-repeat:no-repeat; background-image:url('../images/cesped.jpg');  background-repeat:no-repeat
    ;}
.cesped img{
   width:100%;
}
.Preferencia {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  grid-template-areas: "Preferencia_baja Preferencia_baja Preferencia_baja" "Preferencia_media Preferencia_media Preferencia_media" "Preferencia_alta Preferencia_alta Preferencia_alta";
  grid-area: Preferencia;
}

.Preferencia_baja { grid-area: Preferencia_baja; background-color:#1E5AFA;}
.Preferencia_baja:hover{border:2px solid black;}
.Preferencia_media { grid-area: Preferencia_media; background-color:#5482FC; }
.Preferencia_media:hover{border:2px solid black;}
.Preferencia_alta { grid-area: Preferencia_alta; background-color:#91AFFD;}
.Preferencia_alta:hover{border:2px solid black;}
.Tribuna {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  grid-template-areas: "Tribuna_alta Tribuna_alta Tribuna_alta" "Tribuna_media Tribuna_media Tribuna_media" "Tribuna_baja Tribuna_baja Tribuna_baja";
  grid-area: Tribuna;
}

.Tribuna_baja { grid-area: Tribuna_baja; background-color:#1E5AFA;}
.Tribuna_baja:hover{
  border:2px solid black;
}
.Tribuna_media { grid-area: Tribuna_media; background-color:#5482FC;}
.Tribuna_media:hover{
  border:2px solid black;
}
.Tribuna_alta { grid-area: Tribuna_alta; background-color:#91AFFD;}
.Tribuna_alta:hover{
  border:2px solid black;
}
.Fondo_Sur {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas: "Fondo_Sur_Alto Fondo_Sur_Medio Fondo_Sur_Bajo" "Fondo_Sur_Alto Fondo_Sur_Medio Fondo_Sur_Bajo";
  grid-area: Fondo_Sur;
  
}

.Fondo_Sur_Bajo { grid-area: Fondo_Sur_Bajo; background-color:#FFC719;writing-mode: vertical-lr;transform: rotate(180deg);}
.Fondo_Sur_Bajo:hover{  border:2px solid black;}
.Fondo_Sur_Medio { grid-area: Fondo_Sur_Medio; background-color:#FDD75F; writing-mode: vertical-lr; transform: rotate(180deg); }
.Fondo_Sur_Medio:hover{  border:2px solid black;}
.Fondo_Sur_Alto:hover{  border:2px solid black;}
.Fondo_Sur_Alto { grid-area: Fondo_Sur_Alto; background-color:#FCE394;writing-mode: vertical-lr;transform: rotate(180deg);}

.Fondo_Norte {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas: "Fondo_norte_Bajo Fondo_Norte_Medio Fondo_Norte_Alto" "Fondo_norte_Bajo Fondo_Norte_Medio Fondo_Norte_Alto";
  grid-area: Fondo_Norte;
}

.Fondo_norte_Bajo { grid-area: Fondo_norte_Bajo; background-color:#FFC719;writing-mode: vertical-lr}
.Fondo_norte_Bajo:hover{
  border:2px solid black;
}
.Fondo_Norte_Medio { grid-area: Fondo_Norte_Medio; background-color:#FDD75F;writing-mode: vertical-lr}
.Fondo_norte_Medio:hover{
  border:2px solid black;
}
.Fondo_Norte_Alto { grid-area: Fondo_Norte_Alto; background-color:#FCE394;writing-mode: vertical-lr}
.Fondo_norte_Alto:hover{
  border:2px solid black;
}
.Afición-Visitante { grid-area: Afición-Visitante;  background-color:#BB4196;}
.Afición-Visitante:hover{border:2px solid black;}
.Esquina_A { grid-area: Esquina_A; background-color:#85FFB7;}
.Esquina_A:hover{border:2px solid black;}
.Esquina_B { grid-area: Esquina_B; background-color:#85FFB7;}
.Esquina_B:hover{border:2px solid black;}
.Esquina_C { grid-area: Esquina_C; background-color:#85FFB7;}
.Esquina_C:hover{border:2px solid black;}

div>h5{
  display:inline-block;
		vertical-align:middle;
		line-height:normal;
}
#formulario{
  text-align: left;
  margin-top:10%;
}
#formulario2{
  text-align: left;
  margin-top:10%;
}
</style>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
<script>
function clickaction( b ){
    if(b.id =='Preferencia Baja'){
          Swal.fire({
      title: 'Preferencia Baja!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/preferencia_baja.jpg',
      width:'1100px',
      height:'450px',
      
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Preferencia Media'){
      Swal.fire({
      title: 'Preferencia Media!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/preferencia_media.jpg',
      width:'750px',
      height:'500px',
      
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Preferencia Alta'){
      Swal.fire({
      title: 'Preferencia Alta!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/preferencia_alta.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Tribuna Alta'){
      Swal.fire({
      title: 'Tribuna Alta!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/tribuna_alta.jpg',
      width:'900px',
      height:'400px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Tribuna Media'){
      Swal.fire({
      title: 'Tribuna Media!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/tribuna_media.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Tribuna Baja'){
      Swal.fire({
      title: 'Tribuna Baja!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/tribuna_baja.jpg',
      width:'900px',
      height:'500px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Sur Bajo'){
      Swal.fire({
      title: 'Fondo Sur Bajo!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_sur_bajo.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Sur Medio'){
      Swal.fire({
      title: 'Fondo Sur Medio!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_sur_medio.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Sur Alto'){
      Swal.fire({
      title: 'Fondo Sur Alto!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_sur_alto.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Norte Alto'){
      Swal.fire({
      title: 'Fondo Norte Alto!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_norte_alto.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Norte Medio'){
      Swal.fire({
      title: 'Fondo Norte Medio!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_norte_medio.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Norte Bajo'){
      Swal.fire({
      title: 'Fondo Norte Bajo!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/fondo_norte_bajo.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Esquina A'){
      Swal.fire({
      title: 'Esquina A!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/esquina_a.jpg',
      width:'900x',
      height:'500px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Esquina B'){
      Swal.fire({
      title: 'Esquina B!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/esquina_b.jpg',
      width:'623px',
      height:'385px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Esquina C'){
      Swal.fire({
      title: 'Esquina C!',
      text: 'Así verias el futbol desde esta zona',
      imageUrl: '../images/esquina_c.jpg',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Aficion visitante'){
      Swal.fire({
        icon:'Error',
      title: 'Aficion visitante!',
      text: 'Solo para aficionados visitantes',
      imageUrl: '../images/visitantes.jpg',
      width:'680px',
      height:'382px',
    })
    
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
    

    <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Elige la zona del estadio</h2>
                    <div class="grid-container">
  <div class="Cesped"></div>
  <div class="Preferencia">
    <div id="Preferencia Baja" class="Preferencia_baja" onclick=clickaction(this)><h5>Preferencia Baja<h5></div>
    <div id="Preferencia Media" class="Preferencia_media" onclick=clickaction(this)><h5>Preferencia Media<h5></div>
    <div  id="Preferencia Alta"class="Preferencia_alta" onclick=clickaction(this)><h5>Preferencia Alta<h5></div>
  </div>
  <div class="Tribuna">
    <div id="Tribuna Baja" class="Tribuna_baja" onclick=clickaction(this)><h5>Tribuna Baja<h5></div>
    <div id="Tribuna Media" class="Tribuna_media" onclick=clickaction(this)><h5>Tribuna Media<h5></div>
    <div id="Tribuna Alta" class="Tribuna_alta" onclick=clickaction(this)><h5>Tribuna Alta<h5></div>
  </div>
  <div class="Fondo_Sur">
    <div  id="Fondo Sur Bajo" class="Fondo_Sur_Bajo" onclick=clickaction(this)><h5>Fondo Sur Bajo<h5></div>
    <div id="Fondo Sur Medio" class="Fondo_Sur_Medio" onclick=clickaction(this)><h5>Fondo Sur Medio<h5></div>
    <div id="Fondo Sur Alto" class="Fondo_Sur_Alto" onclick=clickaction(this)><h5>Fondo Sur Alto<h5></div>
  </div>
  <div class="Fondo_Norte">
    <div id="Fondo Norte Bajo" class="Fondo_norte_Bajo" onclick=clickaction(this)><h5>Fondo Norte Bajo<h5></div>
    <div id="Fondo Norte Medio"class="Fondo_Norte_Medio" onclick=clickaction(this)><h5>Fondo Norte Medio<h5></div>
    <div id="Fondo Norte Alto" class="Fondo_Norte_Alto" onclick=clickaction(this)><h5>Fondo Norte Alto<h5></div>
  </div>
  <div id="Aficion visitante"  class="Afición-Visitante" onclick=clickaction(this)><h5>Afición Visitante<h5></div>
  <div id="Esquina A" class="Esquina_A" onclick=clickaction(this)><h5>Esquina A<h5></div>
  <div id="Esquina B" class="Esquina_B" onclick=clickaction(this)><h5>Esquina B<h5></div>
  <div id="Esquina C"  class="Esquina_C" onclick=clickaction(this)><h5>Esquina C<h5></div>
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
                  <div id="formulario">
                  <form method="POST" action="registro-3.php">
                   <label>Zna del estadio elegida:</label>
                   <input type="text" value="" name="sector_elegido" id="sector_elegido"><br>
                   <div class="row row-space">
                   <div class="col-6">
                   <label>Fila:</label>
                   <input type="number" value="" name="fila" placeholder="Introduzca fila (1-10max)" max="10"><br>
                   </div>
                   <div class="col-6">
                   <label>Asiento:</label>
                   <input type="number" value="" name="asiento" placeholder="Introduzca asiento (1-100max)" max="100"><br>
                   </div>
                   </div>
                   <input type="submit" name="comprobar" value="Comprobar mis datos">
                   <div id="contenido">
                   
                  </div>
                   </form></div>
                   <?php
                   if ( isset( $_POST['comprobar'] ) ) { 
                    ?>
                    <script type="text/javascript">$('#formulario').hide()</script>
                    <script type="text/javascript">$('.grid-container').hide()</script>
                    <script type="text/javascript">$('.title').hide()</script>
                    <?php
                    echo "<form id='formulario2' action='pruebafinal.php' method='POST'>";
                    echo "<div class='alert alert-primary' role='alert'>
                    Estos son los datos que has aportado, compruebelos y si es necesario, realice los cambios oportunos.
                  </div>";
                  echo "";
                    echo "<label>Sector Elegido:</label> <input type='text' value='".$_POST['sector_elegido']."' placeholder='".$_POST['sector_elegido']."' name='sector_elegidoFINAL'>";
                    echo "<label>Fila:</label> <input type='number' value='".$_POST['fila']."'placeholder='".$_POST['fila']."' name='filaFINAL'>";
                    echo "<label>Asiento:</label> <input type='number' value='".$_POST['asiento']."' placeholder='".$_POST['asiento']."' name='asientoFINAL'>";
                    echo "<label>Nombre:</label> <input type='text' value='".$_SESSION['datos']['nombre']."' placeholder='".$_SESSION['datos']['nombre']."' name='nombreFINAL'>";
                    echo "<label>Apellidos:</label> <input type='text' value='".$_SESSION['datos']['apellidos']."' placeholder='".$_SESSION['datos']['apellidos']."' name='apellidosFINAL'>";
                    echo "<label>DNI:</label> <input type='text' value='".$_SESSION['datos']['dni']."' placeholder='".$_SESSION['datos']['dni']."' name='dniFINAL'>";
                    echo "<label>Fecha de nacimiento:</label> <input type='date' value='".$_SESSION['datos']['fechanacimiento']."' placeholder='".$_SESSION['datos']['fechanacimiento']."' name='fechanacimientoFINAL'>";
                    echo "<label>Contraseña:</label> <input type='password' value='".$_SESSION['datos']['contrasena']."' placeholder='".$_SESSION['datos']['contrasena']."' name='contrasenaFINAL'>";
                    echo "<label>Telefono:</label> <input type='number' value='".$_SESSION['datos']['telefono']."' placeholder='".$_SESSION['datos']['telefono']."' name='telefonoFINAL'>";
                    echo "<label>Calle:</label> <input type='text' value='".$_SESSION['datos']['calle']."' placeholder='".$_SESSION['datos']['calle']."' name='calleFINAL'>";
                    echo "<label>Numero:</label> <input type='number' value='".$_SESSION['datos']['numero']."' placeholder='".$_SESSION['datos']['numero']."' name='numeroFINAL'>";
                    echo "<label>Piso:</label> <input type='number' value='".$_SESSION['datos']['piso']."' placeholder='".$_SESSION['datos']['piso']."' name='pisoFINAL'>";
                    echo "<label>Codigo Postal:</label> <input type='number' value='".$_SESSION['datos']['codigo_postal']."' placeholder='".$_SESSION['datos']['codigo_postal']."' name='codigo_postalFINAL'>";
                    echo "<label>Localidad:</label> <input type='text' value='".$_SESSION['datos']['localidad']."' placeholder='".$_SESSION['datos']['localidad']."' name='localidadFINAL'>";
                    echo "<label>Provincia:</label> <input type='text' value='".$_SESSION['datos']['provincia']."' placeholder='".$_SESSION['datos']['provincia']."' name='provinciaFINAL'>";
                    echo "<label>Categoria Abono:</label> <input type='text' value='".$_SESSION['datos']['categoria_abono']."' placeholder='".$_SESSION['datos']['categoria_abono']."' name='categoria_abonoFINAL'>";
                   
                    echo "<h4 style='margin-top:7%;'>El ultimo abonado asginado es:".sacarUltimoNumeroAbonado($con)."📊</h4>";
                  
                    echo "<input type='hidden' name='numero_abonado' value='".sacarUltimoNumeroAbonado($con)."'>";
                    echo "<hr>";
                    echo "<br>";
                    echo "<label>Si todos los datos son ✅ ,proceda al PAGO</label>";
                    // añadirAdonadoBD($_SESSION['datos']['localidad'],);
                    echo "<input type='submit' value='PAGAR'>";
                    echo "</form>";
                   }
                  
                  //  var_dump($_POST);
                  //   var_dump($_SESSION['datos']);
                    
                   ?>
                </div>
            </div>
        </div>
       
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

