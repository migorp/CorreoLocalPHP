<?php
$para = "miguel@migorp.mig";
$asunto = "Mi tercer correo PHP";
$mensaje = "Este es mi tercer envío de correo con PHP, con copia a otro destinatario";
$cabecera = "From: webmaster@migorp.mig" . "\r\n" .
"CC: soporte@migorp.mig";

mail($para, $asunto, $mensaje, $cabecera);
?> 