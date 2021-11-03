<?php


ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = $_POST['email'];
$to = "contacto@solucionesrp.com.mx";
$subject = utf8_decode($_POST['subject']);
$message = utf8_decode($_POST['message']."\n".$_POST['name']);
$headers = "From:" . $from;

$mandar = mail($to,$subject,$message, $headers);

if($mandar){
    die( 'Mensaje enviado!');
}

else{

    die( 'Ocurrio un error.');
    
} 
 
?>


