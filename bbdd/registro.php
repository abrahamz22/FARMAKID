<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaUsuarios.php");
    session_start();
    unset($_SESSION['mensajeError']);
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $cp= $_POST["cp"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];
    $contrasenaComp = $_POST["confirm"];
    $rol = "usuario";
    $mensajeError = "";
    $compFormularios = true;
    $idUsuario = "";
?>
<?php
    resgistrarse($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$contrasenaComp,$dni,$idUsuario,$rol,$mensajeError,$conexion);
    echo $_SESSION["mensajeError"];
    echo $compFormularios ? "true" : "false";
    header("location: ../registrate.php");
?>