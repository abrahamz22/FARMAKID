<?php
        include("connexionBaseDeDatos.php");
        include("bibliotecaProteina.php");
        unset($_SESSION['mensajeError']);
        unset($_SESSION['ExitoRegistro']);
        $nombre = $_POST["nombreMod"];
        $especie = $_POST["especieMod"];
        $resolucion = $_POST["resolucionMod"];
        $nombreFichero= $_POST["nombreFicheroMod"];
        $extension= $_POST["tipoFicheroMod"];
        $fecha = $_POST["fechaMod"];
        $metodo = $_POST["metodoMod"];
        $idProteina = $_POST["idMod"];
        $compFormularios = true;
?>

<?php
modificarTablaProteina($compFormularios,$nombre,$especie,$resolucion,$nombreFichero,$extension,$fecha,$metodo,$idProteina,$mensajeError,$conexion);
header("location: ../tablaProteinas.php");
?>