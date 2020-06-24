<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 // require '../vendor/autoload.php';
 require './phpmailer/src/Exception.php';
 require './phpmailer/src/SMTP.php';
 require './phpmailer/src/PHPMailer.php';
 
function conexion(){
    $usuario = "granada";
    $password = "granada";
    $dbname = "granada";
    $dsn='mysql:dbname='.$dbname.';host=localhost';
    $array_atributos = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' COLLATE 'utf8_spanish_ci'");
    try {
        $conexDB = new PDO($dsn, $usuario, $password, $array_atributos);
        // echo "Conexión establecida";
        $res = $conexDB->query("SELECT COLLATION('$dbname')");
        //  var_dump($res);
        // echo "<br>";
        // echo $res->fetch(PDO::FETCH_NUM)[0];
        // echo "<br>";
        // echo $conexDB->getAttribute(PDO::ATTR_SERVER_INFO);
        

    } catch (PDOException $th) {
        $th->getMesssage();
        exit();
        //throw $th;
    }
    return $conexDB;
}

        $con = conexion();

    // function addUser($nombre,$apellidos,$direccion, $telefono, $email, $perfil,$contrasena,$con){
    //     $total = $con->prepare("INSERT INTO usuarios (nombre, apellidos, direccion, telefono,email, perfil,contrasena) 
    //     VALUES (:nombre, :apellidos, :direccion, :telefono, :email, :perfil,:contrasena)");
    //     // $total->bindValue(':nombre', $nombre);
    //     // $total->bindValue(':apellidos', $apellidos);
    //     // $total->bindValue(':direccion', $direccion);
    //     // $total->bindValue(':telefono',$telefono);
    //     // $total->bindValue(':email',$email);
    //     // $total->bindValue(':contraseña',$contraseña);
    //     // $total->bindValue(':perfil',$perfil);
    //     // $total->bindValue(':fecha_registro',$fecha_registro);
    //     // $total->bindValue(':verificado',$verificado);
    //     $total->execute(array(':nombre'=>$nombre, ':apellidos'=>$apellidos, ':direccion'=>$direccion, 
    //     ':telefono'=>$telefono,':email'=>$email,  ':perfil'=>$perfil,':contrasena'=>$contrasena));
    //     $arr = $total->errorInfo();
    //     var_dump($arr);
    // }
    
    // function addCliente($nombre,$apellidos,$direccion,$telefono,$email,$contrasena,$perfil,$con){
    //     $total = $con->prepare("INSERT INTO usuarios (nombre, apellidos, direccion, telefono,email,perfil,contrasena) 
    //     VALUES (:nombre, :apellidos, :direccion, :telefono, :email,:perfil,:contrasena)");
    //     $total->execute(array(':nombre'=>$nombre, ':apellidos'=>$apellidos, ':direccion'=>$direccion, 
    //     ':telefono'=>$telefono,':email'=>$email, ':perfil'=>$perfil,':contrasena'=>$contrasena));
    //     $arr = $total->errorInfo();
    //     // var_dump($arr);
    //     echo '<script type="text/javascript">
    //     alert("Registro exitoso, se le redigirá al login");
    //     window.location.assign("login.php");
    //     </script>';
    // }

   
    function listaUsuarios($con){
        $sql = "SELECT * FROM pagos";
        $result_usuarios = $con->query($sql);
        echo "<h1>LISTADO DE ABONADOS</h1>";
        foreach ($con->query($sql) as $row) {
            var_dump($row);
            }
    }
    function añadirAdonadoBD($nombre,$dni,$pw,$apellidos,$fecha_nacimiento,$telefono,$numero_abonado,$categoria,$zona,
    $fecha_alta,$fila,$asiento,$calle,$numero,$piso,$codigo_postal,$localidad,$provincia,$con){
            $total = $con->prepare("INSERT INTO abonados( nombre,DNI,pw,apellidos,fecha_nacimiento,telefono,
            numero_abonado,categoria,zona,fecha_alta,fila,asiento,calle,numero,piso,codigo_postal,localidad,provincia)
            VALUES (:nombre,:dni,:pw,:apellidos,:fecha_nacimiento,:telefono,:numero_abonado,:categoria,:zona,
            :fecha_alta,:fila,:asiento,:calle,:numero,:piso,:codigo_postal,:localidad,:provincia)");

            $total->execute(array(':nombre'=>$nombre,':dni'=>$dni,':pw'=>$pw,':apellidos'=>$apellidos,':fecha_nacimiento'=>$fecha_nacimiento,
            ':telefono'=>$telefono,':numero_abonado'=>$numero_abonado,':categoria'=>$categoria,':zona'=>$zona,':fecha_alta'=>$fecha_alta,
            ':fila'=>$fila,':asiento'=>$asiento,':calle'=>$calle,':numero'=>$numero,':piso'=>$piso,':codigo_postal'=>$codigo_postal,
            ':localidad'=>$localidad,':provincia'=>$provincia));
            $arr = $total->errorInfo();
    }

    
  

        function asignarPagoaAbonado($id_pago,$temporada,$importe,$estado,$con){
            $total = $con->prepare("INSERT INTO pagos(id_pago,temporada,importe,estado)
            VALUES (:id_pago,:temporada,:importe,:estado)");

            $total->execute(array(':id_pago'=>$id_pago,':temporada'=>$temporada,':importe'=>$importe,':estado'=>$estado));
            $arr = $total->errorInfo();
        }


        // enviacorreos('carlosgilteriente@gmail.com','Carlos','pepe','Zona',4,5,500,'2020-05-09',503,$con);

        function enviacorreos($correo,$nombre,$contrasena,$zona,$fila,$asiento,$importe,$fecha,$numero_abonado,$con){
            $mail = new PHPMailer;
            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();  
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->Username = 'betygol2019@gmail.com';
                $mail->Password = 'aellimassol';
            
                // Mensaje
                $mail->setFrom('betygol2019@gmail.com', 'Abonados Granada.C.F');
                //Set an alternative reply-to address
                $mail->addReplyTo('betygol2019@gmail.com', 'Abonados Granada.C.F');
                //Set who the message is to be sent to
                $mail->addAddress($correo, $nombre);
                $mail->Subject = 'Informacion pago completado abono';
                // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
                // $tit = "Su pago se ha realizado con exito";
                $parra="Su pago se ha realizado con exito 
                Hola $nombre!
                Le adjuntamos el justificante de pago junto con las credenciales de inicio de sesión para poder acceder a su panel de control como abonado del GranadaCF.
                Hizo un pago de $importe a GranadaCF como entidad,  a fecha  $fecha.
                El abono se ubica en $zona, fila:$fila y asiento:$asiento
                Las credenciales para iniciar sesión son: Su DNI  y contraseña: $contrasena.
                Un cordial saludo desde GranadaCF";
                $mail->Body=$parra;
                // $mail->addAttachment('../images/banner_correo.png');
                $mail->send();
            
            } catch (Exception $th) {
                echo "Mensaje no Enviado $mail->ErrorInfo";
            }
            }
        // asignarPagoaAbonado(2,'19-20',200,'PAGADO',$con);
      // function insertJuego($titulo,$nombre,$fecha_lanzamiento,$productora,$descripcion,$ranking,$pvp,$con){
    //     $total = $con->prepare("INSERT INTO juegos (titulo, nombre, fecha_lanzamiento, productora,descripcion, ranking, pvp) 
    //     VALUES (:titulo, :nombre, :fecha_lanzamiento, :productora, :descripcion, :ranking, :pvp)");

    //     $total->execute(array(':titulo'=>$titulo, ':nombre'=>$nombre, ':fecha_lanzamiento'=>$fecha_lanzamiento, 
    //     ':productora'=>$productora,':descripcion'=>$descripcion, ':ranking'=>$ranking, ':pvp'=>$pvp));
    //     $arr = $total->errorInfo();
    // }

    function sacarUltimoNumeroAbonado($con){
    $sql = "SELECT MAX(numero_abonado) as 'ultimo_numero_abonado' FROM abonados";
    $resultado = $con->query($sql);
    foreach ($con->query($sql) as $row){
        //lo convierto a entero ya que luego tengo que ir sumandole uno a cada abonado porque el numero de abonado siempre es el anterior mas uno
        return (intval($row['ultimo_numero_abonado'])+1);
    }
    }
// echo sacarUltimoNumeroAbonado($con);
        function sacarIddeAbonado($numero_abonado,$con){
            $sql ="SELECT id FROm abonados WHERE numero_abonado=$numero_abonado;";
            $resultado = $con->query($sql);
            foreach ($con->query($sql) as $row){
                //lo convierto a entero ya que luego tengo que ir sumandole uno a cada abonado porque el numero de abonado siempre es el anterior mas uno
                return (intval($row['id']));
            }
        }

        function updateAbonado($con,$id,$nombre,$apellidos,$dni,$fecha_nacimiento,$telefono,$calle,$numero,$piso,$codigo_postal,$localidad,$provincia){

        $sql = "UPDATE abonados SET nombre = :nombre, 
            apellidos = :apellidos, 
            dni = :dni,    
            fecha_nacimiento = :fecha_nacimiento,
            telefono= :telefono,
            calle = :calle,
            numero = :numero,
            piso = :piso,
            codigo_postal = :codigo_postal,
            localidad = :localidad,
            provincia = :provincia
            WHERE id = :id";

        $total = $con->prepare($sql);                                   
        $total->execute(array(':id'=>$id,':dni'=>$dni, ':nombre'=>$nombre, ':apellidos'=>$apellidos, 
        ':fecha_nacimiento'=>$fecha_nacimiento,':telefono'=>$telefono, ':calle'=>$calle, ':numero'=>$numero,':piso'=>$piso,':codigo_postal'=>$codigo_postal,
    'localidad'=>$localidad,':provincia'=>$provincia));
        $total->execute(); 
        }
        // updateAbonado($con,1,'Carlos','Gil Terriente','77392314M','1997-06-01 00:00:00.000000',633654480,'Galicia',7,8,18230,'Atarfe','Granada');

        function ocuparAsiento($con,$id,$ocupacion){
            $sql = "UPDATE asientos SET ocupacion = :ocupacion 
            WHERE id = :id";
            $total = $con->prepare($sql);                                   
            $total->execute(array(':id'=>$id,':ocupacion'=>$ocupacion));
            $total->execute(); 
            $arr = $total->errorInfo();
    
        }
    
            function updateContrasena($con,$id,$contrasena_nueva){
                $sql = "UPDATE abonados SET pw = :contrasena_nueva 
                WHERE id = :id";

                $total= $con->prepare($sql);
                $total->execute(array(':id'=>$id,':contrasena_nueva'=>$contrasena_nueva));
                $total->execute();
            }
        //     function enviacorreo($con){
                
             
        //         $mail = new PHPMailer;
        //         try {
        //             $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        //             $mail->isSMTP();  
        //             $mail->Host = 'smtp.gmail.com';
        //             $mail->SMTPAuth = true;
        //             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //             $mail->Port = 587;
        //             $mail->Username = 'betygol2019@gmail.com';
        //             $mail->Password = 'aellimassol';
                
        //             // Mensaje
        //             $mail->setFrom('betygol2019@gmail.com', 'Biblioteca');
        //             //Set an alternative reply-to address
        //             $mail->addReplyTo('betygol2019@gmail.com', 'Biblioteca');
        //             //Set who the message is to be sent to
        //             $mail->addAddress('carlosgilterriente@gmail.com', 'Carlos');
        //             $mail->Subject = 'Prueba de envío de correo';
        //             // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
        //             $tit = "Usuario añadido correctamente";
        //             $parra="<p>Te has registrado en la biblioteca exitosamente</p><br>
        //             Sus credenciales para acceder son: y contraseña:";
        //             $mail->Body=$tit.$parra;
        //             // $mail->addAttachment('images/phpmailer_mini.png');
        //             $mail->send();
        //             echo "<h1> Enviado!!!! </h1>";
                
        //         } catch (Exception $th) {
        //             echo "Mensaje no Enviado $mail->ErrorInfo";
        //         }
        // }
        //         enviacorreo($con);

            function sacarIBAN($con,$id){
                $sql ="SELECT iban FROm iban WHERE id=$id;";
                $resultado = $con->query($sql);
                foreach ($con->query($sql) as $row){
                    return($row['iban']) ;
                }
            }

            function meterIBAN($con,$id,$iban){
                $total = $con->prepare("INSERT INTO iban(id,iban)
                VALUES (:id,:iban)");
    
                $total->execute(array(':id'=>$id,':iban'=>$iban));
                $arr = $total->errorInfo();
            }
            // meterIBAN($con,2,'ES1234567812345678901234');
            // sacarIBAN($con,2);
            // if(sacarIBAN($con,1) == null){
            //         echo "este usuario no tiene iban asignado";
            // }else{
            //     echo "El iban es:".sacarIBAN($con,1);
            // }
           
   
    // echo sacarUltimoNumeroAbonado($con);
    // listaUsuarios($con);
    // function showRanking($con){
    //     $sql = "SELECT * FROM juegos ORDER BY ranking";
    //     $result_prestamo = $con->query($sql);
    //     echo "<h1>JUEGOS ORDENADOS POR RANKING</h1>";
    //     foreach ($con->query($sql) as $row) {
    //         echo "<center><br><b>JUEGO:</b> ".$row['titulo'] . "</center><br>";
    //     }
    // }

    // function delUsu($idaeliminar,$con){
    //     $sql = 'DELETE FROM usuarios WHERE id = :id';
    //     $stmt = $con->prepare($sql);
    //     $stmt->bindValue(':id', $idaeliminar);
    //     $stmt->execute();

    //     return $stmt->rowCount();
    // }

    // function updateJuego($id,$titulo,$nombre,$fecha_lanzamiento,$productora,$descripcion,$ranking,$pvp,$con){

    //     $sql = "UPDATE juegos SET titulo = :titulo, 
    //         nombre = :nombre, 
    //         fecha_lanzamiento = :fecha_lanzamiento,  
    //         productora = :productora,  
    //         descripcion = :descripcion,
    //         ranking = :ranking,
    //         pvp = :pvp
    //         WHERE id = :id";

    //     $total = $con->prepare($sql);                                   
    //     $total->execute(array(':id'=>$id,':titulo'=>$titulo, ':nombre'=>$nombre, ':fecha_lanzamiento'=>$fecha_lanzamiento, 
    //     ':productora'=>$productora,':descripcion'=>$descripcion, ':ranking'=>$ranking, ':pvp'=>$pvp));
    //     $total->execute(); 
    //     echo'<script type="text/javascript">
    //     alert("Juego modificado");
        
    //     </script>';

    // }

  

    // function eliminarJuego($juegoaeliminar,$con){
    //     $sql = 'DELETE FROM juegos WHERE id = :id';
    //     $stmt = $con->prepare($sql);
    //     $stmt->bindValue(':id', $juegoaeliminar);
    //     $stmt->execute();

    //     return $stmt->rowCount();
    // }
  

    // function listaClientes($con){
    //     $sql = "SELECT * FROM usuarios WHERE perfil='Cliente'";
    //     $result_usuarios = $con->query($sql);
    //     echo "<h1>LISTADO DE CLIENTES</h1>";
    //     foreach ($result_usuarios as $row) {
    //         echo "<br> <b>El id es</b> ".$row['id'] . " cuyo nombre es ".$row['nombre']." ,su apellido es  ".$row['apellidos']." , la direccion  
    //         es ".$row['direccion']." ,el telefono es ".$row['telefono']." ,el email es ".$row['email'].", su contraseña es ".$row['contrasena'].", 
    //         el perfil activo es".$row['perfil'].", la fecha de registro fue ".$row['fecha_registro']," 
    //         ,el verificado fue".$row['verificado'];
    //         }
    // }
    
    // function modificarUsu($usuarioelegido,$nombre,$apellidos,$telefono,$email,$direccion,$con){
    //    $sql="UPDATE usuarios_clientes SET nombre=:nombre,apellidos=:apellidos,telefono=:telefono,email=:email,direccion=:direccion WHERE nombre=:usuarioelegido";
    //    $total = $con->prepare($sql);                                   
    //     $total->execute(array(':nombre'=>$nombre,':apellidos'=>$apellidos, ':telefono'=>$telefono, ':email'=>$email, 
    //     ':direccion'=>$direccion,':usuarioelegido'=>$usuarioelegido));
    //     $total->execute(); 
    //     echo'<script type="text/javascript">alert("Usuario modificado");</script>';

    // }
    // // delUsu(2,$con);

    // function modificarCliente($id,$nombre,$apellidos,$direccion,$telefono,$email,$contrasena,$con){
    //     $sql="UPDATE usuarios SET nombre=:nombre,apellidos=:apellidos,direccion=:direccion,telefono=:telefono,email=:email,contrasena=:contrasena WHERE id=:id";
    //     $total = $con->prepare($sql);                                   
    //      $total->execute(array(':id'=>$id,':nombre'=>$nombre,':apellidos'=>$apellidos, ':direccion'=>$direccion,':telefono'=>$telefono, ':email'=>$email, 
    //      ':contrasena'=>$contrasena));
    //      $total->execute(); 
    //      $arr = $total->errorInfo();
    //     // echo'<script type="text/javascript">alert("Compra realizada con exito");</script>';
    // //   var_dump($arr);
    //      echo'<script type="text/javascript">alert("Usuario modificado");</script>';
 
    //  }
    // function venta_diaria($con){
    //     $sql = "SELECT * FROM venta_diaria";
    //     $result_usuarios = $con->query($sql);
    //     foreach ($result_usuarios as $row) {
    //         echo "<h4> <b>El Dinero ganado hoy  es</b> ".$row['ganado_dia']."€<img src='../images/dinero.png' width='100px' height='100px'></h4>";
    //         }
    // }

    // function ultimoUsuInsertado($con){
    //     $sql = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 1";
    //     $result_usuarios = $con->query($sql);
    //     foreach ($result_usuarios as $row) {
    //         echo $row['id'];
    //     }
    // }
    // function saberpreciojuego($con,$juego){
    //     $sql = "SELECT pvp FROM juegos WHERE titulo = '$juego'";
    //     $result_usuarios = $con->query($sql);
    //     foreach ($result_usuarios as $row) {
    //         return $row['pvp'];
    //     }
    // }
    // function saberIDcontitulo($con,$juego){
    //     $sql = "SELECT id FROM juegos WHERE titulo = '$juego'";
    //     $result_usuarios = $con->query($sql);
    //     foreach ($result_usuarios as $row) {
    //         return $row['id'];
    //     }
    // }
  
    // function insertaJuegoCesta($usuario,$juego,$ejemplar,$metodo_pago,$precio_venta,$con){
    //     $total = $con->prepare("INSERT INTO cesta (usuario, juego, ejemplar,metodo_pago, precio_venta)
    //     VALUES (:usuario, :juego, :ejemplar, :metodo_pago, :precio_venta)");
    //     $total->execute(array(':usuario'=>$usuario, ':juego'=>$juego, ':ejemplar'=>$ejemplar, 
    //     ':metodo_pago'=>$metodo_pago, ':precio_venta'=>$precio_venta));
    //     echo '<script type="text/javascript">
    //     alert("Compra realizada correctamente y se le vaciará el carrito  ✅");
    //     window.location.assign("destruircarro.php");
    //     </script>';
              
    //     $arr = $total->errorInfo();
    //   var_dump($arr);
    // }
    
    // function sacarUltimonumeroNumEjem($con,$juego){
    //     $sql= "SELECT MAX(num_ejemplar) AS ultimo FROM ejemplar_juego WHERE juego = $juego";
    //     $result_usuarios = $con->query($sql);
    //     $arr = $result_usuarios->errorInfo();
    //     foreach ($result_usuarios as $row) {
    //         return $row['ultimo'];
    //     }
    //     var_dump($arr);

    // }

    // function comprasrealizadas($id,$fecha1,$fecha2,$con){
    //     $sql="SELECT * FROM cesta WHERE usuario=$id AND fecha_compra BETWEEN '$fecha1' AND '$fecha2'";
    //     $result_usuarios = $con->query($sql);
    //     echo "<h5>Compras realizadas:</h5>";
    //     foreach ($result_usuarios as $row) {
    //         // echo $row['juego'].$row['ejemplar'].$row['fecha_compra'].$row['metodo_pago'].$row['precio_venta'];
    //         echo "<h4>Compraste el ejemplar ".$row['ejemplar']." del juego ".$row['juego']." el dia ".$row['fecha_compra']." mediante ".$row['metodo_pago']." por un precio
    //          de ".$row['precio_venta']."€</h4>";
    //     }
    //     $arr = $result_usuarios->errorInfo();
    // //   var_dump($arr);
      
    // }

?>
