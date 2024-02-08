
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
    <link rel="stylesheet" type="text/css" href="css/headerBlue.css" >
    <link rel="stylesheet" type="text/css" href="css/footerBlue.css" >
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
    <div id="divTablaProteina">
    <h1>Tabla de proteínas</h1>
<div class="contenedor-botones">
<!-- BOTON DE BUSCAR TABLA PROTEINAS -->
<form action="buscar-proteina.php" class="form-busqueda" method="get" name="formu">
            <div style='display:flex'> 
                <input class="input-busqueda" type="text" placeholder="Buscar"/>
                <input class="btn-busqueda-proteina" type="submit" value="Buscar"/>
            </div>
</form>
    
    <!-- BOTON DE BUSCAR TABLA PROTEINAS -->


    <!-- <div style='display:flex'>
        <a href='crear_proteina.php' class="btn_anadir"><i class="fa-solid fa-user-plus"></i>&nbsp AÑADIR USUARIO</a>
    </div> -->
    
    <button id="anadirButton" style='background-color:#0e1119'>Añadir usuario</button>
</div>

<form  id="anadir" action="">
    <div class="anadir-usuario">
        <div class="input-box">
            <span class='detalles'>Nombre </span>
            <input style="background-color:#a2c1e7" type="text" id="nombre" name="nombre" placeholder="Nombre" >

        </div>
        <div class="input-box">    
            <span class='detalles'>Apellido</span>
            <input style="background-color:#a2c1e7" type="text" name="apellido" placeholder="Apellidos">
        </div>
        <div class="input-box">
            <span class='detalles'>Email</span>
            <input style="background-color:#a2c1e7" type="email" name="email" placeholder="Email">
        </div>

        <div class="input-box">
            <span class='detalles'>Usuario</span>
            <input style="background-color:#a2c1e7" type="tetx" name="usuario" placeholder="Usuario">
        </div>
        <div class="input-box">
            <span class='detalles'>Codigo  postal</span>
            <input style="background-color:#a2c1e7" type="number" name="cp" placeholder="Código postal">
        </div>

        <div class="input-box">
            <span class='detalles'>DNI</span>
            <input style="background-color:#a2c1e7" type="id" name="dni" placeholder="DNI/NIE">
        </div>

        <div class="input-box">
            <span class='detalles'>Telefono de contacto</span>
            <input style="background-color:#a2c1e7" type="number" name="telefono" placeholder="Otro teléfono de contacto">
        </div>

        <div class="input-box">
            <span class='detalles'>Contraseña</span>
            <input style="background-color:#a2c1e7" type="password" name="contrasena" placeholder="Contraseña">
        </div>
        
        <div class="input-box" style='width:100%'>
            <span class='detalles'>Confirmar contraseña</span>
            <input style="background-color:#a2c1e7" type="password" name="confirm" placeholder="Confirmar contraseña">
        </div>
        <div class="input-box-segundo">
            <span class='detalles'>Crear proteina</span>
            <button style="background-color:#a2c1e7"  type="submit" name="registrarse" >Añadir proteina</button>
        </div>
    </div>
</form>

    <?php
    //CONSULTA PARA PILLAR LOS DATOS DE LA TABLA MEDICAMENTO MEDIANTE EL NOMBRE
    $sql= mysqli_query($conexion, "SELECT * FROM proteina ORDER BY nombre");
    $resultado = mysqli_num_rows($sql);

    if ($resultado > 0){//SI EN LAS COLUMN ES MAYOR QUE 0 PUES SE CREARA LA TABLA CON CON SUS COLUMNS
        echo "
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>ID</th>
                    <th>METODO</th>
                    <th>RESOLUCION</th>
                    <th>ESPECIE</th>
                    <th>NOMBRE DE FICHERO</th>
                    <th>TIPOS DE FICHERO</th>
                    <th>FECHA</th>
                    <th>ACCIONES</th>
                </tr>
            
            
        ";


        while($row = mysqli_fetch_assoc($sql)){//GENERO UN BUCLE EN DONDE  VOY A IMPRIMIR TODOS LOS VALORES DE LAS COLUMNAS
            $nombre = $row["nombre"];
            $id = $row['id'];
            $metodo = $row["metodo"];
            $resolucion= $row["resolucion"];
            $especie = $row["especie"];
            $nombreFichero = $row["nombreFichero"];
            $tipoFichero = $row["tipoFichero"];
            $fecha = $row["fecha"];

            echo "
            
            <tr>
                <td>$nombre</td>

                <td>$id</td>
                <td>$metodo</td>
                <td>$resolucion</td>
                <td>$especie</td>
                <td>$nombreFichero</td>
                <td>$tipoFichero</td>
                <td>$fecha</td>
                
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
<!--/DIV DE TABLA-->
<!--FOOTER-->
<?php require("footerHeader/footer.php")?>
<!--/FOOTER-->
</body>
</html>