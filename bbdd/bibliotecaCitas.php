<?php
include("connexionBaseDeDatos.php");
include("bibliotecaUsuarios.php");
session_start();
?>
<?php
    //INSERTAR CITA
    function insertarCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha, $conexion){
        $disponibilidad = $hora1 . "-" . $hora2;
        $consultaUsuario = "INSERT INTO `citar`(`doctorId`, `usuarioId`, `observaciones`, `disponibilidad`, `fecha`) VALUES ('".$idDoctor."','".$idUsuario."','','".$disponibilidad."','".$fecha."')";
        if($compFormularios){
            unset($_SESSION['mensajeError']);
            mysqli_query($conexion, $consultaUsuario);
            $_SESSION["ExitoRegistro"] = "La cita fue creada con exito.";
        }
    }

    //AÑADIR CITA
   function anadirCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha,&$mensajeError,$conexion){
    $compFormularios = comprobarId($compFormularios,"usuario", "idUsuario",$idUsuario, $conexion ,$mensajeError);
    $compFormularios = comprobarId($compFormularios,"medico", "id",$idMedicamento,$conexion,$mensajeError);
    $compFormularios = isVariableVacia($compFormularios,$hora1, "desde cuando", $mensajeError);
    $compFormularios = isVariableVacia($compFormularios,$hora2, "hasta cuando", $mensajeError);
    $compFormularios = isVariableVacia($compFormularios,$fecha, "fecha", $mensajeError);
    if($compFormularios){
        insertarCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha, $conexion);
    }
    unset($_SESSION['mensajeError']);
    if(!empty($mensajeError)){
        $_SESSION["mensajeError"] = $mensajeError;
    }
}
?>