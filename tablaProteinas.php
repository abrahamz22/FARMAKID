
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
<div class="contenedor-botones">
<!-- BOTON DE BUSCAR TABLA PROTEINAS -->
<h1>Tabla de proteínas</h1>
<div class="conjunto-buscar-anadir">
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
    
    <button id="anadirButton" >Añadir usuario</button>
</div>
</div>

<form  id="anadir" action="">
    <div class="anadir-usuario">
        <div class="input-box">
            <span class='detalles'>Nombre </span>
            <input style="background-color:#a2c1e7" type="text" id="nombre" name="nombre" placeholder="Nombre" >

        </div>
        <div class="input-box">    
            <span class='detalles'>Especie</span>
            <input style="background-color:#a2c1e7" type="text" name="especie" placeholder="Especie">
        </div>
       

        <div class="input-box">
            <span class='detalles'>Resolución</span>
            <input style="background-color:#a2c1e7" type="text" name="resolucion" placeholder="Resolución">
        </div>
        <div class="input-box">
            <span class='detalles'>Id</span>
            <input style="background-color:#a2c1e7" type="number" name="id-prote" placeholder="Id">
        </div>

        <div class="input-box">
            <span class='detalles'>Nombre fichero</span>
            <input style="background-color:#a2c1e7" type="id" name="nombre-fichero-prote" placeholder="Nombre fichero">
        </div>

        <div class="input-box">
            <span class='detalles'>Tipo fichero</span>
            <input style="background-color:#a2c1e7" type="number" name="tipo-fichero-prote" placeholder="Tipo fichero">
        </div>

        <div class="input-box" >
            <span class='detalles'>Fecha</span>
            <input style="background-color:#a2c1e7" type="text" name="fecha" placeholder="Fecha">
        </div>
        
       

        <div class="input-box" style='margin-bottom:10px' >
            <span class='detalles'>Método</span>
            <input style="background-color:#a2c1e7" type="text" name="metodo" placeholder="Método">
        </div>

        <div class="input-box-segundo" style="margin-bottom:12px" style=''>
            <span class='detalles'>Crear proteina</span>
            <button  type="submit" name="registrarse" >Añadir proteina</button>
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