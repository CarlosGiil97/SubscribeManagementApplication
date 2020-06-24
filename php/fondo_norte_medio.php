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
  <meta name="viewport" content="width=device-width, initial-scale=0">

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
/* .card-2 .card-body {
    
    padding: 0px 0px !important;
} */
#parent {
display: grid;
grid-template-columns: repeat(20, 1fr);
grid-template-rows: repeat(7, 1fr);
grid-column-gap: 2px;
grid-row-gap: 2px;
}



#holiwis:hover{
  border:2px solid black;
  background-color:yellow;
}
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

        </a><img src="../images/granada.png" width="50px" height="50px">
				<nav> 
					
				</nav>
            </header>
            <div id="heading2" >
                <h1 style="color:black;"> CAMPAÑA DE ABONOS 2019/2020</h1>
               
            </div>
</header>
<!-- //Para sacar asientos SECTOR1_Fondo_Norte_Medio -->
<?php
$idSECTOR1_Fondo_Norte_Medio=[];
$filasSECTOR1_Fondo_Norte_Medio=[];
$asientosSECTOR1_Fondo_Norte_Medio=[];
$ocupacionSECTOR1_Fondo_Norte_Medio=[];

     $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector1_Fondo_Norte_Medio'";
      foreach ($miDB->query($sql) as $filaSECTOR1_Fondo_Norte_Medio) {
        array_push($idSECTOR1_Fondo_Norte_Medio, $filaSECTOR1_Fondo_Norte_Medio['id']);
        array_push($filasSECTOR1_Fondo_Norte_Medio, $filaSECTOR1_Fondo_Norte_Medio['fila']);
        array_push($asientosSECTOR1_Fondo_Norte_Medio, $filaSECTOR1_Fondo_Norte_Medio['asiento']);
        array_push($ocupacionSECTOR1_Fondo_Norte_Medio, $filaSECTOR1_Fondo_Norte_Medio['ocupacion']);
     }
  
    //Para sacar asientos SECTOR2_Fondo_Norte_Medio -->
    $idSECTOR2_Fondo_Norte_Medio=[];
    $filasSECTOR2_Fondo_Norte_Medio=[];
$asientosSECTOR2_Fondo_Norte_Medio=[];
$ocupacionSECTOR2_Fondo_Norte_Medio=[];
     $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector2_Fondo_Norte_Medio'";
      foreach ($miDB->query($sql) as $filaSECTOR2_Fondo_Norte_Medio) {
        array_push($idSECTOR2_Fondo_Norte_Medio, $filaSECTOR2_Fondo_Norte_Medio['id']);
        array_push($filasSECTOR2_Fondo_Norte_Medio, $filaSECTOR2_Fondo_Norte_Medio['fila']);
        array_push($asientosSECTOR2_Fondo_Norte_Medio, $filaSECTOR2_Fondo_Norte_Medio['asiento']);
        array_push($ocupacionSECTOR2_Fondo_Norte_Medio, $filaSECTOR2_Fondo_Norte_Medio['ocupacion']);
     }

       //Para sacar asientos SECTOR3_Fondo_Norte_Medio -->
       $idSECTOR3_Fondo_Norte_Medio=[];
      $filasSECTOR3_Fondo_Norte_Medio=[];
      $asientosSECTOR3_Fondo_Norte_Medio=[];
      $ocupacionSECTOR3_Fondo_Norte_Medio=[];
         $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector3_Fondo_Norte_Medio'";
          foreach ($miDB->query($sql) as $filaSECTOR3_Fondo_Norte_Medio) {
            array_push($idSECTOR3_Fondo_Norte_Medio, $filaSECTOR3_Fondo_Norte_Medio['id']);
            array_push($filasSECTOR3_Fondo_Norte_Medio, $filaSECTOR3_Fondo_Norte_Medio['fila']);
            array_push($asientosSECTOR3_Fondo_Norte_Medio, $filaSECTOR3_Fondo_Norte_Medio['asiento']);
            array_push($ocupacionSECTOR3_Fondo_Norte_Medio, $filaSECTOR3_Fondo_Norte_Medio['ocupacion']);
         }

                //Para sacar asientos SECTOR4_Fondo_Norte_Medio 
        $idSECTOR4_Fondo_Norte_Medio=[];
        $filasSECTOR4_Fondo_Norte_Medio=[];
        $asientosSECTOR4_Fondo_Norte_Medio=[];
        $ocupacionSECTOR4_Fondo_Norte_Medio=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector4_Fondo_Norte_Medio'";
            foreach ($miDB->query($sql) as $filaSECTOR4_Fondo_Norte_Medio) {
              array_push($idSECTOR4_Fondo_Norte_Medio, $filaSECTOR4_Fondo_Norte_Medio['id']);
              array_push($filasSECTOR4_Fondo_Norte_Medio, $filaSECTOR4_Fondo_Norte_Medio['fila']);
              array_push($asientosSECTOR4_Fondo_Norte_Medio, $filaSECTOR4_Fondo_Norte_Medio['asiento']);
              array_push($ocupacionSECTOR4_Fondo_Norte_Medio, $filaSECTOR4_Fondo_Norte_Medio['ocupacion']);
            }   

            //Para sacar asientos SECTOR5_Fondo_Norte_Medio
        $idSECTOR5_Fondo_Norte_Medio=[];
        $filasSECTOR5_Fondo_Norte_Medio=[];
        $asientosSECTOR5_Fondo_Norte_Medio=[];
        $ocupacionSECTOR5_Fondo_Norte_Medio=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector5_Fondo_Norte_Medio'";
            foreach ($miDB->query($sql) as $filaSECTOR5_Fondo_Norte_Medio) {
              array_push($idSECTOR5_Fondo_Norte_Medio, $filaSECTOR5_Fondo_Norte_Medio['id']);
              array_push($filasSECTOR5_Fondo_Norte_Medio, $filaSECTOR5_Fondo_Norte_Medio['fila']);
              array_push($asientosSECTOR5_Fondo_Norte_Medio, $filaSECTOR5_Fondo_Norte_Medio['asiento']);
              array_push($ocupacionSECTOR5_Fondo_Norte_Medio, $filaSECTOR5_Fondo_Norte_Medio['ocupacion']);
            }       

            
            //Para sacar asientos SECTOR6_Fondo_Norte_Medio
        $idSECTOR6_Fondo_Norte_Medio=[];
        $filasSECTOR6_Fondo_Norte_Medio=[];
        $asientosSECTOR6_Fondo_Norte_Medio=[];
        $ocupacionSECTOR6_Fondo_Norte_Medio=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector6_Fondo_Norte_Medio'";
            foreach ($miDB->query($sql) as $filaSECTOR6_Fondo_Norte_Medio) {
              array_push($idSECTOR6_Fondo_Norte_Medio, $filaSECTOR6_Fondo_Norte_Medio['id']);
              array_push($filasSECTOR6_Fondo_Norte_Medio, $filaSECTOR6_Fondo_Norte_Medio['fila']);
              array_push($asientosSECTOR6_Fondo_Norte_Medio, $filaSECTOR6_Fondo_Norte_Medio['asiento']);
              array_push($ocupacionSECTOR6_Fondo_Norte_Medio, $filaSECTOR6_Fondo_Norte_Medio['ocupacion']);
            }       

            //Para sacar asientos SECTOR7_Fondo_Norte_Medio
            $idSECTOR7_Fondo_Norte_Medio=[];
            $filasSECTOR7_Fondo_Norte_Medio=[];
            $asientosSECTOR7_Fondo_Norte_Medio=[];
            $ocupacionSECTOR7_Fondo_Norte_Medio=[];
            $sql="SELECT id,fila,asiento,ocupacion FROM asientos WHERE sector = 'Sector7_Fondo_Norte_Medio'";
            foreach ($miDB->query($sql) as $filaSECTOR7_Fondo_Norte_Medio) {
              array_push($idSECTOR7_Fondo_Norte_Medio, $filaSECTOR7_Fondo_Norte_Medio['id']);
              array_push($filasSECTOR7_Fondo_Norte_Medio, $filaSECTOR7_Fondo_Norte_Medio['fila']);
              array_push($asientosSECTOR7_Fondo_Norte_Medio, $filaSECTOR7_Fondo_Norte_Medio['asiento']);
              array_push($ocupacionSECTOR7_Fondo_Norte_Medio, $filaSECTOR7_Fondo_Norte_Medio['ocupacion']);
            }       

   ?>
<script>
  function clickaction( b ){
 
   
	// Accion por defecto para Buttons;
  if(b.id=='Sector1_Fondo_Norte_Medio'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector1 Fondo Norte Medio';
    var arrayJSidSECTOR1_Fondo_Norte_Medio=<?php echo json_encode($idSECTOR1_Fondo_Norte_Medio);?>;
    var arrayJSfilasSECTOR1_Fondo_Norte_Medio=<?php echo json_encode($filasSECTOR1_Fondo_Norte_Medio);?>;
    var arrayJSasientosSECTOR1_Fondo_Norte_Medio=<?php echo json_encode($asientosSECTOR1_Fondo_Norte_Medio);?>;
    var arrayJSocupacionSECTOR1_Fondo_Norte_Medio=<?php echo json_encode($ocupacionSECTOR1_Fondo_Norte_Medio);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR1_Fondo_Norte_Medio ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR1_Fondo_Norte_Medio[0];  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR1_Fondo_Norte_Medio[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR1_Fondo_Norte_Medio[$i]+'_'+arrayJSfilasSECTOR1_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR1_Fondo_Norte_Medio[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR1_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR1_Fondo_Norte_Medio[$i]+'" style="border:1px solid black;width:50px;height:35px;background-color:red;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

 if(b.id=='Sector2_Fondo_Norte_Medio'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector2 Fondo Norte Medio';
    var arrayJSidSECTOR2_Fondo_Norte_Medio=<?php echo json_encode($idSECTOR2_Fondo_Norte_Medio);?>;
    var arrayJSfilasSECTOR2_Fondo_Norte_Medio=<?php echo json_encode($filasSECTOR2_Fondo_Norte_Medio);?>;
    var arrayJSasientosSECTOR2_Fondo_Norte_Medio=<?php echo json_encode($asientosSECTOR2_Fondo_Norte_Medio);?>;
    var arrayJSocupacionSECTOR2_Fondo_Norte_Medio=<?php echo json_encode($ocupacionSECTOR2_Fondo_Norte_Medio);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR2_Fondo_Norte_Medio ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR2_Fondo_Norte_Medio[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_Fondo_Norte_Medio[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR2_Fondo_Norte_Medio[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR2_Fondo_Norte_Medio[$i]+'_'+arrayJSfilasSECTOR2_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR2_Fondo_Norte_Medio[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR2_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR2_Fondo_Norte_Medio[$i]+'" style="border:1px solid black;width:50px;height:35px;background-color:red;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

    if(b.id=='Sector3_Fondo_Norte_Medio'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector3 Fondo Norte Medio';
    var arrayJSidSECTOR3_Fondo_Norte_Medio=<?php echo json_encode($idSECTOR3_Fondo_Norte_Medio);?>;
    var arrayJSfilasSECTOR3_Fondo_Norte_Medio=<?php echo json_encode($filasSECTOR3_Fondo_Norte_Medio);?>;
    var arrayJSasientosSECTOR3_Fondo_Norte_Medio=<?php echo json_encode($asientosSECTOR3_Fondo_Norte_Medio);?>;
    var arrayJSocupacionSECTOR3_Fondo_Norte_Medio=<?php echo json_encode($ocupacionSECTOR3_Fondo_Norte_Medio);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR3_Fondo_Norte_Medio ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR3_Fondo_Norte_Medio[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_Fondo_Norte_Medio[0])*max;
  
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR3_Fondo_Norte_Medio[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR3_Fondo_Norte_Medio[$i]+'_'+arrayJSfilasSECTOR3_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR3_Fondo_Norte_Medio[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR3_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR3_Fondo_Norte_Medio[$i]+'" style="border:1px solid black;width:50px;height:35px;background-color:red;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

    if(b.id=='Sector4_Fondo_Norte_Medio'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector4 Fondo Norte Medio';
    var arrayJSidSECTOR4_Fondo_Norte_Medio=<?php echo json_encode($idSECTOR4_Fondo_Norte_Medio);?>;
    var arrayJSfilasSECTOR4_Fondo_Norte_Medio=<?php echo json_encode($filasSECTOR4_Fondo_Norte_Medio);?>;
    var arrayJSasientosSECTOR4_Fondo_Norte_Medio=<?php echo json_encode($asientosSECTOR4_Fondo_Norte_Medio);?>;
    var arrayJSocupacionSECTOR4_Fondo_Norte_Medio=<?php echo json_encode($ocupacionSECTOR4_Fondo_Norte_Medio);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR4_Fondo_Norte_Medio ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR4_Fondo_Norte_Medio[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_Fondo_Norte_Medio[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR4_Fondo_Norte_Medio[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR4_Fondo_Norte_Medio[$i]+'_'+arrayJSfilasSECTOR4_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR4_Fondo_Norte_Medio[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';
      }else{
        document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR4_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR4_Fondo_Norte_Medio[$i]+'" style="border:1px solid black;width:50px;height:35px;background-color:red;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

    if(b.id=='Sector5_Fondo_Norte_Medio'){
    document.getElementById('mapa').style.display='none';
    document.getElementById('titulo').innerHTML='Sector 5 Fondo Norte Medio';
    var arrayJSidSECTOR5_Fondo_Norte_Medio=<?php echo json_encode($idSECTOR5_Fondo_Norte_Medio);?>;
    var arrayJSfilasSECTOR5_Fondo_Norte_Medio=<?php echo json_encode($filasSECTOR5_Fondo_Norte_Medio);?>;
    var arrayJSasientosSECTOR5_Fondo_Norte_Medio=<?php echo json_encode($asientosSECTOR5_Fondo_Norte_Medio);?>;
    var arrayJSocupacionSECTOR5_Fondo_Norte_Medio=<?php echo json_encode($ocupacionSECTOR5_Fondo_Norte_Medio);?>;
    var maxAsientos = Math.max.apply(null,arrayJSasientosSECTOR5_Fondo_Norte_Medio ); 
    numerodeasientostotales=maxAsientos*arrayJSfilasSECTOR5_Fondo_Norte_Medio[0];                                                                                                                                                                              
    // asientostotales = intval(arrayJSfilasSECTOR2_Fondo_Norte_Medio[0])*max;
    
    for($i=0;$i<numerodeasientostotales;$i++){
      if(arrayJSocupacionSECTOR5_Fondo_Norte_Medio[$i]== 'Libre'){
        document.getElementById('parent').innerHTML+='<div  style=";width:50px;height:35px;text-align:center;" ><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" onclick="prueba(this)"  id="'+arrayJSidSECTOR5_Fondo_Norte_Medio[$i]+'_'+arrayJSfilasSECTOR5_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR5_Fondo_Norte_Medio[$i]+'" width=50px height=50px src="../images/libre.png" ></div>';     
         }else{
          document.getElementById('parent').innerHTML+='<div  id="'+arrayJSfilasSECTOR5_Fondo_Norte_Medio[$i]+'_'+arrayJSasientosSECTOR5_Fondo_Norte_Medio[$i]+'" style="border:1px solid black;width:50px;height:35px;background-color:red;cursor: pointer;text-align:center;" disabled="true"><img onmouseleave="salediv(this)" onmouseover="entradiv(this)" width=50px height=50px src="../images/ocupado.png"></div>';

      }
    }  
    }

	}
  function prueba(x){
    document.getElementById(x.id).style.background = "blue";
    document.getElementById(x.id).style.border = "3px solid black";
    
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
            <div class="card card-2" style="margin-left: 5%; !important">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" id="titulo"></h2>
                   <div id="mapa">
                          <img src="../images/LosCarmenes/Fondo_Norte_Medio.png" usemap="#image-map">
                          <map name="image-map">
                                <area target="" id="Sector1_Fondo_Norte_Medio" onclick=clickaction(this) alt="Sector1_Fondo_Norte_Medio" title="Sector1_Fondo_Norte_Medio"  coords="56,154,278,138,280,34,59,49" shape="poly">
                                <area target="" id="Sector2_Fondo_Norte_Medio" onclick=clickaction(this) alt="Sector2_Fondo_Norte_Medio" title="Sector2_Fondo_Norte_Medio"  coords="309,136,532,127,535,27,313,34" shape="poly">
                                <area target="" id="Sector3_Fondo_Norte_Medio" onclick=clickaction(this) alt="Sector3_Fondo_Norte_Medio" title="Sector3_Fondo_Norte_Medio"  coords="558,125,806,134,806,29,561,25" shape="poly">
                                <area target="" id="Sector4_Fondo_Norte_Medio" onclick=clickaction(this) alt="Sector4_Fondo_Norte_Medio" title="Sector4_Fondo_Norte_Medio"  coords="834,29,1054,42,1056,143,832,134,832,73,832,53" shape="poly">
                                <area target="" id="Sector5_Fondo_Norte_Medio" onclick=clickaction(this) alt="Sector5_Fondo_Norte_Medio" title="Sector5_Fondo_Norte_Medio"  coords="1091,145,1271,165,1269,62,1086,45" shape="poly">
                        </map>
                          </div>
                          <form id="formulario" method="POST" action="Fondo_Norte_Medio.php" enctype="multipart/form-data">
                          <div id="parent"></div>
                          
                          <input type="hidden" name="fila" id="fila">
                          <input type="hidden" name="asiento" id="asiento">
                          <input type="hidden" name="idasiento" id="idasiento">
                          <input type="hidden" name="zona" id="zona" value="Fondo Norte Medio">

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
                    echo "<label>Contraseña:</label> <input type='password' value='".$_SESSION['datos']['contrasena']."' placeholder='".$_SESSION['datos']['contrasena']."' name='contrasenaFINAL'>";
                    echo "<label>Telefono:</label> <input type='number' value='".$_SESSION['datos']['telefono']."' placeholder='".$_SESSION['datos']['telefono']."' name='telefonoFINAL'>";
                    echo "<label>Calle:</label> <input type='text' value='".$_SESSION['datos']['calle']."' placeholder='".$_SESSION['datos']['calle']."' name='calleFINAL'>";
                    echo "<label>Numero:</label> <input type='number' value='".$_SESSION['datos']['numero']."' placeholder='".$_SESSION['datos']['numero']."' name='numeroFINAL'>";
                    echo "<label>Piso:</label> <input type='number' value='".$_SESSION['datos']['piso']."' placeholder='".$_SESSION['datos']['piso']."' name='pisoFINAL'>";
                    echo "<label>Codigo Postal:</label> <input type='number' value='".$_SESSION['datos']['codigo_postal']."' placeholder='".$_SESSION['datos']['codigo_postal']."' name='codigo_postalFINAL'>";
                    echo "<label>Localidad:</label> <input type='text' value='".$_SESSION['datos']['localidad']."' placeholder='".$_SESSION['datos']['localidad']."' name='localidadFINAL'>";
                    echo "<label>Provincia:</label> <input type='text' value='".$_SESSION['datos']['provincia']."' placeholder='".$_SESSION['datos']['provincia']."' name='provinciaFINAL'>";
                    echo "<label>Categoria Abono:</label> <input type='text' value='".$_SESSION['datos']['categoria_abono']."' placeholder='".$_SESSION['datos']['categoria_abono']."' name='categoria_abonoFINAL'>";
                   
                    echo "<h4 style='margin-top:7%;'>Usted será el Nº Abonado:".sacarUltimoNumeroAbonado($con)."📊</h4>";
                  
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

