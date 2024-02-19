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
    $stock = $_POST["stock"];
    $inchi= $_POST["inchi"];
    $idMedicamento = "";
    $mensajeError = "";
    $compFormularios = true;
?>

<?php
    //INSERTAR MEDICAMENTO
    function insertarMedicamento($compFormularios,$nombre, $precio, $smile, $estado,$nombreFichero, $extension,$fecha,$stock,$inchi,$idMedicamento, $conexion){
        $consultaUsuario = "INSERT INTO `medicamento`(`inchi`, `smiles`, `estadoMedicamento`, `precio`, `nombre`, `id`, `nombreFichero`, `tiposFichero`, `fecha`, `stock`) VALUES ('".$inchi."','".$smile."','".$estado."','".$precio."','".$nombre."','".$idMedicamento."','".$nombreFichero."','".$extension."','".$fecha."','".$stock."');";
        if($compFormularios){
            unset($_SESSION['mensajeError']);
            mysqli_query($conexion, $consultaUsuario);
            $_SESSION["ExitoRegistro"] = "El resgitro del medicamento fue realizado con exito.";
        }

    }
    function comprobacionNegativo($compFormularios,$columna,$nombreColumna,&$mensajeError){
        if($columna < 0 && !empty($columna)){
            $mensajeError .= "-El campo " . $nombreColumna . " no puede ser negativo.</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    function comprobracionStock($compFormularios,$stock,$nombreColumna,&$mensajeError){
        $compFormularios = isVariableVacia($compFormularios,$stock, $nombreColumna, $mensajeError);
        $compFormularios = comprobacionNegativo($compFormularios,$stock,$nombreColumna,$mensajeError);
        $compFormularios = comprobacionLengthMayor($compFormularios,$stock, $nombreColumna, 11,$mensajeError);
        return $compFormularios;
    }
    //CREAR ID MEDICAMENTO
    function asignarIdMedicamento($conexion){
        $query = "SELECT * FROM medicamento ORDER BY CAST(SUBSTRING(id, 2) AS UNSIGNED);";
        $sql = mysqli_query($conexion,$query);
        $newId = 1;
        $cont = 1;
        $idAsignada = false;
        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                $numId = substr($row["idUsuario"], 1);
                if($numId != $cont){
                    $newId = "f" . $cont;
                    $idAsignada = true;
                    break;
                }
                $cont++;
            }
            if(!$idAsignada){
                $newId = "f" . (mysqli_num_rows($sql) + 1);
            }
        }else{
            $newId = "f1";
        }
        return $newId;
    }
    $nombre = strtolower($nombre);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre del medicamento",150,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre;
    $compFormularios = isVariableVacia($compFormularios,$precio, "precio", $mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $smile, "smile",100,"/^[A-Za-z0-9()\[\]\/\\=@#%*+-.,:;$\?!&\'_~<>{}\|^]+$/","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombreFichero, "nombre del fichero",100,"/\.[a-zA-Z]+$/","otro tipo de nombre que no acabe con su extensión(ej= ficheroEjemplo.smi)",$mensajeError);//nombre;
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $extension, "extensión del archivo",10,"/^\./","un comienzo que no sea un \".\"",$mensajeError);//apellido
    $compFormularios = isVariableVacia($compFormularios,$fecha, "fecha", $mensajeError);
    $compFormularios = comprobracionStock($compFormularios,$stock,"stock",$mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $inchi, "inchi",200,"/^[A-Za-z0-9()\[\]\/\\=@#%*+-.,:;$\?!&\'_~<>{}\|^]+$/","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido
    $inchi = "InChI=" . $inchi;
    $idMedicamento = asignarIdMedicamento($conexion);
    if($compFormularios){
        insertarMedicamento($compFormularios,$nombre, $precio, $smile, $estado,$nombreFichero, $extension,$fecha,$stock,$inchi,$idMedicamento, $conexion);
    }
    unset($_SESSION['mensajeError']);
    if(!empty($mensajeError)){
        $_SESSION["mensajeError"] = $mensajeError;
    }
    echo "nombre:". $nombre . " precio:" . $precio. " smiles:" . $smile . " estado:" . $estado . " nombre del ficher:" . $nombreFichero . " fecha:" . $fecha . " ichi:" . $inchi . " id:" . $idMedicamento;
    echo "</br>" .$mensajeError;

    header("location: ../tablaMedicamentos.php");
    
?>