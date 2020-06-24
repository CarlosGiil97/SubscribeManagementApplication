<?php
session_start();
require_once('conex.php');
      $miDB = conexion();
      //aqui voy a comprobar si el usuario tiene un iban asginado ya o no
     
        // var_dump($_SESSION['iban']);
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <script src="https://kit.fontawesome.com/6f7d291e0c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="../assets/css/main.css" />
  <script src="snap/ohsnap.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="slider/responsiveslides.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link  rel="icon"   href="../images/granada.png" type="image/png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
  <script src="generaqr.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=0.25">
</head>
  <script src="notify.js"></script>

<style>
  .img-thumbnail{
    display:block;
    margin:auto;
  }
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
  width: 157px;
  margin:10px;
}
#parraforojo{
  color:red;
}
#iconos{
  margin:3px;
}
.grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  gap: 1px 1px;
  grid-template-areas: "area1 area1 area1 area1" ". . . ." ". . . .";
}

.area1 {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  gap: 1px 1px;
  grid-template-areas: ". uno dos ." ". boton boton .";
  grid-area: area1;
}

.uno { grid-area: uno; }

.dos {
  display: grid;
  grid-template-columns: ;
  grid-template-rows: 1fr 1fr;
  gap: 1px 1px;
  grid-template-areas: "contrasena" "contrasena1";
  grid-area: dos;
}

.contrasena { grid-area: contrasena; }

.contrasena1 { grid-area: contrasena1; }

.boton { grid-area: boton; }
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid #eed3d7;
  border-radius: 4px;
  position: top;
  bottom: 0px;
  right: 21px;
  float: right;
  clear: right;
  color:black;
  background-color: #74F98A;
}
.alert-green {
  color: white;
  background-color: #37BC9B;
}
.grid-container1 {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas: "Arriba Arriba Arriba Arriba" "izquierda izquierda derecha derecha";
}

.Arriba { grid-area: Arriba; width:100%; }

.izquierda { grid-area: izquierda; width:100%;  }

.derecha { grid-area: derecha; width:100%; }

</style>

<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
<script>

</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  var checkbox = document.querySelector('input[type="checkbox"]');

  checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
      $(".box").notify(
  "Modo Oscuro activado", 
  {   type:"info",
    gap: 2,
    showAnimation: 'slideDown',
    autoHide: true,
  autoHideDelay: 1000,}
);
      document.body.style.background = 'black';
      document.getElementById('modificar').style.background = 'white';
   
     
var elementosObtenidos = document.getElementsByTagName('label');
for(var i = 0; i < elementosObtenidos.length; i++){
  elementosObtenidos[i].style.color = 'white';
}

var elementosObtenidos2 = document.getElementsByTagName('p');
for(var i = 0; i < elementosObtenidos2.length; i++){
  elementosObtenidos2[i].style.color = 'white';
}
var elementosObtenidos3 = document.getElementsByTagName('h5');
for(var i = 0; i < elementosObtenidos3.length; i++){
  elementosObtenidos3[i].style.color = 'white';
}

var elementosObtenidos4 = document.getElementsByTagName('blockquote');
for(var i = 0; i < elementosObtenidos4.length; i++){
  elementosObtenidos4[i].style.color = 'white';
}
var elementosObtenidos5 = document.getElementsByTagName('input');
for(var i = 0; i < elementosObtenidos5.length; i++){
  elementosObtenidos5[i].style.background = 'white';
}
document.getElementById('btn').style.background = '#ce1b28';

          
    } else {
     
      document.body.style.background = 'white';

      var elementosObtenidos = document.getElementsByTagName('label');
      
      for(var i = 0; i < elementosObtenidos.length; i++){
        elementosObtenidos[i].style.color = 'black';
      }
var elementosObtenidos2 = document.getElementsByTagName('p');
for(var i = 0; i < elementosObtenidos2.length; i++){
  elementosObtenidos2[i].style.color = 'black';
}
    }
  });
})
</script>
<script type="text/javascript">
function alerta(){
  ohSnap('Contraseña cambiada con exito!', {'duration':'2000'},{color:'green'});  // 2 seconds
}
function alerta1(){
  ohSnap('IBAN agregado a nuestra base de datos  con exito!', {'duration':'2000'},{color:'green'});  // 2 seconds
  window.location.replace("panelabonado.php");

}
</script>
<script>
  function click_perfil(){
    document.getElementById('div-cuenta').style.display = 'none';
    document.getElementById('div-perfil').style.display = 'contents';
    document.getElementById('div-cesion').style.display = 'none';
    document.getElementById('div-abono').style.display = 'none';
  }
  function click_cuenta(){
    document.getElementById('div-perfil').style.display = 'none';
    document.getElementById('div-cuenta').style.display = 'contents';
    document.getElementById('div-cesion').style.display = 'none';
    document.getElementById('div-abono').style.display = 'none';
  }
  function click_cesion(){
    document.getElementById('div-perfil').style.display = 'none';
    document.getElementById('div-cuenta').style.display = 'none';
    document.getElementById('div-cesion').style.display = 'contents';
    document.getElementById('div-abono').style.display = 'none';
  }
  function click_abono(){
    document.getElementById('div-perfil').style.display = 'none';
    document.getElementById('div-cuenta').style.display = 'none';
    document.getElementById('div-cesion').style.display = 'none';
    document.getElementById('div-abono').style.display = 'contents';
  }
</script>

<div class="loader"></div>
<body class="is-preload">

		<!-- Header -->
			<header id="header2">
               <nav></nav>
               <nav><img src="../images/granada.png" width="50px" height="50px" style="margin-left: 192%;"></nav>
               <nav id="colocacionimagen" class="navbar navbar-expand-lg navbar-dark  static-top"> 
                <a class="logo" href="index.html"><a class="navbar-brand" href="#"> <?php echo $_SESSION['sesion']['nombre']." ".$_SESSION['sesion']['apellidos']?></a>
                    </a><img  style="border-radius: 20px;margin-right: 12px;" src="../images/ImagenesAbonados/<?php echo $_SESSION['sesion']['nombre']."_".$_SESSION['sesion']['dni'].".png"?>" width="40px" height="40px">
                    <a href="cerrarsesion.php"><img  href="cerrarsesion.php" style="margin-right: 12px;" src="../images/cerrarsesion.png" width="40px" height="40px"></a>
               
                </nav>
                   <!-- <img  style="border-radius: 20px;align:right;" src="../images/ImagenesAbonados/<?php echo $_SESSION['sesion']['nombre']."_".$_SESSION['sesion']['dni'].".png"?>" width="50px" height="50px"> -->
            </header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-top: 5px solid black;border-bottom: 1px solid black;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onClick="click_perfil()"><i id="iconos" class="fas fa-user"></i>Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onClick="click_cuenta()"><i id="iconos" class="fas fa-key"></i>Cuenta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" onClick="click_cesion()"><i id="iconos" class="fas fa-futbol"></i>Cesión de asiento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" onClick="click_abono()"><i id="iconos" class="fa fa-edit"></i>Abono digital</a>
      </li>
      <li class="nav-item right">
      <label class="switch">
  <input type="checkbox">
  <div class="slider"></div>
  <div style="margin-left:10px !important"class="box"></div>
</label>
      </li>
    </ul>
    
  </div>
</nav>
      <section class="wrapper">
				<div class="inner">
        <div class="container-fluid">
	<div class="row">

    <h3 id="h3" class="text-left text-danger">
				Hola <?php echo $_SESSION['sesion']['nombre']; ?>
      </h3>  <div id="ohsnap"></div>
      <div id="div-perfil" name="div-perfil" style="display: contents;">
		<div class="col-md-12" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);;margin-top:30px;">
			<div class="row" >
				<div class="col-md-6" style="margin-top:20px;">
          <div class="row"><label  ><b>Categoria:</b></label><p><?php echo $_SESSION['sesion']['categoria']; ?></p></div>
          <div class="row"><label style="width:100%;display: flex;"><b>N abonado de la temporada actual:</b><p style="margin:0px;margin-left:3px"><?php echo $_SESSION['sesion']['numeroabonado']; ?></p></label></div>
          <div class="row"><label ><b>Zona:</b></label><p ><?php echo $_SESSION['sesion']['zona']; ?></p></div>
				</div>
				<div class="col-md-6" style="margin-top:20px;">
          <div class="row"><label ><b>Fecha Alta:</b></label><p ><?php echo $_SESSION['sesion']['fecha_alta']; ?></p></div>
          <div class="row"><label style="width:100%;display: flex;"><b>N abonado de la temporada anterior:</b><p style="margin:0px;margin-left:3px" ><?php echo $_SESSION['sesion']['numeroabonado']; ?></p></label></div>
          <div class="row">
            <div class="col-md-6" style="text-align:center !important"><label><b>Fila:</b></label><?php echo $_SESSION['sesion']['fila']; ?></p></div>
            <div class="col-md-6" style="text-align:center !important"><label><b>Asiento:</b></label><?php echo $_SESSION['sesion']['asiento']; ?></p></div>
          </div>
				</div>
			</div>
    </div>
    <h5 id="h5" class="text-left" style="margin-top:40px;">Datos de pago<i id="iconos" class="fas fa-money-check"></i></h5>
    <div class="col-md-12" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);;margin-top:5px;">
    <div class="row">
   
    <!-- Aqui como necesito datos de la tabla pagos ,pues voy a abrir codigo php para coge rlo que necesito de esa tabla, que es la temporada, el importe y el estado -->
    <?php
      $id=intval($_SESSION['sesion']['id']);
      $sql= "SELECT id_pago,temporada,importe,estado FROM pagos WHERE id_pago= :id";
      $consulta_prep = $miDB->prepare($sql);
      if($consulta_prep->execute(array(':id'=>$id))){
        $resultado=$consulta_prep->fetch();
        // var_dump($resultado);
        $temporada=$resultado['temporada'];
        $importe=$resultado['importe'];
        $estado=$resultado['estado'];
      }
    ?>
    <div class="col-3" style="display: flex;"> <label ><b>Temporada:</b></label><p ><?php echo $temporada ?></p></div>
    <div class="col-3" style="display: flex;"><label ><b>Cantidad:</b></label><p ><?php echo $importe ?></p></div>
    <div class="col-3" style="display: flex;"><label ><b>Estado:</b></label><p  style="color:green; !important"><?php echo strtoupper($estado) ?></p></div>
    </div>
  </div>
  <h5 id="h5" class="text-left" style="margin-top:40px;">Datos personales<i id="iconos" class="fas fa-user-friends"></i></h5>

      <div class="col-md-12" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);;margin-top:5px;">
      <form action="modificardatospersonales.php" method="POST">

        <div class="row">
          <div class="col-md-6">
            <div class="row"> <blockquote>Datos usuario</blockquote></div>
              <div class="row"><label ><b>Nombre:</b></label><p ><?php echo $_SESSION['sesion']['nombre']; ?></p></div>
              <div class="row"><label ><b>Apellidos:</b></label><p ><?php echo $_SESSION['sesion']['apellidos']; ?></p></div>
              <div class="row"><label ><b>DNI:</b></label><p ><?php echo $_SESSION['sesion']['dni']; ?></p></div>
              <div class="row"><label ><b>Fecha Nacimiento:</b></label><p ><?php echo $_SESSION['sesion']['fecha_nacimiento']; ?></p></div>
              <div class="row"><label ><b>Telefono:</b></label><p ><?php echo $_SESSION['sesion']['telefono']; ?></p></div>
            </div>
        <div class="col-md-6">
            <div class="row"><blockquote>Direccion</blockquote></div>
              <div class="row"><label ><b>Calle:</b></label><p ><?php echo $_SESSION['sesion']['calle']; ?></p></div>
              <div class="row"><label ><b>Numero:</b></label><p ><?php echo $_SESSION['sesion']['numero']; ?></p></div>
              <div class="row"><label ><b>Piso:</b></label><p ><?php echo $_SESSION['sesion']['piso']; ?></p></div>
              <div class="row"><label ><b>Codigo Postal:</b></label><p ><?php echo $_SESSION['sesion']['codigo_postal']; ?></p></div>
              <div class="row"><label ><b>Localidad:</b></label><p ><?php echo $_SESSION['sesion']['localidad']; ?></p></div>
              <div class="row"><label ><b>Provincia:</b></label><p ><?php echo $_SESSION['sesion']['provincia']; ?></p></div>

            </div>
        </div>
            <div class="row" style="align-content:center !important">
                <input type="submit" id="modificar" class="button large" style="align:center;margin-left: 40%;margin-bottom: 1%;" value="Modificar datos">
            </div>
    </form>
    
      </div>  
      
     
      <!-- --- -->
</div>
  <div id="div-cuenta" name="div-cuenta"  style="display:none">
    <div class="col-md-12" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);;margin-top:30px;">
    <blockquote class="blockquote">
  <p>Aqui en este apartado podrá cambiar la contraseña de su cuenta.</p> 
  <div class="alert-danger" >
  El numero de abonado no se puede cambiar, es fijo e unico.
</div>
</blockquote>
        <form action="panelabonado.php" method="POST">
        <div class="row">
          <div class="col-md-12">
          <div class="grid-container">
                <div class="area1" style="height: 130px;!important">
                  <div class="uno"><label>Nº Abonado :</label><input type="number"  name="numeroabonado" value="<?php echo $_SESSION['sesion']['numeroabonado']; ?>" readonly></div>
                  <div class="dos">
                        <div class="contrasena"><label>Contraseña actual:</label><input type="password"  name="contrasena" value="<?php echo $_SESSION['sesion']['contrasena']; ?>" readonly></div>
                        <div class="contrasena1"><label>Introduzca la nueva contraseña:</label><input type="password" name="contrasena_nueva" required></div>
                  </div>
                  <div class="boton"> 
                <input type="submit" name="modificar1" class="button large" style="align:center;" value="Modificar datos">
                <div><p><i>Al darle al boton modificar, se harán efectivos los cambios y se le obligará a logearse con la nueva contraseña</i></p></div>

            </div>
                </div>
          </div>
        </div>
        </div>
       
    </div>
   
            </form>
            <?php
      if(isset($_POST['modificar1'])){
       $contrasena_nueva=$_POST['contrasena_nueva'];
       $id= $_SESSION['sesion']['id'];
       //despues de llamar al a funcion de actualizar contraseña tengo que igualar la sesion de contraseña a la nueva
       updateContrasena($con,$id,$contrasena_nueva);
       echo "<script>";
       echo "alerta();";
       echo "</script>";

      }
            ?>
  </div>
  <div id="div-abono" name="div-abono" style="display:none">
 <!-- <?php var_dump($_SESSION) ?>; -->
  <div class="col-md-12"><p>Ya no necesitarás llevar el abono fisico al estadio.Ahora podras acceder con tu movil.
   A cotinuación se le generará un codigo QR con sus datos. Será tan sencillo como mostrar este codigo generado en los tornos del estadio
    y accederá sin ningun tipo de problema. </p><br>
    <?php
    $rutacodigo=file_exists('codes/'.$_SESSION['sesion']['dni'].'-'.$_SESSION['sesion']['numeroabonado'].'.png');
    if ($rutacodigo==1) {
      echo '<img style="display:block;margin:auto;" class="img-thumbnail" src="codes/'.$_SESSION['sesion']['dni'].'-'.$_SESSION['sesion']['numeroabonado'].'.png" />';

  }else {
     ?>
     <form class="form" method="post" id="codeForm" onsubmit="return false">
    <input type="hidden" class="form-control col-xs-1" id="content" type="text" value="<?php echo $_SESSION['sesion']['dni'] ?>">
    <input type="hidden" class="form-control col-xs-1" id="ecc"  value="H">
    <input type="hidden" class="form-control col-xs-1" id="size"  value="10">

    <input type="submit" name="submit" id="submit" class="button primary large" style="align:center;margin-left: 40%;margin-bottom: 1%;" value="Genera Abono">
    </form>
        
                    <div class="showQRCode"></div>
                <?php
  }
    
  ?>
    
</div>
  </div>
  <div id="div-cesion" name="div-cesion" style="display:none;">
      <div class="col-md-12"><p><i>Los abonados que no puedan asistir a los partidos en los que el club active la cesión de asiento, pueden liberarlo quedando este a disposición del club para su venta a terceros.
En el supuesto de que se ceda la localidad y ésta se venda finalmente, el aficionado percibirá un beneficio económico de la venta de esa localidad en un porcentaje compartido con el club.
El titular percibirá el 60% del importe de dicha entrada, valorada al precio establecido para cada partido. El Club asume tanto el coste del servicio como la totalidad de los impuestos devengados por dicha venta con el 40% restante.
El club procederá al ingreso del importe de la entrada vendida en la cuenta corriente que facilite el abonado a su nombre transcurridas 5 días hábiles después de la finalización del partido.
Para cualquier consulta, diríjase al correo abonado@granadacf.es
Puede ceder su localidad hasta 12 horas antes del comienzo del partido y, del mismo modo, puede recuperar su asiento hasta 12 horas antes del inicio del partido, siempre que la localidad no se haya vendido.</i></p>
    <div class="grid-container1" >
      <div class="Arriba" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);;margin-top:30px;">
      <p style="font-size:30px;font-weight: lighter;">Número de cuenta</p>
      <p><i>El número de cuenta es necesario para que El Club pueda ingresarte el importe de la cesión.
      </i></p>
      <form action="panelabonado.php" method="POST">
      <label style="width:100% !important">Introduce el IBAN de tu cuenta bancaria.</label>
      <input type="text" style="width:90% !important;margin:5px !important;" name="iban_input" value="<?php 
       $id=$_SESSION['sesion']['id'];
       $_SESSION['iban']='';
       $comprobacionIBAN=sacarIBAN($miDB,$id);
       if(!empty($comprobacionIBAN)){
        $_SESSION['iban']= $comprobacionIBAN;
        }else{
        $_SESSION['iban']='';
        }
      echo $_SESSION['iban'];?>">
      <input type="submit" name="btn" class="button large" style="align:center;margin-left:4px;" value="Modificar IBAN">
      </form>
      <div id="ohsnap"></div>
      <?php
          if(isset($_POST['btn'])){
              if($_SESSION['iban']==null){
                $iban_introducido= $_POST['iban_input'];
                $id=$_SESSION['sesion']['id'];
                meterIBAN($con,$id,$iban_introducido);
                $_SESSION['iban'] = $iban_introducido;
                echo "<script>";
                echo "alerta1();";
                echo "</script>";
                // echo '<div class="alert-success" style="width:50%;margin:5px;margin-left:5px;margin-bottom:5px;"><i class="fas fa-check-circle" style="margin:5px;"></i>Se ha agregado el IBAN  nuestra base de datos</div>';
              }else{
                $iban_introducido= $_POST['iban_input'];
                $id=$_SESSION['sesion']['id'];
                $_SESSION['iban'] = $iban_introducido;
                var_dump($_SESSION['iban']);
                meterIBAN($con,$id,$iban_introducido);
                echo "<script>";
                echo "alerta1();";
                echo "</script>";
                // echo '<div class="alert-info" style="margin:5px;width:50%;margin-left:5px;margin-bottom:5px;"><i class="fas fa-check-circle" style="margin:5px;"></i>Para modificar el IBAN tienes que enviar un correo a abonados@granadacf.es</div>';
              }
              
           
          }
      ?>
      </div>
        <div class="izquierda" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);margin-top:30px;margin-left: -10px;">
          <div class="alert-warning" style="color:black;">
            <strong style="margin: 13px;">JORNADA 31!</strong> Leganes <img src="../images/leganes.png" width="40px" height="40px"> VS  Granada <img src="../images/granada.png" width="40px" height="40px"> 
            <i class="fas fa-plane-departure"></i>
          </div>
          <div class="alert-info" style="color:black;">
            <strong style="margin: 13px;">JORNADA 32!</strong> Granada <img src="../images/granada.png" width="40px" height="40px"> VS  Eibar <img src="../images/eibar.png" width="40px" height="40px"> 
            <i class="fas fa-home"></i>
          </div>
          <div class="alert-warning" style="color:black;">
            <strong style="margin: 13px;">JORNADA 33!</strong> Alavés <img src="../images/alaves.png" width="30px" height="30px"> VS  Granada <img src="../images/granada.png" width="40px" height="40px"> 
            <i class="fas fa-plane-departure" width="40px" height="40px"></i>
          </div>
          <div class="alert-info" style="color:black;">
            <strong style="margin: 13px;">JORNADA 34!</strong> Granada <img src="../images/granada.png" width="40px" height="40px"> VS  Valencia <img src="../images/valencia.png" width="30px" height="40px"> 
            <i class="fas fa-home"></i>
          </div>
          <div class="alert-warning" style="color:black;">
            <strong style="margin: 13px;">JORNADA 35!</strong> Real Sociedad <img src="../images/sociedad.png" width="30px" height="30px"> VS  Granada <img src="../images/granada.png" width="40px" height="40px"> 
            <i class="fas fa-plane-departure" width="40px" height="40px"></i>
          </div>
          <div class="alert-info" style="color:black;">
            <strong style="margin: 13px;">JORNADA 36!</strong> Granada <img src="../images/granada.png" width="40px" height="40px"> VS  Real Madrid <img src="../images/madrid.png" width="30px" height="40px"> 
            <i class="fas fa-home"></i>
          </div>
          <div class="alert-warning" style="color:black;">
            <strong style="margin: 13px;">JORNADA 37!</strong> RCD Mallorca <img src="../images/mallorca.png" width="25px" height="30px"> VS  Granada <img src="../images/granada.png" width="40px" height="40px"> 
            <i class="fas fa-plane-departure" width="40px" height="40px"></i>
          </div>
        </div>
      <div class="derecha" style="-webkit-box-shadow: -2px 0px 24px 0px rgba(143,139,143,1);margin-top:30px;margin-left: 10px;">
      <p style="font-size:30px;font-weight: lighter;">Recompensas</p>
      <p><i>Actualmente no tienes ninguna recompensa.</i></p>
      <div class="alert-success" style="width:80%;margin-left:5px;margin-bottom:5px;"><i class="fas fa-check-circle" style="margin:5px;"></i>Las recompensas pueden tardar en aparecer una semana</div>

      <div class="alert-danger" style="width:80%;margin-left:5px;"><i class="fas fa-times" style="margin:5px;"></i>El club solo bonifica las entradas vendidas</div>
      </div>
    </div>
      </div>
  </div>
	</div>
</div>
</div>

<!-- /*Primero voy a comprobar que aqui no puede acceder nadie de ningun otra manera que no sea median
te el logeo anterior.Es decir, si accede mediante url compruebo si la sesión está vacia o no,
si está vacia le redirigo al login*/ -->
<?php
if(empty($_SESSION['sesion'])){
    // echo'<script type="text/javascript">
    // alert("Aquí solo pueden acceder los abonados, se le redirigirá a la pagina de Inicio de Sesión");
    // window.location.href="cerrarsesion.php";
    // </script>';
    echo "<body>";
    echo '<script type="text/javascript">
    setTimeout(function () { 
        swal({
          title: "Error!",
          text: "Aqui solo pueden acceder los abonados!",
          type: "error",
          confirmButtonText: "Volver atrás"
        },
        function(isConfirm){
          if (isConfirm) {
            window.location.href = "http://localhost/proyectofinal/php/iniciarsesion.php";
          }
        }); }, 1000);
    </script>';
    echo "</body>";
}else{

}

?>

		