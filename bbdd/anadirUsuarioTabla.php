
<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaUsuarios.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $cp= $_POST["cp"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];
    $contrasenaComp = $_POST["confirm"];
    $rol = $_POST["rol"];
    $mensajeError = "";
    $compFormularios = true;
    $idUsuario = "";
?>
<?php
    anadirUsuarioTabla($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$contrasenaComp,$dni,$idUsuario,$rol,$mensajeError,$conexion);
    header("location: ../tablaUsuario.php");
?>