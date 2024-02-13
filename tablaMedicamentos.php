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
    <script src="js/tablaMedicamento.js"></script>
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->
<!--/HEADER-->
<!--DIV DE TABLA-->
<div id="divTabla">
    <div class="contenedor-botones">
    <h1>Tabla de Medicamentos</h1>
    <div class="conjunto-buscar-anadir">
    <!-- BOTON DE BUSCAR TABLA MEDICAMENTOS -->
        <form action="buscar-medicamento.php" class="form-busqueda" method="get" name="formu">
                <div class="botones-filtrar" style='display:flex'> 
                    <input class="input-busqueda" type="text" placeholder="Buscar"/>
                    <input class="btn-busqueda" type="submit" value="Buscar"/>
                </div>
            </form>
        <!-- BOTON DE BUSCAR TABLA MEDICAMENTOS -->

            <!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
        <!-- <div style='display:flex'>
            <a href="crear_medicamento.php" class="btn_anadir"><i class="fa-solid fa-user-plus"></i>&nbsp AÑADIR MEDICAMENTO</a>
        </div> -->
        <!-- BOTON DE AÑADIR USUARIOS A LA BASE DE DATOS Y A LA TABLA -->
        <button id="anadirButton">Añadir usuario</button>
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
<!-- ANADIR MEDICAMENTO -->        
    <form  id="anadir" action="bbdd/anadirMedicamento.php" method="post">
        <div class="anadir-usuario">
        <div class="input-box">
            <span class='detalles'>Nombre </span>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="input-box" >
            <span class='detalles'>Precio</span>
            <input type="number"  step="0.01" min="0.00" name="precio" placeholder="Precio">
        </div>
        <div class="input-box">
            <span class='detalles'>Smiles</span>
            <input type="tetx" name="smiles" placeholder="Smiles">
        </div>
        <div class="input-box" >
            <span class='detalles'>estado</span>
            <select name="estado" id="estado">
                <option value="aprobado">Aprobado</option>
                <option value="regulacion">Regulación</option>
                <option value="ensayo clinico">Ensayo clínico</option>
                <option value="en desarrollo">En desarrollo</option>
                <option value="suspendido">suspendido</option>
                <option value="retirado del mercado">Retirado del mercado</option>
                <option value="rechazado">rechazado</option>
                <option value="investigacion preclinica">Investigación preclínica</option>
            </select>
        </div>
        <div class="input-box">
            <span class='detalles'>Nombre fichero</span>
            <input type="text" name="nombreFichero" placeholder="Nombre fichero">
        </div>

        <div class="input-box">
            <span class='detalles'>Tipo fichero</span>
            <input type="text" name="tipoFichero" placeholder="Tipo fichero">
        </div>

        <div class="input-box">
            <span class='detalles'>Fecha</span>
            <input type="datetime-local" name="fecha" placeholder="Fecha">
        </div>
        
        <div class="input-box" style="width: 100%">
            <span class='detalles'>Inchi</span>
            <input type="text" name="inchi" placeholder="Inchi">
        </div>
        
        <div class="input-box" >
            <span class='detalles'>Crear</span>
            <button type="submit" name="registrarse" >Añadir medicamento</button>
        </div>
        </div>
    </form>
<!-- /ANADIR MEDICAMENTO -->
        <?php
        //CONSULTA PARA PILLAR LOS DATOS DE LA TABLA MEDICAMENTO MEDIANTE EL NOMBRE
        $sql= mysqli_query($conexion, "SELECT * FROM medicamento ORDER BY nombre");
        $resultado = mysqli_num_rows($sql);

        if ($resultado > 0){//SI EN LAS COLUMN ES MAYOR QUE 0 PUES SE CREARA LA TABLA CON CON SUS COLUMNS
            echo "
                <table id='tabla_medicamento'>
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>ID</th>
                            <th>INCHI</th>
                            <th>SMILES</th>
                            <th>ESTADO</th>
                            <th>NOMBRE FICHERO</th>
                            <th>TTIPO FICHERO</th>
                            <th>FECHA</th>
                            <th>PRECIO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody class='clase_tbody'>"
            ;
            
            while($row = mysqli_fetch_assoc($sql)){//GENERO UN BUCLE EN DONDE  VOY A IMPRIMIR TODOS LOS VALORES DE LAS
                $nombre = $row["nombre"];
                $id = $row['id'];
                $inchi = $row["inchi"];
                $smiles= $row["smiles"];
                $estado = $row["estadoMedicamento"];
                $nombreFichero = $row["nombreFichero"];
                $tipoFichero = $row["tiposFichero"];
                $fecha = $row["fecha"];
                $precio = $row["precio"];

                echo "
               
                <tr>
                    <td titulo='NOMBRE:'>$nombre</td>

                    <td titulo='ID:'>$id</td>
                    <td style='text-align:left' titulo='INCHI:'>$inchi</td>
                    <td titulo='SMILES:'>$smiles</td>
                    <td titulo='ESTADO:'>$estado</td>
                    <td titulo='NOMBRE FICHERO:'>$nombreFichero</td>
                    <td titulo='TIPO FICHERO:'>$tipoFichero</td>
                    <td titulo='FECHA:'>$fecha</td>
                    <td titulo='PRECIO:'>$precio</td>
                    
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
    <!-- BOTON DE BUSCAR TABLA MEDICAMENTOS -->

    <!--/DIV DE TABLA-->
    <!--FOOTER-->
    <footer>
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->

    <?php
    mysqli_close($conexion); //cierra la BBDD

    ?>
</body>
</html>