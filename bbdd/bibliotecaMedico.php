<?php
include("connexionBaseDeDatos.php");
include("bibliotecaUsuarios.php");
session_start();
?>

<?php
//COMPROBACIÓN NUM COLEGIADO
function comprobacionNumColegiado($compFormularios, $numColegiado, &$mensajeError){
        $compFormularios = isVariableVacia($compFormularios, $numColegiado,"Número de colegiado", $mensajeError);
        $compFormularios = comprobacionLengthIgual($compFormularios,$numColegiado, "Número de colegiado", 9,$mensajeError);
        return $compFormularios;
} 

//CREAR ID MEDICO
function asignarIdMedico($conexion){
    $query = "SELECT * FROM medico ORDER BY CAST(SUBSTRING(id, 2) AS UNSIGNED);";
    $sql = mysqli_query($conexion,$query);
    $cont = 1;
    $newId = 1;
    $idAsignada = false;
    while($row = mysqli_fetch_assoc($sql)){
        $numId = substr($row["id"], 1); 
        if($numId != $cont){
            $newId = "m" . $cont;
            $idAsignada = true;
        }
            $cont++;
    }
    if(!$idAsignada){
        $newId = "m" . (mysqli_num_rows($sql) + 1);
    }
        return $newId;
    }
//QUERY INSERTAR MEDICO
function insertarMedico($compFormularios,$id,$nombre,$apellido,$especialidad,$numColegiado,$email,$telefono ,$conexion){
    $consultaUsuario = "INSERT INTO `medico`(`id`, `nombre`, `apellidos`, `especialidad`, `numeroColegiado`, `email`, `telefono`) VALUES ('".$id."','".$nombre."','".$apellido."','".$especialidad."','".$numColegiado."','".$email."','".$telefono."');";
     if($compFormularios){
        unset($_SESSION['mensajeError']);
        mysqli_query($conexion, $consultaUsuario);
        $_SESSION["ExitoRegistro"] = "El resgitro fue realizado con exito.";
        }
    }


    //FUNCION PARA AÑADIR MÉDICO
    function anadirMedico($compFormularios, $nombre,$apellido,$especialidad,$numColegiado,$telefono,$email,&$mensajeError,$conexion){
        $nombre = strtolower($nombre);
        $nombre = ucwords($nombre);
        $apellido = strtolower($apellido);
        $apellido = ucwords($apellido);
    
    
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre",50,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre
        $compFormularios = vacioLenghtmasCaracteres($compFormularios, $apellido, "apellidos",100,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//apellido
        $compFormularios = comprobacionNumColegiado($compFormularios, $numColegiado, $mensajeError);
        $compFormularios = comprobacionTelf($compFormularios, $telefono, $mensajeError);
        $compFormularios = comprobacionEmail($compFormularios, $email, $mensajeError);
        $id = asignarIdMedico($conexion);
        if($compFormularios){
            insertarMedico($compFormularios,$id,$nombre,$apellido,$especialidad,$numColegiado,$email,$telefono ,$conexion);
        }
        unset($_SESSION['mensajeError']);
        if(!empty($mensajeError)){
            $_SESSION["mensajeError"] = $mensajeError;
        }
    }

        //FUNCIÓN PARA ELIMINAR MEDICO
        function eliminarMedico($comprobacion, $id, $conexion){
            if($comprobacion){
                $query = "DELETE FROM medico WHERE id LIKE '" .$id. "';";
                mysqli_query($conexion, $query);
                $_SESSION["ExitoRegistro"] = "El especialista con la id " . $id . " fue eliminado exitosamente.";
                unset($_SESSION['mensajeError']);
            }
        }

    //MODIFICAR MEDICO
    function modificarMedico($compFormularios,$nombre,$apellido,$especialidad,$numColegiado,$telefono,$email,$id,$conexion){
        if($compFormularios){
            $query = "UPDATE medico SET nombre='".$nombre."', apellidos='".$apellido."', especialidad='".$especialidad."', numeroColegiado='".$numColegiado."', telefono='".$telefono."', email='".$email."' WHERE id LIKE '".$id."';";
            mysqli_query($conexion, $query);
            $_SESSION["ExitoRegistro"] = "El especialista con la id " . $id . " fue modificado exitosamente.";
        }
    }

        //MODIFICAR USUARIO DE LA TABLA
        function modificarTablaMedico($compFormularios, $nombre,$apellido,$especialidad,$numColegiado,$telefono,$email,$id,&$mensajeError,$conexion){
            $nombre = strtolower($nombre);
            $nombre = ucwords($nombre);
            $apellido = strtolower($apellido);
            $apellido = ucwords($apellido);
        
        
            $compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre",50,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//nombre
            $compFormularios = vacioLenghtmasCaracteres($compFormularios, $apellido, "apellidos",100,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);//apellido
            $compFormularios = comprobacionNumColegiado($compFormularios, $numColegiado, $mensajeError);
            $compFormularios = comprobacionTelf($compFormularios, $telefono, $mensajeError);
            $compFormularios = comprobacionEmail($compFormularios, $email, $mensajeError);
            if($compFormularios){
                modificarMedico($compFormularios,$nombre,$apellido,$especialidad,$numColegiado,$telefono,$email,$id,$conexion);
            }
            unset($_SESSION['mensajeError']);
            if(!empty($mensajeError)){
                $_SESSION["mensajeError"] = $mensajeError;
            }
        }

?>