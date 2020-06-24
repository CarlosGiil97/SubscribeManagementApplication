<?php
session_start();
require_once('conex.php');
$miDB = conexion();
?>
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
    <meta name="viewport" content="width=device-width, initial-scale=0">

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
#parent1 {
display: grid;
grid-template-columns: repeat(6, 1fr);
grid-template-rows: repeat(4, 1fr);
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
<!-- //Para sacar asientos SECTOR1_FONDO_norte_ALTO -->
<?php
$idSECTOR1_FONDO_norte_ALTO=[];
$filasSECTOR1_FONDO_norte_ALTO=[];
$asientosSECTOR1_FONDO_norte_ALTO=[];
$ocupacionSECTOR1_FONDO_norte_ALTO=[];

     $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector1_Fondo_norte_Alto'";
      foreach ($miDB->query($sql) as $filaSECTOR1_FONDO_norte_ALTO) {
        array_push($idSECTOR1_FONDO_norte_ALTO, $filaSECTOR1_FONDO_norte_ALTO['id']);
        array_push($filasSECTOR1_FONDO_norte_ALTO, $filaSECTOR1_FONDO_norte_ALTO['fila']);
        array_push($asientosSECTOR1_FONDO_norte_ALTO, $filaSECTOR1_FONDO_norte_ALTO['asiento']);
        array_push($ocupacionSECTOR1_FONDO_norte_ALTO, $filaSECTOR1_FONDO_norte_ALTO['ocupacion']);
     }
  
    //Para sacar asientos SECTOR2_FONDO_norte_ALTO -->
    $idSECTOR2_FONDO_norte_ALTO=[];
    $filasSECTOR2_FONDO_norte_ALTO=[];
$asientosSECTOR2_FONDO_norte_ALTO=[];
$ocupacionSECTOR2_FONDO_norte_ALTO=[];
     $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector2_Fondo_norte_Alto'";
      foreach ($miDB->query($sql) as $filaSECTOR2_FONDO_norte_ALTO) {
        array_push($idSECTOR2_FONDO_norte_ALTO, $filaSECTOR2_FONDO_norte_ALTO['id']);
        array_push($filasSECTOR2_FONDO_norte_ALTO, $filaSECTOR2_FONDO_norte_ALTO['fila']);
        array_push($asientosSECTOR2_FONDO_norte_ALTO, $filaSECTOR2_FONDO_norte_ALTO['asiento']);
        array_push($ocupacionSECTOR2_FONDO_norte_ALTO, $filaSECTOR2_FONDO_norte_ALTO['ocupacion']);
     }

       //Para sacar asientos SECTOR3_FONDO_norte_ALTO -->
       $idSECTOR3_FONDO_norte_ALTO=[];
      $filasSECTOR3_FONDO_norte_ALTO=[];
      $asientosSECTOR3_FONDO_norte_ALTO=[];
      $ocupacionSECTOR3_FONDO_norte_ALTO=[];
         $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector3_Fondo_norte_Alto'";
          foreach ($miDB->query($sql) as $filaSECTOR3_FONDO_norte_ALTO) {
            array_push($idSECTOR3_FONDO_norte_ALTO, $filaSECTOR3_FONDO_norte_ALTO['id']);
            array_push($filasSECTOR3_FONDO_norte_ALTO, $filaSECTOR3_FONDO_norte_ALTO['fila']);
            array_push($asientosSECTOR3_FONDO_norte_ALTO, $filaSECTOR3_FONDO_norte_ALTO['asiento']);
            array_push($ocupacionSECTOR3_FONDO_norte_ALTO, $filaSECTOR3_FONDO_norte_ALTO['ocupacion']);
         }

                //Para sacar asientos SECTOR4_FONDO_norte_ALTO 
        $idSECTOR4_FONDO_norte_ALTO=[];
        $filasSECTOR4_FONDO_norte_ALTO=[];
        $asientosSECTOR4_FONDO_norte_ALTO=[];
        $ocupacionSECTOR4_FONDO_norte_ALTO=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector4_Fondo_norte_Alto'";
            foreach ($miDB->query($sql) as $filaSECTOR4_FONDO_norte_ALTO) {
              array_push($idSECTOR4_FONDO_norte_ALTO, $filaSECTOR4_FONDO_norte_ALTO['id']);
              array_push($filasSECTOR4_FONDO_norte_ALTO, $filaSECTOR4_FONDO_norte_ALTO['fila']);
              array_push($asientosSECTOR4_FONDO_norte_ALTO, $filaSECTOR4_FONDO_norte_ALTO['asiento']);
              array_push($ocupacionSECTOR4_FONDO_norte_ALTO, $filaSECTOR4_FONDO_norte_ALTO['ocupacion']);
            }   

            //Para sacar asientos SECTOR5_FONDO_norte_ALTO
        $idSECTOR5_FONDO_norte_ALTO=[];
        $filasSECTOR5_FONDO_norte_ALTO=[];
        $asientosSECTOR5_FONDO_norte_ALTO=[];
        $ocupacionSECTOR5_FONDO_norte_ALTO=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector5_Fondo_norte_Alto'";
            foreach ($miDB->query($sql) as $filaSECTOR5_FONDO_norte_ALTO) {
              array_push($idSECTOR5_FONDO_norte_ALTO, $filaSECTOR5_FONDO_norte_ALTO['id']);
              array_push($filasSECTOR5_FONDO_norte_ALTO, $filaSECTOR5_FONDO_norte_ALTO['fila']);
              array_push($asientosSECTOR5_FONDO_norte_ALTO, $filaSECTOR5_FONDO_norte_ALTO['asiento']);
              array_push($ocupacionSECTOR5_FONDO_norte_ALTO, $filaSECTOR5_FONDO_norte_ALTO['ocupacion']);
            }       

            
            //Para sacar asientos SECTOR6_FONDO_norte_ALTO
        $idSECTOR6_FONDO_norte_ALTO=[];
        $filasSECTOR6_FONDO_norte_ALTO=[];
        $asientosSECTOR6_FONDO_norte_ALTO=[];
        $ocupacionSECTOR6_FONDO_norte_ALTO=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector6_Fondo_norte_Alto'";
            foreach ($miDB->query($sql) as $filaSECTOR6_FONDO_norte_ALTO) {
              array_push($idSECTOR6_FONDO_norte_ALTO, $filaSECTOR6_FONDO_norte_ALTO['id']);
              array_push($filasSECTOR6_FONDO_norte_ALTO, $filaSECTOR6_FONDO_norte_ALTO['fila']);
              array_push($asientosSECTOR6_FONDO_norte_ALTO, $filaSECTOR6_FONDO_norte_ALTO['asiento']);
              array_push($ocupacionSECTOR6_FONDO_norte_ALTO, $filaSECTOR6_FONDO_norte_ALTO['ocupacion']);
            }       

            //Para sacar asientos SECTOR7_FONDO_norte_ALTO
            $idSECTOR7_FONDO_norte_ALTO=[];
            $filasSECTOR7_FONDO_norte_ALTO=[];
            $asientosSECTOR7_FONDO_norte_ALTO=[];
            $ocupacionSECTOR7_FONDO_norte_ALTO=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector7_Fondo_norte_Alto'";
            foreach ($miDB->query($sql) as $filaSECTOR7_FONDO_norte_ALTO) {
              array_push($idSECTOR7_FONDO_norte_ALTO, $filaSECTOR7_FONDO_norte_ALTO['id']);
              array_push($filasSECTOR7_FONDO_norte_ALTO, $filaSECTOR7_FONDO_norte_ALTO['fila']);
              array_push($asientosSECTOR7_FONDO_norte_ALTO, $filaSECTOR7_FONDO_norte_ALTO['asiento']);
              array_push($ocupacionSECTOR7_FONDO_norte_ALTO, $filaSECTOR7_FONDO_norte_ALTO['ocupacion']);
            }       

   ?>
<script>
  function clickaction( b ){
 
   
	// Accion por defecto para Buttons;
  if(b.id=='Sector1_Fondo_norte_Alto'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector1 Fondo Norte Alto';
    var arrayJSidSECTOR1_FONDO_norte_ALTO=<?php echo json_encode($idSECTOR1_FONDO_norte_ALTO);?>;
    var arrayJSfilasSECTOR1_FONDO_norte_ALTO=<?php echo json_encode($filasSECTOR1_FONDO_norte_ALTO);?>;
    var arrayJSasientosSECTOR1_FONDO_norte_ALTO=<?php echo json_encode($asientosSECTOR1_FONDO_norte_ALTO);?>;
    var arrayJSocupacionSECTOR1_FONDO_norte_ALTO=<?php echo json_encode($ocupacionSECTOR1_FONDO_norte_ALTO);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR1_FONDO_norte_ALTO ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR1_FONDO_norte_ALTO[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR1_FONDO_norte_ALTO[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR1_FONDO_norte_ALTO[$i]+'_'+arrayJSfilasSECTOR1_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR1_FONDO_norte_ALTO[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR1_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR1_FONDO_norte_ALTO[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

 if(b.id=='Sector2_Fondo_norte_Alto'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector2 Fondo Norte Alto';
    var arrayJSidSECTOR2_FONDO_norte_ALTO=<?php echo json_encode($idSECTOR2_FONDO_norte_ALTO);?>;
    var arrayJSfilasSECTOR2_FONDO_norte_ALTO=<?php echo json_encode($filasSECTOR2_FONDO_norte_ALTO);?>;
    var arrayJSasientosSECTOR2_FONDO_norte_ALTO=<?php echo json_encode($asientosSECTOR2_FONDO_norte_ALTO);?>;
    var arrayJSocupacionSECTOR2_FONDO_norte_ALTO=<?php echo json_encode($ocupacionSECTOR2_FONDO_norte_ALTO);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR2_FONDO_norte_ALTO ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR2_FONDO_norte_ALTO[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_FONDO_norte_ALTO[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR2_FONDO_norte_ALTO[$i]== 'Libre'){
        document.getElementById('parent1').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR2_FONDO_norte_ALTO[$i]+'_'+arrayJSfilasSECTOR2_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR2_FONDO_norte_ALTO[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent1').innerHTML+='<div  id="'+arrayJSfilasSECTOR2_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR2_FONDO_norte_ALTO[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"</div>';

      }
    }  
    }

    if(b.id=='Sector3_Fondo_norte_Alto'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector3 Fondo Norte Alto';
    var arrayJSidSECTOR3_FONDO_norte_ALTO=<?php echo json_encode($idSECTOR3_FONDO_norte_ALTO);?>;
    var arrayJSfilasSECTOR3_FONDO_norte_ALTO=<?php echo json_encode($filasSECTOR3_FONDO_norte_ALTO);?>;
    var arrayJSasientosSECTOR3_FONDO_norte_ALTO=<?php echo json_encode($asientosSECTOR3_FONDO_norte_ALTO);?>;
    var arrayJSocupacionSECTOR3_FONDO_norte_ALTO=<?php echo json_encode($ocupacionSECTOR3_FONDO_norte_ALTO);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR3_FONDO_norte_ALTO ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR3_FONDO_norte_ALTO[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_FONDO_norte_ALTO[0])*max;
  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR3_FONDO_norte_ALTO[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR3_FONDO_norte_ALTO[$i]+'_'+arrayJSfilasSECTOR3_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR3_FONDO_norte_ALTO[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent1').innerHTML+='<div  id="'+arrayJSfilasSECTOR3_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR3_FONDO_norte_ALTO[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"</div>';

      }
    }  
    }

    if(b.id=='Sector4_Fondo_norte_Alto'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector4 Fondo norte Alto';
    var arrayJSidSECTOR4_FONDO_norte_ALTO=<?php echo json_encode($idSECTOR4_FONDO_norte_ALTO);?>;
    var arrayJSfilasSECTOR4_FONDO_norte_ALTO=<?php echo json_encode($filasSECTOR4_FONDO_norte_ALTO);?>;
    var arrayJSasientosSECTOR4_FONDO_norte_ALTO=<?php echo json_encode($asientosSECTOR4_FONDO_norte_ALTO);?>;
    var arrayJSocupacionSECTOR4_FONDO_norte_ALTO=<?php echo json_encode($ocupacionSECTOR4_FONDO_norte_ALTO);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR4_FONDO_norte_ALTO ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR4_FONDO_norte_ALTO[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_FONDO_norte_ALTO[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR4_FONDO_norte_ALTO[$i]== 'Libre'){
        document.getElementById('parent1').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR4_FONDO_norte_ALTO[$i]+'_'+arrayJSfilasSECTOR4_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR4_FONDO_norte_ALTO[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent1').innerHTML+='<div  id="'+arrayJSfilasSECTOR4_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR4_FONDO_norte_ALTO[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

    if(b.id=='Sector5_Fondo_norte_Alto'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector 5 Fondo norte Alto';
    var arrayJSidSECTOR5_FONDO_norte_ALTO=<?php echo json_encode($idSECTOR5_FONDO_norte_ALTO);?>;
    var arrayJSfilasSECTOR5_FONDO_norte_ALTO=<?php echo json_encode($filasSECTOR5_FONDO_norte_ALTO);?>;
    var arrayJSasientosSECTOR5_FONDO_norte_ALTO=<?php echo json_encode($asientosSECTOR5_FONDO_norte_ALTO);?>;
    var arrayJSocupacionSECTOR5_FONDO_norte_ALTO=<?php echo json_encode($ocupacionSECTOR5_FONDO_norte_ALTO);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR5_FONDO_norte_ALTO ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR5_FONDO_norte_ALTO[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_FONDO_norte_ALTO[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR5_FONDO_norte_ALTO[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR5_FONDO_norte_ALTO[$i]+'_'+arrayJSfilasSECTOR5_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR5_FONDO_norte_ALTO[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR5_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR5_FONDO_norte_ALTO[$i]+'" style="width:50px;height:35px;cursor:pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

    if(b.id=='Sector6_Fondo_norte_Alto'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector 6 Fondo norte Alto';
    var arrayJSidSECTOR6_FONDO_norte_ALTO=<?php echo json_encode($idSECTOR6_FONDO_norte_ALTO);?>;
    var arrayJSfilasSECTOR6_FONDO_norte_ALTO=<?php echo json_encode($filasSECTOR6_FONDO_norte_ALTO);?>;
    var arrayJSasientosSECTOR6_FONDO_norte_ALTO=<?php echo json_encode($asientosSECTOR6_FONDO_norte_ALTO);?>;
    var arrayJSocupacionSECTOR6_FONDO_norte_ALTO=<?php echo json_encode($ocupacionSECTOR6_FONDO_norte_ALTO);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR6_FONDO_norte_ALTO ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR6_FONDO_norte_ALTO[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_FONDO_norte_ALTO[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR6_FONDO_norte_ALTO[$i]== 'Libre'){
        document.getElementById('parent1').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR6_FONDO_norte_ALTO[$i]+'_'+arrayJSfilasSECTOR6_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR6_FONDO_norte_ALTO[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent1').innerHTML+='<div  id="'+arrayJSfilasSECTOR6_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR6_FONDO_norte_ALTO[$i]+'" style="cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

    if(b.id=='Sector7_Fondo_norte_Alto'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector7 Fondo Norte Alto';
    var arrayJSidSECTOR7_FONDO_norte_ALTO=<?php echo json_encode($idSECTOR7_FONDO_norte_ALTO);?>;
    var arrayJSfilasSECTOR7_FONDO_norte_ALTO=<?php echo json_encode($filasSECTOR7_FONDO_norte_ALTO);?>;
    var arrayJSasientosSECTOR7_FONDO_norte_ALTO=<?php echo json_encode($asientosSECTOR7_FONDO_norte_ALTO);?>;
    var arrayJSocupacionSECTOR7_FONDO_norte_ALTO=<?php echo json_encode($ocupacionSECTOR7_FONDO_norte_ALTO);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR7_FONDO_norte_ALTO ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR7_FONDO_norte_ALTO[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR7_FONDO_norte_ALTO[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR7_FONDO_norte_ALTO[$i]+'_'+arrayJSfilasSECTOR7_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR7_FONDO_norte_ALTO[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR7_FONDO_norte_ALTO[$i]+'_'+arrayJSasientosSECTOR7_FONDO_norte_ALTO[$i]+'" style="width:50px;height:35px;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

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
                          <img src="../images/LosCarmenes/fondo_norte_alto.png" usemap="#image-map">
                          <map name="image-map">
                            <area target="" alt="Sector1_Fondo_Norte_Alto" id="Sector1_Fondo_norte_Alto" title="Sector1_Fondo_Norte_Alto" onclick=clickaction(this) coords="47,54,243,41,236,180,36,198" shape="poly">
                            <area target="" alt="Sector2_Fondo_Norte_Alto" id="Sector2_Fondo_norte_Alto" title="Sector2_Fondo_Norte_Alto" onclick=clickaction(this) coords="270,41,355,36,351,81,265,83" shape="poly">
                            <area target="" alt="Sector3_Fondo_Norte_Alto" id="Sector3_Fondo_norte_Alto" title="Sector3_Fondo_Norte_Alto" onclick=clickaction(this) coords="371,176,612,167,612,34,378,36" shape="poly">
                            <area target="" alt="Sector4_Fondo_Norte_Alto" id="Sector4_Fondo_norte_Alto" title="Sector4_Fondo_Norte_Alto" onclick=clickaction(this) coords="641,32,641,72,724,72,722,32" shape="poly">
                            <area target="" alt="Sector5_Fondo_Norte_Alto" id="Sector5_Fondo_norte_Alto" title="Sector5_Fondo_Norte_Alto" onclick=clickaction(this) coords="744,171,983,173,978,36,744,29" shape="poly">
                            <area target="" alt="Sector6_Fondo_Norte_Alto" id="Sector6_Fondo_norte_Alto" title="Sector6_Fondo_Norte_Alto" onclick=clickaction(this) coords="1007,83,1091,83,1088,45,1005,38" shape="poly">
                            <area target="" alt="Sector7_Fondo_Norte_Alto" id="Sector7_Fondo_norte_Alto" title="Sector7_Fondo_Norte_Alto" onclick=clickaction(this) coords="1118,45,1280,59,1284,200,1124,185" shape="poly">
                        </map>
                          </div>
                          <form id="formulario" method="POST" action="fondo_norte_alto.php" enctype="multipart/form-data">
                          <div id="parent"></div>
                          <div id="parent1"></div>
                          <input type="hidden" name="fila" id="fila">
                          <input type="hidden" name="asiento" id="asiento">
                          <input type="hidden" name="idasiento" id="idasiento">
                          <input type="hidden" name="zona" id="zona" value="Fondo Norte Alto">

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
                            <a href="estadio.php"><input class="btn btn--radius btn" href="estadio.php" type="submit" value="Volver atrás" style="background-color:red; !important color:white; !important"></button>
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

