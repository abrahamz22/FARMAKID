<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaUsuarios.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $cp= $_POST["cp"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];
    $rol = $_POST["rol"];
    $mensajeError = "";
    $compFormularios = true;
    $idUsuario = $_POST["id"];
?>
<?php
    $sql = "UPDATE usario SET nombre='".$nombre."', apellidos='".$apellido."', email='".$nombre."', usuario='".$usuario."', telefono='".$telefono."', contrasena='".$contrasena."', dni='".$dni."', rol='".$rol."', cp='".$cp."' WHERE idUsuario LIKE '".$idUsuario."';";
    modificarUsuarioTabla($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$idUsuario,$rol,$mensajeError,$conexion);
    header("location: ../tablaUsuario.php")

?>
