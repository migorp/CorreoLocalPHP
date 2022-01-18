<?php

$para = 'miguel@migorp.mig';
$asunto = 'Mi primer correo PHP';
$mensaje = 'Este es mi primer envío de correo con PHP';
$cabecera = 'From: webmaster@migorp.mig';
 
mail($para, $asunto, $mensaje, $cabecera);

?>