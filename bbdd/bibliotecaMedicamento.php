<?php
include("connexionBaseDeDatos.php");
include("bibliotecaUsuarios.php");
session_start();
?>
<?php
    function comprobacionNegativo($compFormularios,$columna,$nombreColumna,&$mensajeError){
        if($columna < 0 && !empty($columna)){
            $mensajeError .= "-El campo " . $nombreColumna . " no puede ser negativo.</br>";
            $compFormularios = false;
        }
        return $compFormularios;
    }
    //COMPROBACION STOCK
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
                $numId = substr($row["id"], 1);
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
 
    //INSERTAR MEDICAMENTO
    function insertarMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado,$nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento, $conexion){
        $consultaUsuario = "INSERT INTO `medicamento`(`inchi`, `smiles`, `estadoMedicamento`, `precio`, `nombre`, `id`, `nombreFichero`, `tiposFichero`, `fecha`, `stock`, `principioActivo`) VALUES ('".$inchi."','".$smile."','".$estado."','".$precio."','".$nombre."','".$idMedicamento."','".$nombreFichero."','".$extension."','".$fecha."','".$stock."','".$principiosActivos."');";
        if($compFormularios){
            unset($_SESSION['mensajeError']);
            mysqli_query($conexion, $consultaUsuario);
            $_SESSION["ExitoRegistro"] = "El resgitro fue realizado con exito.";
        }
    }

    //FUNCIÓN PARA ELIMINAR MEDICO
    function eliminarMedicamento($comprobacion, $id, $conexion){
        if($comprobacion){
            $query = "DELETE FROM medicamento WHERE id LIKE '" .$id. "';";
            mysqli_query($conexion, $query);
            $_SESSION["ExitoRegistro"] = "El medicamento con la id " . $id . " fue eliminado exitosamente.";
            unset($_SESSION['mensajeError']);
        }
    }
    //MODIFICAR MEDICAMENTO
    //MODIFICAR MEDICO
    function modificarMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado, $nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento,$conexion){
        $inchi = "InChI=" . $inchi;
        if($compFormularios){
            $query = "UPDATE `medicamento` SET `inchi`='".$inchi."',`smiles`='".$smile."',`estadoMedicamento`='".$estado."',`precio`=".$precio.",`nombre`='".$nombre."',`nombreFichero`='".$nombreFichero."',`tiposFichero`='".$extension."',`fecha`='".$fecha."',`stock`=".$stock.",`principioActivo`='".$principiosActivos."' WHERE id LIKE '".$idMedicamento."'";
            echo $query;
            mysqli_query($conexion, $query);
            $_SESSION["ExitoRegistro"] = "El medicamento con la id " . $idMedicamento . " fue modificado exitosamente.";
        }
    }
    //MODIFICAR  TABLA MEDICAMENTO
   function modificarTablaMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado, $nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento,&$mensajeError,$conexion){
    $nombre = strtolower($nombre);
    $principiosActivos = strtolower($principiosActivos);
    $nombreFichero = strtolower($nombreFichero);
    $extension = strtolower($extension);

    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre del medicamento",150,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre;
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $principiosActivos , "principios activos",300,"/^[a-zA-Z, ]+$/","caracteres númericos o caracteres especiales",$mensajeError);
    $compFormularios = isVariableVacia($compFormularios,$precio, "precio", $mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $smile, "smile",100,"/^[A-Za-z0-9()\[\]\/\\=@#%*+-.,:;$\?!&\'_~<>{}\|^]+$/","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombreFichero, "nombre del fichero",100,"/\.[a-zA-Z]+$/","otro tipo de nombre que no acabe con su extensión(ej= ficheroEjemplo.smi)",$mensajeError);//nombre;
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $extension, "extensión del archivo",10,"/^\./","un comienzo que no sea un \".\"",$mensajeError);//apellido
    $compFormularios = isVariableVacia($compFormularios,$fecha, "fecha", $mensajeError);
    $compFormularios = comprobracionStock($compFormularios,$stock,"stock",$mensajeError);
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $inchi, "inchi",200,"/^[A-Za-z0-9()\[\]\/\\=@#%*+-.,:;$\?!&\'_~<>{}\|^]+$/","otro tipo de caracter que no sea númerico,especial o letra",$mensajeError);//apellido
    $inchi = "InChI=" . $inchi;
    if($compFormularios){
        insertarMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado,$nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento, $conexion);
    }
    unset($_SESSION['mensajeError']);
    if(!empty($mensajeError)){
        $_SESSION["mensajeError"] = $mensajeError;
    }
}


   //AÑADIR MEDICAMENTO
   function anadirMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado, $nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento,&$mensajeError,$conexion){
    $nombre = strtolower($nombre);
    $principiosActivos = strtolower($principiosActivos);
    $nombreFichero = strtolower($nombreFichero);
    $extension = strtolower($extension);

    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre del medicamento",150,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre;
    $compFormularios = vacioLenghtmasCaracteres($compFormularios, $principiosActivos , "principios activos",300,"/^[a-zA-Z, ]+$/","caracteres númericos o caracteres especiales",$mensajeError);
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
        insertarMedicamento($compFormularios,$nombre,$principiosActivos,$precio,$smile,$estado,$nombreFichero,$extension, $fecha, $stock, $inchi, $idMedicamento, $conexion);
    }
    unset($_SESSION['mensajeError']);
    if(!empty($mensajeError)){
        $_SESSION["mensajeError"] = $mensajeError;
    }
}
?>