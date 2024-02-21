<?php
include("connexionBaseDeDatos.php");
include("bibliotecaUsuarios.php");
session_start();
?>
<?php
    //ELIMINAR CITA
     function eliminarCita($comprobacion, $id, $conexion){
         if($comprobacion){
             $query = "DELETE FROM citar WHERE fecha LIKE '" .$id. "';";
             mysqli_query($conexion, $query);
             $_SESSION["ExitoRegistro"] = "La cita con la fecha " . $id . " fue eliminado exitosamente.";
             unset($_SESSION['mensajeError']);
         }
     }
    //INSERTAR CITA
    function insertarCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha, $observaciones,$conexion){
        $disponibilidad = $hora1 . "-" . $hora2;
        $consultaUsuario = "INSERT INTO `citar`(`doctorId`, `usuarioId`, `observaciones`, `disponibilidad`, `fecha`) VALUES ('".$idDoctor."','".$idUsuario."','".$observaciones."','".$disponibilidad."','".$fecha."')";
        if($compFormularios){
            unset($_SESSION['mensajeError']);
            mysqli_query($conexion, $consultaUsuario);
            $_SESSION["ExitoRegistro"] = "La cita fue creada con exito.";
        }
    }
    //COMPROBAR FECHA BBDD
    function comprobarFechaBbdd($compFormularios, $conexion,$fecha, &$mensajeError){
        $fecha = date('Y-m-d H:i:s', strtotime($fecha));
        $query = "SELECT * FROM citar WHERE fecha LIKE '".$fecha."'";
        echo $query;
        echo $fecha;
        $sql = mysqli_query($conexion, $query);
        if(mysqli_num_rows($sql) > 0){
            echo $fecha;
            $mensajeError .= "Ya existe un cita con la fecha " . $fecha;
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBAR FECHA DE LA CITA
    function comprobarFecha($compFormularios,$fecha,$conexion,&$mensajeError){
        $compFormularios = isVariableVacia($compFormularios,$fecha, "fecha", $mensajeError);
        $compFormularios = comprobarFechaBbdd($compFormularios, $conexion,$fecha, $mensajeError);
        return $compFormularios;
    }


    //AÑADIR CITA
   function anadirCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha,&$mensajeError,$observaciones,$conexion){
    $compFormularios = comprobarId($compFormularios,"usuario", "idUsuario",$idUsuario, $conexion ,$mensajeError);
    $compFormularios = comprobarId($compFormularios,"medico", "id",$idDoctor,$conexion,$mensajeError);
    $compFormularios = isVariableVacia($compFormularios,$hora1, "desde cuando", $mensajeError);
    $compFormularios = isVariableVacia($compFormularios,$hora2, "hasta cuando", $mensajeError);
    $compFormularios = comprobarFecha($compFormularios,$fecha,$conexion,$mensajeError);
    if($compFormularios){
        insertarCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha, $observaciones, $conexion);
    }
    unset($_SESSION['mensajeError']);
    if(!empty($mensajeError)){
        $_SESSION["mensajeError"] = $mensajeError;
    }
}
    //MODIFICAR TABLA
    function modificarCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha,&$mensajeError,$observaciones,$fechaAntigua,$conexion){
        $disponibilidad = $hora1 . "-" . $hora2;
        $compFormularios = isVariableVacia($compFormularios,$idUsuario, "id del usuario", $mensajeError);
        $compFormularios = isVariableVacia($compFormularios,$idDoctor, "id del usuario", $mensajeError);
        $compFormularios = compIdBbdd($compFormularios,"medico", "id",$idDoctor,$conexion ,$mensajeError);
        $compFormularios = compIdBbdd($compFormularios,"usuario", "idUsuario",$idUsuario,$conexion ,$mensajeError);
        if($compFormularios){
            $query = "UPDATE `citar` SET `doctorId`='".$idDoctor."',`usuarioId`='".$idUsuario."',`observaciones`='".$observaciones."',`disponibilidad`='".$disponibilidad."',`fecha`='".$fecha."' WHERE fecha LIKE '".$fechaAntigua."'";
            echo $query;
            mysqli_query($conexion, $query);
            $_SESSION["ExitoRegistro"] = "La cita con la fecha  " . $fechaAntigua . " fue modificado exitosamente.";
        }
    }

//MODIFICAR CITA TABLA
    function modificarTablaCitar($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha,$fechaAntigua,&$mensajeError,$observaciones,$conexion){
        $compFormularios = comprobarId($compFormularios,"usuario", "idUsuario",$idUsuario, $conexion ,$mensajeError);
        $compFormularios = comprobarId($compFormularios,"medico", "id",$idDoctor,$conexion,$mensajeError);
        $compFormularios = isVariableVacia($compFormularios,$hora1, "desde cuando", $mensajeError);
        $compFormularios = isVariableVacia($compFormularios,$hora2, "hasta cuando", $mensajeError);
        $compFormularios = comprobarFecha($compFormularios,$fecha,$conexion,$mensajeError);

        if($compFormularios){
            modificarCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha,$mensajeError,$observaciones,$fechaAntigua,$conexion);
        }
        unset($_SESSION['mensajeError']);
        if(!empty($mensajeError)){
            $_SESSION["mensajeError"] = $mensajeError;
        }
    }
?>