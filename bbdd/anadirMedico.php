<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaMedico.php");
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);

    $mensajeError = "";
    $compFormularios = true;

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $especialidad = $_POST["especialidad"];
    $numColegiado = $_POST["numColegiado"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    anadirMedico($compFormularios, $nombre,$apellido,$especialidad,$numColegiado,$telefono,$email,$mensajeError,$conexion);
    header("location: ../tablaMedico.php");
?>