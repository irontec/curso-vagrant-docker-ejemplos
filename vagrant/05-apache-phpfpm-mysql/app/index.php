<?php
echo "Hola php<br>";

$enlace =  mysqli_connect('192.168.0.102', 'root', '1234');
if (!$enlace) {
    die('No pudo conectarse');
}
echo 'Conectado satisfactoriamente';
mysqli_close($enlace);