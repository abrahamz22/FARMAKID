<?php
    include_once("connexionBaseDeDatos.php");
    include("bibliotecaMedicamento.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    if(isset($_POST["si"])){
        $comprobacion = true;
    }else{
        $comprobacion = false;
    }
    $id = $_POST["idValueEliminar"];
    eliminarMedicamento($comprobacion, $id, $conexion);
    header("location: ../tablaMedicamentos.php");
?>