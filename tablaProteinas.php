
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
                <div  class="botones-filtrar" style='display:flex'>
                    <input class="input-busqueda" name='busqueda' type="text" placeholder="Buscar"/>
                    <input class="btn-busqueda-proteina" type="submit" value="Buscar"/>
                </div>
    </form>
    
    <!-- BOTON DE BUSCAR TABLA PROTEINAS -->


    <!-- <div style='display:flex'>
        <a href='crear_proteina.php' class="btn_anadir"><i class="fa-solid fa-user-plus"></i>&nbsp AÑADIR USUARIO</a>
    </div> -->
    
    <button id="anadirButton" >Añadir proteina</button>
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


<!-- FORMULARIO DE COMPROBACIÓN PARA ELIMINAR PROTEINA -->
<form  id="compEliminarUsuario" action="bbdd/eliminarUsuario.php" method="post">
    <p id="infoBlockEliminar" ></p>
    <input id="idValueEliminar" name="idValueEliminar" type="hidden" value="0">
    <input id="checkbox1" type="checkBox" name="si">
    <label for="si">Sí</label>
    <input id="checkbox2" type="checkBox" name="no">
    <label for="no">No</label>
    <input type="submit" value ="Aceptar">
</form>
<!--/FORMULARIO DE COMPROBACIÓN PARA ELIMINAR PROTEINA -->
<!-- FORMULARIO DE COMPROBACIÓN PARA MODIFICAR PROTEINA -->
<table id="tablaModificar">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>ESPECIE</th>
                <th>RESOLUCION</th>
                <th>ID</th>
                <th>NOMBRE FICHERO</th>
                <th>TIPO FICHERO</th>
                <th>FECHA</th>
                <th>METODO</th>
                <th>ACCIONES</th>
        
            </tr>
        </thead>    
        <tr>
        <form action="bbdd/modificarUsuario.php" method="post">
            <input id="idMod" name="id" type="hidden" value="0">
        <td titulo='NOMBRE:'><input id="nombreMod" name="nombre" type="text"></th>
        <td titulo='ESPECIE:'><input id="especieMod" name="especie" type="text"></td>
        <td titulo='RESOLUCION:'><input id="resolucionMod" name="resolucion" type="text"></td>
        <td titulo='ID:'><input id="idMod" name="id" type="text"></td>
        <td titulo='NOMBRE FICHERO:'><input id="nombreFicheroMod" name="nombreFichero" type="text"></td>
        <td titulo='TIPO FICHERO:'><input id="tipoFicheroMod" name="tipoFichero" type="text"></td>
        <td titulo='FECHA:'><input type="datetime-local" name="fecha" placeholder="Fecha"></td>
        <td titulo='METODO:'><input id='metodoMod' name='metoddo'/></td>
        <td titulo='VERIFICAR CAMBIOS:'><input type="submit" value="Verificar cambios"></td>
        </form>
        </tr>
    </table>
<!-- /FORMULARIO DE COMPROBACIÓN PARA MODIFICAR PROTEINA -->

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
            <table id='tabla_proteina'>
                <thead>
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
                <thead>
                <tbody class='clase_tbody'>
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
                <td titulo='NOMBRE:'>$nombre</td>

                <td titulo='ID:'>$id</td>
                <td titulo='METODO:'>$metodo</td>
                <td titulo='RESOLUCION:'>$resolucion</td>
                <td titulo='ESPECIE:'>$especie</td>
                <td titulo='NOMBRE FICHERO:'>$nombreFichero</td>
                <td titulo='TIPO FICHERO:'>$tipoFichero</td>
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
<!--/DIV DE TABLA-->
<!--FOOTER-->
<?php require("footerHeader/footer.php")?>
<!--/FOOTER-->
</body>
</html>