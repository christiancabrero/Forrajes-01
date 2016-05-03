<?php
$email = $_POST['email'];
$url = $_SERVER['HTTP_HOST'];

//Contenido del email
$mensaje = "Necesito información, por favor pónganse en contacto conmigo a la dirección: $email";

//Asunto
$asunto = "Mensaje desde $url";

//Cabeceras de email
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//Dirección del remitente
$headers .= "From: < $email >\r\n";

//Enviamos el mensaje a soportecabrero@gmail.com
$bool = mail("forrajespascual@gmail.com",$asunto,$mensaje,$headers);

if($bool){
	echo '<html style="text-align:center;"><h2>Mensaje enviado correctamente.</h2><a href="index.html">Volver al inicio</a></html>';
}else{
    echo 'Mensaje no enviado, por favor, póngase en contacto manualmente.';
}

?>