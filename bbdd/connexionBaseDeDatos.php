<?php
$host = "localhost";//
$database = "bbddpharmakid";//pongo el nombre de la base de datos
$user = "pharmaKid";//mi usuario
$password = "12345678";//mi contraseña de la base de datos
$conexion = mysqli_connect($host, $user, $password,$database);

if (!$conexion) die("No ha podido realizarse la conexión".mysqli_connect_error());//si no la concexion no es posible, sale ujn mensaje de no se ha podido conectar
else 
    echo "<script>alert('base de datos conectada')</script>"
?>
