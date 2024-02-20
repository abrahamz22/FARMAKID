<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaCitas.php");
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    $idDoctor = $_POST["idDoctor"];
    $idUsuario = $_POST["idUsuario"];
    $hora1= $_POST["hora1"];
    $hora2 = $_POST["hora2"];
    $fecha = $_POST["fecha"];
    $motivo = $_POST["motivo"];
    $mensajeError = "";
    $compFormularios = true;
?>

<?php

   
anadirCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha,$mensajeError,$conexion);
    header("location: ../tablaCitas.php");
    
?>