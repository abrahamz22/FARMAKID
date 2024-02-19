<?php
        include("connexionBaseDeDatos.php");
        include("bibliotecaMedicamento.php");
        unset($_SESSION['mensajeError']);
        unset($_SESSION['ExitoRegistro']);
        $nombre = $_POST["nombreMod"];
        $principiosActivos = $_POST["principiosMod"];
        $precio = $_POST["precioMod"];
        $smile = $_POST["smilesMod"];
        $estado = $_POST["estadoMod"];
        $nombreFichero= $_POST["nombreFicheroMod"];
        $extension= $_POST["tipoFicheroMod"];
        $fecha = $_POST["fechaMod"];
        $stock = $_POST["stockMod"];
        $inchi= $_POST["inchiMod"];
        $idMedicamento = $_POST["idMod"];
        $compFormularios = true;
?>

<?php
modificarMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado, $nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento,$conexion);
header("location: ../tablaMedicamentos.php");
?>