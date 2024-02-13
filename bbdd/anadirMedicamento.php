<?php
    include("connexionBaseDeDatos.php");
    include("bibliotecaUsuarios.php");
    session_start();
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $smile = $_POST["smiles"];
    $estado = $_POST["estado"];
    $nombreFichero= $_POST["nombreFichero"];
    $fecha = $_POST["fecha"];
    $inchi= $_POST["inchi"];
    $mensajeError = "";
    $compFormularios = true;
    $idMedicamento = "";
?>

<?php
    echo "nombre:". $nombre . " precio:" . $precio. " smiles:" . $smile . " estado:" . $estado . " nombre del ficher:" . $nombreFichero . " fecha:" . $fecha . " ichi:" . $inchi;
    $nombre = strtolower($nombre);
    $nombre = ucwords($nombre);
    $compFormularios = isVariableVacia($compFormularios,$precio, "precio", $mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre del medicamento",150,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre;
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $inchi, "inchi",200,"/^[A-Za-z0-9\(\)\[\]\/\\\:]+$/u","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $smile, "smile",100,"/^[A-Za-z0-9()\[\]\/\\=@#%*+-.,:;$\?!&\'_~<>{}\|^]+$/","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido

    echo "</br>" .$mensajeError;
?>