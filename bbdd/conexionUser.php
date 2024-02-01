<?php
    include("connexionBaseDeDatos.php");
    session_start();
    $usuarioLocal = $_POST["usuario"];
    $consultaUsuario = "SELECT * FROM `usuario` WHERE usuario LIKE \"$usuarioLocal\"";
    $resultado = mysqli_query($conexion, $consultaUsuario);
    if(mysqli_num_rows($resultado) > 0){
        $row = mysqli_fetch_assoc($resultado);
        echo  "Bienvenido " . $row['usuario'];
    }else{
        echo  "El usuario solicitado no existe";
    }
    echo "</br> Consulta utilizada para la busqueda = " . $consultaUsuario;

?>