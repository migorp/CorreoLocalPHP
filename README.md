# CorreoLocalPHP
Formas básicas de enviar correo usando PHP con un servidor local.

## Descripción
Estos archivos fueron subidos con la intención de poder ayudar a nuevos desarrolladores a realizar sus test o pruebas de correo de manera local.

# Instalación
Para poder usar de manera adecuada, cualquiera de los archivos para enviar correo usando PHP con un servidor local, es necesario contar con las siguientes herramientas:
- Un Gestor de Base de Datos.
- Un Servidor de Correo Local (para realizar los tests).
- Un navegador.
- Un Editor de código.

En mi caso utilizo:
Xammp, Visual Studio Code, Firefox y Papercut SMTP.

Desde estos enlaces pueden descargar cada una de las herramientas:
- Xammp: https://www.apachefriends.org/es/index.html.
- Papercut SMTP: https://github.com/ChangemakerStudios/Papercut-SMTP.
- Visual Studio Code: https://code.visualstudio.com/.

# Conceptos Básicos
Para comprender de manera adecuada la estructura de los archivos, es necesario conocer la [Sintaxis de PHP](https://www.php.net/manual/es/function.mail.php), la cual detallamos a continuación:
```php
mail(to, subject, message, headers, parameters);
```
los parámetros son:
- to *(Obligatorio)*: Destinatario o a quien va dirigido el correo. Pueden ser uno o más, separados por coma.
- subject *(Obligatorio)*: Asunto del correo.
- message *(Obligatorio)*: Mensaje dirigido al destinatario.
- headers *(Opcional)*: From (Remitente), Cc (Copia) y Bcc (Copia Oculta).
- parameters *(Opcional)*: Especifica un parámetro adicional para el programa sendmail (el definido en la opción de configuración sendmail_path).

## Archivos
**correo0.php**
Es un archivo que contiene la estructura básica de envío de correo PHP.

**correo1.php**
Es un archivo que contiene la estructura básica de envío de correo PHP, con copia a otro destinatario y la información de mi versión de PHP.

**correo2.php**
Es un archivo que contiene la estructura básica de envío de correo PHP, con copia a otro destinatario.

**correo3.php**
Es un archivo que contiene la estructura básica de envío de correo PHP, con salto de línea.

# Contribuciones
Las contribuciones, sugerencias, dudas, inquietudes relacionadas a este proyecto, son bienvenidas.

## Agradecimiento
- Mi lugar de trabajo: [LanCenter](https://www.facebook.com/LanCenter.ec)
- Mi alma máter: [Uniandes](https://uniandes.edu.ec/)

## Licencia
[DOMINIO PÚBLICO](https://choosealicense.com/licenses/unlicense/)
