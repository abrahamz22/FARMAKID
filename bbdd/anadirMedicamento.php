<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaUsuarios.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $smiles = $_POST["smiles"];
    $estado = $_POST["estado"];
    $nombreFichero= $_POST["nombreFichero"];
    $fecha = $_POST["fecha"];
    $inchi= $_POST["inchi"];
    $mensajeError = "";
    $compFormularios = true;
    $idMedicamento = "";


?>

<?php
    echo "nombre:". $nombre . " precio:" . $precio. " smiles:" . $smiles . " estado:" . $estado . " nombre del ficher:" . $nombreFichero . " fecha:" . $fecha . " ichi:" . $inchi;
    $nombre = strtolower($nombre);
    $nombre = ucwords($nombre);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre del medicamento",150,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre;
    

?>