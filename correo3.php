<?php

$para = 'miguel@migorp.mig';
$asunto = 'Mi cuarto correo PHP';
$cabecera = 'From: webmaster@migorp.mig';
 
$mensaje = 
"Esto es la primera línea del párrafo"."\r\n".
" \ r \ n son caracteres de final de línea para Windows." ."\r\n".
"\ n es un caracter de final de línea para Linux." ."\r\n".
"Final del párrafo";

mail($para, $asunto, $mensaje, $cabecera);
?> 