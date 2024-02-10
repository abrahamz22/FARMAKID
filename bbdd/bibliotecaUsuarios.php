<?php
    //CONVERTIR LETRA DE DNI EN MINÚSCULA
    function letraDni($dni){
        $ultimoCaracter = substr($dni, -1);  // Obtener el último carácter
        $restoCadena = substr($dni, 0, -1);   // Obtener todos los caracteres excepto el último
        $dni = $restoCadena . strtolower($ultimoCaracter);
        return $dni;
    }
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
    function compUsuarioBbdd($compFormularios,$columna, $sql, &$mensajeError){
        if(mysqli_num_rows($sql) > 0){
            $mensajeError .= "-Ya existe un usuario con el nick ".$columna.".</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
        //COMPROBACION EN LA BASE DE DATOS DEL USUARIO SIN COMPARAR AL USUARIO MISMA ID
        function compUsuarioBbdd2($compFormularios,$columna, $sql, &$mensajeError){
            while ($row = mysqli_fetch_assoc($sql)) {
                if($row["usuario"] == $columna ){
                    $mensajeError .= "-Ya existe un usuario con el nick ".$columna.".</br>";
                    $compFormularios = false;
                }
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
    //FUNCIÓN COMPROBAR VARIABLE VACÍA, SOBREPASA LENGHT Y COMPROBACIÓN DE CARACTERES
    function vacioLenghtmasCaracteres($compFormularios, $columna, $nombreColumna,$lenght,$patron,$patronError,&$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $columna,$nombreColumna, $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $columna, $nombreColumna, $lenght, $mensajeError);
        $compFormularios = compCaracteres($compFormularios, $columna, $nombreColumna, $patron,$patronError,$mensajeError);
        return $compFormularios;
    }
    //COMPROBACIÓN EMAIL
    function comprobacionEmail($compFormularios, $email, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $email,"email", $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $email, "email", 100, $mensajeError);
        return $compFormularios;
    }
    //COMPROBACION USUARIO
    function comprobacionUsuario($compFormularios, $usuario, $conexion,&$mensajeError){
        $query= "SELECT usuario FROM usuario WHERE usuario LIKE '".$usuario."';";
        $sql = mysqli_query($conexion,$query);
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $usuario, "usuario", 50 ,'/^[a-zA-Z0-9]+$/',"espacios o caracteres especiales",$mensajeError);
        $compFormularios = compUsuarioBbdd($compFormularios,$usuario, $sql, $mensajeError);
        return $compFormularios;
    }
    //COMPROBACION USUARIO CUANDO LO MODIFICAS
       function comprobacionUsuario2($compFormularios, $usuario, $idUsuario,$conexion,&$mensajeError){
        $query= "SELECT * FROM usuario WHERE idUsuario != '".$idUsuario."';";
        $sql = mysqli_query($conexion,$query);
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $usuario, "usuario", 50 ,'/^[a-zA-Z0-9]+$/',"espacios o caracteres especiales",$mensajeError);
        $compFormularios = compUsuarioBbdd2($compFormularios,$usuario, $sql, $mensajeError);
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
    //COMPROBACIÓN CONTRASEÑA SIN COMPARACION VARIABLE
    function comprobacionContrasena2($compFormularios, $contrasena, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $contrasena,"contraseña", $mensajeError);
        $compFormularios = compEspacios($compFormularios,$contrasena, $mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,  $contrasena, "contraseña", 50, $mensajeError);
        return $compFormularios;
    }
    //CREAR ID USUARIO
    function asignarIdUsuario($conexion){
        $query = "SELECT * FROM usuario";
        $sql = mysqli_query($conexion,$query);
        $cont = 1;
        $newId = 1;
        $idAsignada = false;
        while($row = mysqli_fetch_assoc($sql)){
            $numId = substr($row["idUsuario"], -1); 
            if($numId != $cont){
                $newId = "#" . $cont;
                $idAsignada = true;
            }
            $cont++;
        }
        if(!$idAsignada){
            $newId = "#" . (mysqli_num_rows($sql) + 1);
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
    //MODIFICAR USUARIO
    function modificarUsuario($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$rol,$idUsuario,$conexion){
        if($compFormularios){
            $query = "UPDATE usuario SET nombre='".$nombre."', apellidos='".$apellido."', email='".$email."', usuario='".$usuario."', telefono='".$telefono."', contrasena='".$contrasena."', dni='".$dni."', rol='".$rol."', codigoPostal='".$cp."' WHERE idUsuario LIKE '".$idUsuario."';";
            mysqli_query($conexion, $query);
            $_SESSION["ExitoRegistro"] = "El usuario con la id " . $idUsuario . " fue modificado exitosamente.";
        }
    }
    //FUNCIÓN PARA ELIMINAR USUARIO 
    function eliminarUsuario($comprobacion, $id, $conexion){
        if($comprobacion){
            $query = "DELETE FROM usuario WHERE idUsuario LIKE '" .$id. "';";
            mysqli_query($conexion, $query);
            $_SESSION["ExitoRegistro"] = "El usuario con la id " . $id . " fue eliminado exitosamente.";
            unset($_SESSION['mensajeError']);
        }
    }
    //FUNCIÓN PARA REGISTARSE
    function resgistrarse($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$contrasenaComp,$dni,$idUsuario,$rol,&$mensajeError,$conexion){
        $dni = strtolower($dni);
        $usuario = strtolower($usuario);
        $nombre = strtolower($nombre);
        $nombre = ucwords($nombre);
        $apellido = strtolower($apellido);
        $apellido = ucwords($apellido);
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre",50,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $apellido, "apellidos",100,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//apellido
        $compFormularios = comprobacionEmail($compFormularios, $email, $mensajeError);
        $compFormularios = comprobacionUsuario($compFormularios, $usuario, $conexion,$mensajeError);
        $compFormularios = comprobacionCp($compFormularios, $cp, $mensajeError);
        $compFormularios = comprobacionDni($compFormularios, $dni, $mensajeError);
        $compFormularios = comprobacionTelf($compFormularios, $telefono, $mensajeError);
        $compFormularios = comprobacionContrasena($compFormularios, $contrasena,$contrasenaComp, $mensajeError);
        $idUsuario = asignarIdUsuario($conexion);
        $_SESSION["mensajeError"] = $mensajeError;
        insertarUsuario($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$idUsuario,$rol,$conexion);
    }
    //FUNCIÓN AÑADIR USURIO DESDE LA TABLA DE USUARIOS
    function anadirUsuarioTabla($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$contrasenaComp,$dni,$idUsuario,$rol,&$mensajeError,$conexion){
        $dni = strtolower($dni);
        $usuario = strtolower($usuario);
        $nombre = strtolower($nombre);
        $nombre = ucwords($nombre);
        $apellido = strtolower($apellido);
        $apellido = ucwords($apellido);
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre",50,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $apellido, "apellidos",100,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//apellido
        $compFormularios = comprobacionEmail($compFormularios, $email, $mensajeError);
        $compFormularios = comprobacionUsuario($compFormularios, $usuario, $conexion,$mensajeError);
        $compFormularios = comprobacionCp($compFormularios, $cp, $mensajeError);
        $compFormularios = comprobacionDni($compFormularios, $dni, $mensajeError);
        $compFormularios = comprobacionTelf($compFormularios, $telefono, $mensajeError);
        $compFormularios = comprobacionContrasena($compFormularios, $contrasena,$contrasenaComp, $mensajeError);
        $idUsuario = asignarIdUsuario($conexion);
        $_SESSION["mensajeError"] = $mensajeError;
        insertarUsuario($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$idUsuario,$rol,$conexion);
    }
    //FUNCION PARA MODIFICAR UN USUARIO
    function modificarUsuarioTabla($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$idUsuario,$rol,&$mensajeError,$conexion){
        $dni = strtolower($dni);
        $usuario = strtolower($usuario);
        $nombre = strtolower($nombre);
        $nombre = ucwords($nombre);
        $apellido = strtolower($apellido);
        $apellido = ucwords($apellido);
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre",50,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $apellido, "apellidos",100,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//apellido
        $compFormularios = comprobacionEmail($compFormularios, $email, $mensajeError);
        $compFormularios = comprobacionUsuario2($compFormularios, $usuario, $idUsuario,$conexion,$mensajeError);
        $compFormularios = comprobacionCp($compFormularios, $cp, $mensajeError);
        $compFormularios = comprobacionDni($compFormularios, $dni, $mensajeError);
        $compFormularios = comprobacionTelf($compFormularios, $telefono, $mensajeError);
        $compFormularios = comprobacionContrasena2($compFormularios, $contrasena,$mensajeError);
         modificarUsuario($compFormularios, $cp,$nombre,$apellido,$email,$usuario ,$telefono,$contrasena,$dni,$rol,$idUsuario,$conexion);
         $_SESSION["mensajeError"] = $mensajeError;
         if(isset($_SESSION['ExitoRegistro'])){
            unset($_SESSION['mensajeError']);
        }
    }

?>