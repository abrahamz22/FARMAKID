<?php
        include("connexionBaseDeDatos.php");
        include("bibliotecaCitas.php");
        unset($_SESSION['mensajeError']);
        unset($_SESSION['ExitoRegistro']);
        $idDoctor = $_POST["idDoctorMod"];
        $idUsuario = $_POST["idUsuarioMod"];
        $observaciones = $_POST["observacionesMod"];
        $hora1= $_POST["hora1Mod"];
        $hora2 = $_POST["hora2Mod"];
        $fecha = $_POST["fechaMod"];
        $fechaAntigua = $_POST["fechaAntigua"];
        $compFormularios = true;
?>

<?php
modificarCita($compFormularios,$idDoctor,$idUsuario,$hora1,$hora2,$fecha,$mensajeError,$observaciones,$fechaAntigua,$conexion);
header("location: ../tablaCitas.php");
?>