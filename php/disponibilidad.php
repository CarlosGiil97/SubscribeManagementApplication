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

</head>
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


.grid-container1 {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas: "Arriba Arriba Arriba Arriba" "izquierda izquierda derecha derecha";
}

.Arriba { grid-area: Arriba; width:100%; }

.izquierda { grid-area: izquierda; width:100%;  }

.derecha { grid-area: derecha; width:100%; }
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

.Preferencia_baja { grid-area: Preferencia_baja; background-color:#01165C;}
.Preferencia_media { grid-area: Preferencia_media; background-color:#2063AA; }
.Preferencia_alta { grid-area: Preferencia_alta; background-color:#ADDCF2;}
.Tribuna {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  grid-template-areas: "Tribuna_alta Tribuna_alta Tribuna_alta" "Tribuna_media Tribuna_media Tribuna_media" "Tribuna_baja Tribuna_baja Tribuna_baja";
  grid-area: Tribuna;
}

.Tribuna_baja { grid-area: Tribuna_baja; background-color:#1E5AFA;}

.Tribuna_media { grid-area: Tribuna_media; background-color:#5482FC;}

.Tribuna_alta { grid-area: Tribuna_alta; background-color:#91AFFD;}

.Fondo_Sur {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas: "Fondo_Sur_Alto Fondo_Sur_Medio Fondo_Sur_Bajo" "Fondo_Sur_Alto Fondo_Sur_Medio Fondo_Sur_Bajo";
  grid-area: Fondo_Sur;
  
}

.Fondo_Sur_Bajo { grid-area: Fondo_Sur_Bajo; background-color:#AA6939;}
.Fondo_Sur_Medio { grid-area: Fondo_Sur_Medio; background-color:#D4976A; }
.Fondo_Sur_Alto { grid-area: Fondo_Sur_Alto; background-color:#FFCEAA;}

.Fondo_Norte {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas: "Fondo_norte_Bajo Fondo_Norte_Medio Fondo_Norte_Alto" "Fondo_norte_Bajo Fondo_Norte_Medio Fondo_Norte_Alto";
  grid-area: Fondo_Norte;
}

.Fondo_norte_Bajo { grid-area: Fondo_norte_Bajo; background-color:#FFC719;}

.Fondo_Norte_Medio { grid-area: Fondo_Norte_Medio; background-color:#FDD75F;}

.Fondo_Norte_Alto { grid-area: Fondo_Norte_Alto; background-color:#FCE394;}

.Afición-Visitante { grid-area: Afición-Visitante;  background-color:#BB4196;}
.Esquina_A { grid-area: Esquina_A; background-color:#85FFB7;}
.Esquina_B { grid-area: Esquina_B; background-color:#FF7400;}
.Esquina_C { grid-area: Esquina_C; background-color:#C2F35E;}


div>h5{
  display:inline-block;
		vertical-align:middle;
		line-height:normal;
}
.grid-container1 {
  display: flex;
  margin: 2px;
  padding: 5px;
  flex-wrap: wrap;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  gap: 1px 2px;
  grid-template-areas: "A1 A2 A3 A4 A5 A6 A7 A8 A9 A10 A11 A12 A13 A14 A15" "A15 A16 A17 A18 A19 A20 A21 A22 A23 A24 A25 A26 A27 A28" "A29 A30 A31 A32 A33 A34 A35 A36 A37 A38 A39 A40 A41 A42" "A43 A44 A45 A46 A47 A48 A49 A50 A51 A52 A53 A54 A55 A56" "A57 A58 A59 A60 A61 A62 A63 A64 A65 A66 A67 A68 A69 A70" "A71 A72 A73 A74 A75 A76 A77 A78 A79 A80 A81 A82 A83 A84" "A85 A86 A87 A88 A89 A90 A91 A92 A93 A94 A95 A96 A97 A98" "A99 A100 A101 A102 A103 A104 A105 A106 A107 A108 A109 A110 A111 A112" "A113 A114 A115 A116 A117 A118 A119 A120 A121 A122 A123 A124 A125 A126" "A127 A128 A129 A130 A131 A132 A133 A134 A135 A136 A137 A138 A139 A140" "A141 A142 A143 A144 A145 A146 A147 A148 A149 A150 A151 A152 A153 A154" "A155 A156 A157 A158 A159 A160 A161 A162 A163 A164 A165 A166 A167 A168" "A169 A170 A171 A172 A173 A174 A175 A176 A177 A178 A179 A180 A181 A182" "A183 A184 A185 A186 A187 A188 A189 A190 A191 A192 A193 A194 A195 A196";
}
#borde{
  border:1px solid black;
  margin: 1px;
    width: 5%;
    height: 10px;
}
#borde_preferencia_baja{
  border:1px solid black;
  margin: 1px;
    width: 5%;
    height: 10px;
}
#borde_preferencia_media{
  border:1px solid black;
  margin: 1px;
    width: 5%;
    height: 10px;
}
#borde_preferencia_alta{
  border:1px solid black;
  margin: 1px;
    width: 5%;
    height: 10px;
}
#borde_tribuna_baja{
    border:1px solid black;
    margin: 1px;
    width: 5%;
    height: 10px;
}
#borde_tribuna_media{
    border:1px solid black;
    margin: 1px;
    width: 5%;
    height: 10px;
}
#borde_tribuna_alta{
    border:1px solid black;
    margin: 1px;
    width: 5%;
    height: 10px;
}
#borde_fondo_sur_bajo{
  border: 1px solid black;
    margin: 1px;
    width: 14%;
    height: 11px;
}
#borde_fondo_sur_medio{
  border: 1px solid black;
    margin: 1px;
    width: 14%;
    height: 11px;
}
#borde_fondo_sur_alto{
  border: 1px solid black;
    margin: 1px;
    width: 14%;
    height: 11px;
}
#borde_fondo_norte_alto{
  border: 1px solid black;
    margin: 1px;
    width: 14%;
    height: 11px;
}
#borde_fondo_norte_medio{
  border: 1px solid black;
    margin: 1px;
    width: 14%;
    height: 11px;
}
#borde_fondo_norte_bajo{
  border: 1px solid black;
    margin: 1px;
    width: 14%;
    height: 11px;
}
#borde_fondo_sur_alto:hover{
  border:2px solid ;
}
#borde_fondo_sur_bajo:hover{
  border:2px solid ;
}
#borde_fondo_sur_medio:hover{
  border:2px solid ;
}
#borde_fondo_norte_bajo:hover{
  border:2px solid ;
}
#borde_fondo_norte_medio:hover{
  border:2px solid ;
}
#borde_fondo_norte_alto:hover{
  border:2px solid ;
}
#borde_preferencia_baja:hover{
  border:2px solid ;
}
#borde_preferencia_media:hover{
  border:2px solid ;
}
#borde_preferencia_alta:hover{
  border:2px solid ;
}
#borde_tribuna_baja:hover{
  border:2px solid ;
}
#borde_tribuna_media:hover{
  border:2px solid ;
}
#borde_tribuna_alta:hover{
  border:2px solid ;
}
#bordeF{
  border: 1px solid black;
    margin: 1px;
    width: 14%;
    height: 11px;
}
#bordeE{
  border: 1px solid black;
    margin: 1px;
    width: 19%;
    height: 9px;
}
#bordeE_A{
  border: 1px solid black;
    margin: 1px;
    width: 19%;
    height: 9px;
}
#bordeE_B{
  border: 1px solid black;
    margin: 1px;
    width: 19%;
    height: 9px;
}
#bordeE_C{
  border: 1px solid black;
    margin: 1px;
    width: 19%;
    height: 9px;
}
#bordeE_A:hover{
  border:2px solid ;

}
#bordeE_B:hover{
  border:2px solid ;

}#bordeE_B:hover{
  border:2px solid ;

}
#bordeF:hover{
  border:2px solid ;
}
#bordeE:hover{
  border:2px solid ;
}
#borde:hover{
  border:2px solid ;
}

.A1 { grid-area: A1; }

.A2 { grid-area: A2; }

.A3 { grid-area: A3; }

.A4 { grid-area: A4; }

.A5 { grid-area: A5; }

.A6 { grid-area: A6; }

.A7 { grid-area: A7; }

.A8 { grid-area: A8; }

.A9 { grid-area: A9; }

.A10 { grid-area: A10; }

.A11 { grid-area: A11; }

.A12 { grid-area: A12; }

.A13 { grid-area: A13; }

.A14 { grid-area: A14; }

.A15 { grid-area: A15; }

.A16 { grid-area: A16; }

.A17 { grid-area: A17; }

.A18 { grid-area: A18; }

.A19 { grid-area: A19; }

.A20 { grid-area: A20; }

.A21 { grid-area: A21; }

.A22 { grid-area: A22; }

.A23 { grid-area: A23; }

.A24 { grid-area: A24; }

.A25 { grid-area: A25; }

.A26 { grid-area: A26; }

.A27 { grid-area: A27; }

.A28 { grid-area: A28; }

.A29 { grid-area: A29; }

.A30 { grid-area: A30; }

.A31 { grid-area: A31; }

.A32 { grid-area: A32; }

.A33 { grid-area: A33; }

.A34 { grid-area: A34; }

.A35 { grid-area: A35; }

.A36 { grid-area: A36; }

.A37 { grid-area: A37; }

.A38 { grid-area: A38; }

.A39 { grid-area: A39; }

.A40 { grid-area: A40; }

.A41 { grid-area: A41; }

.A42 { grid-area: A42; }

.A43 { grid-area: A43; }

.A44 { grid-area: A44; }

.A45 { grid-area: A45; }

.A46 { grid-area: A46; }

.A47 { grid-area: A47; }

.A48 { grid-area: A48; }

.A49 { grid-area: A49; }

.A50 { grid-area: A50; }

.A51 { grid-area: A51; }

.A52 { grid-area: A52; }

.A53 { grid-area: A53; }

.A54 { grid-area: A54; }

.A55 { grid-area: A55; }

.A56 { grid-area: A56; }

.A57 { grid-area: A57; }

.A58 { grid-area: A58; }

.A59 { grid-area: A59; }

.A60 { grid-area: A60; }

.A61 { grid-area: A61; }

.A62 { grid-area: A62; }

.A63 { grid-area: A63; }

.A64 { grid-area: A64; }

.A65 { grid-area: A65; }

.A66 { grid-area: A66; }

.A67 { grid-area: A67; }

.A68 { grid-area: A68; }

.A69 { grid-area: A69; }

.A70 { grid-area: A70; }

.A71 { grid-area: A71; }

.A72 { grid-area: A72; }

.A73 { grid-area: A73; }

.A74 { grid-area: A74; }

.A75 { grid-area: A75; }

.A76 { grid-area: A76; }

.A77 { grid-area: A77; }

.A78 { grid-area: A78; }

.A79 { grid-area: A79; }

.A80 { grid-area: A80; }

.A81 { grid-area: A81; }

.A82 { grid-area: A82; }

.A83 { grid-area: A83; }

.A84 { grid-area: A84; }

.A85 { grid-area: A85; }

.A86 { grid-area: A86; }

.A87 { grid-area: A87; }

.A88 { grid-area: A88; }

.A89 { grid-area: A89; }

.A90 { grid-area: A90; }

.A91 { grid-area: A91; }

.A92 { grid-area: A92; }

.A93 { grid-area: A93; }

.A94 { grid-area: A94; }

.A95 { grid-area: A95; }

.A96 { grid-area: A96; }

.A97 { grid-area: A97; }

.A98 { grid-area: A98; }

.A99 { grid-area: A99; }

.A100 { grid-area: A100; }

.A101 { grid-area: A101; }

.A102 { grid-area: A102; }

.A103 { grid-area: A103; }

.A104 { grid-area: A104; }

.A105 { grid-area: A105; }

.A106 { grid-area: A106; }

.A107 { grid-area: A107; }

.A108 { grid-area: A108; }

.A109 { grid-area: A109; }

.A110 { grid-area: A110; }

.A111 { grid-area: A111; }

.A112 { grid-area: A112; }

.A113 { grid-area: A113; }

.A114 { grid-area: A114; }

.A115 { grid-area: A115; }

.A116 { grid-area: A116; }

.A117 { grid-area: A117; }

.A118 { grid-area: A118; }

.A119 { grid-area: A119; }

.A120 { grid-area: A120; }

.A121 { grid-area: A121; }

.A122 { grid-area: A122; }

.A123 { grid-area: A123; }

.A124 { grid-area: A124; }

.A125 { grid-area: A125; }

.A126 { grid-area: A126; }

.A127 { grid-area: A127; }

.A128 { grid-area: A128; }

.A129 { grid-area: A129; }

.A130 { grid-area: A130; }

.A131 { grid-area: A131; }

.A132 { grid-area: A132; }

.A133 { grid-area: A133; }

.A134 { grid-area: A134; }

.A135 { grid-area: A135; }

.A136 { grid-area: A136; }

.A137 { grid-area: A137; }

.A138 { grid-area: A138; }

.A139 { grid-area: A139; }

.A140 { grid-area: A140; }

.A141 { grid-area: A141; }

.A142 { grid-area: A142; }

.A143 { grid-area: A143; }

.A144 { grid-area: A144; }

.A145 { grid-area: A145; }

.A146 { grid-area: A146; }

.A147 { grid-area: A147; }

.A148 { grid-area: A148; }

.A149 { grid-area: A149; }

.A150 { grid-area: A150; }

.A151 { grid-area: A151; }

.A152 { grid-area: A152; }

.A153 { grid-area: A153; }

.A154 { grid-area: A154; }

.A155 { grid-area: A155; }

.A156 { grid-area: A156; }

.A157 { grid-area: A157; }

.A158 { grid-area: A158; }

.A159 { grid-area: A159; }

.A160 { grid-area: A160; }

.A161 { grid-area: A161; }

.A162 { grid-area: A162; }

.A163 { grid-area: A163; }

.A164 { grid-area: A164; }

.A165 { grid-area: A165; }

.A166 { grid-area: A166; }

.A167 { grid-area: A167; }

.A168 { grid-area: A168; }

.A169 { grid-area: A169; }

.A170 { grid-area: A170; }

.A171 { grid-area: A171; }

.A172 { grid-area: A172; }

.A173 { grid-area: A173; }

.A174 { grid-area: A174; }

.A175 { grid-area: A175; }

.A176 { grid-area: A176; }

.A177 { grid-area: A177; }

.A178 { grid-area: A178; }

.A179 { grid-area: A179; }

.A180 { grid-area: A180; }

.A181 { grid-area: A181; }

.A182 { grid-area: A182; }

.A183 { grid-area: A183; }

.A184 { grid-area: A184; }

.A185 { grid-area: A185; }

.A186 { grid-area: A186; }

.A187 { grid-area: A187; }

.A188 { grid-area: A188; }

.A189 { grid-area: A189; }

.A190 { grid-area: A190; }

.A191 { grid-area: A191; }

.A192 { grid-area: A192; }

.A193 { grid-area: A193; }

.A194 { grid-area: A194; }

.A195 { grid-area: A195; }

.A196 { grid-area: A196; }
.A197 { grid-area: A197; }
.A198 { grid-area: A198; }
.A199 { grid-area: A199; }
.A200 { grid-area: A200; }
.A201 { grid-area: A201; }
.A202 { grid-area: A202; }
</style>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
<script type="text/javascript">
function carga_asientos_ocupados(){
  //cargar asientos ocupados Preferencia Baja
  var x = document.querySelectorAll("div#borde_preferencia_baja");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Preferencia Baja'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Preferencia_Baja']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Preferencia_Baja'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }
  //cargar asientos ocupados Preferencia Media
  var x = document.querySelectorAll("div#borde_preferencia_media");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Preferencia Media'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Preferencia_Media']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Preferencia_Media'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }
      //cargar asientos ocupados Preferencia Alta
      var x = document.querySelectorAll("div#borde_preferencia_alta");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Preferencia Alta'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Preferencia_Alta']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Preferencia_Alta'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

          //cargar asientos ocupados Tribuna Baja
          var x = document.querySelectorAll("div#borde_tribuna_baja");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Tribuna Baja'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Tribuna_Baja']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Tribuna_Baja'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

      //cargar asientos ocupados Tribuna Media
      var x = document.querySelectorAll("div#borde_tribuna_media");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Tribuna Media'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Tribuna_Media']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Tribuna_Media'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

      //cargar asientos ocupados Tribuna Alta
      var x = document.querySelectorAll("div#borde_tribuna_alta");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Tribuna Alta'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Tribuna_Alta']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Tribuna_Alta'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }
      //cargar asientos ocupados Fondo Sur Bajo
      var x = document.querySelectorAll("div#borde_fondo_sur_bajo");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Sur Bajo'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Fondo_Sur_Bajo']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Fondo_Sur_Bajo'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

    //cargar asientos ocupados Fondo Sur Medio
    var x = document.querySelectorAll("div#borde_fondo_sur_medio");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Sur Medio'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Fondo_Sur_Medio']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Fondo_Sur_Medio'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }
     //cargar asientos ocupados Fondo Sur Alto
     var x = document.querySelectorAll("div#borde_fondo_sur_alto");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Sur Alto'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Fondo_Sur_Alto']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Fondo_Sur_Alto'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

//cargar asientos ocupados Fondo Norte Bajo
var x = document.querySelectorAll("div#borde_fondo_norte_bajo");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Norte Bajo'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Fondo_Norte_Bajo']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Fondo_Norte_Bajo'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

//cargar asientos ocupados Fondo Norte Medio
var x = document.querySelectorAll("div#borde_fondo_norte_medio");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Norte Medio'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Fondo_Norte_Medio']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Fondo_Norte_Medio'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

    //cargar asientos ocupados Fondo Norte Alto
var x = document.querySelectorAll("div#borde_fondo_norte_alto");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Norte Alto'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Fondo_Norte_Alto']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Fondo_Norte_Alto'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

    
    //cargar asientos ocupados Esquina A
var x = document.querySelectorAll("div#bordeE_A");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Esquina A'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Esquina_A']= $fila['asientos'];         }
                ?>
                
  for(i=0;i< <?php echo $_SESSION['asientos']['Esquina_A'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

    //cargar asientos ocupados Esquina B
var x = document.querySelectorAll("div#bordeE_B");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Esquina B'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Esquina_B']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Esquina_B'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }

       //cargar asientos ocupados Esquina C
var x = document.querySelectorAll("div#bordeE_C");
  <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Esquina C'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Esquina_C']= $fila['asientos'];         }
                ?>
  for(i=0;i< <?php echo $_SESSION['asientos']['Esquina_C'];?>;i++){
        x[i].style.backgroundColor = 'red';
    }
}
</script>
<script>
function clickaction( b ){
    if(b.id =='Preferencia Baja'){
      
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Preferencia Baja'";
       foreach ($miDB->query($sql) as $fila) {
          //  print "Asientos ocupados: " .  $fila['pepe'] . "\n";
          $_SESSION['asientos']['Preferencia_Baja']= $fila['asientos'];         }
                ?>
          Swal.fire({
      title: 'Preferencia Baja!',
      text: '<?php echo $_SESSION['asientos']['Preferencia_Baja']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
  
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Preferencia Media'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Preferencia Media'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Preferencia_Media']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Preferencia Media!',
      text: '<?php echo $_SESSION['asientos']['Preferencia_Media']." asientos ocupados";?>',
      width:'750px',
      height:'500px',
      
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Preferencia Alta'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Preferencia Alta'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Preferencia_Alta']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Preferencia Alta!',
      text: '<?php echo $_SESSION['asientos']['Preferencia_Alta']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Tribuna Alta'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Tribuna Alta'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Tribuna_Alta']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Tribuna Alta!',
      text: '<?php echo $_SESSION['asientos']['Tribuna_Alta']." asientos ocupados";?>',
      width:'900px',
      height:'400px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Tribuna Media'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Tribuna Media'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Tribuna_Media']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Tribuna Media!',
      text: '<?php echo $_SESSION['asientos']['Tribuna_Media']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Tribuna Baja'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Tribuna Baja'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Tribuna_Baja']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Tribuna Baja!',
      text: '<?php echo $_SESSION['asientos']['Tribuna_Baja']." asientos ocupados";?>',
      width:'900px',
      height:'500px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Sur Bajo'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Sur Bajo'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Fondo Sur Bajo']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Fondo Sur Bajo!',
      text: '<?php echo $_SESSION['asientos']['Fondo Sur Bajo']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Sur Medio'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Sur Medio'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Fondo Sur Medio']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Fondo Sur Medio!',
      text: '<?php $vueltas=$_SESSION['asientos']['Fondo Sur Medio'];
              for ($i = 0; $i<$vueltas; $i++) {
                echo "<div>Hola</div>";
              }
              ?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Sur Alto'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Sur Alto'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Fondo Sur Alto']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Fondo Sur Alto!',
      text: '<?php echo $_SESSION['asientos']['Fondo Sur Alto']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Norte Alto'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Norte Alto'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Fondo Norte Alto']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Fondo Norte Alto!',
      text: '<?php echo $_SESSION['asientos']['Fondo Norte Alto']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Norte Medio'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Norte Medio'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Fondo Norte Medio']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Fondo Norte Medio!',
      text: '<?php echo $_SESSION['asientos']['Fondo Norte Medio']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Fondo Norte Bajo'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Fondo Norte Bajo'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Fondo Norte Bajo']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Fondo Norte Bajo!',
      text: '<?php echo $_SESSION['asientos']['Fondo Norte Bajo']." asientos ocupados";?>',
      width:'1100px',
      height:'450px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Esquina A'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Esquina A'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Esquina A']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Esquina A!',
      text: '<?php echo $_SESSION['asientos']['Esquina A']." asientos ocupados";?>',
      width:'900x',
      height:'500px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Esquina B'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Esquina B'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Esquina B']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Esquina B!',
      text: '<?php echo $_SESSION['asientos']['Esquina B']." asientos ocupados";?>',
      width:'623px',
      height:'385px',
    })
    document.getElementById('sector_elegido').value=b.id;
    }
    if(b.id =='Esquina C'){
      <?php $sql = "SELECT COUNT('id') as 'asientos' FROM abonados WHERE zona='Esquina C'";
       foreach ($miDB->query($sql) as $fila) {
                   $_SESSION['asientos']['Esquina C']= $fila['asientos'];         
      }?>
      Swal.fire({
      title: 'Esquina C!',
      text: '<?php echo $_SESSION['asientos']['Esquina C']." asientos ocupados";?>',
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
<body class="is-preload" onload="carga_asientos_ocupados()">

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
				<h1>DISPONIBILIDAD DE ASIENTOS</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper" >
				<div class="inner" style="width:100% !important;">
					<div class="content">
                    <div class="wrapper wrapper--w960" style="padding:0px !important;">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                <div clas="row" style="display:flex;" >
                <div class="col-2" >
                  <h5>Tribuna</h5>
                  <figure>
                    <img src="../images/color1.png"  width="39x" height="19px">
                    <figcaption>Tribuna Baja<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color2.png"  width="39x" height="19px">
                    <figcaption>Tribuna Media<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color3.png"  width="39x" height="19px">
                    <figcaption>Tribuna Alta<figcaption>
                  </figure>
                </div>
                <div class="col-2">
                  <h5>Preferencia</h5>
                  <figure>
                    <img src="../images/color4.png"  width="39x" height="19px">
                    <figcaption>Prefencia Baja<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color5.png"  width="39x" height="19px">
                    <figcaption>Preferencia Media<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color6.png"  width="39x" height="19px">
                    <figcaption>Preferencia Alta<figcaption>
                  </figure>
                </div>
                <div class="col-2">
                <h5>Fondo Sur</h5>
                  <figure>
                    <img src="../images/color7.png"  width="39x" height="19px">
                    <figcaption>Fondo Sur Bajo<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color8.png"  width="39x" height="19px">
                    <figcaption>Fondo Sur Medio<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color9.png"  width="39x" height="19px">
                    <figcaption>Fondo Sur Alto<figcaption>
                  </figure>
                </div>
                <div class="col-2">
                <h5>Fondo Norte</h5>
                  <figure>
                    <img src="../images/color10.png"  width="39x" height="19px">
                    <figcaption>Fondo Norte Bajo<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color11.png"  width="39x" height="19px">
                    <figcaption>Fondo Norte Medio<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color12.png"  width="39x" height="19px">
                    <figcaption>Fondo Norte Alto<figcaption>
                  </figure>
                </div>
                <div class="col-2">
                <h5>Esquinas</h5>
                  <figure>
                    <img src="../images/color13.png"  width="39x" height="19px">
                    <figcaption>Esquina A<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color14.png"  width="39x" height="19px">
                    <figcaption>Esquina B<figcaption>
                  </figure>
                  <figure>
                    <img src="../images/color15.png"  width="39x" height="19px">
                    <figcaption>Esquina C<figcaption>
                  </figure>
                </div>
                <div class="col-2">
                  <figure>
                    <img src="../images/granada.png"  width="50" height="60px">
                    <figcaption>Aqui se muestra una leyenda de colores indicando cual es cada uno de los sectores del estadio. Más adelante
                    en la parte del registro como abonado podrá ver la ubicación de cada una de las zonas en el estadio.
                    <figcaption>
                  </figure>

                 </div>
                </div>
                    <div class="grid-container">
  <div class="Cesped"></div>
  <div class="Preferencia">
    <div id="Preferencia Baja" class="Preferencia_baja" onclick=clickaction(this) style="border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_preferencia_baja" class="A1"></div>
      <div id="borde_preferencia_baja" class="A2"></div>
      <div id="borde_preferencia_baja" class="A3"></div>
      <div id="borde_preferencia_baja" class="A4"></div>
      <div id="borde_preferencia_baja" class="A5"></div>
      <div id="borde_preferencia_baja" class="A6"></div>
      <div id="borde_preferencia_baja" class="A7"></div>
      <div id="borde_preferencia_baja" class="A8"></div>
      <div id="borde_preferencia_baja" class="A9"></div>
      <div id="borde_preferencia_baja" class="A10"></div>
      <div id="borde_preferencia_baja" class="A11"></div>
      <div id="borde_preferencia_baja" class="A12"></div>
      <div id="borde_preferencia_baja" class="A13"></div>
      <div id="borde_preferencia_baja" class="A14"></div>
      <div id="borde_preferencia_baja" class="A15"></div>
      <div id="borde_preferencia_baja" class="A16"></div>
      <div id="borde_preferencia_baja" class="A17"></div>
      <div id="borde_preferencia_baja" class="A18"></div>
      <div id="borde_preferencia_baja" class="A19"></div>
      <div id="borde_preferencia_baja" class="A20"></div>
      <div id="borde_preferencia_baja" class="A21"></div>
      <div id="borde_preferencia_baja" class="A22"></div>
      <div id="borde_preferencia_baja" class="A23"></div>
      <div id="borde_preferencia_baja" class="A24"></div>
      <div id="borde_preferencia_baja" class="A25"></div>
      <div id="borde_preferencia_baja" class="A26"></div>
      <div id="borde_preferencia_baja" class="A27"></div>
      <div id="borde_preferencia_baja" class="A28"></div>
      <div id="borde_preferencia_baja" class="A29"></div>
      <div id="borde_preferencia_baja" class="A30"></div>
      <div id="borde_preferencia_baja" class="A31"></div>
      <div id="borde_preferencia_baja" class="A32"></div>
      <div id="borde_preferencia_baja" class="A33"></div>
      <div id="borde_preferencia_baja" class="A34"></div>
      <div id="borde_preferencia_baja" class="A35"></div>
      <div id="borde_preferencia_baja" class="A36"></div>
      <div id="borde_preferencia_baja" class="A37"></div>
      <div id="borde_preferencia_baja" class="A38"></div>
      <div id="borde_preferencia_baja" class="A39"></div>
      <div id="borde_preferencia_baja" class="A40"></div>
      <div id="borde_preferencia_baja" class="A41"></div>
      <div id="borde_preferencia_baja" class="A42"></div>
      <div id="borde_preferencia_baja" class="A43"></div>
      <div id="borde_preferencia_baja" class="A44"></div>
      <div id="borde_preferencia_baja" class="A45"></div>
      <div id="borde_preferencia_baja" class="A46"></div>
      <div id="borde_preferencia_baja" class="A47"></div>
      <div id="borde_preferencia_baja" class="A48"></div>
      <div id="borde_preferencia_baja" class="A49"></div>
      <div id="borde_preferencia_baja" class="A50"></div>
      <div id="borde_preferencia_baja" class="A51"></div>
      <div id="borde_preferencia_baja" class="A52"></div>
      <div id="borde_preferencia_baja" class="A53"></div>
      <div id="borde_preferencia_baja" class="A54"></div>
      <div id="borde_preferencia_baja" class="A55"></div>
      <div id="borde_preferencia_baja" class="A56"></div>
      <div id="borde_preferencia_baja" class="A57"></div>
      <div id="borde_preferencia_baja" class="A58"></div>
      <div id="borde_preferencia_baja" class="A59"></div>
      <div id="borde_preferencia_baja" class="A60"></div>
      <div id="borde_preferencia_baja" class="A61"></div>
      <div id="borde_preferencia_baja" class="A62"></div>
      <div id="borde_preferencia_baja" class="A63"></div>
      <div id="borde_preferencia_baja" class="A64"></div>
      <div id="borde_preferencia_baja" class="A65"></div>
      <div id="borde_preferencia_baja" class="A66"></div>
      <div id="borde_preferencia_baja" class="A67"></div>
      <div id="borde_preferencia_baja" class="A68"></div>
      <div id="borde_preferencia_baja" class="A69"></div>
      <div id="borde_preferencia_baja" class="A70"></div>
      <div id="borde_preferencia_baja" class="A71"></div>
      <div id="borde_preferencia_baja" class="A72"></div>
      <div id="borde_preferencia_baja" class="A73"></div>
      <div id="borde_preferencia_baja" class="A74"></div>
      <div id="borde_preferencia_baja" class="A75"></div>
      <div id="borde_preferencia_baja" class="A76"></div>
      <div id="borde_preferencia_baja" class="A77"></div>
      <div id="borde_preferencia_baja" class="A78"></div>
      <div id="borde_preferencia_baja" class="A79"></div>
      <div id="borde_preferencia_baja" class="A80"></div>
      <div id="borde_preferencia_baja" class="A81"></div>
      <div id="borde_preferencia_baja" class="A82"></div>
      <div id="borde_preferencia_baja" class="A83"></div>
      <div id="borde_preferencia_baja" class="A84"></div>
      <div id="borde_preferencia_baja" class="A85"></div>
      <div id="borde_preferencia_baja" class="A86"></div>
      <div id="borde_preferencia_baja" class="A87"></div>
      <div id="borde_preferencia_baja" class="A88"></div>
      <div id="borde_preferencia_baja" class="A89"></div>
      <div id="borde_preferencia_baja" class="A90"></div>
      <div id="borde_preferencia_baja" class="A91"></div>
      <div id="borde_preferencia_baja" class="A92"></div>
      <div id="borde_preferencia_baja" class="A93"></div>
      <div id="borde_preferencia_baja" class="A94"></div>
      <div id="borde_preferencia_baja" class="A95"></div>
      <div id="borde_preferencia_baja" class="A96"></div>
      <div id="borde_preferencia_baja" class="A97"></div>
      <div id="borde_preferencia_baja" class="A98"></div>
      <div id="borde_preferencia_baja" class="A99"></div>
      <div id="borde_preferencia_baja" class="A100"></div>
      <div id="borde_preferencia_baja" class="A101"></div>
      <div id="borde_preferencia_baja" class="A102"></div>
      <div id="borde_preferencia_baja" class="A103"></div>
      <div id="borde_preferencia_baja" class="A104"></div>
      <div id="borde_preferencia_baja" class="A105"></div>
      <div id="borde_preferencia_baja" class="A106"></div>
      <div id="borde_preferencia_baja" class="A107"></div>
      <div id="borde_preferencia_baja" class="A108"></div>
      <div id="borde_preferencia_baja" class="A109"></div>
      <div id="borde_preferencia_baja" class="A110"></div>
      <div id="borde_preferencia_baja" class="A111"></div>
      <div id="borde_preferencia_baja" class="A112"></div>
      <div id="borde_preferencia_baja" class="A113"></div>
      <div id="borde_preferencia_baja" class="A114"></div>
      <div id="borde_preferencia_baja" class="A115"></div>
      <div id="borde_preferencia_baja" class="A116"></div>
      <div id="borde_preferencia_baja" class="A117"></div>
      <div id="borde_preferencia_baja" class="A118"></div>
      <div id="borde_preferencia_baja" class="A119"></div>
      <div id="borde_preferencia_baja" class="A120"></div>
      <div id="borde_preferencia_baja" class="A121"></div>
      <div id="borde_preferencia_baja" class="A122"></div>
      <div id="borde_preferencia_baja" class="A123"></div>
      <div id="borde_preferencia_baja" class="A124"></div>
      <div id="borde_preferencia_baja" class="A125"></div>
      <div id="borde_preferencia_baja" class="A126"></div>
      <div id="borde_preferencia_baja" class="A127"></div>
      <div id="borde_preferencia_baja" class="A128"></div>
      <div id="borde_preferencia_baja" class="A129"></div>
      <div id="borde_preferencia_baja" class="A130"></div>
      <div id="borde_preferencia_baja" class="A131"></div>
      <div id="borde_preferencia_baja" class="A132"></div>
      <div id="borde_preferencia_baja" class="A133"></div>
      <div id="borde_preferencia_baja" class="A134"></div>
      <div id="borde_preferencia_baja" class="A135"></div>
      <div id="borde_preferencia_baja" class="A136"></div>
      <div id="borde_preferencia_baja" class="A137"></div>
      <div id="borde_preferencia_baja" class="A138"></div>
      <div id="borde_preferencia_baja" class="A139"></div>
      <div id="borde_preferencia_baja" class="A140"></div>
      <div id="borde_preferencia_baja" class="A141"></div>
      <div id="borde_preferencia_baja" class="A142"></div>
      <div id="borde_preferencia_baja"class="A143"></div>
      <div id="borde_preferencia_baja" class="A144"></div>
      <div id="borde_preferencia_baja" class="A145"></div>
      <div id="borde_preferencia_baja" class="A146"></div>
      <div id="borde_preferencia_baja" class="A147"></div>
      <div id="borde_preferencia_baja" class="A148"></div>
      <div id="borde_preferencia_baja" class="A149"></div>
      <div id="borde_preferencia_baja" class="A150"></div>
      <div id="borde_preferencia_baja" class="A151"></div>
      <div id="borde_preferencia_baja" class="A152"></div>
      <div id="borde_preferencia_baja" class="A153"></div>
      <div id="borde_preferencia_baja" class="A154"></div>
      <div id="borde_preferencia_baja" class="A155"></div>
      <div id="borde_preferencia_baja" class="A156"></div>
      <div id="borde_preferencia_baja" class="A157"></div>
      <div id="borde_preferencia_baja" class="A158"></div>
      <div id="borde_preferencia_baja" class="A159"></div>
      <div id="borde_preferencia_baja" class="A160"></div>
      <div id="borde_preferencia_baja" class="A161"></div>
      <div id="borde_preferencia_baja"class="A162"></div>
      <div id="borde_preferencia_baja" class="A163"></div>
      <div id="borde_preferencia_baja" class="A164"></div>
      <div id="borde_preferencia_baja" class="A165"></div>
      <div id="borde_preferencia_baja" class="A166"></div>
      <div id="borde_preferencia_baja" class="A167"></div>
      <div id="borde_preferencia_baja" class="A168"></div>
      <div id="borde_preferencia_baja" class="A169"></div>
      <div id="borde_preferencia_baja" class="A170"></div>
      <div id="borde_preferencia_baja" class="A171"></div>
      <div id="borde_preferencia_baja" class="A172"></div>
      <div id="borde_preferencia_baja" class="A173"></div>
      <div id="borde_preferencia_baja" class="A174"></div>
      <div id="borde_preferencia_baja" class="A175"></div>
      <div id="borde_preferencia_baja" class="A176"></div>
      <div id="borde_preferencia_baja" class="A177"></div>
      <div id="borde_preferencia_baja" class="A178"></div>
      <div id="borde_preferencia_baja" class="A179"></div>
      <div id="borde_preferencia_baja" class="A180"></div>
      <div id="borde_preferencia_baja" class="A181"></div>
      <div id="borde_preferencia_baja" class="A182"></div>
      <div id="borde_preferencia_baja" class="A183"></div>
      <div id="borde_preferencia_baja" class="A184"></div>
      <div id="borde_preferencia_baja" class="A185"></div>
      <div id="borde_preferencia_baja" class="A186"></div>
      <div id="borde_preferencia_baja" class="A187"></div>
      <div id="borde_preferencia_baja" class="A188"></div>
      <div id="borde_preferencia_baja" class="A189"></div>
      <div id="borde_preferencia_baja" class="A190"></div>
      <div id="borde_preferencia_baja" class="A191"></div>
      <div id="borde_preferencia_baja"class="A192"></div>
      <div id="borde_preferencia_baja" class="A193"></div>
      <div id="borde_preferencia_baja" class="A194"></div>
      <div id="borde_preferencia_baja" class="A195"></div>
      <div id="borde_preferencia_baja" class="A196"></div>
      <div id="borde_preferencia_baja" class="A197"></div>
      <div id="borde_preferencia_baja" class="A198"></div>
</div>
    </div>
  <div id="Preferencia Media" class="Preferencia_media" onclick=clickaction(this) style="display:grid;border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_preferencia_media" class="A1"></div>
      <div id="borde_preferencia_media" class="A2"></div>
      <div id="borde_preferencia_media" class="A3"></div>
      <div id="borde_preferencia_media" class="A4"></div>
      <div id="borde_preferencia_media" class="A5"></div>
      <div id="borde_preferencia_media" class="A6"></div>
      <div id="borde_preferencia_media" class="A7"></div>
      <div id="borde_preferencia_media" class="A8"></div>
      <div id="borde_preferencia_media" class="A9"></div>
      <div id="borde_preferencia_media" class="A10"></div>
      <div id="borde_preferencia_media" class="A11"></div>
      <div id="borde_preferencia_media" class="A12"></div>
      <div id="borde_preferencia_media" class="A13"></div>
      <div id="borde_preferencia_media" class="A14"></div>
      <div id="borde_preferencia_media" class="A15"></div>
      <div id="borde_preferencia_media" class="A16"></div>
      <div id="borde_preferencia_media" class="A17"></div>
      <div id="borde_preferencia_media" class="A18"></div>
      <div id="borde_preferencia_media" class="A19"></div>
      <div id="borde_preferencia_media" class="A20"></div>
      <div id="borde_preferencia_media" class="A21"></div>
      <div id="borde_preferencia_media" class="A22"></div>
      <div id="borde_preferencia_media" class="A23"></div>
      <div id="borde_preferencia_media" class="A24"></div>
      <div id="borde_preferencia_media" class="A25"></div>
      <div id="borde_preferencia_media" class="A26"></div>
      <div id="borde_preferencia_media" class="A27"></div>
      <div id="borde_preferencia_media" class="A28"></div>
      <div id="borde_preferencia_media" class="A29"></div>
      <div id="borde_preferencia_media" class="A30"></div>
      <div id="borde_preferencia_media" class="A31"></div>
      <div id="borde_preferencia_media" class="A32"></div>
      <div id="borde_preferencia_media" class="A33"></div>
      <div id="borde_preferencia_media" class="A34"></div>
      <div id="borde_preferencia_media" class="A35"></div>
      <div id="borde_preferencia_media" class="A36"></div>
      <div id="borde_preferencia_media" class="A37"></div>
      <div id="borde_preferencia_media" class="A38"></div>
      <div id="borde_preferencia_media" class="A39"></div>
      <div id="borde_preferencia_media" class="A40"></div>
      <div id="borde_preferencia_media" class="A41"></div>
      <div id="borde_preferencia_media" class="A42"></div>
      <div id="borde_preferencia_media" class="A43"></div>
      <div id="borde_preferencia_media" class="A44"></div>
      <div id="borde_preferencia_media" class="A45"></div>
      <div id="borde_preferencia_media" class="A46"></div>
      <div id="borde_preferencia_media" class="A47"></div>
      <div id="borde_preferencia_media" class="A48"></div>
      <div id="borde_preferencia_media" class="A49"></div>
      <div id="borde_preferencia_media" class="A50"></div>
      <div id="borde_preferencia_media" class="A51"></div>
      <div id="borde_preferencia_media" class="A52"></div>
      <div id="borde_preferencia_media" class="A53"></div>
      <div id="borde_preferencia_media" class="A54"></div>
      <div id="borde_preferencia_media" class="A55"></div>
      <div id="borde_preferencia_media" class="A56"></div>
      <div id="borde_preferencia_media" class="A57"></div>
      <div id="borde_preferencia_media" class="A58"></div>
      <div id="borde_preferencia_media" class="A59"></div>
      <div id="borde_preferencia_media" class="A60"></div>
      <div id="borde_preferencia_media" class="A61"></div>
      <div id="borde_preferencia_media" class="A62"></div>
      <div id="borde_preferencia_media" class="A63"></div>
      <div id="borde_preferencia_media" class="A64"></div>
      <div id="borde_preferencia_media" class="A65"></div>
      <div id="borde_preferencia_media" class="A66"></div>
      <div id="borde_preferencia_media" class="A67"></div>
      <div id="borde_preferencia_media" class="A68"></div>
      <div id="borde_preferencia_media" class="A69"></div>
      <div id="borde_preferencia_media" class="A70"></div>
      <div id="borde_preferencia_media" class="A71"></div>
      <div id="borde_preferencia_media" class="A72"></div>
      <div id="borde_preferencia_media" class="A73"></div>
      <div id="borde_preferencia_media" class="A74"></div>
      <div id="borde_preferencia_media" class="A75"></div>
      <div id="borde_preferencia_media" class="A76"></div>
      <div id="borde_preferencia_media" class="A77"></div>
      <div id="borde_preferencia_media" class="A78"></div>
      <div id="borde_preferencia_media" class="A79"></div>
      <div id="borde_preferencia_media" class="A80"></div>
      <div id="borde_preferencia_media" class="A81"></div>
      <div id="borde_preferencia_media" class="A82"></div>
      <div id="borde_preferencia_media" class="A83"></div>
      <div id="borde_preferencia_media" class="A84"></div>
      <div id="borde_preferencia_media" class="A85"></div>
      <div id="borde_preferencia_media" class="A86"></div>
      <div id="borde_preferencia_media" class="A87"></div>
      <div id="borde_preferencia_media" class="A88"></div>
      <div id="borde_preferencia_media" class="A89"></div>
      <div id="borde_preferencia_media" class="A90"></div>
      <div id="borde_preferencia_media" class="A91"></div>
      <div id="borde_preferencia_media" class="A92"></div>
      <div id="borde_preferencia_media" class="A93"></div>
      <div id="borde_preferencia_media" class="A94"></div>
      <div id="borde_preferencia_media" class="A95"></div>
      <div id="borde_preferencia_media" class="A96"></div>
      <div id="borde_preferencia_media" class="A97"></div>
      <div id="borde_preferencia_media" class="A98"></div>
      <div id="borde_preferencia_media" class="A99"></div>
      <div id="borde_preferencia_media" class="A100"></div>
      <div id="borde_preferencia_media" class="A101"></div>
      <div id="borde_preferencia_media" class="A102"></div>
      <div id="borde_preferencia_media" class="A103"></div>
      <div id="borde_preferencia_media" class="A104"></div>
      <div id="borde_preferencia_media" class="A105"></div>
      <div id="borde_preferencia_media" class="A106"></div>
      <div id="borde_preferencia_media" class="A107"></div>
      <div id="borde_preferencia_media" class="A108"></div>
      <div id="borde_preferencia_media" class="A109"></div>
      <div id="borde_preferencia_media" class="A110"></div>
      <div id="borde_preferencia_media" class="A111"></div>
      <div id="borde_preferencia_media" class="A112"></div>
      <div id="borde_preferencia_media" class="A113"></div>
      <div id="borde_preferencia_media" class="A114"></div>
      <div id="borde_preferencia_media" class="A115"></div>
      <div id="borde_preferencia_media" class="A116"></div>
      <div id="borde_preferencia_media" class="A117"></div>
      <div id="borde_preferencia_media" class="A118"></div>
      <div id="borde_preferencia_media" class="A119"></div>
      <div id="borde_preferencia_media" class="A120"></div>
      <div id="borde_preferencia_media" class="A121"></div>
      <div id="borde_preferencia_media" class="A122"></div>
      <div id="borde_preferencia_media" class="A123"></div>
      <div id="borde_preferencia_media" class="A124"></div>
      <div id="borde_preferencia_media" class="A125"></div>
      <div id="borde_preferencia_media" class="A126"></div>
      <div id="borde_preferencia_media" class="A127"></div>
      <div id="borde_preferencia_media" class="A128"></div>
      <div id="borde_preferencia_media" class="A129"></div>
      <div id="borde_preferencia_media" class="A130"></div>
      <div id="borde_preferencia_media" class="A131"></div>
      <div id="borde_preferencia_media" class="A132"></div>
      <div id="borde_preferencia_media" class="A133"></div>
      <div id="borde_preferencia_media" class="A134"></div>
      <div id="borde_preferencia_media" class="A135"></div>
      <div id="borde_preferencia_media" class="A136"></div>
      <div id="borde_preferencia_media" class="A137"></div>
      <div id="borde_preferencia_media" class="A138"></div>
      <div id="borde_preferencia_media" class="A139"></div>
      <div id="borde_preferencia_media" class="A140"></div>
      <div id="borde_preferencia_media" class="A141"></div>
      <div id="borde_preferencia_media" class="A142"></div>
      <div id="borde_preferencia_media"class="A143"></div>
      <div id="borde_preferencia_media" class="A144"></div>
      <div id="borde_preferencia_media" class="A145"></div>
      <div id="borde_preferencia_media" class="A146"></div>
      <div id="borde_preferencia_media" class="A147"></div>
      <div id="borde_preferencia_media" class="A148"></div>
      <div id="borde_preferencia_media" class="A149"></div>
      <div id="borde_preferencia_media" class="A150"></div>
      <div id="borde_preferencia_media" class="A151"></div>
      <div id="borde_preferencia_media" class="A152"></div>
      <div id="borde_preferencia_media" class="A153"></div>
      <div id="borde_preferencia_media" class="A154"></div>
      <div id="borde_preferencia_media" class="A155"></div>
      <div id="borde_preferencia_media" class="A156"></div>
      <div id="borde_preferencia_media" class="A157"></div>
      <div id="borde_preferencia_media" class="A158"></div>
      <div id="borde_preferencia_media" class="A159"></div>
      <div id="borde_preferencia_media" class="A160"></div>
      <div id="borde_preferencia_media" class="A161"></div>
      <div id="borde_preferencia_media"class="A162"></div>
      <div id="borde_preferencia_media" class="A163"></div>
      <div id="borde_preferencia_media" class="A164"></div>
      <div id="borde_preferencia_media" class="A165"></div>
      <div id="borde_preferencia_media" class="A166"></div>
      <div id="borde_preferencia_media" class="A167"></div>
      <div id="borde_preferencia_media" class="A168"></div>
      <div id="borde_preferencia_media" class="A169"></div>
      <div id="borde_preferencia_media" class="A170"></div>
      <div id="borde_preferencia_media" class="A171"></div>
      <div id="borde_preferencia_media" class="A172"></div>
      <div id="borde_preferencia_media" class="A173"></div>
      <div id="borde_preferencia_media" class="A174"></div>
      <div id="borde_preferencia_media" class="A175"></div>
      <div id="borde_preferencia_media" class="A176"></div>
      <div id="borde_preferencia_media" class="A177"></div>
      <div id="borde_preferencia_media" class="A178"></div>
      <div id="borde_preferencia_media" class="A179"></div>
      <div id="borde_preferencia_media" class="A180"></div>
      <div id="borde_preferencia_media" class="A181"></div>
      <div id="borde_preferencia_media" class="A182"></div>
      <div id="borde_preferencia_media" class="A183"></div>
      <div id="borde_preferencia_media" class="A184"></div>
      <div id="borde_preferencia_media" class="A185"></div>
      <div id="borde_preferencia_media" class="A186"></div>
      <div id="borde_preferencia_media" class="A187"></div>
      <div id="borde_preferencia_media" class="A188"></div>
      <div id="borde_preferencia_media" class="A189"></div>
      <div id="borde_preferencia_media" class="A190"></div>
      <div id="borde_preferencia_media" class="A191"></div>
      <div id="borde_preferencia_media"class="A192"></div>
      <div id="borde_preferencia_media" class="A193"></div>
      <div id="borde_preferencia_media" class="A194"></div>
      <div id="borde_preferencia_media" class="A195"></div>
      <div id="borde_preferencia_media" class="A196"></div>
      <div id="borde_preferencia_media" class="A197"></div>
      <div id="borde_preferencia_media" class="A198"></div>
</div></div>
    <div  id="Preferencia Alta"class="Preferencia_alta" onclick=clickaction(this) style="border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_preferencia_alta" class="A1"></div>
      <div id="borde_preferencia_alta" class="A2"></div>
      <div id="borde_preferencia_alta" class="A3"></div>
      <div id="borde_preferencia_alta" class="A4"></div>
      <div id="borde_preferencia_alta" class="A5"></div>
      <div id="borde_preferencia_alta" class="A6"></div>
      <div id="borde_preferencia_alta" class="A7"></div>
      <div id="borde_preferencia_alta" class="A8"></div>
      <div id="borde_preferencia_alta" class="A9"></div>
      <div id="borde_preferencia_alta" class="A10"></div>
      <div id="borde_preferencia_alta" class="A11"></div>
      <div id="borde_preferencia_alta" class="A12"></div>
      <div id="borde_preferencia_alta" class="A13"></div>
      <div id="borde_preferencia_alta" class="A14"></div>
      <div id="borde_preferencia_alta" class="A15"></div>
      <div id="borde_preferencia_alta" class="A16"></div>
      <div id="borde_preferencia_alta" class="A17"></div>
      <div id="borde_preferencia_alta" class="A18"></div>
      <div id="borde_preferencia_alta" class="A19"></div>
      <div id="borde_preferencia_alta" class="A20"></div>
      <div id="borde_preferencia_alta" class="A21"></div>
      <div id="borde_preferencia_alta" class="A22"></div>
      <div id="borde_preferencia_alta" class="A23"></div>
      <div id="borde_preferencia_alta" class="A24"></div>
      <div id="borde_preferencia_alta" class="A25"></div>
      <div id="borde_preferencia_alta" class="A26"></div>
      <div id="borde_preferencia_alta" class="A27"></div>
      <div id="borde_preferencia_alta" class="A28"></div>
      <div id="borde_preferencia_alta" class="A29"></div>
      <div id="borde_preferencia_alta" class="A30"></div>
      <div id="borde_preferencia_alta" class="A31"></div>
      <div id="borde_preferencia_alta" class="A32"></div>
      <div id="borde_preferencia_alta" class="A33"></div>
      <div id="borde_preferencia_alta" class="A34"></div>
      <div id="borde_preferencia_alta" class="A35"></div>
      <div id="borde_preferencia_alta" class="A36"></div>
      <div id="borde_preferencia_alta" class="A37"></div>
      <div id="borde_preferencia_alta" class="A38"></div>
      <div id="borde_preferencia_alta" class="A39"></div>
      <div id="borde_preferencia_alta" class="A40"></div>
      <div id="borde_preferencia_alta" class="A41"></div>
      <div id="borde_preferencia_alta" class="A42"></div>
      <div id="borde_preferencia_alta" class="A43"></div>
      <div id="borde_preferencia_alta" class="A44"></div>
      <div id="borde_preferencia_alta" class="A45"></div>
      <div id="borde_preferencia_alta" class="A46"></div>
      <div id="borde_preferencia_alta" class="A47"></div>
      <div id="borde_preferencia_alta" class="A48"></div>
      <div id="borde_preferencia_alta" class="A49"></div>
      <div id="borde_preferencia_alta" class="A50"></div>
      <div id="borde_preferencia_alta" class="A51"></div>
      <div id="borde_preferencia_alta" class="A52"></div>
      <div id="borde_preferencia_alta" class="A53"></div>
      <div id="borde_preferencia_alta" class="A54"></div>
      <div id="borde_preferencia_alta" class="A55"></div>
      <div id="borde_preferencia_alta" class="A56"></div>
      <div id="borde_preferencia_alta" class="A57"></div>
      <div id="borde_preferencia_alta" class="A58"></div>
      <div id="borde_preferencia_alta" class="A59"></div>
      <div id="borde_preferencia_alta" class="A60"></div>
      <div id="borde_preferencia_alta" class="A61"></div>
      <div id="borde_preferencia_alta" class="A62"></div>
      <div id="borde_preferencia_alta" class="A63"></div>
      <div id="borde_preferencia_alta" class="A64"></div>
      <div id="borde_preferencia_alta" class="A65"></div>
      <div id="borde_preferencia_alta" class="A66"></div>
      <div id="borde_preferencia_alta" class="A67"></div>
      <div id="borde_preferencia_alta" class="A68"></div>
      <div id="borde_preferencia_alta" class="A69"></div>
      <div id="borde_preferencia_alta" class="A70"></div>
      <div id="borde_preferencia_alta" class="A71"></div>
      <div id="borde_preferencia_alta" class="A72"></div>
      <div id="borde_preferencia_alta" class="A73"></div>
      <div id="borde_preferencia_alta" class="A74"></div>
      <div id="borde_preferencia_alta" class="A75"></div>
      <div id="borde_preferencia_alta" class="A76"></div>
      <div id="borde_preferencia_alta" class="A77"></div>
      <div id="borde_preferencia_alta" class="A78"></div>
      <div id="borde_preferencia_alta" class="A79"></div>
      <div id="borde_preferencia_alta" class="A80"></div>
      <div id="borde_preferencia_alta" class="A81"></div>
      <div id="borde_preferencia_alta" class="A82"></div>
      <div id="borde_preferencia_alta" class="A83"></div>
      <div id="borde_preferencia_alta" class="A84"></div>
      <div id="borde_preferencia_alta" class="A85"></div>
      <div id="borde_preferencia_alta" class="A86"></div>
      <div id="borde_preferencia_alta" class="A87"></div>
      <div id="borde_preferencia_alta" class="A88"></div>
      <div id="borde_preferencia_alta" class="A89"></div>
      <div id="borde_preferencia_alta" class="A90"></div>
      <div id="borde_preferencia_alta" class="A91"></div>
      <div id="borde_preferencia_alta" class="A92"></div>
      <div id="borde_preferencia_alta" class="A93"></div>
      <div id="borde_preferencia_alta" class="A94"></div>
      <div id="borde_preferencia_alta" class="A95"></div>
      <div id="borde_preferencia_alta" class="A96"></div>
      <div id="borde_preferencia_alta" class="A97"></div>
      <div id="borde_preferencia_alta" class="A98"></div>
      <div id="borde_preferencia_alta" class="A99"></div>
      <div id="borde_preferencia_alta" class="A100"></div>
      <div id="borde_preferencia_alta" class="A101"></div>
      <div id="borde_preferencia_alta" class="A102"></div>
      <div id="borde_preferencia_alta" class="A103"></div>
      <div id="borde_preferencia_alta" class="A104"></div>
      <div id="borde_preferencia_alta" class="A105"></div>
      <div id="borde_preferencia_alta" class="A106"></div>
      <div id="borde_preferencia_alta" class="A107"></div>
      <div id="borde_preferencia_alta" class="A108"></div>
      <div id="borde_preferencia_alta" class="A109"></div>
      <div id="borde_preferencia_alta" class="A110"></div>
      <div id="borde_preferencia_alta" class="A111"></div>
      <div id="borde_preferencia_alta" class="A112"></div>
      <div id="borde_preferencia_alta" class="A113"></div>
      <div id="borde_preferencia_alta" class="A114"></div>
      <div id="borde_preferencia_alta" class="A115"></div>
      <div id="borde_preferencia_alta" class="A116"></div>
      <div id="borde_preferencia_alta" class="A117"></div>
      <div id="borde_preferencia_alta" class="A118"></div>
      <div id="borde_preferencia_alta" class="A119"></div>
      <div id="borde_preferencia_alta" class="A120"></div>
      <div id="borde_preferencia_alta" class="A121"></div>
      <div id="borde_preferencia_alta" class="A122"></div>
      <div id="borde_preferencia_alta" class="A123"></div>
      <div id="borde_preferencia_alta" class="A124"></div>
      <div id="borde_preferencia_alta" class="A125"></div>
      <div id="borde_preferencia_alta" class="A126"></div>
      <div id="borde_preferencia_alta" class="A127"></div>
      <div id="borde_preferencia_alta" class="A128"></div>
      <div id="borde_preferencia_alta" class="A129"></div>
      <div id="borde_preferencia_alta" class="A130"></div>
      <div id="borde_preferencia_alta" class="A131"></div>
      <div id="borde_preferencia_alta" class="A132"></div>
      <div id="borde_preferencia_alta" class="A133"></div>
      <div id="borde_preferencia_alta" class="A134"></div>
      <div id="borde_preferencia_alta" class="A135"></div>
      <div id="borde_preferencia_alta" class="A136"></div>
      <div id="borde_preferencia_alta" class="A137"></div>
      <div id="borde_preferencia_alta" class="A138"></div>
      <div id="borde_preferencia_alta" class="A139"></div>
      <div id="borde_preferencia_alta" class="A140"></div>
      <div id="borde_preferencia_alta" class="A141"></div>
      <div id="borde_preferencia_alta" class="A142"></div>
      <div id="borde_preferencia_alta"class="A143"></div>
      <div id="borde_preferencia_alta" class="A144"></div>
      <div id="borde_preferencia_alta" class="A145"></div>
      <div id="borde_preferencia_alta" class="A146"></div>
      <div id="borde_preferencia_alta" class="A147"></div>
      <div id="borde_preferencia_alta" class="A148"></div>
      <div id="borde_preferencia_alta" class="A149"></div>
      <div id="borde_preferencia_alta" class="A150"></div>
      <div id="borde_preferencia_alta" class="A151"></div>
      <div id="borde_preferencia_alta" class="A152"></div>
      <div id="borde_preferencia_alta" class="A153"></div>
      <div id="borde_preferencia_alta" class="A154"></div>
      <div id="borde_preferencia_alta" class="A155"></div>
      <div id="borde_preferencia_alta" class="A156"></div>
      <div id="borde_preferencia_alta" class="A157"></div>
      <div id="borde_preferencia_alta" class="A158"></div>
      <div id="borde_preferencia_alta" class="A159"></div>
      <div id="borde_preferencia_alta" class="A160"></div>
      <div id="borde_preferencia_alta" class="A161"></div>
      <div id="borde_preferencia_alta"class="A162"></div>
      <div id="borde_preferencia_alta" class="A163"></div>
      <div id="borde_preferencia_alta" class="A164"></div>
      <div id="borde_preferencia_alta" class="A165"></div>
      <div id="borde_preferencia_alta" class="A166"></div>
      <div id="borde_preferencia_alta" class="A167"></div>
      <div id="borde_preferencia_alta" class="A168"></div>
      <div id="borde_preferencia_alta" class="A169"></div>
      <div id="borde_preferencia_alta" class="A170"></div>
      <div id="borde_preferencia_alta" class="A171"></div>
      <div id="borde_preferencia_alta" class="A172"></div>
      <div id="borde_preferencia_alta" class="A173"></div>
      <div id="borde_preferencia_alta" class="A174"></div>
      <div id="borde_preferencia_alta" class="A175"></div>
      <div id="borde_preferencia_alta" class="A176"></div>
      <div id="borde_preferencia_alta" class="A177"></div>
      <div id="borde_preferencia_alta" class="A178"></div>
      <div id="borde_preferencia_alta" class="A179"></div>
      <div id="borde_preferencia_alta" class="A180"></div>
      <div id="borde_preferencia_alta" class="A181"></div>
      <div id="borde_preferencia_alta" class="A182"></div>
      <div id="borde_preferencia_alta" class="A183"></div>
      <div id="borde_preferencia_alta" class="A184"></div>
      <div id="borde_preferencia_alta" class="A185"></div>
      <div id="borde_preferencia_alta" class="A186"></div>
      <div id="borde_preferencia_alta" class="A187"></div>
      <div id="borde_preferencia_alta" class="A188"></div>
      <div id="borde_preferencia_alta" class="A189"></div>
      <div id="borde_preferencia_alta" class="A190"></div>
      <div id="borde_preferencia_alta" class="A191"></div>
      <div id="borde_preferencia_alta"class="A192"></div>
      <div id="borde_preferencia_alta" class="A193"></div>
      <div id="borde_preferencia_alta" class="A194"></div>
      <div id="borde_preferencia_alta" class="A195"></div>
      <div id="borde_preferencia_alta" class="A196"></div>
      <div id="borde_preferencia_alta" class="A197"></div>
      <div id="borde_preferencia_alta" class="A198"></div>
</div>
    </div>
  </div>
  <div class="Tribuna">
    <div id="Tribuna Baja" class="Tribuna_baja" onclick=clickaction(this) style="border:2px solid black;"> 
    <div class="grid-container1">
      <div id="borde_tribuna_baja" class="A1"></div>
      <div id="borde_tribuna_baja" class="A2"></div>
      <div id="borde_tribuna_baja" class="A3"></div>
      <div id="borde_tribuna_baja" class="A4"></div>
      <div id="borde_tribuna_baja" class="A5"></div>
      <div id="borde_tribuna_baja" class="A6"></div>
      <div id="borde_tribuna_baja" class="A7"></div>
      <div id="borde_tribuna_baja" class="A8"></div>
      <div id="borde_tribuna_baja" class="A9"></div>
      <div id="borde_tribuna_baja" class="A10"></div>
      <div id="borde_tribuna_baja" class="A11"></div>
      <div id="borde_tribuna_baja" class="A12"></div>
      <div id="borde_tribuna_baja" class="A13"></div>
      <div id="borde_tribuna_baja" class="A14"></div>
      <div id="borde_tribuna_baja" class="A15"></div>
      <div id="borde_tribuna_baja" class="A16"></div>
      <div id="borde_tribuna_baja" class="A17"></div>
      <div id="borde_tribuna_baja" class="A18"></div>
      <div id="borde_tribuna_baja" class="A19"></div>
      <div id="borde_tribuna_baja" class="A20"></div>
      <div id="borde_tribuna_baja" class="A21"></div>
      <div id="borde_tribuna_baja" class="A22"></div>
      <div id="borde_tribuna_baja" class="A23"></div>
      <div id="borde_tribuna_baja" class="A24"></div>
      <div id="borde_tribuna_baja" class="A25"></div>
      <div id="borde_tribuna_baja" class="A26"></div>
      <div id="borde_tribuna_baja" class="A27"></div>
      <div id="borde_tribuna_baja" class="A28"></div>
      <div id="borde_tribuna_baja" class="A29"></div>
      <div id="borde_tribuna_baja" class="A30"></div>
      <div id="borde_tribuna_baja" class="A31"></div>
      <div id="borde_tribuna_baja" class="A32"></div>
      <div id="borde_tribuna_baja" class="A33"></div>
      <div id="borde_tribuna_baja" class="A34"></div>
      <div id="borde_tribuna_baja" class="A35"></div>
      <div id="borde_tribuna_baja" class="A36"></div>
      <div id="borde_tribuna_baja" class="A37"></div>
      <div id="borde_tribuna_baja" class="A38"></div>
      <div id="borde_tribuna_baja" class="A39"></div>
      <div id="borde_tribuna_baja" class="A40"></div>
      <div id="borde_tribuna_baja" class="A41"></div>
      <div id="borde_tribuna_baja" class="A42"></div>
      <div id="borde_tribuna_baja" class="A43"></div>
      <div id="borde_tribuna_baja" class="A44"></div>
      <div id="borde_tribuna_baja" class="A45"></div>
      <div id="borde_tribuna_baja" class="A46"></div>
      <div id="borde_tribuna_baja" class="A47"></div>
      <div id="borde_tribuna_baja" class="A48"></div>
      <div id="borde_tribuna_baja" class="A49"></div>
      <div id="borde_tribuna_baja" class="A50"></div>
      <div id="borde_tribuna_baja" class="A51"></div>
      <div id="borde_tribuna_baja" class="A52"></div>
      <div id="borde_tribuna_baja" class="A53"></div>
      <div id="borde_tribuna_baja" class="A54"></div>
      <div id="borde_tribuna_baja" class="A55"></div>
      <div id="borde_tribuna_baja" class="A56"></div>
      <div id="borde_tribuna_baja" class="A57"></div>
      <div id="borde_tribuna_baja" class="A58"></div>
      <div id="borde_tribuna_baja" class="A59"></div>
      <div id="borde_tribuna_baja" class="A60"></div>
      <div id="borde_tribuna_baja" class="A61"></div>
      <div id="borde_tribuna_baja" class="A62"></div>
      <div id="borde_tribuna_baja" class="A63"></div>
      <div id="borde_tribuna_baja" class="A64"></div>
      <div id="borde_tribuna_baja" class="A65"></div>
      <div id="borde_tribuna_baja" class="A66"></div>
      <div id="borde_tribuna_baja" class="A67"></div>
      <div id="borde_tribuna_baja" class="A68"></div>
      <div id="borde_tribuna_baja" class="A69"></div>
      <div id="borde_tribuna_baja" class="A70"></div>
      <div id="borde_tribuna_baja" class="A71"></div>
      <div id="borde_tribuna_baja" class="A72"></div>
      <div id="borde_tribuna_baja" class="A73"></div>
      <div id="borde_tribuna_baja" class="A74"></div>
      <div id="borde_tribuna_baja" class="A75"></div>
      <div id="borde_tribuna_baja" class="A76"></div>
      <div id="borde_tribuna_baja" class="A77"></div>
      <div id="borde_tribuna_baja" class="A78"></div>
      <div id="borde_tribuna_baja" class="A79"></div>
      <div id="borde_tribuna_baja" class="A80"></div>
      <div id="borde_tribuna_baja" class="A81"></div>
      <div id="borde_tribuna_baja" class="A82"></div>
      <div id="borde_tribuna_baja" class="A83"></div>
      <div id="borde_tribuna_baja" class="A84"></div>
      <div id="borde_tribuna_baja" class="A85"></div>
      <div id="borde_tribuna_baja" class="A86"></div>
      <div id="borde_tribuna_baja" class="A87"></div>
      <div id="borde_tribuna_baja" class="A88"></div>
      <div id="borde_tribuna_baja" class="A89"></div>
      <div id="borde_tribuna_baja" class="A90"></div>
      <div id="borde_tribuna_baja" class="A91"></div>
      <div id="borde_tribuna_baja" class="A92"></div>
      <div id="borde_tribuna_baja" class="A93"></div>
      <div id="borde_tribuna_baja" class="A94"></div>
      <div id="borde_tribuna_baja" class="A95"></div>
      <div id="borde_tribuna_baja" class="A96"></div>
      <div id="borde_tribuna_baja" class="A97"></div>
      <div id="borde_tribuna_baja" class="A98"></div>
      <div id="borde_tribuna_baja" class="A99"></div>
      <div id="borde_tribuna_baja" class="A100"></div>
      <div id="borde_tribuna_baja" class="A101"></div>
      <div id="borde_tribuna_baja" class="A102"></div>
      <div id="borde_tribuna_baja" class="A103"></div>
      <div id="borde_tribuna_baja" class="A104"></div>
      <div id="borde_tribuna_baja" class="A105"></div>
      <div id="borde_tribuna_baja" class="A106"></div>
      <div id="borde_tribuna_baja" class="A107"></div>
      <div id="borde_tribuna_baja" class="A108"></div>
      <div id="borde_tribuna_baja" class="A109"></div>
      <div id="borde_tribuna_baja" class="A110"></div>
      <div id="borde_tribuna_baja" class="A111"></div>
      <div id="borde_tribuna_baja" class="A112"></div>
      <div id="borde_tribuna_baja" class="A113"></div>
      <div id="borde_tribuna_baja" class="A114"></div>
      <div id="borde_tribuna_baja" class="A115"></div>
      <div id="borde_tribuna_baja" class="A116"></div>
      <div id="borde_tribuna_baja" class="A117"></div>
      <div id="borde_tribuna_baja" class="A118"></div>
      <div id="borde_tribuna_baja" class="A119"></div>
      <div id="borde_tribuna_baja" class="A120"></div>
      <div id="borde_tribuna_baja" class="A121"></div>
      <div id="borde_tribuna_baja" class="A122"></div>
      <div id="borde_tribuna_baja" class="A123"></div>
      <div id="borde_tribuna_baja" class="A124"></div>
      <div id="borde_tribuna_baja" class="A125"></div>
      <div id="borde_tribuna_baja" class="A126"></div>
      <div id="borde_tribuna_baja" class="A127"></div>
      <div id="borde_tribuna_baja" class="A128"></div>
      <div id="borde_tribuna_baja" class="A129"></div>
      <div id="borde_tribuna_baja" class="A130"></div>
      <div id="borde_tribuna_baja" class="A131"></div>
      <div id="borde_tribuna_baja" class="A132"></div>
      <div id="borde_tribuna_baja" class="A133"></div>
      <div id="borde_tribuna_baja" class="A134"></div>
      <div id="borde_tribuna_baja" class="A135"></div>
      <div id="borde_tribuna_baja" class="A136"></div>
      <div id="borde_tribuna_baja" class="A137"></div>
      <div id="borde_tribuna_baja" class="A138"></div>
      <div id="borde_tribuna_baja" class="A139"></div>
      <div id="borde_tribuna_baja" class="A140"></div>
      <div id="borde_tribuna_baja" class="A141"></div>
      <div id="borde_tribuna_baja" class="A142"></div>
      <div id="borde_tribuna_baja"class="A143"></div>
      <div id="borde_tribuna_baja" class="A144"></div>
      <div id="borde_tribuna_baja" class="A145"></div>
      <div id="borde_tribuna_baja" class="A146"></div>
      <div id="borde_tribuna_baja" class="A147"></div>
      <div id="borde_tribuna_baja" class="A148"></div>
      <div id="borde_tribuna_baja" class="A149"></div>
      <div id="borde_tribuna_baja" class="A150"></div>
      <div id="borde_tribuna_baja" class="A151"></div>
      <div id="borde_tribuna_baja" class="A152"></div>
      <div id="borde_tribuna_baja" class="A153"></div>
      <div id="borde_tribuna_baja" class="A154"></div>
      <div id="borde_tribuna_baja" class="A155"></div>
      <div id="borde_tribuna_baja" class="A156"></div>
      <div id="borde_tribuna_baja" class="A157"></div>
      <div id="borde_tribuna_baja" class="A158"></div>
      <div id="borde_tribuna_baja" class="A159"></div>
      <div id="borde_tribuna_baja" class="A160"></div>
      <div id="borde_tribuna_baja" class="A161"></div>
      <div id="borde_tribuna_baja"class="A162"></div>
      <div id="borde_tribuna_baja" class="A163"></div>
      <div id="borde_tribuna_baja" class="A164"></div>
      <div id="borde_tribuna_baja" class="A165"></div>
      <div id="borde_tribuna_baja" class="A166"></div>
      <div id="borde_tribuna_baja" class="A167"></div>
      <div id="borde_tribuna_baja" class="A168"></div>
      <div id="borde_tribuna_baja" class="A169"></div>
      <div id="borde_tribuna_baja" class="A170"></div>
      <div id="borde_tribuna_baja" class="A171"></div>
      <div id="borde_tribuna_baja" class="A172"></div>
      <div id="borde_tribuna_baja" class="A173"></div>
      <div id="borde_tribuna_baja" class="A174"></div>
      <div id="borde_tribuna_baja" class="A175"></div>
      <div id="borde_tribuna_baja" class="A176"></div>
      <div id="borde_tribuna_baja" class="A177"></div>
      <div id="borde_tribuna_baja" class="A178"></div>
      <div id="borde_tribuna_baja" class="A179"></div>
      <div id="borde_tribuna_baja" class="A180"></div>
      <div id="borde_tribuna_baja" class="A181"></div>
      <div id="borde_tribuna_baja" class="A182"></div>
      <div id="borde_tribuna_baja" class="A183"></div>
      <div id="borde_tribuna_baja" class="A184"></div>
      <div id="borde_tribuna_baja" class="A185"></div>
      <div id="borde_tribuna_baja" class="A186"></div>
      <div id="borde_tribuna_baja" class="A187"></div>
      <div id="borde_tribuna_baja" class="A188"></div>
      <div id="borde_tribuna_baja" class="A189"></div>
      <div id="borde_tribuna_baja" class="A190"></div>
      <div id="borde_tribuna_baja" class="A191"></div>
      <div id="borde_tribuna_baja"class="A192"></div>
      <div id="borde_tribuna_baja" class="A193"></div>
      <div id="borde_tribuna_baja" class="A194"></div>
      <div id="borde_tribuna_baja" class="A195"></div>
      <div id="borde_tribuna_baja" class="A196"></div>
      <div id="borde_tribuna_baja" class="A197"></div>
      <div id="borde_tribuna_baja" class="A198"></div>
</div></div>
    <div id="Tribuna Media" class="Tribuna_media" onclick=clickaction(this) style="border:2px solid black;"> 
    <div class="grid-container1">
      <div id="borde_tribuna_media" class="A1"></div>
      <div id="borde_tribuna_media" class="A2"></div>
      <div id="borde_tribuna_media" class="A3"></div>
      <div id="borde_tribuna_media" class="A4"></div>
      <div id="borde_tribuna_media" class="A5"></div>
      <div id="borde_tribuna_media" class="A6"></div>
      <div id="borde_tribuna_media" class="A7"></div>
      <div id="borde_tribuna_media" class="A8"></div>
      <div id="borde_tribuna_media" class="A9"></div>
      <div id="borde_tribuna_media" class="A10"></div>
      <div id="borde_tribuna_media" class="A11"></div>
      <div id="borde_tribuna_media" class="A12"></div>
      <div id="borde_tribuna_media" class="A13"></div>
      <div id="borde_tribuna_media" class="A14"></div>
      <div id="borde_tribuna_media" class="A15"></div>
      <div id="borde_tribuna_media" class="A16"></div>
      <div id="borde_tribuna_media" class="A17"></div>
      <div id="borde_tribuna_media" class="A18"></div>
      <div id="borde_tribuna_media" class="A19"></div>
      <div id="borde_tribuna_media" class="A20"></div>
      <div id="borde_tribuna_media" class="A21"></div>
      <div id="borde_tribuna_media" class="A22"></div>
      <div id="borde_tribuna_media" class="A23"></div>
      <div id="borde_tribuna_media" class="A24"></div>
      <div id="borde_tribuna_media" class="A25"></div>
      <div id="borde_tribuna_media" class="A26"></div>
      <div id="borde_tribuna_media" class="A27"></div>
      <div id="borde_tribuna_media" class="A28"></div>
      <div id="borde_tribuna_media" class="A29"></div>
      <div id="borde_tribuna_media" class="A30"></div>
      <div id="borde_tribuna_media" class="A31"></div>
      <div id="borde_tribuna_media" class="A32"></div>
      <div id="borde_tribuna_media" class="A33"></div>
      <div id="borde_tribuna_media" class="A34"></div>
      <div id="borde_tribuna_media" class="A35"></div>
      <div id="borde_tribuna_media" class="A36"></div>
      <div id="borde_tribuna_media" class="A37"></div>
      <div id="borde_tribuna_media" class="A38"></div>
      <div id="borde_tribuna_media" class="A39"></div>
      <div id="borde_tribuna_media" class="A40"></div>
      <div id="borde_tribuna_media" class="A41"></div>
      <div id="borde_tribuna_media" class="A42"></div>
      <div id="borde_tribuna_media" class="A43"></div>
      <div id="borde_tribuna_media" class="A44"></div>
      <div id="borde_tribuna_media" class="A45"></div>
      <div id="borde_tribuna_media" class="A46"></div>
      <div id="borde_tribuna_media" class="A47"></div>
      <div id="borde_tribuna_media" class="A48"></div>
      <div id="borde_tribuna_media" class="A49"></div>
      <div id="borde_tribuna_media" class="A50"></div>
      <div id="borde_tribuna_media" class="A51"></div>
      <div id="borde_tribuna_media" class="A52"></div>
      <div id="borde_tribuna_media" class="A53"></div>
      <div id="borde_tribuna_media" class="A54"></div>
      <div id="borde_tribuna_media" class="A55"></div>
      <div id="borde_tribuna_media" class="A56"></div>
      <div id="borde_tribuna_media" class="A57"></div>
      <div id="borde_tribuna_media" class="A58"></div>
      <div id="borde_tribuna_media" class="A59"></div>
      <div id="borde_tribuna_media" class="A60"></div>
      <div id="borde_tribuna_media" class="A61"></div>
      <div id="borde_tribuna_media" class="A62"></div>
      <div id="borde_tribuna_media" class="A63"></div>
      <div id="borde_tribuna_media" class="A64"></div>
      <div id="borde_tribuna_media" class="A65"></div>
      <div id="borde_tribuna_media" class="A66"></div>
      <div id="borde_tribuna_media" class="A67"></div>
      <div id="borde_tribuna_media" class="A68"></div>
      <div id="borde_tribuna_media" class="A69"></div>
      <div id="borde_tribuna_media" class="A70"></div>
      <div id="borde_tribuna_media" class="A71"></div>
      <div id="borde_tribuna_media" class="A72"></div>
      <div id="borde_tribuna_media" class="A73"></div>
      <div id="borde_tribuna_media" class="A74"></div>
      <div id="borde_tribuna_media" class="A75"></div>
      <div id="borde_tribuna_media" class="A76"></div>
      <div id="borde_tribuna_media" class="A77"></div>
      <div id="borde_tribuna_media" class="A78"></div>
      <div id="borde_tribuna_media" class="A79"></div>
      <div id="borde_tribuna_media" class="A80"></div>
      <div id="borde_tribuna_media" class="A81"></div>
      <div id="borde_tribuna_media" class="A82"></div>
      <div id="borde_tribuna_media" class="A83"></div>
      <div id="borde_tribuna_media" class="A84"></div>
      <div id="borde_tribuna_media" class="A85"></div>
      <div id="borde_tribuna_media" class="A86"></div>
      <div id="borde_tribuna_media" class="A87"></div>
      <div id="borde_tribuna_media" class="A88"></div>
      <div id="borde_tribuna_media" class="A89"></div>
      <div id="borde_tribuna_media" class="A90"></div>
      <div id="borde_tribuna_media" class="A91"></div>
      <div id="borde_tribuna_media" class="A92"></div>
      <div id="borde_tribuna_media" class="A93"></div>
      <div id="borde_tribuna_media" class="A94"></div>
      <div id="borde_tribuna_media" class="A95"></div>
      <div id="borde_tribuna_media" class="A96"></div>
      <div id="borde_tribuna_media" class="A97"></div>
      <div id="borde_tribuna_media" class="A98"></div>
      <div id="borde_tribuna_media" class="A99"></div>
      <div id="borde_tribuna_media" class="A100"></div>
      <div id="borde_tribuna_media" class="A101"></div>
      <div id="borde_tribuna_media" class="A102"></div>
      <div id="borde_tribuna_media" class="A103"></div>
      <div id="borde_tribuna_media" class="A104"></div>
      <div id="borde_tribuna_media" class="A105"></div>
      <div id="borde_tribuna_media" class="A106"></div>
      <div id="borde_tribuna_media" class="A107"></div>
      <div id="borde_tribuna_media" class="A108"></div>
      <div id="borde_tribuna_media" class="A109"></div>
      <div id="borde_tribuna_media" class="A110"></div>
      <div id="borde_tribuna_media" class="A111"></div>
      <div id="borde_tribuna_media" class="A112"></div>
      <div id="borde_tribuna_media" class="A113"></div>
      <div id="borde_tribuna_media" class="A114"></div>
      <div id="borde_tribuna_media" class="A115"></div>
      <div id="borde_tribuna_media" class="A116"></div>
      <div id="borde_tribuna_media" class="A117"></div>
      <div id="borde_tribuna_media" class="A118"></div>
      <div id="borde_tribuna_media" class="A119"></div>
      <div id="borde_tribuna_media" class="A120"></div>
      <div id="borde_tribuna_media" class="A121"></div>
      <div id="borde_tribuna_media" class="A122"></div>
      <div id="borde_tribuna_media" class="A123"></div>
      <div id="borde_tribuna_media" class="A124"></div>
      <div id="borde_tribuna_media" class="A125"></div>
      <div id="borde_tribuna_media" class="A126"></div>
      <div id="borde_tribuna_media" class="A127"></div>
      <div id="borde_tribuna_media" class="A128"></div>
      <div id="borde_tribuna_media" class="A129"></div>
      <div id="borde_tribuna_media" class="A130"></div>
      <div id="borde_tribuna_media" class="A131"></div>
      <div id="borde_tribuna_media" class="A132"></div>
      <div id="borde_tribuna_media" class="A133"></div>
      <div id="borde_tribuna_media" class="A134"></div>
      <div id="borde_tribuna_media" class="A135"></div>
      <div id="borde_tribuna_media" class="A136"></div>
      <div id="borde_tribuna_media" class="A137"></div>
      <div id="borde_tribuna_media" class="A138"></div>
      <div id="borde_tribuna_media" class="A139"></div>
      <div id="borde_tribuna_media" class="A140"></div>
      <div id="borde_tribuna_media" class="A141"></div>
      <div id="borde_tribuna_media" class="A142"></div>
      <div id="borde_tribuna_media"class="A143"></div>
      <div id="borde_tribuna_media" class="A144"></div>
      <div id="borde_tribuna_media" class="A145"></div>
      <div id="borde_tribuna_media" class="A146"></div>
      <div id="borde_tribuna_media" class="A147"></div>
      <div id="borde_tribuna_media" class="A148"></div>
      <div id="borde_tribuna_media" class="A149"></div>
      <div id="borde_tribuna_media" class="A150"></div>
      <div id="borde_tribuna_media" class="A151"></div>
      <div id="borde_tribuna_media" class="A152"></div>
      <div id="borde_tribuna_media" class="A153"></div>
      <div id="borde_tribuna_media" class="A154"></div>
      <div id="borde_tribuna_media" class="A155"></div>
      <div id="borde_tribuna_media" class="A156"></div>
      <div id="borde_tribuna_media" class="A157"></div>
      <div id="borde_tribuna_media" class="A158"></div>
      <div id="borde_tribuna_media" class="A159"></div>
      <div id="borde_tribuna_media" class="A160"></div>
      <div id="borde_tribuna_media" class="A161"></div>
      <div id="borde_tribuna_media"class="A162"></div>
      <div id="borde_tribuna_media" class="A163"></div>
      <div id="borde_tribuna_media" class="A164"></div>
      <div id="borde_tribuna_media" class="A165"></div>
      <div id="borde_tribuna_media" class="A166"></div>
      <div id="borde_tribuna_media" class="A167"></div>
      <div id="borde_tribuna_media" class="A168"></div>
      <div id="borde_tribuna_media" class="A169"></div>
      <div id="borde_tribuna_media" class="A170"></div>
      <div id="borde_tribuna_media" class="A171"></div>
      <div id="borde_tribuna_media" class="A172"></div>
      <div id="borde_tribuna_media" class="A173"></div>
      <div id="borde_tribuna_media" class="A174"></div>
      <div id="borde_tribuna_media" class="A175"></div>
      <div id="borde_tribuna_media" class="A176"></div>
      <div id="borde_tribuna_media" class="A177"></div>
      <div id="borde_tribuna_media" class="A178"></div>
      <div id="borde_tribuna_media" class="A179"></div>
      <div id="borde_tribuna_media" class="A180"></div>
      <div id="borde_tribuna_media" class="A181"></div>
      <div id="borde_tribuna_media" class="A182"></div>
      <div id="borde_tribuna_media" class="A183"></div>
      <div id="borde_tribuna_media" class="A184"></div>
      <div id="borde_tribuna_media" class="A185"></div>
      <div id="borde_tribuna_media" class="A186"></div>
      <div id="borde_tribuna_media" class="A187"></div>
      <div id="borde_tribuna_media" class="A188"></div>
      <div id="borde_tribuna_media" class="A189"></div>
      <div id="borde_tribuna_media" class="A190"></div>
      <div id="borde_tribuna_media" class="A191"></div>
      <div id="borde_tribuna_media"class="A192"></div>
      <div id="borde_tribuna_media" class="A193"></div>
      <div id="borde_tribuna_media" class="A194"></div>
      <div id="borde_tribuna_media" class="A195"></div>
      <div id="borde_tribuna_media" class="A196"></div>
      <div id="borde_tribuna_media" class="A197"></div>
      <div id="borde_tribuna_media" class="A198"></div>
</div></div>
    <div id="Tribuna Alta" class="Tribuna_alta" onclick=clickaction(this) style="border:2px solid black;"> 
    <div class="grid-container1">
      <div id="borde_tribuna_alta" class="A1"></div>
      <div id="borde_tribuna_alta" class="A2"></div>
      <div id="borde_tribuna_alta" class="A3"></div>
      <div id="borde_tribuna_alta" class="A4"></div>
      <div id="borde_tribuna_alta" class="A5"></div>
      <div id="borde_tribuna_alta" class="A6"></div>
      <div id="borde_tribuna_alta" class="A7"></div>
      <div id="borde_tribuna_alta" class="A8"></div>
      <div id="borde_tribuna_alta" class="A9"></div>
      <div id="borde_tribuna_alta" class="A10"></div>
      <div id="borde_tribuna_alta" class="A11"></div>
      <div id="borde_tribuna_alta" class="A12"></div>
      <div id="borde_tribuna_alta" class="A13"></div>
      <div id="borde_tribuna_alta" class="A14"></div>
      <div id="borde_tribuna_alta" class="A15"></div>
      <div id="borde_tribuna_alta" class="A16"></div>
      <div id="borde_tribuna_alta" class="A17"></div>
      <div id="borde_tribuna_alta" class="A18"></div>
      <div id="borde_tribuna_alta" class="A19"></div>
      <div id="borde_tribuna_alta" class="A20"></div>
      <div id="borde_tribuna_alta" class="A21"></div>
      <div id="borde_tribuna_alta" class="A22"></div>
      <div id="borde_tribuna_alta" class="A23"></div>
      <div id="borde_tribuna_alta" class="A24"></div>
      <div id="borde_tribuna_alta" class="A25"></div>
      <div id="borde_tribuna_alta" class="A26"></div>
      <div id="borde_tribuna_alta" class="A27"></div>
      <div id="borde_tribuna_alta" class="A28"></div>
      <div id="borde_tribuna_alta" class="A29"></div>
      <div id="borde_tribuna_alta" class="A30"></div>
      <div id="borde_tribuna_alta" class="A31"></div>
      <div id="borde_tribuna_alta" class="A32"></div>
      <div id="borde_tribuna_alta" class="A33"></div>
      <div id="borde_tribuna_alta" class="A34"></div>
      <div id="borde_tribuna_alta" class="A35"></div>
      <div id="borde_tribuna_alta" class="A36"></div>
      <div id="borde_tribuna_alta" class="A37"></div>
      <div id="borde_tribuna_alta" class="A38"></div>
      <div id="borde_tribuna_alta" class="A39"></div>
      <div id="borde_tribuna_alta" class="A40"></div>
      <div id="borde_tribuna_alta" class="A41"></div>
      <div id="borde_tribuna_alta" class="A42"></div>
      <div id="borde_tribuna_alta" class="A43"></div>
      <div id="borde_tribuna_alta" class="A44"></div>
      <div id="borde_tribuna_alta" class="A45"></div>
      <div id="borde_tribuna_alta" class="A46"></div>
      <div id="borde_tribuna_alta" class="A47"></div>
      <div id="borde_tribuna_alta" class="A48"></div>
      <div id="borde_tribuna_alta" class="A49"></div>
      <div id="borde_tribuna_alta" class="A50"></div>
      <div id="borde_tribuna_alta" class="A51"></div>
      <div id="borde_tribuna_alta" class="A52"></div>
      <div id="borde_tribuna_alta" class="A53"></div>
      <div id="borde_tribuna_alta" class="A54"></div>
      <div id="borde_tribuna_alta" class="A55"></div>
      <div id="borde_tribuna_alta" class="A56"></div>
      <div id="borde_tribuna_alta" class="A57"></div>
      <div id="borde_tribuna_alta" class="A58"></div>
      <div id="borde_tribuna_alta" class="A59"></div>
      <div id="borde_tribuna_alta" class="A60"></div>
      <div id="borde_tribuna_alta" class="A61"></div>
      <div id="borde_tribuna_alta" class="A62"></div>
      <div id="borde_tribuna_alta" class="A63"></div>
      <div id="borde_tribuna_alta" class="A64"></div>
      <div id="borde_tribuna_alta" class="A65"></div>
      <div id="borde_tribuna_alta" class="A66"></div>
      <div id="borde_tribuna_alta" class="A67"></div>
      <div id="borde_tribuna_alta" class="A68"></div>
      <div id="borde_tribuna_alta" class="A69"></div>
      <div id="borde_tribuna_alta" class="A70"></div>
      <div id="borde_tribuna_alta" class="A71"></div>
      <div id="borde_tribuna_alta" class="A72"></div>
      <div id="borde_tribuna_alta" class="A73"></div>
      <div id="borde_tribuna_alta" class="A74"></div>
      <div id="borde_tribuna_alta" class="A75"></div>
      <div id="borde_tribuna_alta" class="A76"></div>
      <div id="borde_tribuna_alta" class="A77"></div>
      <div id="borde_tribuna_alta" class="A78"></div>
      <div id="borde_tribuna_alta" class="A79"></div>
      <div id="borde_tribuna_alta" class="A80"></div>
      <div id="borde_tribuna_alta" class="A81"></div>
      <div id="borde_tribuna_alta" class="A82"></div>
      <div id="borde_tribuna_alta" class="A83"></div>
      <div id="borde_tribuna_alta" class="A84"></div>
      <div id="borde_tribuna_alta" class="A85"></div>
      <div id="borde_tribuna_alta" class="A86"></div>
      <div id="borde_tribuna_alta" class="A87"></div>
      <div id="borde_tribuna_alta" class="A88"></div>
      <div id="borde_tribuna_alta" class="A89"></div>
      <div id="borde_tribuna_alta" class="A90"></div>
      <div id="borde_tribuna_alta" class="A91"></div>
      <div id="borde_tribuna_alta" class="A92"></div>
      <div id="borde_tribuna_alta" class="A93"></div>
      <div id="borde_tribuna_alta" class="A94"></div>
      <div id="borde_tribuna_alta" class="A95"></div>
      <div id="borde_tribuna_alta" class="A96"></div>
      <div id="borde_tribuna_alta" class="A97"></div>
      <div id="borde_tribuna_alta" class="A98"></div>
      <div id="borde_tribuna_alta" class="A99"></div>
      <div id="borde_tribuna_alta" class="A100"></div>
      <div id="borde_tribuna_alta" class="A101"></div>
      <div id="borde_tribuna_alta" class="A102"></div>
      <div id="borde_tribuna_alta" class="A103"></div>
      <div id="borde_tribuna_alta" class="A104"></div>
      <div id="borde_tribuna_alta" class="A105"></div>
      <div id="borde_tribuna_alta" class="A106"></div>
      <div id="borde_tribuna_alta" class="A107"></div>
      <div id="borde_tribuna_alta" class="A108"></div>
      <div id="borde_tribuna_alta" class="A109"></div>
      <div id="borde_tribuna_alta" class="A110"></div>
      <div id="borde_tribuna_alta" class="A111"></div>
      <div id="borde_tribuna_alta" class="A112"></div>
      <div id="borde_tribuna_alta" class="A113"></div>
      <div id="borde_tribuna_alta" class="A114"></div>
      <div id="borde_tribuna_alta" class="A115"></div>
      <div id="borde_tribuna_alta" class="A116"></div>
      <div id="borde_tribuna_alta" class="A117"></div>
      <div id="borde_tribuna_alta" class="A118"></div>
      <div id="borde_tribuna_alta" class="A119"></div>
      <div id="borde_tribuna_alta" class="A120"></div>
      <div id="borde_tribuna_alta" class="A121"></div>
      <div id="borde_tribuna_alta" class="A122"></div>
      <div id="borde_tribuna_alta" class="A123"></div>
      <div id="borde_tribuna_alta" class="A124"></div>
      <div id="borde_tribuna_alta" class="A125"></div>
      <div id="borde_tribuna_alta" class="A126"></div>
      <div id="borde_tribuna_alta" class="A127"></div>
      <div id="borde_tribuna_alta" class="A128"></div>
      <div id="borde_tribuna_alta" class="A129"></div>
      <div id="borde_tribuna_alta" class="A130"></div>
      <div id="borde_tribuna_alta" class="A131"></div>
      <div id="borde_tribuna_alta" class="A132"></div>
      <div id="borde_tribuna_alta" class="A133"></div>
      <div id="borde_tribuna_alta" class="A134"></div>
      <div id="borde_tribuna_alta" class="A135"></div>
      <div id="borde_tribuna_alta" class="A136"></div>
      <div id="borde_tribuna_alta" class="A137"></div>
      <div id="borde_tribuna_alta" class="A138"></div>
      <div id="borde_tribuna_alta" class="A139"></div>
      <div id="borde_tribuna_alta" class="A140"></div>
      <div id="borde_tribuna_alta" class="A141"></div>
      <div id="borde_tribuna_alta" class="A142"></div>
      <div id="borde_tribuna_alta"class="A143"></div>
      <div id="borde_tribuna_alta" class="A144"></div>
      <div id="borde_tribuna_alta" class="A145"></div>
      <div id="borde_tribuna_alta" class="A146"></div>
      <div id="borde_tribuna_alta" class="A147"></div>
      <div id="borde_tribuna_alta" class="A148"></div>
      <div id="borde_tribuna_alta" class="A149"></div>
      <div id="borde_tribuna_alta" class="A150"></div>
      <div id="borde_tribuna_alta" class="A151"></div>
      <div id="borde_tribuna_alta" class="A152"></div>
      <div id="borde_tribuna_alta" class="A153"></div>
      <div id="borde_tribuna_alta" class="A154"></div>
      <div id="borde_tribuna_alta" class="A155"></div>
      <div id="borde_tribuna_alta" class="A156"></div>
      <div id="borde_tribuna_alta" class="A157"></div>
      <div id="borde_tribuna_alta" class="A158"></div>
      <div id="borde_tribuna_alta" class="A159"></div>
      <div id="borde_tribuna_alta" class="A160"></div>
      <div id="borde_tribuna_alta" class="A161"></div>
      <div id="borde_tribuna_alta"class="A162"></div>
      <div id="borde_tribuna_alta" class="A163"></div>
      <div id="borde_tribuna_alta" class="A164"></div>
      <div id="borde_tribuna_alta" class="A165"></div>
      <div id="borde_tribuna_alta" class="A166"></div>
      <div id="borde_tribuna_alta" class="A167"></div>
      <div id="borde_tribuna_alta" class="A168"></div>
      <div id="borde_tribuna_alta" class="A169"></div>
      <div id="borde_tribuna_alta" class="A170"></div>
      <div id="borde_tribuna_alta" class="A171"></div>
      <div id="borde_tribuna_alta" class="A172"></div>
      <div id="borde_tribuna_alta" class="A173"></div>
      <div id="borde_tribuna_alta" class="A174"></div>
      <div id="borde_tribuna_alta" class="A175"></div>
      <div id="borde_tribuna_alta" class="A176"></div>
      <div id="borde_tribuna_alta" class="A177"></div>
      <div id="borde_tribuna_alta" class="A178"></div>
      <div id="borde_tribuna_alta" class="A179"></div>
      <div id="borde_tribuna_alta" class="A180"></div>
      <div id="borde_tribuna_alta" class="A181"></div>
      <div id="borde_tribuna_alta" class="A182"></div>
      <div id="borde_tribuna_alta" class="A183"></div>
      <div id="borde_tribuna_alta" class="A184"></div>
      <div id="borde_tribuna_alta" class="A185"></div>
      <div id="borde_tribuna_alta" class="A186"></div>
      <div id="borde_tribuna_alta" class="A187"></div>
      <div id="borde_tribuna_alta" class="A188"></div>
      <div id="borde_tribuna_alta" class="A189"></div>
      <div id="borde_tribuna_alta" class="A190"></div>
      <div id="borde_tribuna_alta" class="A191"></div>
      <div id="borde_tribuna_alta"class="A192"></div>
      <div id="borde_tribuna_alta" class="A193"></div>
      <div id="borde_tribuna_alta" class="A194"></div>
      <div id="borde_tribuna_alta" class="A195"></div>
      <div id="borde_tribuna_alta" class="A196"></div>
      <div id="borde_tribuna_alta" class="A197"></div>
      <div id="borde_tribuna_alta" class="A198"></div>
</div></div>
  </div>
  <div class="Fondo_Sur">
    <div  id="Fondo Sur Bajo" class="Fondo_Sur_Bajo" onclick=clickaction(this) style="border:2px solid black;"> 
     <div class="grid-container1">
      <div id="borde_fondo_sur_bajo" class="A1"></div>
      <div id="borde_fondo_sur_bajo" class="A2"></div>
      <div id="borde_fondo_sur_bajo" class="A3"></div>
      <div id="borde_fondo_sur_bajo" class="A4"></div>
      <div id="borde_fondo_sur_bajo" class="A5"></div>
      <div id="borde_fondo_sur_bajo" class="A6"></div>
      <div id="borde_fondo_sur_bajo" class="A7"></div>
      <div id="borde_fondo_sur_bajo" class="A8"></div>
      <div id="borde_fondo_sur_bajo" class="A9"></div>
      <div id="borde_fondo_sur_bajo" class="A10"></div>
      <div id="borde_fondo_sur_bajo" class="A11"></div>
      <div id="borde_fondo_sur_bajo" class="A12"></div>
      <div id="borde_fondo_sur_bajo" class="A13"></div>
      <div id="borde_fondo_sur_bajo" class="A14"></div>
      <div id="borde_fondo_sur_bajo" class="A15"></div>
      <div id="borde_fondo_sur_bajo" class="A16"></div>
      <div id="borde_fondo_sur_bajo" class="A17"></div>
      <div id="borde_fondo_sur_bajo" class="A18"></div>
      <div id="borde_fondo_sur_bajo" class="A19"></div>
      <div id="borde_fondo_sur_bajo" class="A20"></div>
      <div id="borde_fondo_sur_bajo" class="A21"></div>
      <div id="borde_fondo_sur_bajo" class="A22"></div>
      <div id="borde_fondo_sur_bajo" class="A23"></div>
      <div id="borde_fondo_sur_bajo" class="A24"></div>
      <div id="borde_fondo_sur_bajo" class="A25"></div>
      <div id="borde_fondo_sur_bajo" class="A26"></div>
      <div id="borde_fondo_sur_bajo" class="A27"></div>
      <div id="borde_fondo_sur_bajo" class="A28"></div>
      <div id="borde_fondo_sur_bajo" class="A29"></div>
      <div id="borde_fondo_sur_bajo" class="A30"></div>
      <div id="borde_fondo_sur_bajo" class="A31"></div>
      <div id="borde_fondo_sur_bajo" class="A32"></div>
      <div id="borde_fondo_sur_bajo" class="A33"></div>
      <div id="borde_fondo_sur_bajo" class="A34"></div>
      <div id="borde_fondo_sur_bajo" class="A35"></div>
      <div id="borde_fondo_sur_bajo" class="A36"></div>
      <div id="borde_fondo_sur_bajo" class="A37"></div>
      <div id="borde_fondo_sur_bajo" class="A38"></div>
      <div id="borde_fondo_sur_bajo" class="A39"></div>
      <div id="borde_fondo_sur_bajo" class="A40"></div>
      <div id="borde_fondo_sur_bajo" class="A41"></div>
      <div id="borde_fondo_sur_bajo" class="A42"></div>
      <div id="borde_fondo_sur_bajo" class="A43"></div>
      <div id="borde_fondo_sur_bajo" class="A44"></div>
      <div id="borde_fondo_sur_bajo" class="A45"></div>
      <div id="borde_fondo_sur_bajo" class="A46"></div>
      <div id="borde_fondo_sur_bajo" class="A47"></div>
      <div id="borde_fondo_sur_bajo" class="A48"></div>
      <div id="borde_fondo_sur_bajo" class="A49"></div>
      <div id="borde_fondo_sur_bajo" class="A50"></div>
      <div id="borde_fondo_sur_bajo" class="A51"></div>
      <div id="borde_fondo_sur_bajo" class="A52"></div>
      <div id="borde_fondo_sur_bajo" class="A53"></div>
      <div id="borde_fondo_sur_bajo" class="A54"></div>
      <div id="borde_fondo_sur_bajo" class="A55"></div>
      <div id="borde_fondo_sur_bajo" class="A56"></div>
      <div id="borde_fondo_sur_bajo" class="A57"></div>
      <div id="borde_fondo_sur_bajo" class="A58"></div>
      <div id="borde_fondo_sur_bajo" class="A59"></div>
      <div id="borde_fondo_sur_bajo" class="A60"></div>
      <div id="borde_fondo_sur_bajo" class="A61"></div>
      <div id="borde_fondo_sur_bajo" class="A62"></div>
      <div id="borde_fondo_sur_bajo" class="A63"></div>
      <div id="borde_fondo_sur_bajo" class="A64"></div>
      <div id="borde_fondo_sur_bajo" class="A65"></div>
      <div id="borde_fondo_sur_bajo" class="A66"></div>
      <div id="borde_fondo_sur_bajo" class="A67"></div>
      <div id="borde_fondo_sur_bajo" class="A68"></div>
      <div id="borde_fondo_sur_bajo" class="A69"></div>
      <div id="borde_fondo_sur_bajo" class="A70"></div>
      <div id="borde_fondo_sur_bajo" class="A71"></div>
      <div id="borde_fondo_sur_bajo" class="A72"></div>
      <div id="borde_fondo_sur_bajo" class="A73"></div>
      <div id="borde_fondo_sur_bajo" class="A74"></div>
      <div id="borde_fondo_sur_bajo" class="A75"></div>
      <div id="borde_fondo_sur_bajo" class="A76"></div>
      <div id="borde_fondo_sur_bajo" class="A77"></div>
      <div id="borde_fondo_sur_bajo" class="A78"></div>
      <div id="borde_fondo_sur_bajo" class="A79"></div>
      <div id="borde_fondo_sur_bajo" class="A80"></div>
      <div id="borde_fondo_sur_bajo" class="A81"></div>
      <div id="borde_fondo_sur_bajo" class="A82"></div>
      <div id="borde_fondo_sur_bajo" class="A83"></div>
      <div id="borde_fondo_sur_bajo" class="A84"></div>
      <div id="borde_fondo_sur_bajo" class="A85"></div>
      <div id="borde_fondo_sur_bajo" class="A86"></div>
      <div id="borde_fondo_sur_bajo" class="A87"></div>
      <div id="borde_fondo_sur_bajo" class="A88"></div>
      <div id="borde_fondo_sur_bajo" class="A89"></div>
      <div id="borde_fondo_sur_bajo" class="A90"></div>
      <div id="borde_fondo_sur_bajo" class="A91"></div>
      <div id="borde_fondo_sur_bajo" class="A92"></div>
      <div id="borde_fondo_sur_bajo" class="A93"></div>
      <div id="borde_fondo_sur_bajo" class="A94"></div>
      <div id="borde_fondo_sur_bajo" class="A95"></div>
      <div id="borde_fondo_sur_bajo" class="A96"></div>
      <div id="borde_fondo_sur_bajo" class="A97"></div>
      <div id="borde_fondo_sur_bajo" class="A98"></div>
      <div id="borde_fondo_sur_bajo" class="A99"></div>
      <div id="borde_fondo_sur_bajo" class="A100"></div>
      <div id="borde_fondo_sur_bajo" class="A101"></div>
      <div id="borde_fondo_sur_bajo" class="A102"></div>
      <div id="borde_fondo_sur_bajo" class="A103"></div>
      <div id="borde_fondo_sur_bajo" class="A104"></div>
      <div id="borde_fondo_sur_bajo" class="A105"></div>
      <div id="borde_fondo_sur_bajo" class="A106"></div>
      <div id="borde_fondo_sur_bajo" class="A107"></div>
      <div id="borde_fondo_sur_bajo" class="A108"></div>
      <div id="borde_fondo_sur_bajo" class="A109"></div>
      <div id="borde_fondo_sur_bajo" class="A110"></div>
      <div id="borde_fondo_sur_bajo" class="A111"></div>
      <div id="borde_fondo_sur_bajo" class="A112"></div>
      <div id="borde_fondo_sur_bajo" class="A113"></div>
      <div id="borde_fondo_sur_bajo" class="A114"></div>
      <div id="borde_fondo_sur_bajo" class="A115"></div>
      <div id="borde_fondo_sur_bajo" class="A116"></div>
      <div id="borde_fondo_sur_bajo" class="A117"></div>
      <div id="borde_fondo_sur_bajo" class="A118"></div>
      <div id="borde_fondo_sur_bajo" class="A119"></div>
      <div id="borde_fondo_sur_bajo" class="A120"></div>
      <div id="borde_fondo_sur_bajo" class="A121"></div>
      <div id="borde_fondo_sur_bajo" class="A122"></div>
      <div id="borde_fondo_sur_bajo" class="A123"></div>
      <div id="borde_fondo_sur_bajo" class="A124"></div>
      <div id="borde_fondo_sur_bajo" class="A125"></div>
      <div id="borde_fondo_sur_bajo" class="A126"></div>
      <div id="borde_fondo_sur_bajo" class="A127"></div>
      <div id="borde_fondo_sur_bajo" class="A128"></div>
      <div id="borde_fondo_sur_bajo" class="A129"></div>
      <div id="borde_fondo_sur_bajo" class="A130"></div>
      <div id="borde_fondo_sur_bajo" class="A131"></div>
      <div id="borde_fondo_sur_bajo" class="A132"></div>
      <div id="borde_fondo_sur_bajo" class="A133"></div>
      <div id="borde_fondo_sur_bajo" class="A134"></div>
      <div id="borde_fondo_sur_bajo" class="A135"></div>
      <div id="borde_fondo_sur_bajo" class="A136"></div>
      <div id="borde_fondo_sur_bajo" class="A137"></div>
      <div id="borde_fondo_sur_bajo" class="A138"></div>
      <div id="borde_fondo_sur_bajo" class="A139"></div>
      <div id="borde_fondo_sur_bajo" class="A140"></div>
      <div id="borde_fondo_sur_bajo" class="A141"></div>
      <div id="borde_fondo_sur_bajo" class="A142"></div>
      <div id="borde_fondo_sur_bajo"class="A143"></div>
      <div id="borde_fondo_sur_bajo" class="A144"></div>
      <div id="borde_fondo_sur_bajo" class="A145"></div>
      <div id="borde_fondo_sur_bajo" class="A146"></div>
      <div id="borde_fondo_sur_bajo" class="A147"></div>
      <div id="borde_fondo_sur_bajo" class="A148"></div>
      <div id="borde_fondo_sur_bajo" class="A149"></div>
      <div id="borde_fondo_sur_bajo" class="A150"></div>
      <div id="borde_fondo_sur_bajo" class="A151"></div>
      <div id="borde_fondo_sur_bajo" class="A152"></div>
      <div id="borde_fondo_sur_bajo" class="A153"></div>
      <div id="borde_fondo_sur_bajo" class="A154"></div>
      <div id="borde_fondo_sur_bajo" class="A155"></div>
      <div id="borde_fondo_sur_bajo" class="A156"></div>
      <div id="borde_fondo_sur_bajo" class="A157"></div>
      <div id="borde_fondo_sur_bajo" class="A158"></div>
      <div id="borde_fondo_sur_bajo" class="A159"></div>
      <div id="borde_fondo_sur_bajo" class="A160"></div>
      <div id="borde_fondo_sur_bajo" class="A161"></div>
      <div id="borde_fondo_sur_bajo"class="A162"></div>
      <div id="borde_fondo_sur_bajo" class="A163"></div>
      <div id="borde_fondo_sur_bajo" class="A164"></div>
      <div id="borde_fondo_sur_bajo" class="A165"></div>
      <div id="borde_fondo_sur_bajo" class="A166"></div>
      <div id="borde_fondo_sur_bajo" class="A167"></div>
      <div id="borde_fondo_sur_bajo" class="A168"></div>
      <div id="borde_fondo_sur_bajo" class="A169"></div>
      <div id="borde_fondo_sur_bajo" class="A170"></div>
      <div id="borde_fondo_sur_bajo" class="A171"></div>
      <div id="borde_fondo_sur_bajo" class="A172"></div>
      <div id="borde_fondo_sur_bajo" class="A173"></div>
      <div id="borde_fondo_sur_bajo" class="A174"></div>
      <div id="borde_fondo_sur_bajo" class="A175"></div>
      <div id="borde_fondo_sur_bajo" class="A176"></div>
      <div id="borde_fondo_sur_bajo" class="A177"></div>
      <div id="borde_fondo_sur_bajo" class="A178"></div>
      <div id="borde_fondo_sur_bajo" class="A179"></div>
      <div id="borde_fondo_sur_bajo" class="A180"></div>
      <div id="borde_fondo_sur_bajo" class="A181"></div>
      <div id="borde_fondo_sur_bajo" class="A182"></div>
      <div id="borde_fondo_sur_bajo" class="A183"></div>
      <div id="borde_fondo_sur_bajo" class="A184"></div>
      <div id="borde_fondo_sur_bajo" class="A185"></div>
      <div id="borde_fondo_sur_bajo" class="A186"></div>
      <div id="borde_fondo_sur_bajo" class="A187"></div>
      <div id="borde_fondo_sur_bajo" class="A188"></div>
      <div id="borde_fondo_sur_bajo" class="A189"></div>
      <div id="borde_fondo_sur_bajo" class="A190"></div>
      <div id="borde_fondo_sur_bajo" class="A191"></div>
      <div id="borde_fondo_sur_bajo"class="A192"></div>
      <div id="borde_fondo_sur_bajo" class="A193"></div>
      <div id="borde_fondo_sur_bajo" class="A194"></div>
      <div id="borde_fondo_sur_bajo" class="A195"></div>
      <div id="borde_fondo_sur_bajo" class="A196"></div>
      <div id="borde_fondo_sur_bajo" class="A197"></div>
      <div id="borde_fondo_sur_bajo" class="A198"></div>
</div></div>
    <div id="Fondo Sur Medio" class="Fondo_Sur_Medio" onclick=clickaction(this) style="border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_fondo_sur_medio" class="A1"></div>
      <div id="borde_fondo_sur_medio" class="A2"></div>
      <div id="borde_fondo_sur_medio" class="A3"></div>
      <div id="borde_fondo_sur_medio" class="A4"></div>
      <div id="borde_fondo_sur_medio" class="A5"></div>
      <div id="borde_fondo_sur_medio" class="A6"></div>
      <div id="borde_fondo_sur_medio" class="A7"></div>
      <div id="borde_fondo_sur_medio" class="A8"></div>
      <div id="borde_fondo_sur_medio" class="A9"></div>
      <div id="borde_fondo_sur_medio" class="A10"></div>
      <div id="borde_fondo_sur_medio" class="A11"></div>
      <div id="borde_fondo_sur_medio" class="A12"></div>
      <div id="borde_fondo_sur_medio" class="A13"></div>
      <div id="borde_fondo_sur_medio" class="A14"></div>
      <div id="borde_fondo_sur_medio" class="A15"></div>
      <div id="borde_fondo_sur_medio" class="A16"></div>
      <div id="borde_fondo_sur_medio" class="A17"></div>
      <div id="borde_fondo_sur_medio" class="A18"></div>
      <div id="borde_fondo_sur_medio" class="A19"></div>
      <div id="borde_fondo_sur_medio" class="A20"></div>
      <div id="borde_fondo_sur_medio" class="A21"></div>
      <div id="borde_fondo_sur_medio" class="A22"></div>
      <div id="borde_fondo_sur_medio" class="A23"></div>
      <div id="borde_fondo_sur_medio" class="A24"></div>
      <div id="borde_fondo_sur_medio" class="A25"></div>
      <div id="borde_fondo_sur_medio" class="A26"></div>
      <div id="borde_fondo_sur_medio" class="A27"></div>
      <div id="borde_fondo_sur_medio" class="A28"></div>
      <div id="borde_fondo_sur_medio" class="A29"></div>
      <div id="borde_fondo_sur_medio" class="A30"></div>
      <div id="borde_fondo_sur_medio" class="A31"></div>
      <div id="borde_fondo_sur_medio" class="A32"></div>
      <div id="borde_fondo_sur_medio" class="A33"></div>
      <div id="borde_fondo_sur_medio" class="A34"></div>
      <div id="borde_fondo_sur_medio" class="A35"></div>
      <div id="borde_fondo_sur_medio" class="A36"></div>
      <div id="borde_fondo_sur_medio" class="A37"></div>
      <div id="borde_fondo_sur_medio" class="A38"></div>
      <div id="borde_fondo_sur_medio" class="A39"></div>
      <div id="borde_fondo_sur_medio" class="A40"></div>
      <div id="borde_fondo_sur_medio" class="A41"></div>
      <div id="borde_fondo_sur_medio" class="A42"></div>
      <div id="borde_fondo_sur_medio" class="A43"></div>
      <div id="borde_fondo_sur_medio" class="A44"></div>
      <div id="borde_fondo_sur_medio" class="A45"></div>
      <div id="borde_fondo_sur_medio" class="A46"></div>
      <div id="borde_fondo_sur_medio" class="A47"></div>
      <div id="borde_fondo_sur_medio" class="A48"></div>
      <div id="borde_fondo_sur_medio" class="A49"></div>
      <div id="borde_fondo_sur_medio" class="A50"></div>
      <div id="borde_fondo_sur_medio" class="A51"></div>
      <div id="borde_fondo_sur_medio" class="A52"></div>
      <div id="borde_fondo_sur_medio" class="A53"></div>
      <div id="borde_fondo_sur_medio" class="A54"></div>
      <div id="borde_fondo_sur_medio" class="A55"></div>
      <div id="borde_fondo_sur_medio" class="A56"></div>
      <div id="borde_fondo_sur_medio" class="A57"></div>
      <div id="borde_fondo_sur_medio" class="A58"></div>
      <div id="borde_fondo_sur_medio" class="A59"></div>
      <div id="borde_fondo_sur_medio" class="A60"></div>
      <div id="borde_fondo_sur_medio" class="A61"></div>
      <div id="borde_fondo_sur_medio" class="A62"></div>
      <div id="borde_fondo_sur_medio" class="A63"></div>
      <div id="borde_fondo_sur_medio" class="A64"></div>
      <div id="borde_fondo_sur_medio" class="A65"></div>
      <div id="borde_fondo_sur_medio" class="A66"></div>
      <div id="borde_fondo_sur_medio" class="A67"></div>
      <div id="borde_fondo_sur_medio" class="A68"></div>
      <div id="borde_fondo_sur_medio" class="A69"></div>
      <div id="borde_fondo_sur_medio" class="A70"></div>
      <div id="borde_fondo_sur_medio" class="A71"></div>
      <div id="borde_fondo_sur_medio" class="A72"></div>
      <div id="borde_fondo_sur_medio" class="A73"></div>
      <div id="borde_fondo_sur_medio" class="A74"></div>
      <div id="borde_fondo_sur_medio" class="A75"></div>
      <div id="borde_fondo_sur_medio" class="A76"></div>
      <div id="borde_fondo_sur_medio" class="A77"></div>
      <div id="borde_fondo_sur_medio" class="A78"></div>
      <div id="borde_fondo_sur_medio" class="A79"></div>
      <div id="borde_fondo_sur_medio" class="A80"></div>
      <div id="borde_fondo_sur_medio" class="A81"></div>
      <div id="borde_fondo_sur_medio" class="A82"></div>
      <div id="borde_fondo_sur_medio" class="A83"></div>
      <div id="borde_fondo_sur_medio" class="A84"></div>
      <div id="borde_fondo_sur_medio" class="A85"></div>
      <div id="borde_fondo_sur_medio" class="A86"></div>
      <div id="borde_fondo_sur_medio" class="A87"></div>
      <div id="borde_fondo_sur_medio" class="A88"></div>
      <div id="borde_fondo_sur_medio" class="A89"></div>
      <div id="borde_fondo_sur_medio" class="A90"></div>
      <div id="borde_fondo_sur_medio" class="A91"></div>
      <div id="borde_fondo_sur_medio" class="A92"></div>
      <div id="borde_fondo_sur_medio" class="A93"></div>
      <div id="borde_fondo_sur_medio" class="A94"></div>
      <div id="borde_fondo_sur_medio" class="A95"></div>
      <div id="borde_fondo_sur_medio" class="A96"></div>
      <div id="borde_fondo_sur_medio" class="A97"></div>
      <div id="borde_fondo_sur_medio" class="A98"></div>
      <div id="borde_fondo_sur_medio" class="A99"></div>
      <div id="borde_fondo_sur_medio" class="A100"></div>
      <div id="borde_fondo_sur_medio" class="A101"></div>
      <div id="borde_fondo_sur_medio" class="A102"></div>
      <div id="borde_fondo_sur_medio" class="A103"></div>
      <div id="borde_fondo_sur_medio" class="A104"></div>
      <div id="borde_fondo_sur_medio" class="A105"></div>
      <div id="borde_fondo_sur_medio" class="A106"></div>
      <div id="borde_fondo_sur_medio" class="A107"></div>
      <div id="borde_fondo_sur_medio" class="A108"></div>
      <div id="borde_fondo_sur_medio" class="A109"></div>
      <div id="borde_fondo_sur_medio" class="A110"></div>
      <div id="borde_fondo_sur_medio" class="A111"></div>
      <div id="borde_fondo_sur_medio" class="A112"></div>
      <div id="borde_fondo_sur_medio" class="A113"></div>
      <div id="borde_fondo_sur_medio" class="A114"></div>
      <div id="borde_fondo_sur_medio" class="A115"></div>
      <div id="borde_fondo_sur_medio" class="A116"></div>
      <div id="borde_fondo_sur_medio" class="A117"></div>
      <div id="borde_fondo_sur_medio" class="A118"></div>
      <div id="borde_fondo_sur_medio" class="A119"></div>
      <div id="borde_fondo_sur_medio" class="A120"></div>
      <div id="borde_fondo_sur_medio" class="A121"></div>
      <div id="borde_fondo_sur_medio" class="A122"></div>
      <div id="borde_fondo_sur_medio" class="A123"></div>
      <div id="borde_fondo_sur_medio" class="A124"></div>
      <div id="borde_fondo_sur_medio" class="A125"></div>
      <div id="borde_fondo_sur_medio" class="A126"></div>
      <div id="borde_fondo_sur_medio" class="A127"></div>
      <div id="borde_fondo_sur_medio" class="A128"></div>
      <div id="borde_fondo_sur_medio" class="A129"></div>
      <div id="borde_fondo_sur_medio" class="A130"></div>
      <div id="borde_fondo_sur_medio" class="A131"></div>
      <div id="borde_fondo_sur_medio" class="A132"></div>
      <div id="borde_fondo_sur_medio" class="A133"></div>
      <div id="borde_fondo_sur_medio" class="A134"></div>
      <div id="borde_fondo_sur_medio" class="A135"></div>
      <div id="borde_fondo_sur_medio" class="A136"></div>
      <div id="borde_fondo_sur_medio" class="A137"></div>
      <div id="borde_fondo_sur_medio" class="A138"></div>
      <div id="borde_fondo_sur_medio" class="A139"></div>
      <div id="borde_fondo_sur_medio" class="A140"></div>
      <div id="borde_fondo_sur_medio" class="A141"></div>
      <div id="borde_fondo_sur_medio" class="A142"></div>
      <div id="borde_fondo_sur_medio"class="A143"></div>
      <div id="borde_fondo_sur_medio" class="A144"></div>
      <div id="borde_fondo_sur_medio" class="A145"></div>
      <div id="borde_fondo_sur_medio" class="A146"></div>
      <div id="borde_fondo_sur_medio" class="A147"></div>
      <div id="borde_fondo_sur_medio" class="A148"></div>
      <div id="borde_fondo_sur_medio" class="A149"></div>
      <div id="borde_fondo_sur_medio" class="A150"></div>
      <div id="borde_fondo_sur_medio" class="A151"></div>
      <div id="borde_fondo_sur_medio" class="A152"></div>
      <div id="borde_fondo_sur_medio" class="A153"></div>
      <div id="borde_fondo_sur_medio" class="A154"></div>
      <div id="borde_fondo_sur_medio" class="A155"></div>
      <div id="borde_fondo_sur_medio" class="A156"></div>
      <div id="borde_fondo_sur_medio" class="A157"></div>
      <div id="borde_fondo_sur_medio" class="A158"></div>
      <div id="borde_fondo_sur_medio" class="A159"></div>
      <div id="borde_fondo_sur_medio" class="A160"></div>
      <div id="borde_fondo_sur_medio" class="A161"></div>
      <div id="borde_fondo_sur_medio"class="A162"></div>
      <div id="borde_fondo_sur_medio" class="A163"></div>
      <div id="borde_fondo_sur_medio" class="A164"></div>
      <div id="borde_fondo_sur_medio" class="A165"></div>
      <div id="borde_fondo_sur_medio" class="A166"></div>
      <div id="borde_fondo_sur_medio" class="A167"></div>
      <div id="borde_fondo_sur_medio" class="A168"></div>
      <div id="borde_fondo_sur_medio" class="A169"></div>
      <div id="borde_fondo_sur_medio" class="A170"></div>
      <div id="borde_fondo_sur_medio" class="A171"></div>
      <div id="borde_fondo_sur_medio" class="A172"></div>
      <div id="borde_fondo_sur_medio" class="A173"></div>
      <div id="borde_fondo_sur_medio" class="A174"></div>
      <div id="borde_fondo_sur_medio" class="A175"></div>
      <div id="borde_fondo_sur_medio" class="A176"></div>
      <div id="borde_fondo_sur_medio" class="A177"></div>
      <div id="borde_fondo_sur_medio" class="A178"></div>
      <div id="borde_fondo_sur_medio" class="A179"></div>
      <div id="borde_fondo_sur_medio" class="A180"></div>
      <div id="borde_fondo_sur_medio" class="A181"></div>
      <div id="borde_fondo_sur_medio" class="A182"></div>
      <div id="borde_fondo_sur_medio" class="A183"></div>
      <div id="borde_fondo_sur_medio" class="A184"></div>
      <div id="borde_fondo_sur_medio" class="A185"></div>
      <div id="borde_fondo_sur_medio" class="A186"></div>
      <div id="borde_fondo_sur_medio" class="A187"></div>
      <div id="borde_fondo_sur_medio" class="A188"></div>
      <div id="borde_fondo_sur_medio" class="A189"></div>
      <div id="borde_fondo_sur_medio" class="A190"></div>
      <div id="borde_fondo_sur_medio" class="A191"></div>
      <div id="borde_fondo_sur_medio"class="A192"></div>
      <div id="borde_fondo_sur_medio" class="A193"></div>
      <div id="borde_fondo_sur_medio" class="A194"></div>
      <div id="borde_fondo_sur_medio" class="A195"></div>
      <div id="borde_fondo_sur_medio" class="A196"></div>
      <div id="borde_fondo_sur_medio" class="A197"></div>
      <div id="borde_fondo_sur_medio" class="A198"></div>
</div></div>
    <div id="Fondo Sur Alto" class="Fondo_Sur_Alto" onclick=clickaction(this) style="border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_fondo_sur_alto" class="A1"></div>
      <div id="borde_fondo_sur_alto" class="A2"></div>
      <div id="borde_fondo_sur_alto" class="A3"></div>
      <div id="borde_fondo_sur_alto" class="A4"></div>
      <div id="borde_fondo_sur_alto" class="A5"></div>
      <div id="borde_fondo_sur_alto" class="A6"></div>
      <div id="borde_fondo_sur_alto" class="A7"></div>
      <div id="borde_fondo_sur_alto" class="A8"></div>
      <div id="borde_fondo_sur_alto" class="A9"></div>
      <div id="borde_fondo_sur_alto" class="A10"></div>
      <div id="borde_fondo_sur_alto" class="A11"></div>
      <div id="borde_fondo_sur_alto" class="A12"></div>
      <div id="borde_fondo_sur_alto" class="A13"></div>
      <div id="borde_fondo_sur_alto" class="A14"></div>
      <div id="borde_fondo_sur_alto" class="A15"></div>
      <div id="borde_fondo_sur_alto" class="A16"></div>
      <div id="borde_fondo_sur_alto" class="A17"></div>
      <div id="borde_fondo_sur_alto" class="A18"></div>
      <div id="borde_fondo_sur_alto" class="A19"></div>
      <div id="borde_fondo_sur_alto" class="A20"></div>
      <div id="borde_fondo_sur_alto" class="A21"></div>
      <div id="borde_fondo_sur_alto" class="A22"></div>
      <div id="borde_fondo_sur_alto" class="A23"></div>
      <div id="borde_fondo_sur_alto" class="A24"></div>
      <div id="borde_fondo_sur_alto" class="A25"></div>
      <div id="borde_fondo_sur_alto" class="A26"></div>
      <div id="borde_fondo_sur_alto" class="A27"></div>
      <div id="borde_fondo_sur_alto" class="A28"></div>
      <div id="borde_fondo_sur_alto" class="A29"></div>
      <div id="borde_fondo_sur_alto" class="A30"></div>
      <div id="borde_fondo_sur_alto" class="A31"></div>
      <div id="borde_fondo_sur_alto" class="A32"></div>
      <div id="borde_fondo_sur_alto" class="A33"></div>
      <div id="borde_fondo_sur_alto" class="A34"></div>
      <div id="borde_fondo_sur_alto" class="A35"></div>
      <div id="borde_fondo_sur_alto" class="A36"></div>
      <div id="borde_fondo_sur_alto" class="A37"></div>
      <div id="borde_fondo_sur_alto" class="A38"></div>
      <div id="borde_fondo_sur_alto" class="A39"></div>
      <div id="borde_fondo_sur_alto" class="A40"></div>
      <div id="borde_fondo_sur_alto" class="A41"></div>
      <div id="borde_fondo_sur_alto" class="A42"></div>
      <div id="borde_fondo_sur_alto" class="A43"></div>
      <div id="borde_fondo_sur_alto" class="A44"></div>
      <div id="borde_fondo_sur_alto" class="A45"></div>
      <div id="borde_fondo_sur_alto" class="A46"></div>
      <div id="borde_fondo_sur_alto" class="A47"></div>
      <div id="borde_fondo_sur_alto" class="A48"></div>
      <div id="borde_fondo_sur_alto" class="A49"></div>
      <div id="borde_fondo_sur_alto" class="A50"></div>
      <div id="borde_fondo_sur_alto" class="A51"></div>
      <div id="borde_fondo_sur_alto" class="A52"></div>
      <div id="borde_fondo_sur_alto" class="A53"></div>
      <div id="borde_fondo_sur_alto" class="A54"></div>
      <div id="borde_fondo_sur_alto" class="A55"></div>
      <div id="borde_fondo_sur_alto" class="A56"></div>
      <div id="borde_fondo_sur_alto" class="A57"></div>
      <div id="borde_fondo_sur_alto" class="A58"></div>
      <div id="borde_fondo_sur_alto" class="A59"></div>
      <div id="borde_fondo_sur_alto" class="A60"></div>
      <div id="borde_fondo_sur_alto" class="A61"></div>
      <div id="borde_fondo_sur_alto" class="A62"></div>
      <div id="borde_fondo_sur_alto" class="A63"></div>
      <div id="borde_fondo_sur_alto" class="A64"></div>
      <div id="borde_fondo_sur_alto" class="A65"></div>
      <div id="borde_fondo_sur_alto" class="A66"></div>
      <div id="borde_fondo_sur_alto" class="A67"></div>
      <div id="borde_fondo_sur_alto" class="A68"></div>
      <div id="borde_fondo_sur_alto" class="A69"></div>
      <div id="borde_fondo_sur_alto" class="A70"></div>
      <div id="borde_fondo_sur_alto" class="A71"></div>
      <div id="borde_fondo_sur_alto" class="A72"></div>
      <div id="borde_fondo_sur_alto" class="A73"></div>
      <div id="borde_fondo_sur_alto" class="A74"></div>
      <div id="borde_fondo_sur_alto" class="A75"></div>
      <div id="borde_fondo_sur_alto" class="A76"></div>
      <div id="borde_fondo_sur_alto" class="A77"></div>
      <div id="borde_fondo_sur_alto" class="A78"></div>
      <div id="borde_fondo_sur_alto" class="A79"></div>
      <div id="borde_fondo_sur_alto" class="A80"></div>
      <div id="borde_fondo_sur_alto" class="A81"></div>
      <div id="borde_fondo_sur_alto" class="A82"></div>
      <div id="borde_fondo_sur_alto" class="A83"></div>
      <div id="borde_fondo_sur_alto" class="A84"></div>
      <div id="borde_fondo_sur_alto" class="A85"></div>
      <div id="borde_fondo_sur_alto" class="A86"></div>
      <div id="borde_fondo_sur_alto" class="A87"></div>
      <div id="borde_fondo_sur_alto" class="A88"></div>
      <div id="borde_fondo_sur_alto" class="A89"></div>
      <div id="borde_fondo_sur_alto" class="A90"></div>
      <div id="borde_fondo_sur_alto" class="A91"></div>
      <div id="borde_fondo_sur_alto" class="A92"></div>
      <div id="borde_fondo_sur_alto" class="A93"></div>
      <div id="borde_fondo_sur_alto" class="A94"></div>
      <div id="borde_fondo_sur_alto" class="A95"></div>
      <div id="borde_fondo_sur_alto" class="A96"></div>
      <div id="borde_fondo_sur_alto" class="A97"></div>
      <div id="borde_fondo_sur_alto" class="A98"></div>
      <div id="borde_fondo_sur_alto" class="A99"></div>
      <div id="borde_fondo_sur_alto" class="A100"></div>
      <div id="borde_fondo_sur_alto" class="A101"></div>
      <div id="borde_fondo_sur_alto" class="A102"></div>
      <div id="borde_fondo_sur_alto" class="A103"></div>
      <div id="borde_fondo_sur_alto" class="A104"></div>
      <div id="borde_fondo_sur_alto" class="A105"></div>
      <div id="borde_fondo_sur_alto" class="A106"></div>
      <div id="borde_fondo_sur_alto" class="A107"></div>
      <div id="borde_fondo_sur_alto" class="A108"></div>
      <div id="borde_fondo_sur_alto" class="A109"></div>
      <div id="borde_fondo_sur_alto" class="A110"></div>
      <div id="borde_fondo_sur_alto" class="A111"></div>
      <div id="borde_fondo_sur_alto" class="A112"></div>
      <div id="borde_fondo_sur_alto" class="A113"></div>
      <div id="borde_fondo_sur_alto" class="A114"></div>
      <div id="borde_fondo_sur_alto" class="A115"></div>
      <div id="borde_fondo_sur_alto" class="A116"></div>
      <div id="borde_fondo_sur_alto" class="A117"></div>
      <div id="borde_fondo_sur_alto" class="A118"></div>
      <div id="borde_fondo_sur_alto" class="A119"></div>
      <div id="borde_fondo_sur_alto" class="A120"></div>
      <div id="borde_fondo_sur_alto" class="A121"></div>
      <div id="borde_fondo_sur_alto" class="A122"></div>
      <div id="borde_fondo_sur_alto" class="A123"></div>
      <div id="borde_fondo_sur_alto" class="A124"></div>
      <div id="borde_fondo_sur_alto" class="A125"></div>
      <div id="borde_fondo_sur_alto" class="A126"></div>
      <div id="borde_fondo_sur_alto" class="A127"></div>
      <div id="borde_fondo_sur_alto" class="A128"></div>
      <div id="borde_fondo_sur_alto" class="A129"></div>
      <div id="borde_fondo_sur_alto" class="A130"></div>
      <div id="borde_fondo_sur_alto" class="A131"></div>
      <div id="borde_fondo_sur_alto" class="A132"></div>
      <div id="borde_fondo_sur_alto" class="A133"></div>
      <div id="borde_fondo_sur_alto" class="A134"></div>
      <div id="borde_fondo_sur_alto" class="A135"></div>
      <div id="borde_fondo_sur_alto" class="A136"></div>
      <div id="borde_fondo_sur_alto" class="A137"></div>
      <div id="borde_fondo_sur_alto" class="A138"></div>
      <div id="borde_fondo_sur_alto" class="A139"></div>
      <div id="borde_fondo_sur_alto" class="A140"></div>
      <div id="borde_fondo_sur_alto" class="A141"></div>
      <div id="borde_fondo_sur_alto" class="A142"></div>
      <div id="borde_fondo_sur_alto"class="A143"></div>
      <div id="borde_fondo_sur_alto" class="A144"></div>
      <div id="borde_fondo_sur_alto" class="A145"></div>
      <div id="borde_fondo_sur_alto" class="A146"></div>
      <div id="borde_fondo_sur_alto" class="A147"></div>
      <div id="borde_fondo_sur_alto" class="A148"></div>
      <div id="borde_fondo_sur_alto" class="A149"></div>
      <div id="borde_fondo_sur_alto" class="A150"></div>
      <div id="borde_fondo_sur_alto" class="A151"></div>
      <div id="borde_fondo_sur_alto" class="A152"></div>
      <div id="borde_fondo_sur_alto" class="A153"></div>
      <div id="borde_fondo_sur_alto" class="A154"></div>
      <div id="borde_fondo_sur_alto" class="A155"></div>
      <div id="borde_fondo_sur_alto" class="A156"></div>
      <div id="borde_fondo_sur_alto" class="A157"></div>
      <div id="borde_fondo_sur_alto" class="A158"></div>
      <div id="borde_fondo_sur_alto" class="A159"></div>
      <div id="borde_fondo_sur_alto" class="A160"></div>
      <div id="borde_fondo_sur_alto" class="A161"></div>
      <div id="borde_fondo_sur_alto"class="A162"></div>
      <div id="borde_fondo_sur_alto" class="A163"></div>
      <div id="borde_fondo_sur_alto" class="A164"></div>
      <div id="borde_fondo_sur_alto" class="A165"></div>
      <div id="borde_fondo_sur_alto" class="A166"></div>
      <div id="borde_fondo_sur_alto" class="A167"></div>
      <div id="borde_fondo_sur_alto" class="A168"></div>
      <div id="borde_fondo_sur_alto" class="A169"></div>
      <div id="borde_fondo_sur_alto" class="A170"></div>
      <div id="borde_fondo_sur_alto" class="A171"></div>
      <div id="borde_fondo_sur_alto" class="A172"></div>
      <div id="borde_fondo_sur_alto" class="A173"></div>
      <div id="borde_fondo_sur_alto" class="A174"></div>
      <div id="borde_fondo_sur_alto" class="A175"></div>
      <div id="borde_fondo_sur_alto" class="A176"></div>
      <div id="borde_fondo_sur_alto" class="A177"></div>
      <div id="borde_fondo_sur_alto" class="A178"></div>
      <div id="borde_fondo_sur_alto" class="A179"></div>
      <div id="borde_fondo_sur_alto" class="A180"></div>
      <div id="borde_fondo_sur_alto" class="A181"></div>
      <div id="borde_fondo_sur_alto" class="A182"></div>
      <div id="borde_fondo_sur_alto" class="A183"></div>
      <div id="borde_fondo_sur_alto" class="A184"></div>
      <div id="borde_fondo_sur_alto" class="A185"></div>
      <div id="borde_fondo_sur_alto" class="A186"></div>
      <div id="borde_fondo_sur_alto" class="A187"></div>
      <div id="borde_fondo_sur_alto" class="A188"></div>
      <div id="borde_fondo_sur_alto" class="A189"></div>
      <div id="borde_fondo_sur_alto" class="A190"></div>
      <div id="borde_fondo_sur_alto" class="A191"></div>
      <div id="borde_fondo_sur_alto"class="A192"></div>
      <div id="borde_fondo_sur_alto" class="A193"></div>
      <div id="borde_fondo_sur_alto" class="A194"></div>
      <div id="borde_fondo_sur_alto" class="A195"></div>
      <div id="borde_fondo_sur_alto" class="A196"></div>
      <div id="borde_fondo_sur_alto" class="A197"></div>
      <div id="borde_fondo_sur_alto" class="A198"></div>
</div></div>
  </div>
  <div class="Fondo_Norte">
    <div id="Fondo Norte Bajo" class="Fondo_norte_Bajo" onclick=clickaction(this) style="border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_fondo_norte_bajo" class="A1"></div>
      <div id="borde_fondo_norte_bajo" class="A2"></div>
      <div id="borde_fondo_norte_bajo" class="A3"></div>
      <div id="borde_fondo_norte_bajo" class="A4"></div>
      <div id="borde_fondo_norte_bajo" class="A5"></div>
      <div id="borde_fondo_norte_bajo" class="A6"></div>
      <div id="borde_fondo_norte_bajo" class="A7"></div>
      <div id="borde_fondo_norte_bajo" class="A8"></div>
      <div id="borde_fondo_norte_bajo" class="A9"></div>
      <div id="borde_fondo_norte_bajo" class="A10"></div>
      <div id="borde_fondo_norte_bajo" class="A11"></div>
      <div id="borde_fondo_norte_bajo" class="A12"></div>
      <div id="borde_fondo_norte_bajo" class="A13"></div>
      <div id="borde_fondo_norte_bajo" class="A14"></div>
      <div id="borde_fondo_norte_bajo" class="A15"></div>
      <div id="borde_fondo_norte_bajo" class="A16"></div>
      <div id="borde_fondo_norte_bajo" class="A17"></div>
      <div id="borde_fondo_norte_bajo" class="A18"></div>
      <div id="borde_fondo_norte_bajo" class="A19"></div>
      <div id="borde_fondo_norte_bajo" class="A20"></div>
      <div id="borde_fondo_norte_bajo" class="A21"></div>
      <div id="borde_fondo_norte_bajo" class="A22"></div>
      <div id="borde_fondo_norte_bajo" class="A23"></div>
      <div id="borde_fondo_norte_bajo" class="A24"></div>
      <div id="borde_fondo_norte_bajo" class="A25"></div>
      <div id="borde_fondo_norte_bajo" class="A26"></div>
      <div id="borde_fondo_norte_bajo" class="A27"></div>
      <div id="borde_fondo_norte_bajo" class="A28"></div>
      <div id="borde_fondo_norte_bajo" class="A29"></div>
      <div id="borde_fondo_norte_bajo" class="A30"></div>
      <div id="borde_fondo_norte_bajo" class="A31"></div>
      <div id="borde_fondo_norte_bajo" class="A32"></div>
      <div id="borde_fondo_norte_bajo" class="A33"></div>
      <div id="borde_fondo_norte_bajo" class="A34"></div>
      <div id="borde_fondo_norte_bajo" class="A35"></div>
      <div id="borde_fondo_norte_bajo" class="A36"></div>
      <div id="borde_fondo_norte_bajo" class="A37"></div>
      <div id="borde_fondo_norte_bajo" class="A38"></div>
      <div id="borde_fondo_norte_bajo" class="A39"></div>
      <div id="borde_fondo_norte_bajo" class="A40"></div>
      <div id="borde_fondo_norte_bajo" class="A41"></div>
      <div id="borde_fondo_norte_bajo" class="A42"></div>
      <div id="borde_fondo_norte_bajo" class="A43"></div>
      <div id="borde_fondo_norte_bajo" class="A44"></div>
      <div id="borde_fondo_norte_bajo" class="A45"></div>
      <div id="borde_fondo_norte_bajo" class="A46"></div>
      <div id="borde_fondo_norte_bajo" class="A47"></div>
      <div id="borde_fondo_norte_bajo" class="A48"></div>
      <div id="borde_fondo_norte_bajo" class="A49"></div>
      <div id="borde_fondo_norte_bajo" class="A50"></div>
      <div id="borde_fondo_norte_bajo" class="A51"></div>
      <div id="borde_fondo_norte_bajo" class="A52"></div>
      <div id="borde_fondo_norte_bajo" class="A53"></div>
      <div id="borde_fondo_norte_bajo" class="A54"></div>
      <div id="borde_fondo_norte_bajo" class="A55"></div>
      <div id="borde_fondo_norte_bajo" class="A56"></div>
      <div id="borde_fondo_norte_bajo" class="A57"></div>
      <div id="borde_fondo_norte_bajo" class="A58"></div>
      <div id="borde_fondo_norte_bajo" class="A59"></div>
      <div id="borde_fondo_norte_bajo" class="A60"></div>
      <div id="borde_fondo_norte_bajo" class="A61"></div>
      <div id="borde_fondo_norte_bajo" class="A62"></div>
      <div id="borde_fondo_norte_bajo" class="A63"></div>
      <div id="borde_fondo_norte_bajo" class="A64"></div>
      <div id="borde_fondo_norte_bajo" class="A65"></div>
      <div id="borde_fondo_norte_bajo" class="A66"></div>
      <div id="borde_fondo_norte_bajo" class="A67"></div>
      <div id="borde_fondo_norte_bajo" class="A68"></div>
      <div id="borde_fondo_norte_bajo" class="A69"></div>
      <div id="borde_fondo_norte_bajo" class="A70"></div>
      <div id="borde_fondo_norte_bajo" class="A71"></div>
      <div id="borde_fondo_norte_bajo" class="A72"></div>
      <div id="borde_fondo_norte_bajo" class="A73"></div>
      <div id="borde_fondo_norte_bajo" class="A74"></div>
      <div id="borde_fondo_norte_bajo" class="A75"></div>
      <div id="borde_fondo_norte_bajo" class="A76"></div>
      <div id="borde_fondo_norte_bajo" class="A77"></div>
      <div id="borde_fondo_norte_bajo" class="A78"></div>
      <div id="borde_fondo_norte_bajo" class="A79"></div>
      <div id="borde_fondo_norte_bajo" class="A80"></div>
      <div id="borde_fondo_norte_bajo" class="A81"></div>
      <div id="borde_fondo_norte_bajo" class="A82"></div>
      <div id="borde_fondo_norte_bajo" class="A83"></div>
      <div id="borde_fondo_norte_bajo" class="A84"></div>
      <div id="borde_fondo_norte_bajo" class="A85"></div>
      <div id="borde_fondo_norte_bajo" class="A86"></div>
      <div id="borde_fondo_norte_bajo" class="A87"></div>
      <div id="borde_fondo_norte_bajo" class="A88"></div>
      <div id="borde_fondo_norte_bajo" class="A89"></div>
      <div id="borde_fondo_norte_bajo" class="A90"></div>
      <div id="borde_fondo_norte_bajo" class="A91"></div>
      <div id="borde_fondo_norte_bajo" class="A92"></div>
      <div id="borde_fondo_norte_bajo" class="A93"></div>
      <div id="borde_fondo_norte_bajo" class="A94"></div>
      <div id="borde_fondo_norte_bajo" class="A95"></div>
      <div id="borde_fondo_norte_bajo" class="A96"></div>
      <div id="borde_fondo_norte_bajo" class="A97"></div>
      <div id="borde_fondo_norte_bajo" class="A98"></div>
      <div id="borde_fondo_norte_bajo" class="A99"></div>
      <div id="borde_fondo_norte_bajo" class="A100"></div>
      <div id="borde_fondo_norte_bajo" class="A101"></div>
      <div id="borde_fondo_norte_bajo" class="A102"></div>
      <div id="borde_fondo_norte_bajo" class="A103"></div>
      <div id="borde_fondo_norte_bajo" class="A104"></div>
      <div id="borde_fondo_norte_bajo" class="A105"></div>
      <div id="borde_fondo_norte_bajo" class="A106"></div>
      <div id="borde_fondo_norte_bajo" class="A107"></div>
      <div id="borde_fondo_norte_bajo" class="A108"></div>
      <div id="borde_fondo_norte_bajo" class="A109"></div>
      <div id="borde_fondo_norte_bajo" class="A110"></div>
      <div id="borde_fondo_norte_bajo" class="A111"></div>
      <div id="borde_fondo_norte_bajo" class="A112"></div>
      <div id="borde_fondo_norte_bajo" class="A113"></div>
      <div id="borde_fondo_norte_bajo" class="A114"></div>
      <div id="borde_fondo_norte_bajo" class="A115"></div>
      <div id="borde_fondo_norte_bajo" class="A116"></div>
      <div id="borde_fondo_norte_bajo" class="A117"></div>
      <div id="borde_fondo_norte_bajo" class="A118"></div>
      <div id="borde_fondo_norte_bajo" class="A119"></div>
      <div id="borde_fondo_norte_bajo" class="A120"></div>
      <div id="borde_fondo_norte_bajo" class="A121"></div>
      <div id="borde_fondo_norte_bajo" class="A122"></div>
      <div id="borde_fondo_norte_bajo" class="A123"></div>
      <div id="borde_fondo_norte_bajo" class="A124"></div>
      <div id="borde_fondo_norte_bajo" class="A125"></div>
      <div id="borde_fondo_norte_bajo" class="A126"></div>
      <div id="borde_fondo_norte_bajo" class="A127"></div>
      <div id="borde_fondo_norte_bajo" class="A128"></div>
      <div id="borde_fondo_norte_bajo" class="A129"></div>
      <div id="borde_fondo_norte_bajo" class="A130"></div>
      <div id="borde_fondo_norte_bajo" class="A131"></div>
      <div id="borde_fondo_norte_bajo" class="A132"></div>
      <div id="borde_fondo_norte_bajo" class="A133"></div>
      <div id="borde_fondo_norte_bajo" class="A134"></div>
      <div id="borde_fondo_norte_bajo" class="A135"></div>
      <div id="borde_fondo_norte_bajo" class="A136"></div>
      <div id="borde_fondo_norte_bajo" class="A137"></div>
      <div id="borde_fondo_norte_bajo" class="A138"></div>
      <div id="borde_fondo_norte_bajo" class="A139"></div>
      <div id="borde_fondo_norte_bajo" class="A140"></div>
      <div id="borde_fondo_norte_bajo" class="A141"></div>
      <div id="borde_fondo_norte_bajo" class="A142"></div>
      <div id="borde_fondo_norte_bajo"class="A143"></div>
      <div id="borde_fondo_norte_bajo" class="A144"></div>
      <div id="borde_fondo_norte_bajo" class="A145"></div>
      <div id="borde_fondo_norte_bajo" class="A146"></div>
      <div id="borde_fondo_norte_bajo" class="A147"></div>
      <div id="borde_fondo_norte_bajo" class="A148"></div>
      <div id="borde_fondo_norte_bajo" class="A149"></div>
      <div id="borde_fondo_norte_bajo" class="A150"></div>
      <div id="borde_fondo_norte_bajo" class="A151"></div>
      <div id="borde_fondo_norte_bajo" class="A152"></div>
      <div id="borde_fondo_norte_bajo" class="A153"></div>
      <div id="borde_fondo_norte_bajo" class="A154"></div>
      <div id="borde_fondo_norte_bajo" class="A155"></div>
      <div id="borde_fondo_norte_bajo" class="A156"></div>
      <div id="borde_fondo_norte_bajo" class="A157"></div>
      <div id="borde_fondo_norte_bajo" class="A158"></div>
      <div id="borde_fondo_norte_bajo" class="A159"></div>
      <div id="borde_fondo_norte_bajo" class="A160"></div>
      <div id="borde_fondo_norte_bajo" class="A161"></div>
      <div id="borde_fondo_norte_bajo"class="A162"></div>
      <div id="borde_fondo_norte_bajo" class="A163"></div>
      <div id="borde_fondo_norte_bajo" class="A164"></div>
      <div id="borde_fondo_norte_bajo" class="A165"></div>
      <div id="borde_fondo_norte_bajo" class="A166"></div>
      <div id="borde_fondo_norte_bajo" class="A167"></div>
      <div id="borde_fondo_norte_bajo" class="A168"></div>
      <div id="borde_fondo_norte_bajo" class="A169"></div>
      <div id="borde_fondo_norte_bajo" class="A170"></div>
      <div id="borde_fondo_norte_bajo" class="A171"></div>
      <div id="borde_fondo_norte_bajo" class="A172"></div>
      <div id="borde_fondo_norte_bajo" class="A173"></div>
      <div id="borde_fondo_norte_bajo" class="A174"></div>
      <div id="borde_fondo_norte_bajo" class="A175"></div>
      <div id="borde_fondo_norte_bajo" class="A176"></div>
      <div id="borde_fondo_norte_bajo" class="A177"></div>
      <div id="borde_fondo_norte_bajo" class="A178"></div>
      <div id="borde_fondo_norte_bajo" class="A179"></div>
      <div id="borde_fondo_norte_bajo" class="A180"></div>
      <div id="borde_fondo_norte_bajo" class="A181"></div>
      <div id="borde_fondo_norte_bajo" class="A182"></div>
      <div id="borde_fondo_norte_bajo" class="A183"></div>
      <div id="borde_fondo_norte_bajo" class="A184"></div>
      <div id="borde_fondo_norte_bajo" class="A185"></div>
      <div id="borde_fondo_norte_bajo" class="A186"></div>
      <div id="borde_fondo_norte_bajo" class="A187"></div>
      <div id="borde_fondo_norte_bajo" class="A188"></div>
      <div id="borde_fondo_norte_bajo" class="A189"></div>
      <div id="borde_fondo_norte_bajo" class="A190"></div>
      <div id="borde_fondo_norte_bajo" class="A191"></div>
      <div id="borde_fondo_norte_bajo"class="A192"></div>
      <div id="borde_fondo_norte_bajo" class="A193"></div>
      <div id="borde_fondo_norte_bajo" class="A194"></div>
      <div id="borde_fondo_norte_bajo" class="A195"></div>
      <div id="borde_fondo_norte_bajo" class="A196"></div>
      <div id="borde_fondo_norte_bajo" class="A197"></div>
      <div id="borde_fondo_norte_bajo" class="A198"></div>
</div>
    </div>
    <div id="Fondo Norte Medio"class="Fondo_Norte_Medio" onclick=clickaction(this) style="border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_fondo_norte_medio" class="A1"></div>
      <div id="borde_fondo_norte_medio" class="A2"></div>
      <div id="borde_fondo_norte_medio" class="A3"></div>
      <div id="borde_fondo_norte_medio" class="A4"></div>
      <div id="borde_fondo_norte_medio" class="A5"></div>
      <div id="borde_fondo_norte_medio" class="A6"></div>
      <div id="borde_fondo_norte_medio" class="A7"></div>
      <div id="borde_fondo_norte_medio" class="A8"></div>
      <div id="borde_fondo_norte_medio" class="A9"></div>
      <div id="borde_fondo_norte_medio" class="A10"></div>
      <div id="borde_fondo_norte_medio" class="A11"></div>
      <div id="borde_fondo_norte_medio" class="A12"></div>
      <div id="borde_fondo_norte_medio" class="A13"></div>
      <div id="borde_fondo_norte_medio" class="A14"></div>
      <div id="borde_fondo_norte_medio" class="A15"></div>
      <div id="borde_fondo_norte_medio" class="A16"></div>
      <div id="borde_fondo_norte_medio" class="A17"></div>
      <div id="borde_fondo_norte_medio" class="A18"></div>
      <div id="borde_fondo_norte_medio" class="A19"></div>
      <div id="borde_fondo_norte_medio" class="A20"></div>
      <div id="borde_fondo_norte_medio" class="A21"></div>
      <div id="borde_fondo_norte_medio" class="A22"></div>
      <div id="borde_fondo_norte_medio" class="A23"></div>
      <div id="borde_fondo_norte_medio" class="A24"></div>
      <div id="borde_fondo_norte_medio" class="A25"></div>
      <div id="borde_fondo_norte_medio" class="A26"></div>
      <div id="borde_fondo_norte_medio" class="A27"></div>
      <div id="borde_fondo_norte_medio" class="A28"></div>
      <div id="borde_fondo_norte_medio" class="A29"></div>
      <div id="borde_fondo_norte_medio" class="A30"></div>
      <div id="borde_fondo_norte_medio" class="A31"></div>
      <div id="borde_fondo_norte_medio" class="A32"></div>
      <div id="borde_fondo_norte_medio" class="A33"></div>
      <div id="borde_fondo_norte_medio" class="A34"></div>
      <div id="borde_fondo_norte_medio" class="A35"></div>
      <div id="borde_fondo_norte_medio" class="A36"></div>
      <div id="borde_fondo_norte_medio" class="A37"></div>
      <div id="borde_fondo_norte_medio" class="A38"></div>
      <div id="borde_fondo_norte_medio" class="A39"></div>
      <div id="borde_fondo_norte_medio" class="A40"></div>
      <div id="borde_fondo_norte_medio" class="A41"></div>
      <div id="borde_fondo_norte_medio" class="A42"></div>
      <div id="borde_fondo_norte_medio" class="A43"></div>
      <div id="borde_fondo_norte_medio" class="A44"></div>
      <div id="borde_fondo_norte_medio" class="A45"></div>
      <div id="borde_fondo_norte_medio" class="A46"></div>
      <div id="borde_fondo_norte_medio" class="A47"></div>
      <div id="borde_fondo_norte_medio" class="A48"></div>
      <div id="borde_fondo_norte_medio" class="A49"></div>
      <div id="borde_fondo_norte_medio" class="A50"></div>
      <div id="borde_fondo_norte_medio" class="A51"></div>
      <div id="borde_fondo_norte_medio" class="A52"></div>
      <div id="borde_fondo_norte_medio" class="A53"></div>
      <div id="borde_fondo_norte_medio" class="A54"></div>
      <div id="borde_fondo_norte_medio" class="A55"></div>
      <div id="borde_fondo_norte_medio" class="A56"></div>
      <div id="borde_fondo_norte_medio" class="A57"></div>
      <div id="borde_fondo_norte_medio" class="A58"></div>
      <div id="borde_fondo_norte_medio" class="A59"></div>
      <div id="borde_fondo_norte_medio" class="A60"></div>
      <div id="borde_fondo_norte_medio" class="A61"></div>
      <div id="borde_fondo_norte_medio" class="A62"></div>
      <div id="borde_fondo_norte_medio" class="A63"></div>
      <div id="borde_fondo_norte_medio" class="A64"></div>
      <div id="borde_fondo_norte_medio" class="A65"></div>
      <div id="borde_fondo_norte_medio" class="A66"></div>
      <div id="borde_fondo_norte_medio" class="A67"></div>
      <div id="borde_fondo_norte_medio" class="A68"></div>
      <div id="borde_fondo_norte_medio" class="A69"></div>
      <div id="borde_fondo_norte_medio" class="A70"></div>
      <div id="borde_fondo_norte_medio" class="A71"></div>
      <div id="borde_fondo_norte_medio" class="A72"></div>
      <div id="borde_fondo_norte_medio" class="A73"></div>
      <div id="borde_fondo_norte_medio" class="A74"></div>
      <div id="borde_fondo_norte_medio" class="A75"></div>
      <div id="borde_fondo_norte_medio" class="A76"></div>
      <div id="borde_fondo_norte_medio" class="A77"></div>
      <div id="borde_fondo_norte_medio" class="A78"></div>
      <div id="borde_fondo_norte_medio" class="A79"></div>
      <div id="borde_fondo_norte_medio" class="A80"></div>
      <div id="borde_fondo_norte_medio" class="A81"></div>
      <div id="borde_fondo_norte_medio" class="A82"></div>
      <div id="borde_fondo_norte_medio" class="A83"></div>
      <div id="borde_fondo_norte_medio" class="A84"></div>
      <div id="borde_fondo_norte_medio" class="A85"></div>
      <div id="borde_fondo_norte_medio" class="A86"></div>
      <div id="borde_fondo_norte_medio" class="A87"></div>
      <div id="borde_fondo_norte_medio" class="A88"></div>
      <div id="borde_fondo_norte_medio" class="A89"></div>
      <div id="borde_fondo_norte_medio" class="A90"></div>
      <div id="borde_fondo_norte_medio" class="A91"></div>
      <div id="borde_fondo_norte_medio" class="A92"></div>
      <div id="borde_fondo_norte_medio" class="A93"></div>
      <div id="borde_fondo_norte_medio" class="A94"></div>
      <div id="borde_fondo_norte_medio" class="A95"></div>
      <div id="borde_fondo_norte_medio" class="A96"></div>
      <div id="borde_fondo_norte_medio" class="A97"></div>
      <div id="borde_fondo_norte_medio" class="A98"></div>
      <div id="borde_fondo_norte_medio" class="A99"></div>
      <div id="borde_fondo_norte_medio" class="A100"></div>
      <div id="borde_fondo_norte_medio" class="A101"></div>
      <div id="borde_fondo_norte_medio" class="A102"></div>
      <div id="borde_fondo_norte_medio" class="A103"></div>
      <div id="borde_fondo_norte_medio" class="A104"></div>
      <div id="borde_fondo_norte_medio" class="A105"></div>
      <div id="borde_fondo_norte_medio" class="A106"></div>
      <div id="borde_fondo_norte_medio" class="A107"></div>
      <div id="borde_fondo_norte_medio" class="A108"></div>
      <div id="borde_fondo_norte_medio" class="A109"></div>
      <div id="borde_fondo_norte_medio" class="A110"></div>
      <div id="borde_fondo_norte_medio" class="A111"></div>
      <div id="borde_fondo_norte_medio" class="A112"></div>
      <div id="borde_fondo_norte_medio" class="A113"></div>
      <div id="borde_fondo_norte_medio" class="A114"></div>
      <div id="borde_fondo_norte_medio" class="A115"></div>
      <div id="borde_fondo_norte_medio" class="A116"></div>
      <div id="borde_fondo_norte_medio" class="A117"></div>
      <div id="borde_fondo_norte_medio" class="A118"></div>
      <div id="borde_fondo_norte_medio" class="A119"></div>
      <div id="borde_fondo_norte_medio" class="A120"></div>
      <div id="borde_fondo_norte_medio" class="A121"></div>
      <div id="borde_fondo_norte_medio" class="A122"></div>
      <div id="borde_fondo_norte_medio" class="A123"></div>
      <div id="borde_fondo_norte_medio" class="A124"></div>
      <div id="borde_fondo_norte_medio" class="A125"></div>
      <div id="borde_fondo_norte_medio" class="A126"></div>
      <div id="borde_fondo_norte_medio" class="A127"></div>
      <div id="borde_fondo_norte_medio" class="A128"></div>
      <div id="borde_fondo_norte_medio" class="A129"></div>
      <div id="borde_fondo_norte_medio" class="A130"></div>
      <div id="borde_fondo_norte_medio" class="A131"></div>
      <div id="borde_fondo_norte_medio" class="A132"></div>
      <div id="borde_fondo_norte_medio" class="A133"></div>
      <div id="borde_fondo_norte_medio" class="A134"></div>
      <div id="borde_fondo_norte_medio" class="A135"></div>
      <div id="borde_fondo_norte_medio" class="A136"></div>
      <div id="borde_fondo_norte_medio" class="A137"></div>
      <div id="borde_fondo_norte_medio" class="A138"></div>
      <div id="borde_fondo_norte_medio" class="A139"></div>
      <div id="borde_fondo_norte_medio" class="A140"></div>
      <div id="borde_fondo_norte_medio" class="A141"></div>
      <div id="borde_fondo_norte_medio" class="A142"></div>
      <div id="borde_fondo_norte_medio"class="A143"></div>
      <div id="borde_fondo_norte_medio" class="A144"></div>
      <div id="borde_fondo_norte_medio" class="A145"></div>
      <div id="borde_fondo_norte_medio" class="A146"></div>
      <div id="borde_fondo_norte_medio" class="A147"></div>
      <div id="borde_fondo_norte_medio" class="A148"></div>
      <div id="borde_fondo_norte_medio" class="A149"></div>
      <div id="borde_fondo_norte_medio" class="A150"></div>
      <div id="borde_fondo_norte_medio" class="A151"></div>
      <div id="borde_fondo_norte_medio" class="A152"></div>
      <div id="borde_fondo_norte_medio" class="A153"></div>
      <div id="borde_fondo_norte_medio" class="A154"></div>
      <div id="borde_fondo_norte_medio" class="A155"></div>
      <div id="borde_fondo_norte_medio" class="A156"></div>
      <div id="borde_fondo_norte_medio" class="A157"></div>
      <div id="borde_fondo_norte_medio" class="A158"></div>
      <div id="borde_fondo_norte_medio" class="A159"></div>
      <div id="borde_fondo_norte_medio" class="A160"></div>
      <div id="borde_fondo_norte_medio" class="A161"></div>
      <div id="borde_fondo_norte_medio"class="A162"></div>
      <div id="borde_fondo_norte_medio" class="A163"></div>
      <div id="borde_fondo_norte_medio" class="A164"></div>
      <div id="borde_fondo_norte_medio" class="A165"></div>
      <div id="borde_fondo_norte_medio" class="A166"></div>
      <div id="borde_fondo_norte_medio" class="A167"></div>
      <div id="borde_fondo_norte_medio" class="A168"></div>
      <div id="borde_fondo_norte_medio" class="A169"></div>
      <div id="borde_fondo_norte_medio" class="A170"></div>
      <div id="borde_fondo_norte_medio" class="A171"></div>
      <div id="borde_fondo_norte_medio" class="A172"></div>
      <div id="borde_fondo_norte_medio" class="A173"></div>
      <div id="borde_fondo_norte_medio" class="A174"></div>
      <div id="borde_fondo_norte_medio" class="A175"></div>
      <div id="borde_fondo_norte_medio" class="A176"></div>
      <div id="borde_fondo_norte_medio" class="A177"></div>
      <div id="borde_fondo_norte_medio" class="A178"></div>
      <div id="borde_fondo_norte_medio" class="A179"></div>
      <div id="borde_fondo_norte_medio" class="A180"></div>
      <div id="borde_fondo_norte_medio" class="A181"></div>
      <div id="borde_fondo_norte_medio" class="A182"></div>
      <div id="borde_fondo_norte_medio" class="A183"></div>
      <div id="borde_fondo_norte_medio" class="A184"></div>
      <div id="borde_fondo_norte_medio" class="A185"></div>
      <div id="borde_fondo_norte_medio" class="A186"></div>
      <div id="borde_fondo_norte_medio" class="A187"></div>
      <div id="borde_fondo_norte_medio" class="A188"></div>
      <div id="borde_fondo_norte_medio" class="A189"></div>
      <div id="borde_fondo_norte_medio" class="A190"></div>
      <div id="borde_fondo_norte_medio" class="A191"></div>
      <div id="borde_fondo_norte_medio"class="A192"></div>
      <div id="borde_fondo_norte_medio" class="A193"></div>
      <div id="borde_fondo_norte_medio" class="A194"></div>
      <div id="borde_fondo_norte_medio" class="A195"></div>
      <div id="borde_fondo_norte_medio" class="A196"></div>
      <div id="borde_fondo_norte_medio" class="A197"></div>
      <div id="borde_fondo_norte_medio" class="A198"></div>
</div>
    </div>
    <div id="Fondo Norte Alto" class="Fondo_Norte_Alto" onclick=clickaction(this) style="border:2px solid black;">
    <div class="grid-container1">
      <div id="borde_fondo_norte_alto" class="A1"></div>
      <div id="borde_fondo_norte_alto" class="A2"></div>
      <div id="borde_fondo_norte_alto" class="A3"></div>
      <div id="borde_fondo_norte_alto" class="A4"></div>
      <div id="borde_fondo_norte_alto" class="A5"></div>
      <div id="borde_fondo_norte_alto" class="A6"></div>
      <div id="borde_fondo_norte_alto" class="A7"></div>
      <div id="borde_fondo_norte_alto" class="A8"></div>
      <div id="borde_fondo_norte_alto" class="A9"></div>
      <div id="borde_fondo_norte_alto" class="A10"></div>
      <div id="borde_fondo_norte_alto" class="A11"></div>
      <div id="borde_fondo_norte_alto" class="A12"></div>
      <div id="borde_fondo_norte_alto" class="A13"></div>
      <div id="borde_fondo_norte_alto" class="A14"></div>
      <div id="borde_fondo_norte_alto" class="A15"></div>
      <div id="borde_fondo_norte_alto" class="A16"></div>
      <div id="borde_fondo_norte_alto" class="A17"></div>
      <div id="borde_fondo_norte_alto" class="A18"></div>
      <div id="borde_fondo_norte_alto" class="A19"></div>
      <div id="borde_fondo_norte_alto" class="A20"></div>
      <div id="borde_fondo_norte_alto" class="A21"></div>
      <div id="borde_fondo_norte_alto" class="A22"></div>
      <div id="borde_fondo_norte_alto" class="A23"></div>
      <div id="borde_fondo_norte_alto" class="A24"></div>
      <div id="borde_fondo_norte_alto" class="A25"></div>
      <div id="borde_fondo_norte_alto" class="A26"></div>
      <div id="borde_fondo_norte_alto" class="A27"></div>
      <div id="borde_fondo_norte_alto" class="A28"></div>
      <div id="borde_fondo_norte_alto" class="A29"></div>
      <div id="borde_fondo_norte_alto" class="A30"></div>
      <div id="borde_fondo_norte_alto" class="A31"></div>
      <div id="borde_fondo_norte_alto" class="A32"></div>
      <div id="borde_fondo_norte_alto" class="A33"></div>
      <div id="borde_fondo_norte_alto" class="A34"></div>
      <div id="borde_fondo_norte_alto" class="A35"></div>
      <div id="borde_fondo_norte_alto" class="A36"></div>
      <div id="borde_fondo_norte_alto" class="A37"></div>
      <div id="borde_fondo_norte_alto" class="A38"></div>
      <div id="borde_fondo_norte_alto" class="A39"></div>
      <div id="borde_fondo_norte_alto" class="A40"></div>
      <div id="borde_fondo_norte_alto" class="A41"></div>
      <div id="borde_fondo_norte_alto" class="A42"></div>
      <div id="borde_fondo_norte_alto" class="A43"></div>
      <div id="borde_fondo_norte_alto" class="A44"></div>
      <div id="borde_fondo_norte_alto" class="A45"></div>
      <div id="borde_fondo_norte_alto" class="A46"></div>
      <div id="borde_fondo_norte_alto" class="A47"></div>
      <div id="borde_fondo_norte_alto" class="A48"></div>
      <div id="borde_fondo_norte_alto" class="A49"></div>
      <div id="borde_fondo_norte_alto" class="A50"></div>
      <div id="borde_fondo_norte_alto" class="A51"></div>
      <div id="borde_fondo_norte_alto" class="A52"></div>
      <div id="borde_fondo_norte_alto" class="A53"></div>
      <div id="borde_fondo_norte_alto" class="A54"></div>
      <div id="borde_fondo_norte_alto" class="A55"></div>
      <div id="borde_fondo_norte_alto" class="A56"></div>
      <div id="borde_fondo_norte_alto" class="A57"></div>
      <div id="borde_fondo_norte_alto" class="A58"></div>
      <div id="borde_fondo_norte_alto" class="A59"></div>
      <div id="borde_fondo_norte_alto" class="A60"></div>
      <div id="borde_fondo_norte_alto" class="A61"></div>
      <div id="borde_fondo_norte_alto" class="A62"></div>
      <div id="borde_fondo_norte_alto" class="A63"></div>
      <div id="borde_fondo_norte_alto" class="A64"></div>
      <div id="borde_fondo_norte_alto" class="A65"></div>
      <div id="borde_fondo_norte_alto" class="A66"></div>
      <div id="borde_fondo_norte_alto" class="A67"></div>
      <div id="borde_fondo_norte_alto" class="A68"></div>
      <div id="borde_fondo_norte_alto" class="A69"></div>
      <div id="borde_fondo_norte_alto" class="A70"></div>
      <div id="borde_fondo_norte_alto" class="A71"></div>
      <div id="borde_fondo_norte_alto" class="A72"></div>
      <div id="borde_fondo_norte_alto" class="A73"></div>
      <div id="borde_fondo_norte_alto" class="A74"></div>
      <div id="borde_fondo_norte_alto" class="A75"></div>
      <div id="borde_fondo_norte_alto" class="A76"></div>
      <div id="borde_fondo_norte_alto" class="A77"></div>
      <div id="borde_fondo_norte_alto" class="A78"></div>
      <div id="borde_fondo_norte_alto" class="A79"></div>
      <div id="borde_fondo_norte_alto" class="A80"></div>
      <div id="borde_fondo_norte_alto" class="A81"></div>
      <div id="borde_fondo_norte_alto" class="A82"></div>
      <div id="borde_fondo_norte_alto" class="A83"></div>
      <div id="borde_fondo_norte_alto" class="A84"></div>
      <div id="borde_fondo_norte_alto" class="A85"></div>
      <div id="borde_fondo_norte_alto" class="A86"></div>
      <div id="borde_fondo_norte_alto" class="A87"></div>
      <div id="borde_fondo_norte_alto" class="A88"></div>
      <div id="borde_fondo_norte_alto" class="A89"></div>
      <div id="borde_fondo_norte_alto" class="A90"></div>
      <div id="borde_fondo_norte_alto" class="A91"></div>
      <div id="borde_fondo_norte_alto" class="A92"></div>
      <div id="borde_fondo_norte_alto" class="A93"></div>
      <div id="borde_fondo_norte_alto" class="A94"></div>
      <div id="borde_fondo_norte_alto" class="A95"></div>
      <div id="borde_fondo_norte_alto" class="A96"></div>
      <div id="borde_fondo_norte_alto" class="A97"></div>
      <div id="borde_fondo_norte_alto" class="A98"></div>
      <div id="borde_fondo_norte_alto" class="A99"></div>
      <div id="borde_fondo_norte_alto" class="A100"></div>
      <div id="borde_fondo_norte_alto" class="A101"></div>
      <div id="borde_fondo_norte_alto" class="A102"></div>
      <div id="borde_fondo_norte_alto" class="A103"></div>
      <div id="borde_fondo_norte_alto" class="A104"></div>
      <div id="borde_fondo_norte_alto" class="A105"></div>
      <div id="borde_fondo_norte_alto" class="A106"></div>
      <div id="borde_fondo_norte_alto" class="A107"></div>
      <div id="borde_fondo_norte_alto" class="A108"></div>
      <div id="borde_fondo_norte_alto" class="A109"></div>
      <div id="borde_fondo_norte_alto" class="A110"></div>
      <div id="borde_fondo_norte_alto" class="A111"></div>
      <div id="borde_fondo_norte_alto" class="A112"></div>
      <div id="borde_fondo_norte_alto" class="A113"></div>
      <div id="borde_fondo_norte_alto" class="A114"></div>
      <div id="borde_fondo_norte_alto" class="A115"></div>
      <div id="borde_fondo_norte_alto" class="A116"></div>
      <div id="borde_fondo_norte_alto" class="A117"></div>
      <div id="borde_fondo_norte_alto" class="A118"></div>
      <div id="borde_fondo_norte_alto" class="A119"></div>
      <div id="borde_fondo_norte_alto" class="A120"></div>
      <div id="borde_fondo_norte_alto" class="A121"></div>
      <div id="borde_fondo_norte_alto" class="A122"></div>
      <div id="borde_fondo_norte_alto" class="A123"></div>
      <div id="borde_fondo_norte_alto" class="A124"></div>
      <div id="borde_fondo_norte_alto" class="A125"></div>
      <div id="borde_fondo_norte_alto" class="A126"></div>
      <div id="borde_fondo_norte_alto" class="A127"></div>
      <div id="borde_fondo_norte_alto" class="A128"></div>
      <div id="borde_fondo_norte_alto" class="A129"></div>
      <div id="borde_fondo_norte_alto" class="A130"></div>
      <div id="borde_fondo_norte_alto" class="A131"></div>
      <div id="borde_fondo_norte_alto" class="A132"></div>
      <div id="borde_fondo_norte_alto" class="A133"></div>
      <div id="borde_fondo_norte_alto" class="A134"></div>
      <div id="borde_fondo_norte_alto" class="A135"></div>
      <div id="borde_fondo_norte_alto" class="A136"></div>
      <div id="borde_fondo_norte_alto" class="A137"></div>
      <div id="borde_fondo_norte_alto" class="A138"></div>
      <div id="borde_fondo_norte_alto" class="A139"></div>
      <div id="borde_fondo_norte_alto" class="A140"></div>
      <div id="borde_fondo_norte_alto" class="A141"></div>
      <div id="borde_fondo_norte_alto" class="A142"></div>
      <div id="borde_fondo_norte_alto"class="A143"></div>
      <div id="borde_fondo_norte_alto" class="A144"></div>
      <div id="borde_fondo_norte_alto" class="A145"></div>
      <div id="borde_fondo_norte_alto" class="A146"></div>
      <div id="borde_fondo_norte_alto" class="A147"></div>
      <div id="borde_fondo_norte_alto" class="A148"></div>
      <div id="borde_fondo_norte_alto" class="A149"></div>
      <div id="borde_fondo_norte_alto" class="A150"></div>
      <div id="borde_fondo_norte_alto" class="A151"></div>
      <div id="borde_fondo_norte_alto" class="A152"></div>
      <div id="borde_fondo_norte_alto" class="A153"></div>
      <div id="borde_fondo_norte_alto" class="A154"></div>
      <div id="borde_fondo_norte_alto" class="A155"></div>
      <div id="borde_fondo_norte_alto" class="A156"></div>
      <div id="borde_fondo_norte_alto" class="A157"></div>
      <div id="borde_fondo_norte_alto" class="A158"></div>
      <div id="borde_fondo_norte_alto" class="A159"></div>
      <div id="borde_fondo_norte_alto" class="A160"></div>
      <div id="borde_fondo_norte_alto" class="A161"></div>
      <div id="borde_fondo_norte_alto"class="A162"></div>
      <div id="borde_fondo_norte_alto" class="A163"></div>
      <div id="borde_fondo_norte_alto" class="A164"></div>
      <div id="borde_fondo_norte_alto" class="A165"></div>
      <div id="borde_fondo_norte_alto" class="A166"></div>
      <div id="borde_fondo_norte_alto" class="A167"></div>
      <div id="borde_fondo_norte_alto" class="A168"></div>
      <div id="borde_fondo_norte_alto" class="A169"></div>
      <div id="borde_fondo_norte_alto" class="A170"></div>
      <div id="borde_fondo_norte_alto" class="A171"></div>
      <div id="borde_fondo_norte_alto" class="A172"></div>
      <div id="borde_fondo_norte_alto" class="A173"></div>
      <div id="borde_fondo_norte_alto" class="A174"></div>
      <div id="borde_fondo_norte_alto" class="A175"></div>
      <div id="borde_fondo_norte_alto" class="A176"></div>
      <div id="borde_fondo_norte_alto" class="A177"></div>
      <div id="borde_fondo_norte_alto" class="A178"></div>
      <div id="borde_fondo_norte_alto" class="A179"></div>
      <div id="borde_fondo_norte_alto" class="A180"></div>
      <div id="borde_fondo_norte_alto" class="A181"></div>
      <div id="borde_fondo_norte_alto" class="A182"></div>
      <div id="borde_fondo_norte_alto" class="A183"></div>
      <div id="borde_fondo_norte_alto" class="A184"></div>
      <div id="borde_fondo_norte_alto" class="A185"></div>
      <div id="borde_fondo_norte_alto" class="A186"></div>
      <div id="borde_fondo_norte_alto" class="A187"></div>
      <div id="borde_fondo_norte_alto" class="A188"></div>
      <div id="borde_fondo_norte_alto" class="A189"></div>
      <div id="borde_fondo_norte_alto" class="A190"></div>
      <div id="borde_fondo_norte_alto" class="A191"></div>
      <div id="borde_fondo_norte_alto"class="A192"></div>
      <div id="borde_fondo_norte_alto" class="A193"></div>
      <div id="borde_fondo_norte_alto" class="A194"></div>
      <div id="borde_fondo_norte_alto" class="A195"></div>
      <div id="borde_fondo_norte_alto" class="A196"></div>
      <div id="borde_fondo_norte_alto" class="A197"></div>
      <div id="borde_fondo_norte_alto" class="A198"></div>
</div></div>
  </div>
  <div id="Aficion visitante"  class="Afición-Visitante" onclick=clickaction(this)><h5>Afición Visitante<h5></div>
  <div id="Esquina A" class="Esquina_A" onclick=clickaction(this) style="border:2px solid black;">
  <div class="grid-container1">
      <div id="bordeE_A" class="A1"></div>
      <div id="bordeE_A" class="A2"></div>
      <div id="bordeE_A" class="A3"></div>
      <div id="bordeE_A" class="A4"></div>
      <div id="bordeE_A" class="A5"></div>
      <div id="bordeE_A" class="A6"></div>
      <div id="bordeE_A" class="A7"></div>
      <div id="bordeE_A" class="A8"></div>
      <div id="bordeE_A" class="A9"></div>
      <div id="bordeE_A" class="A10"></div>
      <div id="bordeE_A" class="A11"></div>
      <div id="bordeE_A" class="A12"></div>
      <div id="bordeE_A" class="A13"></div>
      <div id="bordeE_A" class="A14"></div>
      <div id="bordeE_A" class="A15"></div>
      <div id="bordeE_A" class="A16"></div>
      <div id="bordeE_A" class="A17"></div>
      <div id="bordeE_A" class="A18"></div>
      <div id="bordeE_A" class="A19"></div>
      <div id="bordeE_A" class="A20"></div>
      <div id="bordeE_A" class="A21"></div>
      <div id="bordeE_A" class="A22"></div>
      <div id="bordeE_A" class="A23"></div>
      <div id="bordeE_A" class="A24"></div>
      <div id="bordeE_A" class="A25"></div>
      <div id="bordeE_A" class="A26"></div>
      <div id="bordeE_A" class="A27"></div>
      <div id="bordeE_A" class="A28"></div>
      <div id="bordeE_A" class="A29"></div>
      <div id="bordeE_A" class="A30"></div>
      <div id="bordeE_A" class="A31"></div>
      <div id="bordeE_A" class="A32"></div>
      <div id="bordeE_A" class="A33"></div>
      <div id="bordeE_A" class="A34"></div>
      <div id="bordeE_A" class="A35"></div>
      <div id="bordeE_A" class="A36"></div>
      <div id="bordeE_A" class="A37"></div>
      <div id="bordeE_A" class="A38"></div>
      <div id="bordeE_A" class="A39"></div>
      <div id="bordeE_A" class="A40"></div>
      <div id="bordeE_A" class="A41"></div>
      <div id="bordeE_A" class="A42"></div>
      <div id="bordeE_A" class="A43"></div>
      <div id="bordeE_A" class="A44"></div>
      <div id="bordeE_A" class="A45"></div>
      <div id="bordeE_A" class="A46"></div>
      <div id="bordeE_A" class="A47"></div>
      <div id="bordeE_A" class="A48"></div>
      <div id="bordeE_A" class="A49"></div>
      <div id="bordeE_A" class="A50"></div>
      <div id="bordeE_A" class="A51"></div>
      <div id="bordeE_A" class="A52"></div>
      <div id="bordeE_A" class="A53"></div>
      <div id="bordeE_A" class="A54"></div>
      <div id="bordeE_A" class="A55"></div>
      <div id="bordeE_A" class="A56"></div>
      <div id="bordeE_A" class="A57"></div>
      <div id="bordeE_A" class="A58"></div>
      <div id="bordeE_A" class="A59"></div>
      <div id="bordeE_A" class="A60"></div>
      <div id="bordeE_A" class="A61"></div>
      <div id="bordeE_A" class="A62"></div>
      <div id="bordeE_A" class="A63"></div>
      <div id="bordeE_A" class="A64"></div>
      <div id="bordeE_A" class="A65"></div>
      <div id="bordeE_A" class="A66"></div>
      <div id="bordeE_A" class="A67"></div>
      <div id="bordeE_A" class="A68"></div>
      <div id="bordeE_A" class="A69"></div>
      <div id="bordeE_A" class="A70"></div>
      <div id="bordeE_A" class="A71"></div>
      <div id="bordeE_A" class="A72"></div>
      <div id="bordeE_A" class="A73"></div>
      <div id="bordeE_A" class="A74"></div>
      <div id="bordeE_A" class="A75"></div>
      <div id="bordeE_A" class="A76"></div>
      <div id="bordeE_A" class="A77"></div>
      <div id="bordeE_A" class="A78"></div>
      <div id="bordeE_A" class="A79"></div>
      <div id="bordeE_A" class="A80"></div>
      <div id="bordeE_A" class="A81"></div>
      <div id="bordeE_A" class="A82"></div>
      <div id="bordeE_A" class="A83"></div>
      <div id="bordeE_A" class="A84"></div>
      <div id="bordeE_A" class="A85"></div>
      <div id="bordeE_A" class="A86"></div>
      <div id="bordeE_A" class="A87"></div>
      <div id="bordeE_A" class="A88"></div>
      <div id="bordeE_A" class="A89"></div>
      <div id="bordeE_A" class="A90"></div>
      <div id="bordeE_A" class="A91"></div>
      <div id="bordeE_A" class="A92"></div>
      <div id="bordeE_A" class="A93"></div>
      <div id="bordeE_A" class="A94"></div>
      <div id="bordeE_A" class="A95"></div>
      <div id="bordeE_A" class="A96"></div>
      <div id="bordeE_A" class="A97"></div>
      <div id="bordeE_A" class="A98"></div>
      <div id="bordeE_A" class="A99"></div>
      <div id="bordeE_A" class="A100"></div>
      <div id="bordeE_A" class="A101"></div>
      <div id="bordeE_A" class="A102"></div>
      <div id="bordeE_A" class="A103"></div>
      <div id="bordeE_A" class="A104"></div>
      <div id="bordeE_A" class="A105"></div>
      <div id="bordeE_A" class="A106"></div>
      <div id="bordeE_A" class="A107"></div>
      <div id="bordeE_A" class="A108"></div>
      <div id="bordeE_A" class="A109"></div>
      <div id="bordeE_A" class="A110"></div>
      <div id="bordeE_A" class="A111"></div>
      <div id="bordeE_A" class="A112"></div>
      <div id="bordeE_A" class="A113"></div>
      <div id="bordeE_A" class="A114"></div>
      <div id="bordeE_A" class="A115"></div>
      <div id="bordeE_A" class="A116"></div>
      <div id="bordeE_A" class="A117"></div>
      <div id="bordeE_A" class="A118"></div>
      <div id="bordeE_A" class="A119"></div>
      <div id="bordeE_A" class="A120"></div>
      <div id="bordeE_A" class="A121"></div>
      <div id="bordeE_A" class="A122"></div>
      <div id="bordeE_A" class="A123"></div>
      <div id="bordeE_A" class="A124"></div>
      <div id="bordeE_A" class="A125"></div>
      <div id="bordeE_A" class="A126"></div>
      <div id="bordeE_A" class="A127"></div>
      <div id="bordeE_A" class="A128"></div>
      <div id="bordeE_A" class="A129"></div>
      <div id="bordeE_A" class="A130"></div>
      <div id="bordeE_A" class="A131"></div>
      <div id="bordeE_A" class="A132"></div>
      <div id="bordeE_A" class="A133"></div>
      <div id="bordeE_A" class="A134"></div>
      <div id="bordeE_A" class="A135"></div>
      <div id="bordeE_A" class="A136"></div>
      <div id="bordeE_A" class="A137"></div>
      <div id="bordeE_A" class="A138"></div>
      <div id="bordeE_A" class="A139"></div>
      <div id="bordeE_A" class="A140"></div>
      <div id="bordeE_A" class="A141"></div>
      <div id="bordeE_A" class="A142"></div>
      <div id="bordeE_A"class="A143"></div>
      <div id="bordeE_A" class="A144"></div>
      <div id="bordeE_A" class="A145"></div>
      <div id="bordeE_A" class="A146"></div>
      <div id="bordeE_A" class="A147"></div>
      <div id="bordeE_A" class="A148"></div>
      <div id="bordeE_A" class="A149"></div>
      <div id="bordeE_A" class="A150"></div>
      <div id="bordeE_A" class="A151"></div>
      <div id="bordeE_A" class="A152"></div>
      <div id="bordeE_A" class="A153"></div>
      <div id="bordeE_A" class="A154"></div>
      <div id="bordeE_A" class="A155"></div>
      <div id="bordeE_A" class="A156"></div>
      <div id="bordeE_A" class="A157"></div>
      <div id="bordeE_A" class="A158"></div>
      <div id="bordeE_A" class="A159"></div>
      <div id="bordeE_A" class="A160"></div>
      <div id="bordeE_A" class="A161"></div>
      <div id="bordeE_A"class="A162"></div>
      <div id="bordeE_A" class="A163"></div>
      <div id="bordeE_A" class="A164"></div>
      <div id="bordeE_A" class="A165"></div>
      <div id="bordeE_A" class="A166"></div>
      <div id="bordeE_A" class="A167"></div>
      <div id="bordeE_A" class="A168"></div>
      <div id="bordeE_A" class="A169"></div>
      <div id="bordeE_AE" class="A170"></div>
      <div id="bordeE_A" class="A171"></div>
      <div id="bordeE_A" class="A172"></div>
      <div id="bordeE_A" class="A173"></div>
      <div id="bordeE_A" class="A174"></div>
      <div id="bordeE_A" class="A175"></div>
      <div id="bordeE_A" class="A176"></div>
      <div id="bordeE_A" class="A177"></div>
      <div id="bordeE_A" class="A178"></div>
      <div id="bordeE_A" class="A179"></div>
      <div id="bordeE_A" class="A180"></div>
      <div id="bordeE_A" class="A181"></div>
      <div id="bordeE_A" class="A182"></div>
      <div id="bordeE_A" class="A183"></div>
      <div id="bordeE_A" class="A184"></div>
      <div id="bordeE_A" class="A185"></div>
      <div id="bordeE_A" class="A186"></div>
      <div id="bordeE_A" class="A187"></div>
      <div id="bordeE_A" class="A188"></div>
      <div id="bordeE_A" class="A189"></div>
      <div id="bordeE_A" class="A190"></div>
      <div id="bordeE_A" class="A191"></div>
      <div id="bordeE_A"class="A192"></div>
      <div id="bordeE_A" class="A193"></div>
      <div id="bordeE_A" class="A194"></div>
      <div id="bordeE_A" class="A195"></div>
      <div id="bordeE_A" class="A196"></div>
      <div id="bordeE_A" class="A197"></div>
      <div id="bordeE_A" class="A198"></div>
      <div id="bordeE_A" class="A198"></div>
      <div id="bordeE_A" class="A198"></div>
      <div id="bordeE_A" class="A198"></div>
      <div id="bordeE_A" class="A198"></div>
      <div id="bordeE_A" class="A198"></div>
      <div id="bordeE_A" class="A198"></div>
      <div id="bordeE_A" class="A198"></div>
</div>
  </div>
  <div id="Esquina B" class="Esquina_B" onclick=clickaction(this) style="border:2px solid black;">
  <div class="grid-container1">
      <div id="bordeE_B" class="A1"></div>
      <div id="bordeE_B" class="A2"></div>
      <div id="bordeE_B" class="A3"></div>
      <div id="bordeE_B" class="A4"></div>
      <div id="bordeE_B" class="A5"></div>
      <div id="bordeE_B" class="A6"></div>
      <div id="bordeE_B" class="A7"></div>
      <div id="bordeE_B" class="A8"></div>
      <div id="bordeE_B" class="A9"></div>
      <div id="bordeE_B" class="A10"></div>
      <div id="bordeE_B" class="A11"></div>
      <div id="bordeE_B" class="A12"></div>
      <div id="bordeE_B" class="A13"></div>
      <div id="bordeE_B" class="A14"></div>
      <div id="bordeE_B" class="A15"></div>
      <div id="bordeE_B" class="A16"></div>
      <div id="bordeE_B" class="A17"></div>
      <div id="bordeE_B" class="A18"></div>
      <div id="bordeE_B" class="A19"></div>
      <div id="bordeE_B" class="A20"></div>
      <div id="bordeE_B" class="A21"></div>
      <div id="bordeE_B" class="A22"></div>
      <div id="bordeE_B" class="A23"></div>
      <div id="bordeE_B" class="A24"></div>
      <div id="bordeE_B" class="A25"></div>
      <div id="bordeE_B" class="A26"></div>
      <div id="bordeE_B" class="A27"></div>
      <div id="bordeE_B" class="A28"></div>
      <div id="bordeE_B" class="A29"></div>
      <div id="bordeE_B" class="A30"></div>
      <div id="bordeE_B" class="A31"></div>
      <div id="bordeE_B" class="A32"></div>
      <div id="bordeE_B" class="A33"></div>
      <div id="bordeE_B" class="A34"></div>
      <div id="bordeE_B" class="A35"></div>
      <div id="bordeE_B" class="A36"></div>
      <div id="bordeE_B" class="A37"></div>
      <div id="bordeE_B" class="A38"></div>
      <div id="bordeE_B" class="A39"></div>
      <div id="bordeE_B" class="A40"></div>
      <div id="bordeE_B" class="A41"></div>
      <div id="bordeE_B" class="A42"></div>
      <div id="bordeE_B" class="A43"></div>
      <div id="bordeE_B" class="A44"></div>
      <div id="bordeE_B" class="A45"></div>
      <div id="bordeE_B" class="A46"></div>
      <div id="bordeE_B" class="A47"></div>
      <div id="bordeE_B" class="A48"></div>
      <div id="bordeE_B" class="A49"></div>
      <div id="bordeE_B" class="A50"></div>
      <div id="bordeE_B" class="A51"></div>
      <div id="bordeE_B" class="A52"></div>
      <div id="bordeE_B" class="A53"></div>
      <div id="bordeE_B" class="A54"></div>
      <div id="bordeE_B" class="A55"></div>
      <div id="bordeE_B" class="A56"></div>
      <div id="bordeE_B" class="A57"></div>
      <div id="bordeE_B" class="A58"></div>
      <div id="bordeE_B" class="A59"></div>
      <div id="bordeE_B" class="A60"></div>
      <div id="bordeE_B" class="A61"></div>
      <div id="bordeE_B" class="A62"></div>
      <div id="bordeE_B" class="A63"></div>
      <div id="bordeE_B" class="A64"></div>
      <div id="bordeE_B" class="A65"></div>
      <div id="bordeE_B" class="A66"></div>
      <div id="bordeE_B" class="A67"></div>
      <div id="bordeE_B" class="A68"></div>
      <div id="bordeE_B" class="A69"></div>
      <div id="bordeE_B" class="A70"></div>
      <div id="bordeE_B" class="A71"></div>
      <div id="bordeE_B" class="A72"></div>
      <div id="bordeE_B" class="A73"></div>
      <div id="bordeE_B" class="A74"></div>
      <div id="bordeE_B" class="A75"></div>
      <div id="bordeE_B" class="A76"></div>
      <div id="bordeE_B" class="A77"></div>
      <div id="bordeE_B" class="A78"></div>
      <div id="bordeE_B" class="A79"></div>
      <div id="bordeE_B" class="A80"></div>
      <div id="bordeE_B" class="A81"></div>
      <div id="bordeE_B" class="A82"></div>
      <div id="bordeE_B" class="A83"></div>
      <div id="bordeE_B" class="A84"></div>
      <div id="bordeE_B" class="A85"></div>
      <div id="bordeE_B" class="A86"></div>
      <div id="bordeE_B" class="A87"></div>
      <div id="bordeE_B" class="A88"></div>
      <div id="bordeE_B" class="A89"></div>
      <div id="bordeE_B" class="A90"></div>
      <div id="bordeE_B" class="A91"></div>
      <div id="bordeE_B" class="A92"></div>
      <div id="bordeE_B" class="A93"></div>
      <div id="bordeE_B" class="A94"></div>
      <div id="bordeE_B" class="A95"></div>
      <div id="bordeE_B" class="A96"></div>
      <div id="bordeE_B" class="A97"></div>
      <div id="bordeE_B" class="A98"></div>
      <div id="bordeE_B" class="A99"></div>
      <div id="bordeE_B" class="A100"></div>
      <div id="bordeE_B" class="A101"></div>
      <div id="bordeE_B" class="A102"></div>
      <div id="bordeE_B" class="A103"></div>
      <div id="bordeE_B" class="A104"></div>
      <div id="bordeE_B" class="A105"></div>
      <div id="bordeE_B" class="A106"></div>
      <div id="bordeE_B" class="A107"></div>
      <div id="bordeE_B" class="A108"></div>
      <div id="bordeE_B" class="A109"></div>
      <div id="bordeE_B" class="A110"></div>
      <div id="bordeE_B" class="A111"></div>
      <div id="bordeE_B" class="A112"></div>
      <div id="bordeE_B" class="A113"></div>
      <div id="bordeE_B" class="A114"></div>
      <div id="bordeE_B" class="A115"></div>
      <div id="bordeE_B" class="A116"></div>
      <div id="bordeE_B" class="A117"></div>
      <div id="bordeE_B" class="A118"></div>
      <div id="bordeE_B" class="A119"></div>
      <div id="bordeE_B" class="A120"></div>
      <div id="bordeE_B" class="A121"></div>
      <div id="bordeE_B" class="A122"></div>
      <div id="bordeE_B" class="A123"></div>
      <div id="bordeE_B" class="A124"></div>
      <div id="bordeE_B" class="A125"></div>
      <div id="bordeE_B" class="A126"></div>
      <div id="bordeE_B" class="A127"></div>
      <div id="bordeE_B" class="A128"></div>
      <div id="bordeE_B" class="A129"></div>
      <div id="bordeE_B" class="A130"></div>
      <div id="bordeE_B" class="A131"></div>
      <div id="bordeE_B" class="A132"></div>
      <div id="bordeE_B" class="A133"></div>
      <div id="bordeE_B" class="A134"></div>
      <div id="bordeE_B" class="A135"></div>
      <div id="bordeE_B" class="A136"></div>
      <div id="bordeE_B" class="A137"></div>
      <div id="bordeE_B" class="A138"></div>
      <div id="bordeE_B" class="A139"></div>
      <div id="bordeE_B" class="A140"></div>
      <div id="bordeE_B" class="A141"></div>
      <div id="bordeE_B" class="A142"></div>
      <div id="bordeE_B"class="A143"></div>
      <div id="bordeE_B" class="A144"></div>
      <div id="bordeE_B" class="A145"></div>
      <div id="bordeE_B" class="A146"></div>
      <div id="bordeE_B" class="A147"></div>
      <div id="bordeE_B" class="A148"></div>
      <div id="bordeE_B" class="A149"></div>
      <div id="bordeE_B" class="A150"></div>
      <div id="bordeE_B" class="A151"></div>
      <div id="bordeE_B" class="A152"></div>
      <div id="bordeE_B" class="A153"></div>
      <div id="bordeE_B" class="A154"></div>
      <div id="bordeE_B" class="A155"></div>
      <div id="bordeE_B" class="A156"></div>
      <div id="bordeE_B" class="A157"></div>
      <div id="bordeE_B" class="A158"></div>
      <div id="bordeE_B" class="A159"></div>
      <div id="bordeE_B" class="A160"></div>
      <div id="bordeE_B" class="A161"></div>
      <div id="bordeE_B"class="A162"></div>
      <div id="bordeE_B" class="A163"></div>
      <div id="bordeE_B" class="A164"></div>
      <div id="bordeE_B" class="A165"></div>
      <div id="bordeE_B" class="A166"></div>
      <div id="bordeE_B" class="A167"></div>
      <div id="bordeE_B" class="A168"></div>
      <div id="bordeE_B" class="A169"></div>
      <div id="bordeE_BE" class="A170"></div>
      <div id="bordeE_B" class="A171"></div>
      <div id="bordeE_B" class="A172"></div>
      <div id="bordeE_B" class="A173"></div>
      <div id="bordeE_B" class="A174"></div>
      <div id="bordeE_B" class="A175"></div>
      <div id="bordeE_B" class="A176"></div>
      <div id="bordeE_B" class="A177"></div>
      <div id="bordeE_B" class="A178"></div>
      <div id="bordeE_B" class="A179"></div>
      <div id="bordeE_B" class="A180"></div>
      <div id="bordeE_B" class="A181"></div>
      <div id="bordeE_B" class="A182"></div>
      <div id="bordeE_B" class="A183"></div>
      <div id="bordeE_B" class="A184"></div>
      <div id="bordeE_B" class="A185"></div>
      <div id="bordeE_B" class="A186"></div>
      <div id="bordeE_B" class="A187"></div>
      <div id="bordeE_B" class="A188"></div>
      <div id="bordeE_B" class="A189"></div>
      <div id="bordeE_B" class="A190"></div>
      <div id="bordeE_B" class="A191"></div>
      <div id="bordeE_B"class="A192"></div>
      <div id="bordeE_B" class="A193"></div>
      <div id="bordeE_B" class="A194"></div>
      <div id="bordeE_B" class="A195"></div>
      <div id="bordeE_B" class="A196"></div>
      <div id="bordeE_B" class="A197"></div>
      <div id="bordeE_B" class="A198"></div>
      <div id="bordeE_B" class="A198"></div>
      <div id="bordeE_B" class="A198"></div>
      <div id="bordeE_B" class="A198"></div>
      <div id="bordeE_B" class="A198"></div>
      <div id="bordeE_B" class="A198"></div>
      <div id="bordeE_B" class="A198"></div>
      <div id="bordeE_B" class="A198"></div>
</div>
  </div>
  <div id="Esquina C"  class="Esquina_C" onclick=clickaction(this) style="border:2px solid black;">
  <div class="grid-container1">
      <div id="bordeE_C" class="A1"></div>
      <div id="bordeE_C" class="A2"></div>
      <div id="bordeE_C" class="A3"></div>
      <div id="bordeE_C" class="A4"></div>
      <div id="bordeE_C" class="A5"></div>
      <div id="bordeE_C" class="A6"></div>
      <div id="bordeE_C" class="A7"></div>
      <div id="bordeE_C" class="A8"></div>
      <div id="bordeE_C" class="A9"></div>
      <div id="bordeE_C" class="A10"></div>
      <div id="bordeE_C" class="A11"></div>
      <div id="bordeE_C" class="A12"></div>
      <div id="bordeE_C" class="A13"></div>
      <div id="bordeE_C" class="A14"></div>
      <div id="bordeE_C" class="A15"></div>
      <div id="bordeE_C" class="A16"></div>
      <div id="bordeE_C" class="A17"></div>
      <div id="bordeE_C" class="A18"></div>
      <div id="bordeE_C" class="A19"></div>
      <div id="bordeE_C" class="A20"></div>
      <div id="bordeE_C" class="A21"></div>
      <div id="bordeE_C" class="A22"></div>
      <div id="bordeE_C" class="A23"></div>
      <div id="bordeE_C" class="A24"></div>
      <div id="bordeE_C" class="A25"></div>
      <div id="bordeE_C" class="A26"></div>
      <div id="bordeE_C" class="A27"></div>
      <div id="bordeE_C" class="A28"></div>
      <div id="bordeE_C" class="A29"></div>
      <div id="bordeE_C" class="A30"></div>
      <div id="bordeE_C" class="A31"></div>
      <div id="bordeE_C" class="A32"></div>
      <div id="bordeE_C" class="A33"></div>
      <div id="bordeE_C" class="A34"></div>
      <div id="bordeE_C" class="A35"></div>
      <div id="bordeE_C" class="A36"></div>
      <div id="bordeE_C" class="A37"></div>
      <div id="bordeE_C" class="A38"></div>
      <div id="bordeE_C" class="A39"></div>
      <div id="bordeE_C" class="A40"></div>
      <div id="bordeE_C" class="A41"></div>
      <div id="bordeE_C" class="A42"></div>
      <div id="bordeE_C" class="A43"></div>
      <div id="bordeE_C" class="A44"></div>
      <div id="bordeE_C" class="A45"></div>
      <div id="bordeE_C" class="A46"></div>
      <div id="bordeE_C" class="A47"></div>
      <div id="bordeE_C" class="A48"></div>
      <div id="bordeE_C" class="A49"></div>
      <div id="bordeE_C" class="A50"></div>
      <div id="bordeE_C" class="A51"></div>
      <div id="bordeE_C" class="A52"></div>
      <div id="bordeE_C" class="A53"></div>
      <div id="bordeE_C" class="A54"></div>
      <div id="bordeE_C" class="A55"></div>
      <div id="bordeE_C" class="A56"></div>
      <div id="bordeE_C" class="A57"></div>
      <div id="bordeE_C" class="A58"></div>
      <div id="bordeE_C" class="A59"></div>
      <div id="bordeE_C" class="A60"></div>
      <div id="bordeE_C" class="A61"></div>
      <div id="bordeE_C" class="A62"></div>
      <div id="bordeE_C" class="A63"></div>
      <div id="bordeE_C" class="A64"></div>
      <div id="bordeE_C" class="A65"></div>
      <div id="bordeE_C" class="A66"></div>
      <div id="bordeE_C" class="A67"></div>
      <div id="bordeE_C" class="A68"></div>
      <div id="bordeE_C" class="A69"></div>
      <div id="bordeE_C" class="A70"></div>
      <div id="bordeE_C" class="A71"></div>
      <div id="bordeE_C" class="A72"></div>
      <div id="bordeE_C" class="A73"></div>
      <div id="bordeE_C" class="A74"></div>
      <div id="bordeE_C" class="A75"></div>
      <div id="bordeE_C" class="A76"></div>
      <div id="bordeE_C" class="A77"></div>
      <div id="bordeE_C" class="A78"></div>
      <div id="bordeE_C" class="A79"></div>
      <div id="bordeE_C" class="A80"></div>
      <div id="bordeE_C" class="A81"></div>
      <div id="bordeE_C" class="A82"></div>
      <div id="bordeE_C" class="A83"></div>
      <div id="bordeE_C" class="A84"></div>
      <div id="bordeE_C" class="A85"></div>
      <div id="bordeE_C" class="A86"></div>
      <div id="bordeE_C" class="A87"></div>
      <div id="bordeE_C" class="A88"></div>
      <div id="bordeE_C" class="A89"></div>
      <div id="bordeE_C" class="A90"></div>
      <div id="bordeE_C" class="A91"></div>
      <div id="bordeE_C" class="A92"></div>
      <div id="bordeE_C" class="A93"></div>
      <div id="bordeE_C" class="A94"></div>
      <div id="bordeE_C" class="A95"></div>
      <div id="bordeE_C" class="A96"></div>
      <div id="bordeE_C" class="A97"></div>
      <div id="bordeE_C" class="A98"></div>
      <div id="bordeE_C" class="A99"></div>
      <div id="bordeE_C" class="A100"></div>
      <div id="bordeE_C" class="A101"></div>
      <div id="bordeE_C" class="A102"></div>
      <div id="bordeE_C" class="A103"></div>
      <div id="bordeE_C" class="A104"></div>
      <div id="bordeE_C" class="A105"></div>
      <div id="bordeE_C" class="A106"></div>
      <div id="bordeE_C" class="A107"></div>
      <div id="bordeE_C" class="A108"></div>
      <div id="bordeE_C" class="A109"></div>
      <div id="bordeE_C" class="A110"></div>
      <div id="bordeE_C" class="A111"></div>
      <div id="bordeE_C" class="A112"></div>
      <div id="bordeE_C" class="A113"></div>
      <div id="bordeE_C" class="A114"></div>
      <div id="bordeE_C" class="A115"></div>
      <div id="bordeE_C" class="A116"></div>
      <div id="bordeE_C" class="A117"></div>
      <div id="bordeE_C" class="A118"></div>
      <div id="bordeE_C" class="A119"></div>
      <div id="bordeE_C" class="A120"></div>
      <div id="bordeE_C" class="A121"></div>
      <div id="bordeE_C" class="A122"></div>
      <div id="bordeE_C" class="A123"></div>
      <div id="bordeE_C" class="A124"></div>
      <div id="bordeE_C" class="A125"></div>
      <div id="bordeE_C" class="A126"></div>
      <div id="bordeE_C" class="A127"></div>
      <div id="bordeE_C" class="A128"></div>
      <div id="bordeE_C" class="A129"></div>
      <div id="bordeE_C" class="A130"></div>
      <div id="bordeE_C" class="A131"></div>
      <div id="bordeE_C" class="A132"></div>
      <div id="bordeE_C" class="A133"></div>
      <div id="bordeE_C" class="A134"></div>
      <div id="bordeE_C" class="A135"></div>
      <div id="bordeE_C" class="A136"></div>
      <div id="bordeE_C" class="A137"></div>
      <div id="bordeE_C" class="A138"></div>
      <div id="bordeE_C" class="A139"></div>
      <div id="bordeE_C" class="A140"></div>
      <div id="bordeE_C" class="A141"></div>
      <div id="bordeE_C" class="A142"></div>
      <div id="bordeE_C"class="A143"></div>
      <div id="bordeE_C" class="A144"></div>
      <div id="bordeE_C" class="A145"></div>
      <div id="bordeE_C" class="A146"></div>
      <div id="bordeE_C" class="A147"></div>
      <div id="bordeE_C" class="A148"></div>
      <div id="bordeE_C" class="A149"></div>
      <div id="bordeE_C" class="A150"></div>
      <div id="bordeE_C" class="A151"></div>
      <div id="bordeE_C" class="A152"></div>
      <div id="bordeE_C" class="A153"></div>
      <div id="bordeE_C" class="A154"></div>
      <div id="bordeE_C" class="A155"></div>
      <div id="bordeE_C" class="A156"></div>
      <div id="bordeE_C" class="A157"></div>
      <div id="bordeE_C" class="A158"></div>
      <div id="bordeE_C" class="A159"></div>
      <div id="bordeE_C" class="A160"></div>
      <div id="bordeE_C" class="A161"></div>
      <div id="bordeE_C"class="A162"></div>
      <div id="bordeE_C" class="A163"></div>
      <div id="bordeE_C" class="A164"></div>
      <div id="bordeE_C" class="A165"></div>
      <div id="bordeE_C" class="A166"></div>
      <div id="bordeE_C" class="A167"></div>
      <div id="bordeE_C" class="A168"></div>
      <div id="bordeE_C" class="A169"></div>
      <div id="bordeE_CE" class="A170"></div>
      <div id="bordeE_C" class="A171"></div>
      <div id="bordeE_C" class="A172"></div>
      <div id="bordeE_C" class="A173"></div>
      <div id="bordeE_C" class="A174"></div>
      <div id="bordeE_C" class="A175"></div>
      <div id="bordeE_C" class="A176"></div>
      <div id="bordeE_C" class="A177"></div>
      <div id="bordeE_C" class="A178"></div>
      <div id="bordeE_C" class="A179"></div>
      <div id="bordeE_C" class="A180"></div>
      <div id="bordeE_C" class="A181" ></div>
      <div id="bordeE_C" class="A182" ></div>
      <div id="bordeE_C" class="A183"></div>
      <div id="bordeE_C" class="A184"></div>
      <div id="bordeE_C" class="A185"></div>
      <div id="bordeE_C" class="A186"></div>
      <div id="bordeE_C" class="A187"></div>
      <div id="bordeE_C" class="A188"></div>
      <div id="bordeE_C" class="A189"></div>
      <div id="bordeE_C" class="A190"></div>
      <div id="bordeE_C" class="A191"></div>
      <div id="bordeE_C"class="A192"></div>
      <div id="bordeE_C" class="A193" ></div>
      <div id="bordeE_C" class="A194"></div>
      <div id="bordeE_C" class="A195"></div>
      <div id="bordeE_C" class="A196"></div>
      <div id="bordeE_C" class="A197"></div>
      <div id="bordeE_C" class="A198"></div>
      <div id="bordeE_C" class="A198"></div>
      <div id="bordeE_C" class="A198"></div>
      <div id="bordeE_C" class="A198"></div>
      <div id="bordeE_C" class="A198"></div>
      <div id="bordeE_C" class="A198"></div>
      <div id="bordeE_C" class="A198"></div>
      <div id="bordeE_C" class="A198"></div>
</div>
  </div>
</div>