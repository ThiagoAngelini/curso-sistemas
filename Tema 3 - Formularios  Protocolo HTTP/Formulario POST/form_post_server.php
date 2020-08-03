<?php
    $_REQUEST   ['name'];
    $_REQUEST   ['surname'];
    $_REQUEST   ['gender'];
    $_REQUEST   ['birth'];
    $_REQUEST   ['country'];
    $_REQUEST   ['number'];
    $_REQUEST   ['email'];
    $_REQUEST   ['password'];
    $_REQUEST   ['file'];

?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h2>Mis Datos</h2>
        <p><?php echo "Nombre: ".               $_REQUEST['name'] ?></p>
        <p><?php echo "Apellido: ".             $_REQUEST['surname'] ?></p>
        <p><?php echo "Genero: ".               $_REQUEST['gender'] ?></p>
        <p><?php echo "Fecha de nacimiento: ".  $_REQUEST['birth'] ?></p>
        <p><?php echo "Pais: ".                 $_REQUEST['country'] ?></p>
        <p><?php echo "Codigo postal: ".        $_REQUEST['number'] ?></p>
        <p><?php echo "Correo electrónico: ".   $_REQUEST['email'] ?></p>
        <p><?php echo "Contraseña: ".           $_REQUEST['password'] ?></p>
        <p><?php echo "Archivo: ".              $_REQUEST['file'] ?></p>
       
    </body>
</html>