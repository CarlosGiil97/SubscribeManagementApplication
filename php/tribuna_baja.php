<?php
session_start();
require_once('conex.php');
$miDB = conexion();
?>
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
    <link  rel="icon"   href="../images/granada.png" type="image/png" />

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
/* .card-2 .card-body {
    
    padding: 0px 0px !important;
} */
#parent {
display: grid;
grid-template-columns: repeat(20, 1fr);
grid-template-rows: repeat(8, 1fr);
grid-column-gap: 2px;
grid-row-gap: 2px;
}



#holiwis:hover{
  border:2px solid black;
  background-color:yellow;
}
.imagenesfooter{
	margin:10px;
	display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(2, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}
/* .card-2 .card-body{
  padding:10px !important;
} */
</style>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
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

        </a><img src="../images/granada.png" width="50px" height="50px" style="margin-left:-15%;">
				<nav> 
					
				</nav>
            </header>
            <div id="heading2" >
                <h1 style="color:black;"> CAMPAÑA DE ABONOS 2019/2020</h1>
               
            </div>
</header>
<!-- //Para sacar asientos SECTOR1_tribuna_baja -->
<?php
$idSECTOR1_tribuna_baja=[];
$filasSECTOR1_tribuna_baja=[];
$asientosSECTOR1_tribuna_baja=[];
$ocupacionSECTOR1_tribuna_baja=[];

     $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector1_tribuna_baja'";
      foreach ($miDB->query($sql) as $filaSECTOR1_tribuna_baja) {
        array_push($idSECTOR1_tribuna_baja, $filaSECTOR1_tribuna_baja['id']);
        array_push($filasSECTOR1_tribuna_baja, $filaSECTOR1_tribuna_baja['fila']);
        array_push($asientosSECTOR1_tribuna_baja, $filaSECTOR1_tribuna_baja['asiento']);
        array_push($ocupacionSECTOR1_tribuna_baja, $filaSECTOR1_tribuna_baja['ocupacion']);
     }
  
    //Para sacar asientos SECTOR2_tribuna_baja -->
    $idSECTOR2_tribuna_baja=[];
    $filasSECTOR2_tribuna_baja=[];
$asientosSECTOR2_tribuna_baja=[];
$ocupacionSECTOR2_tribuna_baja=[];
     $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector2_tribuna_baja'";
      foreach ($miDB->query($sql) as $filaSECTOR2_tribuna_baja) {
        array_push($idSECTOR2_tribuna_baja, $filaSECTOR2_tribuna_baja['id']);
        array_push($filasSECTOR2_tribuna_baja, $filaSECTOR2_tribuna_baja['fila']);
        array_push($asientosSECTOR2_tribuna_baja, $filaSECTOR2_tribuna_baja['asiento']);
        array_push($ocupacionSECTOR2_tribuna_baja, $filaSECTOR2_tribuna_baja['ocupacion']);
     }

       //Para sacar asientos SECTOR3_tribuna_baja -->
       $idSECTOR3_tribuna_baja=[];
      $filasSECTOR3_tribuna_baja=[];
      $asientosSECTOR3_tribuna_baja=[];
      $ocupacionSECTOR3_tribuna_baja=[];
         $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector3_tribuna_baja'";
          foreach ($miDB->query($sql) as $filaSECTOR3_tribuna_baja) {
            array_push($idSECTOR3_tribuna_baja, $filaSECTOR3_tribuna_baja['id']);
            array_push($filasSECTOR3_tribuna_baja, $filaSECTOR3_tribuna_baja['fila']);
            array_push($asientosSECTOR3_tribuna_baja, $filaSECTOR3_tribuna_baja['asiento']);
            array_push($ocupacionSECTOR3_tribuna_baja, $filaSECTOR3_tribuna_baja['ocupacion']);
         }

                //Para sacar asientos SECTOR4_tribuna_baja 
        $idSECTOR4_tribuna_baja=[];
        $filasSECTOR4_tribuna_baja=[];
        $asientosSECTOR4_tribuna_baja=[];
        $ocupacionSECTOR4_tribuna_baja=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector4_tribuna_baja'";
            foreach ($miDB->query($sql) as $filaSECTOR4_tribuna_baja) {
              array_push($idSECTOR4_tribuna_baja, $filaSECTOR4_tribuna_baja['id']);
              array_push($filasSECTOR4_tribuna_baja, $filaSECTOR4_tribuna_baja['fila']);
              array_push($asientosSECTOR4_tribuna_baja, $filaSECTOR4_tribuna_baja['asiento']);
              array_push($ocupacionSECTOR4_tribuna_baja, $filaSECTOR4_tribuna_baja['ocupacion']);
            }   

            //Para sacar asientos SECTOR5_tribuna_baja
        $idSECTOR5_tribuna_baja=[];
        $filasSECTOR5_tribuna_baja=[];
        $asientosSECTOR5_tribuna_baja=[];
        $ocupacionSECTOR5_tribuna_baja=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector5_tribuna_baja'";
            foreach ($miDB->query($sql) as $filaSECTOR5_tribuna_baja) {
              array_push($idSECTOR5_tribuna_baja, $filaSECTOR5_tribuna_baja['id']);
              array_push($filasSECTOR5_tribuna_baja, $filaSECTOR5_tribuna_baja['fila']);
              array_push($asientosSECTOR5_tribuna_baja, $filaSECTOR5_tribuna_baja['asiento']);
              array_push($ocupacionSECTOR5_tribuna_baja, $filaSECTOR5_tribuna_baja['ocupacion']);
            }       

            
            //Para sacar asientos SECTOR6_tribuna_baja
        $idSECTOR6_tribuna_baja=[];
        $filasSECTOR6_tribuna_baja=[];
        $asientosSECTOR6_tribuna_baja=[];
        $ocupacionSECTOR6_tribuna_baja=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector6_tribuna_baja'";
            foreach ($miDB->query($sql) as $filaSECTOR6_tribuna_baja) {
              array_push($idSECTOR6_tribuna_baja, $filaSECTOR6_tribuna_baja['id']);
              array_push($filasSECTOR6_tribuna_baja, $filaSECTOR6_tribuna_baja['fila']);
              array_push($asientosSECTOR6_tribuna_baja, $filaSECTOR6_tribuna_baja['asiento']);
              array_push($ocupacionSECTOR6_tribuna_baja, $filaSECTOR6_tribuna_baja['ocupacion']);
            }       

            //Para sacar asientos SECTOR7_tribuna_baja
            $idSECTOR7_tribuna_baja=[];
            $filasSECTOR7_tribuna_baja=[];
            $asientosSECTOR7_tribuna_baja=[];
            $ocupacionSECTOR7_tribuna_baja=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector7_tribuna_baja'";
            foreach ($miDB->query($sql) as $filaSECTOR7_tribuna_baja) {
              array_push($idSECTOR7_tribuna_baja, $filaSECTOR7_tribuna_baja['id']);
              array_push($filasSECTOR7_tribuna_baja, $filaSECTOR7_tribuna_baja['fila']);
              array_push($asientosSECTOR7_tribuna_baja, $filaSECTOR7_tribuna_baja['asiento']);
              array_push($ocupacionSECTOR7_tribuna_baja, $filaSECTOR7_tribuna_baja['ocupacion']);
            }       

             //Para sacar asientos SECTOR8_tribuna_baja
             $idSECTOR8_tribuna_baja=[];
             $filasSECTOR8_tribuna_baja=[];
             $asientosSECTOR8_tribuna_baja=[];
             $ocupacionSECTOR8_tribuna_baja=[];
             $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector8_tribuna_baja'";
             foreach ($miDB->query($sql) as $filaSECTOR8_tribuna_baja) {
               array_push($idSECTOR8_tribuna_baja, $filaSECTOR8_tribuna_baja['id']);
               array_push($filasSECTOR8_tribuna_baja, $filaSECTOR8_tribuna_baja['fila']);
               array_push($asientosSECTOR8_tribuna_baja, $filaSECTOR8_tribuna_baja['asiento']);
               array_push($ocupacionSECTOR8_tribuna_baja, $filaSECTOR8_tribuna_baja['ocupacion']);
             }     

             //Para sacar asientos SECTOR9_tribuna_baja
             $idSECTOR9_tribuna_baja=[];
             $filasSECTOR9_tribuna_baja=[];
             $asientosSECTOR9_tribuna_baja=[];
             $ocupacionSECTOR9_tribuna_baja=[];
             $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector9_tribuna_baja'";
             foreach ($miDB->query($sql) as $filaSECTOR9_tribuna_baja) {
               array_push($idSECTOR9_tribuna_baja, $filaSECTOR9_tribuna_baja['id']);
               array_push($filasSECTOR9_tribuna_baja, $filaSECTOR9_tribuna_baja['fila']);
               array_push($asientosSECTOR9_tribuna_baja, $filaSECTOR9_tribuna_baja['asiento']);
               array_push($ocupacionSECTOR9_tribuna_baja, $filaSECTOR9_tribuna_baja['ocupacion']);
             }

              //Para sacar asientos SECTOR10_tribuna_baja
              $idSECTOR10_tribuna_baja=[];
              $filasSECTOR10_tribuna_baja=[];
              $asientosSECTOR10_tribuna_baja=[];
              $ocupacionSECTOR10_tribuna_baja=[];
              $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector10_tribuna_baja'";
              foreach ($miDB->query($sql) as $filaSECTOR10_tribuna_baja) {
                array_push($idSECTOR10_tribuna_baja, $filaSECTOR10_tribuna_baja['id']);
                array_push($filasSECTOR10_tribuna_baja, $filaSECTOR10_tribuna_baja['fila']);
                array_push($asientosSECTOR10_tribuna_baja, $filaSECTOR10_tribuna_baja['asiento']);
                array_push($ocupacionSECTOR10_tribuna_baja, $filaSECTOR10_tribuna_baja['ocupacion']);
              }

              //Para sacar asientos SECTOR11_tribuna_baja
              $idSECTOR11_tribuna_baja=[];
              $filasSECTOR11_tribuna_baja=[];
              $asientosSECTOR11_tribuna_baja=[];
              $ocupacionSECTOR11_tribuna_baja=[];
              $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector11_tribuna_baja'";
              foreach ($miDB->query($sql) as $filaSECTOR11_tribuna_baja) {
                array_push($idSECTOR11_tribuna_baja, $filaSECTOR11_tribuna_baja['id']);
                array_push($filasSECTOR11_tribuna_baja, $filaSECTOR11_tribuna_baja['fila']);
                array_push($asientosSECTOR11_tribuna_baja, $filaSECTOR11_tribuna_baja['asiento']);
                array_push($ocupacionSECTOR11_tribuna_baja, $filaSECTOR11_tribuna_baja['ocupacion']);
              }

               //Para sacar asientos SECTOR12_tribuna_baja
               $idSECTOR12_tribuna_baja=[];
               $filasSECTOR12_tribuna_baja=[];
               $asientosSECTOR12_tribuna_baja=[];
               $ocupacionSECTOR12_tribuna_baja=[];
               $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector12_tribuna_baja'";
               foreach ($miDB->query($sql) as $filaSECTOR12_tribuna_baja) {
                 array_push($idSECTOR12_tribuna_baja, $filaSECTOR12_tribuna_baja['id']);
                 array_push($filasSECTOR12_tribuna_baja, $filaSECTOR12_tribuna_baja['fila']);
                 array_push($asientosSECTOR12_tribuna_baja, $filaSECTOR12_tribuna_baja['asiento']);
                 array_push($ocupacionSECTOR12_tribuna_baja, $filaSECTOR12_tribuna_baja['ocupacion']);
               }

               //Para sacar asientos SECTOR13_tribuna_baja
               $idSECTOR13_tribuna_baja=[];
               $filasSECTOR13_tribuna_baja=[];
               $asientosSECTOR13_tribuna_baja=[];
               $ocupacionSECTOR13_tribuna_baja=[];
               $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector13_tribuna_baja'";
               foreach ($miDB->query($sql) as $filaSECTOR13_tribuna_baja) {
                 array_push($idSECTOR13_tribuna_baja, $filaSECTOR13_tribuna_baja['id']);
                 array_push($filasSECTOR13_tribuna_baja, $filaSECTOR13_tribuna_baja['fila']);
                 array_push($asientosSECTOR13_tribuna_baja, $filaSECTOR13_tribuna_baja['asiento']);
                 array_push($ocupacionSECTOR13_tribuna_baja, $filaSECTOR13_tribuna_baja['ocupacion']);
               }

   ?>
<script>
  function clickaction( b ){
	// Accion por defecto para Buttons;
  if(b.id=='Sector1_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector1 Tribuna baja';
    var arrayJSidSECTOR1_tribuna_baja=<?php echo json_encode($idSECTOR1_tribuna_baja);?>;
    var arrayJSfilasSECTOR1_tribuna_baja=<?php echo json_encode($filasSECTOR1_tribuna_baja);?>;
    var arrayJSasientosSECTOR1_tribuna_baja=<?php echo json_encode($asientosSECTOR1_tribuna_baja);?>;
    var arrayJSocupacionSECTOR1_tribuna_baja=<?php echo json_encode($ocupacionSECTOR1_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR1_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR1_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR1_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR1_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR1_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR1_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR1_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR1_tribuna_baja[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';
           }
      }
      

  }

  if(b.id=='Sector2_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector2_tribuna_baja';
    var arrayJSidSECTOR2_tribuna_baja=<?php echo json_encode($idSECTOR2_tribuna_baja);?>;
    var arrayJSfilasSECTOR2_tribuna_baja=<?php echo json_encode($filasSECTOR2_tribuna_baja);?>;
    var arrayJSasientosSECTOR2_tribuna_baja=<?php echo json_encode($asientosSECTOR2_tribuna_baja);?>;
    var arrayJSocupacionSECTOR2_tribuna_baja=<?php echo json_encode($ocupacionSECTOR2_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR2_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR2_tribuna_baja[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_tribuna_baja[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR2_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR2_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR2_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR2_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR2_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR2_tribuna_baja[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"</div>';

      }
    }  
    }
    if(b.id=='Sector3_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector3_tribuna_baja';
    var arrayJSidSECTOR3_tribuna_baja=<?php echo json_encode($idSECTOR3_tribuna_baja);?>;
    var arrayJSfilasSECTOR3_tribuna_baja=<?php echo json_encode($filasSECTOR3_tribuna_baja);?>;
    var arrayJSasientosSECTOR3_tribuna_baja=<?php echo json_encode($asientosSECTOR3_tribuna_baja);?>;
    var arrayJSocupacionSECTOR3_tribuna_baja=<?php echo json_encode($ocupacionSECTOR3_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR3_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR3_tribuna_baja[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_tribuna_baja[0])*max;
  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR3_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR3_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR3_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR3_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR3_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR3_tribuna_baja[$i]+'" style="border:1px solid black;width:50px;height:35px;background-color:red;cursor: pointer;text-align:center;" disabled="true">'+arrayJSfilasSECTOR3_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR3_tribuna_baja[$i]+'</div>';

      }
    }  
    }
    if(b.id=='Sector4_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector4 Tribuna Baja';
    var arrayJSidSECTOR4_tribuna_baja=<?php echo json_encode($idSECTOR4_tribuna_baja);?>;
    var arrayJSfilasSECTOR4_tribuna_baja=<?php echo json_encode($filasSECTOR4_tribuna_baja);?>;
    var arrayJSasientosSECTOR4_tribuna_baja=<?php echo json_encode($asientosSECTOR4_tribuna_baja);?>;
    var arrayJSocupacionSECTOR4_tribuna_baja=<?php echo json_encode($ocupacionSECTOR4_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR4_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR4_tribuna_baja[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_tribuna_baja[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR4_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR4_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR4_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR4_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR4_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR4_tribuna_baja[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    
    }}
    if(b.id=='Sector5_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector 5 Tribuna Baja';
    var arrayJSidSECTOR5_tribuna_baja=<?php echo json_encode($idSECTOR5_tribuna_baja);?>;
    var arrayJSfilasSECTOR5_tribuna_baja=<?php echo json_encode($filasSECTOR5_tribuna_baja);?>;
    var arrayJSasientosSECTOR5_tribuna_baja=<?php echo json_encode($asientosSECTOR5_tribuna_baja);?>;
    var arrayJSocupacionSECTOR5_tribuna_baja=<?php echo json_encode($ocupacionSECTOR5_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR5_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR5_tribuna_baja[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_tribuna_baja[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR5_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR5_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR5_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR5_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR5_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR5_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor:pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }
    if(b.id=='Sector6_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector 6 Tribuna baja';
    var arrayJSidSECTOR6_tribuna_baja=<?php echo json_encode($idSECTOR6_tribuna_baja);?>;
    var arrayJSfilasSECTOR6_tribuna_baja=<?php echo json_encode($filasSECTOR6_tribuna_baja);?>;
    var arrayJSasientosSECTOR6_tribuna_baja=<?php echo json_encode($asientosSECTOR6_tribuna_baja);?>;
    var arrayJSocupacionSECTOR6_tribuna_baja=<?php echo json_encode($ocupacionSECTOR6_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR6_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR6_tribuna_baja[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_tribuna_baja[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR6_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR6_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR6_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR6_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR6_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR6_tribuna_baja[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }
    if(b.id=='Sector7_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector7 Tribuna baja';
    var arrayJSidSECTOR7_tribuna_baja=<?php echo json_encode($idSECTOR7_tribuna_baja);?>;
    var arrayJSfilasSECTOR7_tribuna_baja=<?php echo json_encode($filasSECTOR7_tribuna_baja);?>;
    var arrayJSasientosSECTOR7_tribuna_baja=<?php echo json_encode($asientosSECTOR7_tribuna_baja);?>;
    var arrayJSocupacionSECTOR7_tribuna_baja=<?php echo json_encode($ocupacionSECTOR7_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR7_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR7_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR7_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR7_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR7_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR7_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR7_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR7_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }
    if(b.id=='Sector8_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector8 Tribuna baja';
    var arrayJSidSECTOR8_tribuna_baja=<?php echo json_encode($idSECTOR8_tribuna_baja);?>;
    var arrayJSfilasSECTOR8_tribuna_baja=<?php echo json_encode($filasSECTOR8_tribuna_baja);?>;
    var arrayJSasientosSECTOR8_tribuna_baja=<?php echo json_encode($asientosSECTOR8_tribuna_baja);?>;
    var arrayJSocupacionSECTOR8_tribuna_baja=<?php echo json_encode($ocupacionSECTOR8_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR8_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR8_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR8_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR8_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR8_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR8_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR8_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR8_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }
    if(b.id=='Sector9_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector9 Tribuna baja';
    var arrayJSidSECTOR9_tribuna_baja=<?php echo json_encode($idSECTOR9_tribuna_baja);?>;
    var arrayJSfilasSECTOR9_tribuna_baja=<?php echo json_encode($filasSECTOR9_tribuna_baja);?>;
    var arrayJSasientosSECTOR9_tribuna_baja=<?php echo json_encode($asientosSECTOR9_tribuna_baja);?>;
    var arrayJSocupacionSECTOR9_tribuna_baja=<?php echo json_encode($ocupacionSECTOR9_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR9_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR9_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR9_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR9_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR9_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR9_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR9_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR9_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }
    if(b.id=='Sector10_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector10 Tribuna baja';
    var arrayJSidSECTOR10_tribuna_baja=<?php echo json_encode($idSECTOR10_tribuna_baja);?>;
    var arrayJSfilasSECTOR10_tribuna_baja=<?php echo json_encode($filasSECTOR10_tribuna_baja);?>;
    var arrayJSasientosSECTOR10_tribuna_baja=<?php echo json_encode($asientosSECTOR10_tribuna_baja);?>;
    var arrayJSocupacionSECTOR10_tribuna_baja=<?php echo json_encode($ocupacionSECTOR10_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR10_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR10_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR10_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR10_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR10_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR10_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR10_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR10_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

    if(b.id=='Sector11_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector11 Tribuna baja';
    var arrayJSidSECTOR11_tribuna_baja=<?php echo json_encode($idSECTOR11_tribuna_baja);?>;
    var arrayJSfilasSECTOR11_tribuna_baja=<?php echo json_encode($filasSECTOR11_tribuna_baja);?>;
    var arrayJSasientosSECTOR11_tribuna_baja=<?php echo json_encode($asientosSECTOR11_tribuna_baja);?>;
    var arrayJSocupacionSECTOR11_tribuna_baja=<?php echo json_encode($ocupacionSECTOR11_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR11_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR11_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR11_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR11_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR11_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR11_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR11_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR11_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';
      }
    }  
    }

    if(b.id=='Sector12_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector12 Tribuna baja';
    var arrayJSidSECTOR12_tribuna_baja=<?php echo json_encode($idSECTOR12_tribuna_baja);?>;
    var arrayJSfilasSECTOR12_tribuna_baja=<?php echo json_encode($filasSECTOR12_tribuna_baja);?>;
    var arrayJSasientosSECTOR12_tribuna_baja=<?php echo json_encode($asientosSECTOR12_tribuna_baja);?>;
    var arrayJSocupacionSECTOR12_tribuna_baja=<?php echo json_encode($ocupacionSECTOR12_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR12_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR12_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR12_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR12_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR12_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR12_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR12_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR12_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';
      }
    }  
    }

    if(b.id=='Sector13_tribuna_baja'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector13 Tribuna baja';
    var arrayJSidSECTOR13_tribuna_baja=<?php echo json_encode($idSECTOR13_tribuna_baja);?>;
    var arrayJSfilasSECTOR13_tribuna_baja=<?php echo json_encode($filasSECTOR13_tribuna_baja);?>;
    var arrayJSasientosSECTOR13_tribuna_baja=<?php echo json_encode($asientosSECTOR13_tribuna_baja);?>;
    var arrayJSocupacionSECTOR13_tribuna_baja=<?php echo json_encode($ocupacionSECTOR13_tribuna_baja);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR13_tribuna_baja ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR13_tribuna_baja[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR13_tribuna_baja[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR13_tribuna_baja[$i]+'_'+arrayJSfilasSECTOR13_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR13_tribuna_baja[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR13_tribuna_baja[$i]+'_'+arrayJSasientosSECTOR13_tribuna_baja[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';
      }
    }  
    }

  }
  function prueba(x){
    document.getElementById(x.id).style.background = "blue";
    document.getElementById(x.id).style.border = "3px solid black";
    document.getElementById(x.id).src = "../images/ojo.png";

    idtotal=x.id;
    var res = idtotal.split("_");
    idElegido=res[0];
    filaElegida=res[1];
    asientoElegido=res[2];
    alert('ID elegido'+idElegido+'Fila elegida:'+filaElegida+'Asiento elegido:'+asientoElegido)
    document.getElementById('idasiento').value=idElegido;   
    document.getElementById('fila').value=filaElegida;   
    document.getElementById('asiento').value=asientoElegido;   

  }
  function entradiv(w){
    // document.getElementById(w.id).innerHTML='hola';
    document.getElementById(w.id).src = "../images/libre_mouse.png";
  }
  function salediv(w){
    document.getElementById(w.id).src = "../images/libre.png";
  }
</script>
<!-- <section class="wrapper"> -->
<!-- <div class="inner">
    <header class="special">
        <h2>Rellene el formulario</h2>
        <p>A continuacion se le mostrará una serie de requisitos que ha de rellenar para poder completar el proceso
            del abono.
    </p>
    </header> -->
    

    <div class="wrapper wrapper--w960" style="margin: 0;padding: 0; !important">
            <div class="card card-2" >
            <!-- style="margin-left: 15%; !important" -->
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" id="titulo"></h2>
                   <div id="mapa">
                          <img src="../images/LosCarmenes/tribuna_baja.png" usemap="#image-map">
                          <map name="image-map">
    <area target="" id="Sector1_tribuna_baja" alt="Sector1_Tribuna_baja" title="Sector1_Tribuna_baja"  onclick=clickaction(this) coords="60,144,100,133,123,128,141,20,92,24,20,49" shape="poly">
    <area target="" id="Sector2_tribuna_baja" alt="Sector2_Tribuna_baja" title="Sector2_Tribuna_baja" onclick=clickaction(this) coords="143,126,196,130,217,15,163,18" shape="poly">
    <area target="" id="Sector3_tribuna_baja" alt="Sector3_Tribuna_baja" title="Sector3_Tribuna_baja"  onclick=clickaction(this) coords="219,122,304,119,319,13,237,15" shape="poly">
    <area target="" id="Sector4_tribuna_baja" alt="Sector4_Tribuna_baja" title="Sector4_Tribuna_baja"  onclick=clickaction(this) coords="326,118,413,114,424,6,339,10" shape="poly">
    <area target="" id="Sector5_tribuna_baja" alt="Sector5_Tribuna_baja" title="Sector5_Tribuna_baja"  onclick=clickaction(this) coords="433,112,518,114,525,3,440,3" shape="poly">
    <area target="" id="Sector6_tribuna_baja" alt="Sector6_Tribuna_baja" title="Sector6_Tribuna_baja"  onclick=clickaction(this) coords="536,109,623,112,62" shape="poly">
    <area target="" id="Sector7_tribuna_baja" alt="Sector7_Tribuna_baja" title="Sector7_Tribuna_baja"  onclick=clickaction(this) coords="641,107,667,107,670,25,723,25,725,105,748,109,746,3,643,1" shape="poly">
    <area target="" id="Sector8_tribuna_baja" alt="Sector8_Tribuna_baja" title="Sector8_Tribuna_baja"  onclick=clickaction(this) coords="763,114,853,118,846,-1,757,3" shape="poly">
    <area target="" id="Sector9_tribuna_baja" alt="Sector9_Tribuna_baja" title="Sector9_Tribuna_baja" onclick=clickaction(this) coords="868,112,955,112,944,6,859,6" shape="poly">
    <area target="" id="Sector10_tribuna_baja" alt="Sector10_Tribuna_baja" title="Sector10_Tribuna_baja"  onclick=clickaction(this) coords="976,114,1063,123,1047,12,964,6" shape="poly">
    <area target="" id="Sector11_tribuna_baja" alt="Sector11_Tribuna_baja" title="Sector11_Tribuna_baja" onclick=clickaction(this) coords="1083,121,1170,127,1152,14,1065,12" shape="poly">
    <area target="" id="Sector12_tribuna_baja" alt="Sector12_Tribuna_baja" title="Sector12_Tribuna_baja" onclick=clickaction(this) coords="1188,123,1257,129,1234,19,1170,17" shape="poly">
    <area target="" id="Sector13_tribuna_baja" alt="Sector13_Tribuna_baja" title="Sector13_Tribuna_baja" onclick=clickaction(this) coords="1272,129,1315,138,1346,36,1250,23" shape="poly">
</map>
                          </div>
                          <form id="formulario" method="POST" action="tribuna_baja.php" enctype="multipart/form-data">
                          <div id="parent"></div>
                          <div id="parent"></div>
                          <input type="hidden" name="fila" id="fila">
                          <input type="hidden" name="asiento" id="asiento">
                          <input type="hidden" name="idasiento" id="idasiento">
                          <input type="hidden" name="zona" id="zona" value="Tribuna Baja">

                        <div class="p-t-30" style="margin-top:50px;">
                        <div class="alert alert-dark" role="alert"><b>Para poder cotinuar , hay que marcar un asiento</b></div>   

                            <input class="btn btn--radius btn" type="submit" name="comprobar" value="Continuar"></button>
                        </div>
                        </form>
                        <?php
                   if ( isset( $_POST['comprobar'] ) ) { 
                    ?>
                    <script type="text/javascript">$('#formulario').hide()</script>
                    <script type="text/javascript">$('#mapa').hide()</script>
                    <!-- <script type="text/javascript">$('.title').hide()</script> -->
                    <?php
                    // var_dump($_SESSION['datos']);
                    // var_dump($_POST);
                    echo "<form id='formulario2' action='pruebafinal.php' method='POST'>";
                    echo "<div class='alert alert-primary' role='alert'>
                    Estos son los datos que has aportado, compruebelos y si es necesario, realice los cambios oportunos.
                  </div>";
                  echo "<div class='row mb-3'><div class='col-6 themed-grid-col '>";
                    echo "<label>Sector Elegido:</label> <input type='text' value='".$_POST['zona']."' placeholder='".$_POST['zona']."' name='zona' readonly >";
                    $_SESSION['zona']=$_POST['zona'];
                   echo "<label>Fila:</label> <input type='number' value='".$_POST['fila']."'placeholder='".$_POST['fila']."' name='filaFINAL' readonly>";
                   $_SESSION['fila']=$_POST['fila']; 
                   echo "<label>Asiento:</label> <input type='number' value='".$_POST['asiento']."' placeholder='".$_POST['asiento']."' name='asientoFINAL' readonly>";
                   $_SESSION['asiento']=$_POST['asiento']; 
                   echo "<input type='hidden' value='".$_POST['idasiento']."' placeholder='".$_POST['idasiento']."' name='idasiento' readonly>";
                    echo "<label>Nombre:</label> <input type='text' value='".$_SESSION['datos']['nombre']."' placeholder='".$_SESSION['datos']['nombre']."' name='nombreFINAL'>";
                    echo "<label>Apellidos:</label> <input type='text' value='".$_SESSION['datos']['apellidos']."' placeholder='".$_SESSION['datos']['apellidos']."' name='apellidosFINAL'>";
                    echo "<label>DNI:</label> <input type='text' value='".$_SESSION['datos']['dni']."' placeholder='".$_SESSION['datos']['dni']."' name='dniFINAL'>";
                    echo "<label>Fecha de nacimiento:</label> <input type='date' value='".$_SESSION['datos']['fechanacimiento']."' placeholder='".$_SESSION['datos']['fechanacimiento']."' name='fechanacimientoFINAL'>";
                    echo "<label>Categoria Abono:</label> <input type='text' value='".$_SESSION['datos']['categoria_abono']."' placeholder='".$_SESSION['datos']['categoria_abono']."' name='categoria_abonoFINAL'>";

                    echo "</div><div class='col-6 themed-grid-col '>";
                    echo "<label>Contraseña:</label> <input type='password' value='".$_SESSION['datos']['contrasena']."' placeholder='".$_SESSION['datos']['contrasena']."' name='contrasenaFINAL'>";
                    echo "<label>Telefono:</label> <input type='number' value='".$_SESSION['datos']['telefono']."' placeholder='".$_SESSION['datos']['telefono']."' name='telefonoFINAL'>";
                    echo "<label>Calle:</label> <input type='text' value='".$_SESSION['datos']['calle']."' placeholder='".$_SESSION['datos']['calle']."' name='calleFINAL'>";
                    echo "<label>Numero:</label> <input type='number' value='".$_SESSION['datos']['numero']."' placeholder='".$_SESSION['datos']['numero']."' name='numeroFINAL'>";
                    echo "<label>Piso:</label> <input type='number' value='".$_SESSION['datos']['piso']."' placeholder='".$_SESSION['datos']['piso']."' name='pisoFINAL'>";
                    echo "<label>Codigo Postal:</label> <input type='number' value='".$_SESSION['datos']['codigo_postal']."' placeholder='".$_SESSION['datos']['codigo_postal']."' name='codigo_postalFINAL'>";
                    echo "<label>Localidad:</label> <input type='text' value='".$_SESSION['datos']['localidad']."' placeholder='".$_SESSION['datos']['localidad']."' name='localidadFINAL'>";
                    echo "<label>Provincia:</label> <input type='text' value='".$_SESSION['datos']['provincia']."' placeholder='".$_SESSION['datos']['provincia']."' name='provinciaFINAL'>";
                   echo "</div></div>";
                    echo "<h4 style='margin-top:7%;'>El ultimo abono asignado es :".sacarUltimoNumeroAbonado($con)."📊</h4>";
                  
                    echo "<input type='hidden' name='numero_abonado' value='".sacarUltimoNumeroAbonado($con)."'>";
                    echo "<hr>";
                    echo "<br>";
                    echo "<label>Si todos los datos son ✅ ,proceda al PAGO</label>";
                    // añadirAdonadoBD($_SESSION['datos']['localidad'],);
                    echo "<input type='submit' value='PAGAR'>";
                    echo "</form>";
                   }
                   ?>
                        <div class="p-t-30">
                            <a href="tribuna.php"><input class="btn btn--radius btn" href="tribuna.php" type="submit" value="Volver atrás" style="background-color:red; !important color:white; !important"></button>
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

