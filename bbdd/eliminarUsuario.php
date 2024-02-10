<?php 
    include_once("connexionBaseDeDatos.php");
    include_once("bibliotecaUsuarios.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    if(isset($_POST["si"])){
        $comprobacion = true;
    }else{
        $comprobacion = false;
    }
    $id = $_POST["idValueEliminar"];
?>

<?php
    echo $id;
    eliminarUsuario($comprobacion, $id, $conexion);
    header("location: ../tablaUsuario.php");

?>