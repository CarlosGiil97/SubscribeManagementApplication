<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
session_start();
require_once('conex.php');
$con = conexion();
var_dump($_SESSION['datos']);


$fecha = date("20"."y-m-d"); 
$importe=$_POST['precio'];
$correo=$_POST['correo'];
// $tarjeta=$_POST['tarjeta'];
$nombre=ucwords($_SESSION['datos']['nombre']);
$contrasena=$_SESSION['datos']['contrasena'];
$zona=$_SESSION['zona'];
$fila=$_SESSION['fila'];
$asiento=$_SESSION['asiento'];
$numero_abonado=$_SESSION['numero_abonado'];
$id= sacarIddeAbonado($numero_abonado,$con);


asignarPagoaAbonado(intval($id),'19-20',intval($importe),'PAGADO',$con);
enviacorreos($correo,$nombre,$contrasena,$zona,$fila,$asiento,$importe,$fecha,$numero_abonado,$con);
//para marcar el asiento como Ocupado.
$idasiento=$_SESSION['IDAsientoElegido'];
ocuparAsiento($con,$idasiento,'Ocupado');

echo '<body>';
echo '<script>
    setTimeout(function() {
        swal({
            title: "Exito!",
            text: "Su pago se realizó con exito! Ya puede iniciar sesión.",
            type: "success"
        }, function() {
            window.location = "cerrarsesion.php";
        });
    }, 1000);
</script>';
echo '<script type="text/javascript">
setTimeout(function () { 
    swal({
        title: "Exito!",
      text: "Pago realizado con éxito y ya puede iniciar sesión !",
      type: "success",
      confirmButtonText: "Ir"
    },
    function(isConfirm){
      if (isConfirm) {
        window.location.href = "http://localhost/proyectofinal/php/cerrarsesion.php";
      }
    }); }, 1000);
</script>';
echo "</body>";
?>