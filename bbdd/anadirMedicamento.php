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
    $extension= $_POST["tipoFichero"];
    $fecha = $_POST["fecha"];
    $inchi= $_POST["inchi"];
    $mensajeError = "";
    $compFormularios = true;
    $idMedicamento = "";
?>

<?php
    //COMPROBACION DE LA EXTENSIÓN
    $nombre = strtolower($nombre);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre del medicamento",150,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre;
    $compFormularios = isVariableVacia($compFormularios,$precio, "precio", $mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $smile, "smile",100,"/^[A-Za-z0-9()\[\]\/\\=@#%*+-.,:;$\?!&\'_~<>{}\|^]+$/","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombreFichero, "nombre del fichero",100,"/\.[a-zA-Z]+$/","otro tipo de nombre que no acabe con su extensión(ej= ficheroEjemplo.smi)",$mensajeError);//nombre;
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $extension, "extensión del archivo",10,"/^\./","un comienzo que no sea un \".\"",$mensajeError);//apellido
    $compFormularios = isVariableVacia($compFormularios,$fecha, "fecha", $mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $inchi, "inchi",200,"/^[A-Za-z0-9\(\)\[\]\/\\\:]+$/u","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido
    $inchi = "InChI=" . $inchi;
    echo "nombre:". $nombre . " precio:" . $precio. " smiles:" . $smile . " estado:" . $estado . " nombre del ficher:" . $nombreFichero . " fecha:" . $fecha . " ichi:" . $inchi;
    echo "</br>" .$mensajeError;
?>