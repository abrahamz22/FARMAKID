<?php
include_once("bbdd/connexionBaseDeDatos.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla citas</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
    <link rel="stylesheet" type="text/css" href="css/tablas.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/tablaCitas.js"></script>
</head>
<body>

<!--HEADER-->
<?php require("footerHeader/header.php")?>

<!--/HEADER-->
<!--/HEADER-->
<!--DIV DE TABLA-->
<div id="divTabla">
    <div class="contenedor-botones">

    <h1>Tabla de citas concertadas</h1>
    <div class="conjunto-buscar-anadir">
        <!-- BOTON DE BUSCAR TABLA USUARIOS -->
        <form action="buscar-cita.php" class="form-busqueda" method="get" name="formu">
            <div class="botones-filtrar" style="display:flex"> 
                <input class="input-busqueda" type="text" name="busqueda"  placeholder="Buscar" />
                <input class="btn-busqueda" type="submit" value="Buscar"/>
            </div>
        </form>

    <!-- BOTON DE BUSCAR TABLA USUARIOS -->
    
    <!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
   <!-- <div style='display:flex'>
       <a href="crear_usuario.php" class="btn_anadir"><i class="fa-solid fa-user-plus"></i>&nbsp CREAR USUARIO</a>
    </div> -->

        <button id="anadirButton">Añadir cita</button>
    </div>
</div>
<!-- DIVS CON LOS MENSAJES DE COMPROBACIÓN -->
<?php if(isset($_SESSION["mensajeError"]))://si el mensaje de error existe?>
        <p id="divError"><?php echo $_SESSION["mensajeError"]//imprimimos?></p>
<?php endif;?>
<?php if(isset($_SESSION["ExitoRegistro"]))://si el mensaje de error existe?>
        <p id="ExitoRegistro"><?php echo $_SESSION["ExitoRegistro"]//imprimimos?></p>
<?php endif;?>
<!-- /DIVS CON LOS MENSAJES DE COMPROBACIÓN -->
<!-- FORMULARIO DE COMPROBACIÓN PARA ELIMINAR USUARIO -->
<form  id="compEliminarUsuario" style='margin:auto' action="bbdd/eliminarCita.php" method="post">
    <p id="infoBlockEliminar" ></p>
    <input id="idValueEliminar" name="idValueEliminar" type="hidden" value="0">
    <input id="checkbox1" type="checkBox" name="si">
    <label for="si">Sí</label>
    <input id="checkbox2" type="checkBox" name="no">
    <label for="no">No</label>
    <input type="submit" value ="Aceptar">
</form>
<!--/FORMULARIO DE COMPROBACIÓN PARA ELIMINAR USUARIO -->
<!-- FORMULARIO DE COMPROBACIÓN PARA MODIFICAR USUARIO -->
    <table id="tablaModificar">
        <thead>
            <tr>
                <!-- <th>DOCTOR</th> -->
                <th>ID DEL DOCTOR</th>
                <th>ID DEL USUARIO</th>
                <th>OBSERVACIONES</th>
                <th>DESDE CUANDO</th>
                <th>HASTA CUANDO</th>
                <th>FECHA</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tr>
        <form action="bbdd/modificarCita.php" method="post">
        <input id="fechaAntigua" name="fechaAntigua" type="hidden" value="0">
        <td titulo='ID DEL DOCTOR:'><input id="idDoctorMod" name="idDoctorMod" type="text"></td>
        <td titulo='ID DEL USUARIO:'><input id="idUsuarioMod" name="idUsuarioMod" type="text"></td>
        <td titulo='OBSERVACIONES:'><input id="observacionesMod" name="observacionesMod" type="text"></td>
        <td titulo='DESDE CUANDO:'><input id="hora1Mod" name="hora1Mod" type="time"></td>
        <td titulo='HASTA CUANDO:'><input id="hora2Mod" name="hora2Mod" type="time"></td>
        <td titulo='FECHA:'><input id="fechaMod" name="fechaMod"  type="datetime-local" placeholder="yyyy-mm-dd hh:mm:ss"></td>
        <td titulo='ACCIONES:'><input type="submit" value="Verificar cambios"></td>
        </form>
        </tr>
    </table>
<!-- /FORMULARIO DE COMPROBACIÓN PARA MODIFICAR USUARIO -->
<!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
    <form  id="anadir" action="bbdd/anadirCita.php" method="post">
        <div class="anadir-usuario">
        <div class="input-box">
            <span class='detalles'>Id del doctor</span>
            <input type="text" id="idDoctor" name="idDoctor" placeholder="ID del doctor" >
        </div>
        <div class="input-box">    
            <span class='detalles'>Id del usuario</span>
            <input type="text" id="idUsuario" name="idUsuario" placeholder="ID del usuario">
        </div>
        <div class="input-box">
            <span class='detalles'>Disponibilidad horaria</span>
                <input  class="input2" name="hora1" type="time">
                <input class="input2" name="hora2" type="time">
        </div>
        <div class="input-box">
            <span class='detalles'>Fecha de la cita</span>
            <input type="datetime-local" name="fecha"  placeholder="yyyy-mm-dd hh:mm:ss">
        </div>
        <div class="input-box">
            <span class='detalles'>Observaciones</span>
            <textarea name="motivo"  cols="30" rows="10" placeholder="Describe brevemente el motivo de tu consulta"></textarea>
        </div>
        <div class="input-box"  >
            <span class='detalles'>Crear</span>
            <button type="submit" name="registrarse">Crear cita</button>
        </div>
        </div>
    </form>

<!-- CONSULTA PARA GENERAR LA TABLA DINAMICA DESDE LA BASE DE DATOS -->
<?php
$sql = mysqli_query($conexion, "SELECT * FROM citar ORDER BY CAST(SUBSTRING(doctorId, 2) AS UNSIGNED);");

$resultado = mysqli_num_rows($sql);

if($resultado > 0){
    echo "
    <table id='tabla_citas'>
        <thead>
            <tr>
                <th>ID DEL DOCTOR</th>
                <th>ID DEL USUARIOS</th>
                <th>OBSERVACIONES DE LA CITA</th>
                <th>DISPONIBILIDAD HORARIA</th>
                <th>FECHA DE LA CITA</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody class='clase_tbody'>
    ";

    while ($row = mysqli_fetch_assoc($sql)) {
        $doctorId= $row["doctorId"];
        $usuarioId = $row['usuarioId'];
        $observaciones = $row["observaciones"];
        $disponibilidad = $row["disponibilidad"];
        $fecha = $row["fecha"];  
        echo"
    <tr>
        <td titulo='DOCTOR:'>$doctorId</td>
        <td titulo='USUARIO:'>$usuarioId</td>
        <td titulo='OBSERVACIONES:'>$observaciones</td>
        <td titulo='DISPONIBILIDAD:'>$disponibilidad</td>
        <td titulo='FECHA:'>$fecha</td>
        <td titulo='ACCIONES:' class='td-btn'>
                <button class='modificar'>MODIFICAR</button>
                <button class='eliminar'>ELIMINAR</button>
        </td>
    </tr>
            ";

        }
        echo "</tbody>";
}

else 
{
echo "<h3 style='text-align:-webkit-center'>No encontrado</h3>";
}
?>
</table>
<a href="administrador.php">Volver a opciones de administrador</a>
</div>
<!--FOOTER-->
<?php require("footerHeader/footer.php")?>
<!--/FOOTER-->
<?php

mysqli_close($conexion); //cierra la BBDD

?>
</body>

</html>

<?php
    unset($_SESSION['mensajeError']);
    unset($_SESSION['ExitoRegistro']);
?>