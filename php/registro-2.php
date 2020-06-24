<script src="./notify.js"></script>
<script src="./notify.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



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
     
     $extensions= array("jpeg","jpg","png");
     
     if(in_array($file_ext,$extensions)=== false){
        $errores[]="Esta extension no esta permitida, solo admitimos JPG,JPEG y PNG.";
     }
     
     if($tamaño_fichero > 2097152){
        $errores[]='Demasiado pesado, maximo 2MB';
     }
     
     if(empty($errores)==true){
        move_uploaded_file($nombretemporal_fichero,"../images/ImagenesAbonados/".$nombre_fichero);
    //    echo "La iamgen se subió correctamente";

     }else{
        print_r($errores);
     }
  }

var_dump($_POST);
echo "Nombre:".$_POST['nombre'];
echo "Apellidos:".$_POST['apellidos'];
?>
<form method="POST" action="registro-3.php">
<input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
<input type="hidden" name="apellidos" value="<?php echo $_POST['apellidos']?>">
<input type="hidden" name="dni" value="<?php echo $_POST['dni']?>">
<input type="hidden" name="fechanacimiento" value="<?php echo $_POST['fechanacimiento']?>">
<input type="hidden" name="contraseña" value="<?php echo $_POST['contraseña']?>">
<input type="hidden" name="telefono" value="<?php echo $_POST['telefono']?>">
<input type="hidden" name="calle" value="<?php echo $_POST['calle']?>">
<input type="hidden" name="numero" value="<?php echo $_POST['numero']?>">
<input type="hidden" name="piso" value="<?php echo $_POST['piso']?>">
<input type="hidden" name="codigo_postal" value="<?php echo $_POST['codigo_postal']?>">
<input type="hidden" name="localidad" value="<?php echo $_POST['localidad']?>">
<input type="hidden" name="provincia" value="<?php echo $_POST['provincia']?>">
<input type="hidden" name="categoria_abono" value="<?php echo $_POST['categoria_abono']?>">

<input type="submit" value="Enviar">
</form>