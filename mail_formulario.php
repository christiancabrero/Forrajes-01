<?php

//Destinatario
$destinatario = "forrajespascual@gmail.com";

//Contenido del email
$nombre = $_POST['nombre'];

//Asunto
$asunto = $_POST['asunto'];

//Contenido del email
$mensaje = $_POST['mensaje'];

//Cabeceras de email
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//Dirección del remitente
$email = $_POST['email'];
$headers .= "From: $nombre < $email >\r\n";

//Enviamos el mensaje a soportecabrero@gmail.com
$bool = mail($destinatario,$asunto,$mensaje,$headers);

if($bool){
	echo '<html style="text-align:center;"><h2>Mensaje enviado correctamente.</h2><a href="index.html">Volver al inicio</a></html>';
}else{
    echo 'Mensaje no enviado, por favor, póngase en contacto manualmente.';
}

?>