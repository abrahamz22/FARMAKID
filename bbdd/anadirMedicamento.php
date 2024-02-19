<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaMedicamento.php");
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    $mensajeError = "";
    $compFormularios = true;
    $nombre = $_POST["nombre"];
    $principiosActivos = $_POST["principiosActivos"];
    $precio = $_POST["precio"];
    $smile = $_POST["smiles"];
    $estado = $_POST["estado"];
    $nombreFichero= $_POST["nombreFichero"];
    $extension= $_POST["tipoFichero"];
    $fecha = $_POST["fecha"];
    $stock = $_POST["stock"];
    $inchi= $_POST["inchi"];
    $idMedicamento = "";
?>

<?php

    echo "nombre:". $nombre . " precio:" . $precio. " smiles:" . $smile . " estado:" . $estado . " nombre del ficher:" . $nombreFichero . " fecha:" . $fecha . " ichi:" . $inchi . " id:" . $idMedicamento;
    echo "</br>" .$mensajeError;

    anadirMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado, $nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento,$mensajeError,$conexion);

    header("location: ../tablaMedicamentos.php");
    
?>