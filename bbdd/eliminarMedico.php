<?php
    include_once("connexionBaseDeDatos.php");
    include("bibliotecaMedico.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    if(isset($_POST["si"])){
        $comprobacion = true;
    }else{
        $comprobacion = false;
    }
    $id = $_POST["idValueEliminar"];
    eliminarMedico($comprobacion, $id, $conexion);
    header("location: ../tablaMedico.php");
?>