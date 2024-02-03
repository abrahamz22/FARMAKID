<?php
    include("connexionBaseDeDatos.php");
    session_start();
    $usuario = $_POST["usuario"];//variable loggin usuario
    $contrasena = $_POST["contrasena"];//variable loggin crontraseña
    $consultaUsuario = "SELECT * FROM `usuario` WHERE usuario LIKE \"$usuario\"";//bsucamos en la tabla usuario algun usuario que coincida con las busqueda del formulario loggin
    $resultado = mysqli_query($conexion, $consultaUsuario);//realizamos la query con la variable conexion que contiene $host, $user, $password,$database y la query anterior
    if(mysqli_num_rows($resultado) > 0){//si las columnas son mayores a 0 significa que la busqueda tiene resultados
        $row = mysqli_fetch_assoc($resultado);//asociamos esa columna a una variable
        if($contrasena == $row["contrasena"]){//si la contraseña es correcta
            $_SESSION["usuario"] = $row['usuario'];//creamos variable usuario de sesion con el usario encontrado
            $_SESSION["rol"] = $row['rol'];//creo la variable rol  y le asigno el valor de la columna que tiene los roles en la BD
            if($row["rol"] == "administrador"){//si se trata de un administrador
                header("location: ../administrador.php");//redirigimos a administrador
            }else if($row["rol"] == "editor"){//si se trata de un editor
                header("location: ../editor.php");;//redirigimos a editor
            }else{//si se trata de un usuario
                header("location: ../usuario.php");//redirigimos a usuario
            }
        }else{// si la contraseña es incorrecta
            header("location: ../loggin.php");//volvemos a loggin
            $_SESSION["mensajeError"] = "La contraseña proporcionada es incorrecta";//mensaje error contraseña
        }
    }else{//si el usuario es incorrecto
         header("location: ../loggin.php");//volvemos a loggin
         $_SESSION["mensajeError"] = "El usuario insertado no existe";//mensaje error usuario
        
    }
?>