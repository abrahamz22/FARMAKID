<?php
    include("connexionBaseDeDatos.php");
    session_start();
    unset($_SESSION['mensajeError']);
?>

<?php 
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $cp= $_POST["cp"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];
    $_SESSION["mensajeError"] = "";

    echo $nombre . " " . $apellido . " " . $email . " " . $usuario . " " . $cp . " " . $dni . " " . $telefono . " " . $contrasena;
    //COMPROBACIONES NOMBRE
    if(empty($nombre)){
        $_SESSION["mensajeError"] .= "-Introduzca un nombre</br>";
    }
    if(strlen($nombre) > 50 && empty($nombre)){
        header("location: ../registrate.php");
        $_SESSION["mensajeError"] .= "-El campo nombre no puede superar los 50 caracteres</br>";
    }
    if(!ctype_alpha($nombre) && empty($nombre)){
        header("location: ../registrate.php");
        $_SESSION["mensajeError"] .= "-El campo nombre no puede contener caracteres numéricos</br>";
    }
    //COMPROBACIONES APELLIDOS
    if(empty($apellido)){
        header("location: ../registrate.php");
        $_SESSION["mensajeError"] .= "-Introduzca sus apellidos</br>";
    }
    if(strlen($apellido) > 100){
        header("location: ../registrate.php");
        $_SESSION["mensajeError"] .= "-El campo apellidos no puede superar los 100 caracteres</br>";
    }
    if(!ctype_alpha($apellido)){
        header("location: ../registrate.php");
        $_SESSION["mensajeError"] .= "-El campo apellidos no puede contener caracteres numéricos</br>";
    }

?>