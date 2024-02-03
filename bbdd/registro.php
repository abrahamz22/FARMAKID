<?php
    include("connexionBaseDeDatos.php");
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
    $_SESSION["mensajeError"] = "";
    $compFormularios = true;
    $compColumnasBbdd = "SELECT * FROM usuario";
    $resultado1 = mysqli_query($conexion,$compColumnasBbdd);
    $numColumnas = mysqli_num_rows($resultado1) + 1;
    $idUsuario = "#". $numColumnas;
    $rol = "usuario";
    $consultaUsuario = "INSERT INTO `usuario`(`codigoPostal`, `nombre`, `apellidos`, `email`, `usuario`, `telefono`, `contrasena`, `dni`, `idUsuario`, `rol`) VALUES ('".$cp."','".$nombre."','".$apellido."','".$email."','".$usuario."','".$telefono."','".$contrasena."','".$dni."','".$idUsuario."','".$rol."');";
?>

<?php 
    //COMPROBACIONES NOMBRE
    if(empty($nombre)){
        $_SESSION["mensajeError"] .= "-Introduzca un nombre</br>";
        $compFormularios = false;
    }
    if(strlen($nombre) > 50 && !empty($nombre)){
        $_SESSION["mensajeError"] .= "-El campo nombre no puede superar los 50 caracteres</br>";
        $compFormularios = false;
    }
    if(!ctype_alpha($nombre) && !empty($nombre)){
        $_SESSION["mensajeError"] .= "-El campo nombre no puede contener caracteres numéricos</br>";
        $compFormularios = false;
    }
    //COMPROBACIONES APELLIDOS
    if(empty($apellido)){
        $_SESSION["mensajeError"] .= "-Introduzca sus apellidos</br>";
        $compFormularios = false;
    }
    if(strlen($apellido) > 100 && !empty($apellido)){
        $_SESSION["mensajeError"] .= "-El campo apellidos no puede superar los 100 caracteres</br>";
        $compFormularios = false;
    }
    if(!ctype_alpha($apellido) && !empty($apellido)){
        $_SESSION["mensajeError"] .= "-El campo apellidos no puede contener caracteres numéricos</br>";
        $compFormularios = false;

    }
    //COMPROBACIONES EMAIL
    if(empty($email)){
        $_SESSION["mensajeError"] .= "-Introduzca su correo electrónico</br>";
        $compFormularios = false;
    }
    if(strlen($email) > 100 && !empty($email)){
        $_SESSION["mensajeError"] .= "-El campo email no puede superar los 100 caracteres</br>";
        $compFormularios = false;
    }
    //COMPROBACIONES USUARIO
    if(empty($usuario)){
        $_SESSION["mensajeError"] .= "-Introduzca su usuario</br>";
        $compFormularios = false;
    }
    if(strlen($usuario) > 50 && !empty($usuario)){;
        $_SESSION["mensajeError"] .= "-El campo usuario no puede superar los 50 caracteres</br>";
        $compFormularios = false;
    }
    if (!preg_match('/^[a-zA-Z0-9]+$/', $usuario) && !empty($usuario)) {
        $_SESSION["mensajeError"] .= "-El campo usuario no puede contener espacios o caracteres especiales</br>";
        $compFormularios = false;
    } 
    //COMPROBACIONES CP
    if(empty($cp)){
        $_SESSION["mensajeError"] .= "-Introduzca su código postal</br>";
        $compFormularios = false;
    }
    if(strlen($cp) != 5 && !empty($cp)){
        $_SESSION["mensajeError"] .= "-El código postal debe ser de 5 dígitos</br>";
        $compFormularios = false;
    }
    //COMPROBACIONES DNI
    if(empty($dni)){
        $_SESSION["mensajeError"] .= "-Introduzca su dni</br>";
        $compFormularios = false;
    }
    if (!preg_match('/^\d{8}[a-zA-Z]$/', $dni) && !empty($dni)) {
        $_SESSION["mensajeError"] .= "-El dni debe contener 8 letras y una letra al final";
        $compFormularios = false;
    }
    //COMPROBACIONES TELEFONO
    if(empty($telefono)){
        $_SESSION["mensajeError"] .= "-Introduzca un número de teléfono</br>";
        $compFormularios = false;
    }
    if(strlen($telefono) != 9 && !empty($telefono)){
        $_SESSION["mensajeError"] .= "-El número de teléfono debe ser de 9 dígitos</br>";
        $compFormularios = false;
    }
    //COMPROBACIONES CONTRASEÑA
    if(empty($contrasena)){
        $_SESSION["mensajeError"] .= "-Introduzca una contraseña</br>";
        $compFormularios = false;
    }
    if (strpos($contrasena, ' ') !== false) {
        echo "La contraseña no puede contener espacios.";
        $compFormularios = false;
    }
    if(strlen($contrasena) > 50 && !empty($contrasena)){
        $_SESSION["mensajeError"] .= "-El campo contraseña no puede superar los 50 caracteres</br>";
        $compFormularios = false;
    }
    if($contrasena != $contrasenaComp && !empty($contrasena)){
        $_SESSION["mensajeError"] .= "-La comprobación de la contraseña y la contraseña no coinciden</br>";
        $compFormularios = false;
    }
    header("location: ../registrate.php");
   if($compFormularios){
        $_SESSION["ExitoRegistro"] = "INSERT INTO `usuario`(`codigoPostal`, `nombre`, `apellidos`, `email`, `usuario`, `telefono`, `contrasena`, `dni`, `idUsuario`, `rol`) VALUES ('".$cp."','".$nombre."','".$apellido."','".$email."','".$usuario."','".$telefono."','".$contrasena."','".$dni."','".$idUsuario."','".$rol."');";
        unset($_SESSION['mensajeError']);
        mysqli_query($conexion, $consultaUsuario);
        $_SESSION["ExitoRegistro"] = "El resgitro fue realizado con exito." . $idUsuario;
    }



?>