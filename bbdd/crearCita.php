<?php
include_once("connexionBaseDeDatos.php");
include("bibliotecaUsuarios.php");
session_start();
unset($_SESSION['mensajeError']);
unset($_SESSION['ExitoRegistro']);
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$hora1 = $_POST["hora1"];
$hora2 = $_POST["hora2"];
$motivo = $_POST["motivo"];
$compFormularios = true;
$mensajeError = "";
$idUsuario = "";
$idMedico = "";
?>

<?php

$nombre = strtolower($nombre);
$nombre = ucwords($nombre);
$compFormularios = vacioLenghtmasCaracteres($compFormularios, $nombre, "nombre",50,"/^[A-Za-z ]+$/","caracteres especiales o caracteres númericos",$mensajeError);
if(!empty($mensajeError)){
    $_SESSION['mensajeError'] = $mensajeError;
}
$usuario = $_SESSION["usuario"];
$query = "SELECT  idUsuario FROM usuario WHERE nombre LIKE '".$usuario."'";
$sql = mysqli_query($conexion, $query);
while($row = mysqli_fetch_assoc($sql)){
    $idUsuario = $row["idUsuario"];
}
$query2 = "SELECT  id FROM medico ORDER BY RAND() LIMIT 1;";
$sql2 = mysqli_query($conexion, $query2);
while($row2 = mysqli_fetch_assoc($sql2)){
    $idMedico = $row2["id"];
}
$compFormularios= isVariableVacia($compFormularios,$hora1, "desde cuando está disponible", $mensajeError);
$compFormularios= isVariableVacia($compFormularios,$hora2, "hasta cuando está disponible", $mensajeError);
$compFormularios = comprobacionEmail($compFormularios, $email, $mensajeError);
function fechaAleatoria() {
    // Obtener la fecha de mañana
    $manana = strtotime('+1 day');

    // Obtener la fecha dentro de dos años
    $dosAniosFuturo = strtotime('+1 years');

    // Generar una fecha aleatoria dentro de ese rango
    $fechaAleatoria = mt_rand($manana, $dosAniosFuturo);

    // Formatear la fecha aleatoria en el formato 'Y-m-d H:i:s' (año-mes-día hora:minuto:segundo)
    $fecha = date('Y-m-d', $fechaAleatoria);
    return date('Y-m-d', $fechaAleatoria);
}

$fecha = fechaAleatoria();
$fecha .= " ". $hora1;

$disponibilidad = $hora1 . "-" . $hora2;
// Ejemplo de uso
echo $fecha;
echo $nombre . " ". $hora1." " . $hora2." " . $motivo . " " . $idUsuario . " " . $idMedico . " " . $disponibilidad;
if($compFormularios){
    $query3 = "INSERT INTO `citar`(`doctorId`, `usuarioId`, `observaciones`, `disponibilidad`, `fecha`) VALUES ('".$idMedico ."','".$idUsuario."','".$motivo."','".$disponibilidad."','".$fecha."');";
    mysqli_query($conexion, $query3);
    $_SESSION["ExitoRegistro"] = "La cita fue concertada con exito.";
}

if(!empty($mensajeError)){
    $_SESSION["mensajeError"] = $mensajeError;
}

header("location: ../profesionales.php");
?>