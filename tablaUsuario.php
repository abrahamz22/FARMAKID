<?php
include_once("bbdd/connexionBaseDeDatos.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
    <link rel="stylesheet" type="text/css" href="css/tablas.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/tablas.js"></script>
</head>
<body>

<!--HEADER-->
<?php require("footerHeader/header.php")?>

<!--/HEADER-->
<!--/HEADER-->
<!--DIV DE TABLA-->
<div id="divTabla">
    <div class="contenedor-botones">

    <h1>Tabla de usuarios</h1>
    <div class="conjunto-buscar-anadir">
        <!-- BOTON DE BUSCAR TABLA USUARIOS -->
        <form action="buscar-usuario.php" class="form-busqueda" method="get" name="formu">
            <div class="botones-filtrar" style="display:flex"> 
                <input class="input-busqueda" type="text"name="busqueda"  placeholder="Buscar" />
                <input class="btn-busqueda" type="submit" value="Buscar"/>
            </div>
        </form>

    <!-- BOTON DE BUSCAR TABLA USUARIOS -->
    
    <!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
   <!-- <div style='display:flex'>
       <a href="crear_usuario.php" class="btn_anadir"><i class="fa-solid fa-user-plus"></i>&nbsp CREAR USUARIO</a>
    </div> -->

        <button id="anadirButton">Añadir usuario</button>
    </div>
    <!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
</div>
<?php if(isset($_SESSION["mensajeError"]))://si el mensaje de error existe?>
        <p id="divError"><?php echo $_SESSION["mensajeError"]//imprimimos?></p>
<?php endif;?>
<?php if(isset($_SESSION["ExitoRegistro"]))://si el mensaje de error existe?>
        <p id="ExitoRegistro"><?php echo $_SESSION["ExitoRegistro"]//imprimimos?></p>
<?php endif;?>
    <form  id="anadir" action="bbdd/anadirUsuarioTabla.php" method="post">
        <div class="anadir-usuario">
        <div class="input-box">
            <span class='detalles'>Nombre </span>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" >

        </div>
        <div class="input-box">    
            <span class='detalles'>Apellido</span>
            <input type="text" name="apellido" placeholder="Apellidos">
        </div>
        <div class="input-box">
            <span class='detalles'>Email</span>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="input-box">
            <span class='detalles'>Usuario</span>
            <input type="tetx" name="usuario" placeholder="Usuario">
        </div>
        <div class="input-box">
            <span class='detalles'>Codigo  postal</span>
            <input type="number" name="cp" placeholder="Código postal">
        </div>

        <div class="input-box">
            <span class='detalles'>DNI</span>
            <input type="id" name="dni" placeholder="DNI/NIE">
        </div>

        <div class="input-box">
            <span class='detalles'>Telefono de contacto</span>
            <input type="number" name="telefono" placeholder="Otro teléfono de contacto">
        </div>

        <div class="input-box">
            <span class='detalles'>Contraseña</span>
            <input type="password" name="contrasena" placeholder="Contraseña">
        </div>
        
        <div class="input-box" >
            <span class='detalles'>Confirmar contraseña</span>
            <input type="password" name="confirm" placeholder="Confirmar contraseña">
        </div>

        <div class="input-box" >
            <span class='detalles'>Rol</span>
            <select name="rol" id="rol">
                <option value="administrador">administrador</option>
                <option value="editor">editor</option>
                <option value="usuario">usuario</option>
            </select>
           <!-- <input type="text" name="rol" placeholder="Tipo de rol">-->
        </div>
        
        <div class="input-box"  >
            <span class='detalles'>Crear</span>
            <button type="submit" name="registrarse">Añadir usuario</button>
        </div>
        </div>
    </form>

<!-- CONSULTA PARA GENERAR LA TABLA DINAMICA DESDE LA BASE DE DATOS -->
<?php
$sql = mysqli_query($conexion, "SELECT * FROM usuario ORDER BY idUsuario");

$resultado = mysqli_num_rows($sql);

if($resultado > 0){
    echo "
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>DNI</th>
            <th>CÓDIGO POSTAL</th>
            <th>TELEFONO</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            <th>ROL</th>
            <th>CONTRASEÑA</th>
            <th>ID USUARIO</th>
            <th>ACCIONES</th>
        </tr>
    ";

    while ($row = mysqli_fetch_assoc($sql)) {
        $nombre = $row["nombre"];
        $apellido = $row['apellidos'];
        $dni = $row["dni"];
        $cp = $row["codigoPostal"];
        $telefono = $row["telefono"];
        $email = $row["email"];
        $usuario = $row["usuario"];
        $rol = $row["rol"];
        $contrasena = $row["contrasena"];
        $idUsuario = $row["idUsuario"];


        
        echo"
    <tr>
        <td>$nombre</td>
        <td>$apellido</td>
        <td>$dni</td>
        <td>$cp</td>
        <td>$telefono</td>
        <td>$email</td>
        <td>$usuario</td>
        <td>$rol</td>
        <td>$contrasena</td>
        <td>$idUsuario</td>

        <td class='td-btn'>
                <button class='modificar'>MODIFICAR</button>
                <button class='eliminar'>ELIMINAR</button>
        </td>
    </tr>
            ";

        }
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