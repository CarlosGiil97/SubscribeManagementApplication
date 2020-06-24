<?php 
session_start();
if(isset($_POST) && !empty($_POST)) {
    include('phpqrcode/qrlib.php'); 
    $codesDir = "codes/";   
    $codeFile = $_SESSION['sesion']['dni'].'-'.$_SESSION['sesion']['numeroabonado'].'.png';
    QRcode::png($_POST['formData'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
    echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
} else {
    header('location:./');
}
?>