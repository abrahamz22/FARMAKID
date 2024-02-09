<?php
    include("connexionBaseDeDatos.php");
    session_start();
    unset($_SESSION['mensajeError']);
    $nombre = ucwords($_POST["nombre"]);
    $apellido = ucwords($_POST["apellido"]);
    $email = $_POST["email"];
    $usuario = strtolower($_POST["usuario"]);
    $cp= $_POST["cp"];
    $dni = $_POST["dni"];
    $ultimoCaracter = substr($dni, -1);  // Obtener el último carácter
    $restoCadena = substr($dni, 0, -1);   // Obtener todos los caracteres excepto el último
    $dni = $restoCadena . strtolower($ultimoCaracter);  // Concatenar el último carácter en minúsculas
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];
    $contrasenaComp = $_POST["confirm"];
    $rol = "usuario";
    $mensajeError = "";
    $compFormularios = true;
    $compColumnasBbdd = "SELECT * FROM usuario";
    $resultado1 = mysqli_query($conexion,$compColumnasBbdd);
    $idUsuario = "";
    $consultaCompNom = "SELECT usuario FROM usuario WHERE usuario LIKE '".$usuario."';";
    $resultado2 = mysqli_query($conexion,$consultaCompNom);
?>
<?php 
    //COMPROBACIONES VARIABLE VACÍA
    function isVariableVacia($compFormularios,$columna, $nombreColumna, &$mensajeError){
        if(empty($columna)){
            $mensajeError  .= "-Introduzca " . $nombreColumna .".</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACION LONGITUD MAYOR QUE
    function comprobacionLengthMayor($compFormularios,$columna, $nombreColumna, $length,&$mensajeError){
        if(strlen($columna) > $length && !empty($columna)){
            $mensajeError .= "-El campo ". $nombreColumna ." no puede superar los ". $length ." caracteres.</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACIÓN IGUAL A
    function comprobacionLengthIgual($compFormularios,$columna, $nombreColumna, $length,&$mensajeError){
        if(strlen($columna) != $length && !empty($columna)){
            $mensajeError .= "-El campo ". $nombreColumna ." debe de tener ". $length ." caracteres.</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACION CARACTERES
    function compCaracteres($compFormularios,$columna, $nombreColumna, $caracteres,$nomComprobacion ,&$mensajeError){
        if(!preg_match($caracteres, $columna)  && !empty($columna)){
            $mensajeError .= "-El campo ". $nombreColumna ." no puede contener " .$nomComprobacion.".</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACION EN LA BASE DE DATOS DEL USUARIO
    function compUsuarioBbdd($compFormularios,$columna, $query, &$mensajeError){
        if(mysqli_num_rows($query) > 0){
            $mensajeError .= "-Ya existe un usuario con el nick ".$columna.".</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACIÓN ESPACIOS
    function compEspacios($compFormularios,$columna, &$mensajeError){
        if (strpos($columna, ' ') !== false) {
            $mensajeError .= "-La contraseña no puede contener espacios." . "</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACIÓN DE DOS VARIABLES
    function comp2Var($compFormularios,$columna,$columna2, $nombreColumna, &$mensajeError){
        if($columna != $columna2 && !empty($columna)){
            $mensajeError .= "-La comprobación de la ".$nombreColumna." no coincide.</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACIÓN DEL NOMBRE
    function comprobacionNombre($compFormularios, $nombre, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $nombre,"nombre", $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $nombre, "nombre", 50, $mensajeError);
        $compFormularios = compCaracteres($compFormularios, $nombre, "nombre", "/^[A-Za-z ]+$/" ,"caracteres especiales o caracteres númericos",$mensajeError);
        return $compFormularios;
    }
    //COMPROBACIÓN DE LOS APELLIDOS
    function comprobacionApellido($compFormularios, $apellido, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $apellido,"apellidos", $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $apellido, "apellidos", 100, $mensajeError);
        $compFormularios = compCaracteres($compFormularios, $apellido, "apellidos", "/^[A-Za-z ]+$/" ,"caracteres especiales o caracteres númericos",$mensajeError);
        return $compFormularios;
    }
    //COMPROBACIÓN EMAIL
    function comprobacionEmail($compFormularios, $email, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $email,"email", $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $email, "email", 100, $mensajeError);
        return $compFormularios;
    }
    //COMPROBACION USUARIO
    function comprobacionUsuario($compFormularios, $usuario, $query, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $usuario,"usuario", $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $usuario, "usuario", 50, $mensajeError);
        $compFormularios = compCaracteres($compFormularios, $usuario, "usuario", '/^[a-zA-Z0-9]+$/' ,"espacios o caracteres especiales",$mensajeError);
        $compFormularios = compUsuarioBbdd($compFormularios,$usuario, $query, $mensajeError);
        return $compFormularios;
    }
    //COMPROBACIÓN CP
    function comprobacionCp($compFormularios, $cp, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $cp,"cp", $mensajeError);
        $compFormularios = comprobacionLengthIgual($compFormularios,$cp, "cp", 5,$mensajeError);
        return $compFormularios;
    }
    //COMPROBACIÓN DNI
    function comprobacionDni($compFormularios, $dni, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $dni,"dni", $mensajeError);
        $compFormularios = compCaracteres($compFormularios, $dni, "dni", '/^\d{8}[a-zA-Z]$/' ," menos o más de 9 cracteres y debe de tener una letra al final",$mensajeError);
        return $compFormularios;
    }
    //COMPROBACIÓN TELÉFONO
    function comprobacionTelf($compFormularios, $telefono, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $telefono,"teléfono", $mensajeError);
        $compFormularios = comprobacionLengthIgual($compFormularios,$telefono, "teléfono", 9,$mensajeError);
        return $compFormularios;
    } 
    //COMPROBACIÓN CONTRASEÑA
    function comprobacionContrasena($compFormularios, $contrasena, $contrasenaComp,&$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $contrasena,"contraseña", $mensajeError);
        $compFormularios = compEspacios($compFormularios,$contrasena, $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $contrasena, "contraseña", 50, $mensajeError);
        $compFormularios = comp2Var($compFormularios,$contrasena,$contrasenaComp, "contraseña", $mensajeError);
        return $compFormularios;
    } 
    //CREAR ID USUARIO
    function asignarIdUsuario($query){
        $cont = 1;
        $newId = 1;
        $idAsignada = false;
        while($row = mysqli_fetch_assoc($query)){
            $numId = substr($row["idUsuario"], -1); 
            echo $numId;
            if($numId != $cont){
                $newId = "#" . $cont;
                $idAsignada = true;
            }
            $cont++;
        }
        if(!$idAsignada){
            $newId = "#" . (mysqli_num_rows($query) + 1);
        }
        return $newId;
    }
    //QUERY INSERTAR USUARIO
    function insertarUsuario($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$idUsuario,$rol,$conexion){
        $consultaUsuario = "INSERT INTO `usuario`(`codigoPostal`, `nombre`, `apellidos`, `email`, `usuario`, `telefono`, `contrasena`, `dni`, `idUsuario`, `rol`) VALUES ('".$cp."','".$nombre."','".$apellido."','".$email."','".$usuario."','".$telefono."','".$contrasena."','".$dni."','".$idUsuario."','".$rol."');";
        if($compFormularios){
            unset($_SESSION['mensajeError']);
            mysqli_query($conexion, $consultaUsuario);
            $_SESSION["ExitoRegistro"] = "El resgitro fue realizado con exito.";
        }
    }
    $compFormularios = comprobacionNombre($compFormularios, $nombre, $mensajeError);
    $compFormularios = comprobacionApellido($compFormularios, $apellido, $mensajeError);
    $compFormularios = comprobacionEmail($compFormularios, $email, $mensajeError);
    $compFormularios = comprobacionUsuario($compFormularios, $usuario, $resultado2,$mensajeError);
    $compFormularios = comprobacionCp($compFormularios, $cp, $mensajeError);
    $compFormularios = comprobacionDni($compFormularios, $dni, $mensajeError);
    $compFormularios = comprobacionTelf($compFormularios, $telefono, $mensajeError);
    $compFormularios = comprobacionContrasena($compFormularios, $contrasena,$contrasenaComp, $mensajeError);
    $idUsuario = asignarIdUsuario($resultado1);
    $_SESSION["mensajeError"] = $mensajeError;
    insertarUsuario($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$idUsuario,$rol,$conexion);

    echo $_SESSION["mensajeError"];
    echo $compFormularios ? "true" : "false";
    header("location: ../registrate.php");
?>