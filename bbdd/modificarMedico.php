<?php
        include("connexionBaseDeDatos.php");
        include("bibliotecaMedico.php");
        unset($_SESSION['mensajeError']);
        unset($_SESSION['ExitoRegistro']);
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellidos"];
        $especialidad = $_POST["especialidad"];
        $numColegiado = $_POST["numColegiado"];
        $telefono= $_POST["telefono"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $mensajeError = "";
        $compFormularios = true;
        $id = $_POST["id"];
?>

<?php
modificarTablaMedico($compFormularios, $nombre,$apellido,$especialidad,$numColegiado,$telefono,$email,$id,$mensajeError,$conexion);
header("location: ../tablaMedico.php")

?>