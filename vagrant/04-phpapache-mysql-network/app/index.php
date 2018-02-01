<?php
echo "Hola mundo<br>";

$enlace =  mysqli_connect('192.168.0.101', 'root', '1234');
if (!$enlace) {
    die('No pudo conectarse');
}
echo 'Conectado satisfactoriamente';
mysqli_close($enlace);