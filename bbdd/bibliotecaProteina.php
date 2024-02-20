<?php
include("connexionBaseDeDatos.php");
include("bibliotecaMedicamento.php");
?>


<?php
    //CREAR ID PROTEINA
    function asignarIdProteina($conexion){
        $query = "SELECT * FROM proteina ORDER BY CAST(SUBSTRING(id, 2) AS UNSIGNED);";
        $sql = mysqli_query($conexion,$query);
        $newId = 1;
        $cont = 1;
        $idAsignada = false;
        while($row = mysqli_fetch_assoc($sql)){
            $numId = substr($row["id"], 1);
            if($numId != $cont){
                $newId = "y" . $cont;
                $idAsignada = true;
                break;
            }
            $cont++;
        }
        if(!$idAsignada){
            $newId = "y" . (mysqli_num_rows($sql) + 1);
        }
        return $newId;
    }

    function comprobarNombreProteina($compFormularios,$columna, $nombreColumna,$length, &$mensajeError){
        isVariableVacia($compFormularios,$columna, $nombreColumna, $mensajeError);
        comprobacionLengthMayor($compFormularios,$columna, $nombreColumna, $length,$mensajeError);
        return $compFormularios;
    }
    //INSERTAR PROTEINA
    function insertarProteina($compFormularios,$nombre,$especie,$resolucion,$nombreFichero,$extension,$fecha,$metodo,$idProteina, $conexion){
        $consultaUsuario = "INSERT INTO `proteina`(`especie`, `metodo`, `resolucion`, `nombre`, `id`, `nombreFichero`, `tipoFichero`, `fecha`) VALUES ('".$especie."','".$metodo."','".$resolucion."','".$nombre."','".$idProteina."','".$nombreFichero."','".$extension."','".$fecha."')";
        if($compFormularios){
            unset($_SESSION['mensajeError']);
            mysqli_query($conexion, $consultaUsuario);
            $_SESSION["ExitoRegistro"] = "La proteina fue registrada con exito.";
        }
    }
   //AÑADIR PROTEINA
   function anadirProteina($compFormularios,$nombre,$especie,$resolucion,$nombreFichero,$extension,$fecha,$metodo,$idProteina,&$mensajeError,$conexion){
    $nombre = strtolower($nombre);
    $metodo = strtolower($metodo);
    $especie = strtolower($especie);
    $nombreFichero = strtolower($nombreFichero);
    $extension = strtolower($extension);

    $resolucion .= "  Å";

    $compFormularios = comprobarNombreProteina($compFormularios,$nombre, "nombre",150, $mensajeError);
    $compFormularios = comprobarNombreProteina($compFormularios,$metodo, "método",100, $mensajeError);
    $compFormularios = isVariableVacia($compFormularios,$resolucion, "resolucion", $mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $especie, "especie",150,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombreFichero, "nombre del fichero",100,"/\.[a-zA-Z]+$/","otro tipo de nombre que no acabe con su extensión(ej= ficheroEjemplo.smi)",$mensajeError);//nombre;
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $extension, "extensión del archivo",10,"/^\./","un comienzo que no sea un \".\"",$mensajeError);//apellido
    $compFormularios = isVariableVacia($compFormularios,$fecha, "fecha", $mensajeError);
    $idProteina = asignarIdProteina($conexion);
    if($compFormularios){
        insertarProteina($compFormularios,$nombre,$especie,$resolucion,$nombreFichero,$extension,$fecha,$metodo,$idProteina, $conexion);
    }
    unset($_SESSION['mensajeError']);
    if(!empty($mensajeError)){
        $_SESSION["mensajeError"] = $mensajeError;
    }
}

?>