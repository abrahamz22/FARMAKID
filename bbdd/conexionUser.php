<?php
    include("connexionBaseDeDatos.php");
    session_start();
    $usuarioLocal = $_POST["usuario"];
    $contrasenaLocal = $_POST["contrasena"];
    $consultaUsuario = "SELECT * FROM `usuario` WHERE usuario LIKE \"$usuarioLocal\"";
    $resultado = mysqli_query($conexion, $consultaUsuario);
    if(mysqli_num_rows($resultado) > 0){
        $row = mysqli_fetch_assoc($resultado);
        if($contrasenaLocal == $row["contrasena"]){
            echo  "Bienvenido " . $row['usuario'];
            $_SESSION["usuario"] = $row['usuario'];
            if($row["rol"] == "administrador"){
                header("Location: ../administrador.php");
            }else if($row["rol"] == "editor"){
                header("Location: ../editor.php");
            }else{
                header("Location: ../usuario.php");
            }
        }else{
            echo  "La contraseña proporcionada es incorrecta";
        }
    }else{
        echo  "El usuario solicitado no existe";
    }
    echo "</br> Consulta utilizada para la busqueda = " . $consultaUsuario;

?>