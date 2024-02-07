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
</head>
<body>

<!--HEADER-->
<?php require("footerHeader/header.php")?>
<!--/HEADER-->


    

<!--/HEADER-->


<!--DIV DE TABLA-->
<div id="divTabla">

    <h1>Tabla de usuarios</h1>

    <div class="contenedor-botones">


     <!-- BOTON DE BUSCAR TABLA USUARIOS -->
     <form action="buscar-user.php" class="form-busqueda" method="get" name="formu">
            <div style="display:flex"> 
                <input class="input-busqueda" type="text" placeholder="Buscar"/>
                <input class="btn-busqueda" type="submit" value="Buscar"/>
            </div>
        </form>

    <!-- BOTON DE BUSCAR TABLA USUARIOS -->
    
    <!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
    <div style='display:flex'>
        <a href="crear_usuario.php" class="btn_anadir"><i class="fa-solid fa-user-plus"></i>&nbsp CREAR USUARIO</a>
    </div>
    <!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->


   
    </div>

    

<!-- CONSULTA PARA GENERAR LA TABLA DINAMICA DESDE LA BASE DE DATOS -->
<?php
$sql = mysqli_query($conexion, "SELECT * FROM usuario ORDER BY usuario");

$resultado = mysqli_num_rows($sql);

if($resultado > 0){
    echo "
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DNI</th>
            <th>TELEFONO</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>ACCIONES</th>
        </tr>
    ";

    while ($row = mysqli_fetch_assoc($sql)) {
        $nombre = $row["nombre"];
        $apellido = $row['apellidos'];
        $dni = $row["dni"];
        $telefono = $row["telefono"];
        $email = $row["email"];
        $contrasena = $row["contrasena"];
        $rol = $row["rol"];


        
        echo"
        <tr>
        <td>$nombre</td>
        <td>$apellido</td>
        <td>$dni</td>
        <td>$telefono</td>
        <td>$email</td>
        <td>$contrasena</td>
        <td>$rol</td>

        <td class='td-btn'>
                        <input class='modificar' type='submit' value='MODIFICAR'/> 
                        <input class='eliminar' type='submit' value='ELIMINAR'/>
                
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