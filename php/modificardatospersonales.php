<?php
session_start();
require_once('conex.php');
			$miDB = conexion();
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.5">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="notify.js"></script>
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
#colocacionimagen{
  display:inherit !important;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
p{
  margin:10px;
}

label{
  display: inline-block;
  width: 100px;
  margin:10px;
}
#parraforojo{
  color:red;
}
.form-group{
    display:flex !important;
}
</style>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
<script type="text/javascript">
function alerta(){
  document.getElementById('h3').style.display = 'none';
  document.getElementById('success').style.display = 'block';
  document.getElementById('success').innerHTML = '<h2>Datos actualizados con exito !</h2>';
    var count = 3;
    setInterval(function(){
        count--;
        
        if (count == 0) {
            window.location = 'panelabonado.php'; 
        }
    },1000);
}
</script>
<div class="loader"></div>
<body class="is-preload">

		<!-- Header -->
			<header id="header2">
               <nav></nav>
               <nav><img src="../images/granada.png" width="50px" height="50px"></nav>
               <nav id="colocacionimagen" class="navbar navbar-expand-lg navbar-dark  static-top"> 
                <a class="logo" href="index.html"><a class="navbar-brand" href="#"> <?php echo $_SESSION['sesion']['nombre']." ".$_SESSION['sesion']['apellidos']?></a>
                    </a>                        <img  style="border-radius: 20px;margin-right: 12px;" src="../images/ImagenesAbonados/<?php echo $_SESSION['sesion']['nombre']."_".$_SESSION['sesion']['dni'].".png"?>" width="40px" height="40px">
                    <a href="cerrarsesion.php"><img  href="cerrarsesion.php" style="margin-right: 12px;" src="../images/cerrarsesion.png" width="40px" height="40px"></a>
               
                </nav>
                   <!-- <img  style="border-radius: 20px;align:right;" src="../images/ImagenesAbonados/<?php echo $_SESSION['sesion']['nombre']."_".$_SESSION['sesion']['dni'].".png"?>" width="50px" height="50px"> -->
            </header>
            <section class="wrapper">
				<div class="inner">
                    <div class="container-fluid">
	                    <div class="row">
                      <div id="success"  class="alert alert-success" role="alert" style="display:none;"></div>
                            <h3 class="text-left text-danger" id="h3">
                                Hola <?php echo $_SESSION['sesion']['nombre']; ?>
                            </h3>
                            

      <div class="col-md-12" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);;margin-top:5px;">
      <form action="modificardatospersonales.php" method="POST">

        <div class="row">
          <div class="col-md-6">
            <div class="row"> <blockquote>Datos usuario</blockquote></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Nombre:</b></label><input type="text" name="nombre" value="<?php echo $_SESSION['sesion']['nombre']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Apellidos:</b></label><input type="text" name="apellidos" value="<?php echo $_SESSION['sesion']['apellidos']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>DNI:</b></label><input type="text" name="dni" value="<?php echo $_SESSION['sesion']['dni']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Fecha Nacimiento:</b></label><input type="text" name="fecha_nacimiento" value="<?php echo $_SESSION['sesion']['fecha_nacimiento']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Telefono:</b></label><input type="number" name="telefono" value="<?php echo $_SESSION['sesion']['telefono']; ?>" required></div></div>
            </div>
        <div class="col-md-6">
            <div class="row"><blockquote>Direccion</blockquote></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Calle:</b></label><input type="text" name="calle" value="<?php echo $_SESSION['sesion']['calle']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Numero:</b></label><input type="number" name="numero" value="<?php echo $_SESSION['sesion']['numero']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Piso:</b></label><input type="number" name="piso" value="<?php echo $_SESSION['sesion']['piso']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Codigo Postal:</b></label><input type="number" name="codigo_postal" value="<?php echo $_SESSION['sesion']['codigo_postal']; ?>"></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Localidad:</b></label><input type="text" name="localidad" value="<?php echo $_SESSION['sesion']['localidad']; ?>" required></div></div>
              <div class="row"><div class="form-group"><label id="ablanco"><b>Provincia:</b></label><input type="text" name="provincia" value="<?php echo $_SESSION['sesion']['provincia']; ?>" required></div></div>

            </div>
        </div>
                        </div>
                        <input type="submit" class="button large" style="align:center;margin-left: 40%;margin-top: 2%;" name="boton" value="Modificar datos">

                    </div>
                  
                </div>
                <?php

                if(isset($_POST['boton'])){
                  if( !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["dni"]) && !empty($_POST["fecha_nacimiento"])
                  && !empty($_POST["telefono"])  && !empty($_POST["calle"]) && !empty($_POST["numero"]) && !empty($_POST["codigo_postal"])
                  && !empty($_POST["localidad"]) && !empty($_POST["provincia"])){                   
                       $id=$_SESSION['sesion']['id'];
                       $nombre=$_POST["nombre"];
                       $apellidos=$_POST["apellidos"];
                       $dni=$_POST["dni"];
                       $fecha_nacimiento=$_POST["fecha_nacimiento"];
                       $telefono=$_POST["telefono"];
                       $calle=$_POST["calle"];
                       $numero=$_POST["numero"];
                       $piso=$_POST["piso"];
                       $codigo_postal=$_POST["codigo_postal"];
                       $localidad=$_POST["localidad"];
                       $provincia=$_POST["provincia"];
                      //  echo "sesion 1:";
                      //  var_dump($_SESSION['sesion']);

                       //tengo que llamar a la funcion e igualar las variables de $_SESSION['sesion'] a los nuevos valores
                       updateAbonado($con,$id,$nombre,$apellidos,$dni,$fecha_nacimiento,$telefono,$calle,$numero,$piso,$codigo_postal,$localidad,$provincia);
                       $_SESSION['sesion']['nombre'] = $nombre;
                       $_SESSION['sesion']['apellidos'] = $apellidos;
                       $_SESSION['sesion']['dni']=$dni;
                       $_SESSION['sesion']['fecha_nacimiento'] =$fecha_nacimiento;
                       $_SESSION['sesion']['telefono']=$telefono;
                       $_SESSION['sesion']['calle'] =$calle;
                       $_SESSION['sesion']['numero'] =$numero;
                       $_SESSION['sesion']['piso']=$piso;
                       $_SESSION['sesion']['codigo_postal']=$codigo_postal;
                       $_SESSION['sesion']['localidad']=$localidad;
                       $_SESSION['sesion']['provincia']=$provincia;
                       echo "<script>";
                       echo "alerta();";
                       echo "</script>";
                  }
                   

                }
                    
                ?>
            </section>
      </h3>

