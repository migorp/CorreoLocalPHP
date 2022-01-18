
<?php
$para      = 'miguel@migorp.mig';
$asunto    = 'Mi segundo correo PHP';
$mensaje   = 'Este es mi segundo envío de correo con PHP, con copia a otro destinatario, y la información de mi versión de PHP';
$cabecera = 'From: admin@migorp.mig' . "\r\n" .
    'Reply-To: webmaster@migorp.mig' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $asunto, $mensaje, $cabecera);
?>
