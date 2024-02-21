<?php
    include_once("connexionBaseDeDatos.php");
    include("bibliotecaCitas.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    if(isset($_POST["si"])){
        $comprobacion = true;
    }else{
        $comprobacion = false;
    }
    $id = $_POST["idValueEliminar"];
    eliminarCita($comprobacion, $id, $conexion);
    header("location: ../tablaCitas.php");
?>