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
    <script src="js/tablaMedico.js"></script>
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
<form  id="compEliminarUsuario" action="bbdd/eliminarMedico.php" method="post">
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
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>ESPECIALIDAD</th>
            <th>NUMERO DE COLEGIADO</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th>
        </tr>
        <tr>
        <form action="bbdd/modificarMedico.php" method="post">
        <input id="idMod" name="id" type="hidden" value="0">
        <th><input id="nombreMod" name="nombre" type="text"></th>
        <th><input id="apellidosMod" name="apellidos" type="text"></th>
        <th><select id="especialidadMod" name="especialidad">
                <option value="alergologo">Alergólogo</option>
                <option value="neonatologo">Neonatólogo</option>
                <option value="cardiologo">Cardiólogo</option>
                <option value="dermatologia">Dermatología</option>
                <option value="odontopediatria">Odontopediatría</option>
                <option value="oftalmologia">Oftalmología</option>
                <option value="ortopedia">Ortopedia</option>
                <option value="otorrinolaringologia">Otorrinolaringología</option>
            </select>
        </th>
        <th><input id="numColegiadoMod" name="numColegiado" type="number"></th>
        <th><input id="emailMod" name="email" type="email"></th>
        <th><input id="telefonoMod" name="telefono" type="number"></th>
        <th><input type="submit" value="Verificar cambios"></th>
        </form>
        </tr>
    </table>
<!-- /FORMULARIO DE COMPROBACIÓN PARA MODIFICAR USUARIO -->
<!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
    <form  id="anadir" action="bbdd/anadirMedico.php" method="post">
        <div class="anadir-usuario">
        <div class="input-box">
            <span class='detalles'>Nombre </span>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" >

        </div>
        <div class="input-box">    
            <span class='detalles'>Apellido</span>
            <input type="text" name="apellido" placeholder="Apellidos">
        </div>
        
        <div class="input-box" >
            <span class='detalles'>Especialidad</span>
            <select name="especialidad" id="especialidad">
                <option value="alergologo">Alergólogo</option>
                <option value="neonatologo">Neonatólogo</option>
                <option value="cardiologo">Cardiólogo</option>
                <option value="dermatologia">Dermatología</option>
                <option value="odontopediatria">Odontopediatría</option>
                <option value="oftalmologia">Oftalmología</option>
                <option value="ortopedia">Ortopedia</option>
                <option value="otorrinolaringologia">Otorrinolaringología</option>
            </select>
        </div>

        <div class="input-box">
            <span class='detalles'>Número de colegiado</span>
            <input type="number" name="numColegiado" placeholder="Número de colegiado">
        </div>
        <div class="input-box">
            <span class='detalles'>Email</span>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="input-box">
            <span class='detalles'>Teléfono</span>
            <input type="number" name="telefono" placeholder="Télefono">
        </div>
        <div class="input-box"  >
            <span class='detalles'>Crear</span>
            <button type="submit" name="registrarse">Añadir especialista</button>
        </div>
        </div>
    </form>

<!-- CONSULTA PARA GENERAR LA TABLA DINAMICA DESDE LA BASE DE DATOS -->
<?php
$sql = mysqli_query($conexion, "SELECT * FROM citar ORDER BY CAST(SUBSTRING(doctorId, 2) AS UNSIGNED);");

$resultado = mysqli_num_rows($sql);

if($resultado > 0){
    echo "
    <table>
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