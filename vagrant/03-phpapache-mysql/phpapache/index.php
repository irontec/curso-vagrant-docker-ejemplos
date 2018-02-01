<?php
echo "Hola mundo<br>";
$localhostMappingIPAndPort = "10.10.0.180:9936";

$enlace =  mysqli_connect($databaseServerIP, 'root', '1234');
if (!$enlace) {
    die('No pudo conectarse');
}
echo 'Conectado satisfactoriamente';
mysqli_close($enlace);