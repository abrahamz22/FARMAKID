<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaProteina.php");
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    $mensajeError = "";
    $compFormularios = true;
    $nombre = $_POST["nombre"];
    $especie = $_POST["especie"];
    $resolucion = $_POST["resolucion"];
    $nombreFichero= $_POST["nombreFichero"];
    $extension= $_POST["tipoFichero"];
    $fecha = $_POST["fecha"];
    $metodo = $_POST["metodo"];
    $idProteina = "";
?>

<?php


anadirProteina($compFormularios,$nombre,$especie,$resolucion,$nombreFichero,$extension,$fecha,$metodo,$idProteina,$mensajeError,$conexion);
header("location: ../tablaProteinas.php");

?>