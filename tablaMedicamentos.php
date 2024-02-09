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
    <h1>Tabla de Medicamentos</h1>
    <div class="conjunto-buscar-anadir">
    <!-- BOTON DE BUSCAR TABLA MEDICAMENTOS -->
        <form action="buscar-medicamento.php" class="form-busqueda" method="get" name="formu">
                <div style='display:flex'> 
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

        
    <form  id="anadir" action="">
        <div class="anadir-usuario">
        <div class="input-box">
            <span class='detalles'>Nombre </span>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" >

        </div>
        <div class="input-box">    
            <span class='detalles'>Id</span>
            <input type="text" name="id-med" placeholder="Id">
        </div>

        <div class="input-box" >
            <span class='detalles'>Precio</span>
            <input type="password" name="precio" placeholder="Precio">
        </div>

        

        <div class="input-box">
            <span class='detalles'>Smiles</span>
            <input type="tetx" name="smiles" placeholder="Smiles">
        </div>
        <div class="input-box">
            <span class='detalles'>Estado</span>
            <input type="number" name="estado" placeholder="Estado">
        </div>

        <div class="input-box">
            <span class='detalles'>Nombre fichero</span>
            <input type="id" name="nombre-fichero" placeholder="Nombre fichero">
        </div>

        <div class="input-box">
            <span class='detalles'>Tipo fichero</span>
            <input type="number" name="tipo-fichero" placeholder="Tipo fichero">
        </div>

        <div class="input-box">
            <span class='detalles'>Fecha</span>
            <input type="password" name="fecha" placeholder="Fecha">
        </div>
        
        <div class="input-box" style="width: 100%">
            <span class='detalles'>Inchi</span>
            <input type="email" name="inchi" placeholder="Inchi">
        </div>
        
        <div class="input-box" >
            <span class='detalles'>Crear</span>
            <button type="submit" name="registrarse" >Añadir medicamento</button>
        </div>
        </div>
    </form>

        <?php
        //CONSULTA PARA PILLAR LOS DATOS DE LA TABLA MEDICAMENTO MEDIANTE EL NOMBRE
        $sql= mysqli_query($conexion, "SELECT * FROM medicamento ORDER BY nombre");
        $resultado = mysqli_num_rows($sql);

        if ($resultado > 0){//SI EN LAS COLUMN ES MAYOR QUE 0 PUES SE CREARA LA TABLA CON CON SUS COLUMNS
            echo "
                <table>
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
                
                
            ";


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
                    <td>$nombre</td>

                    <td>$id</td>
                    <td>$inchi</td>
                    <td>$smiles</td>
                    <td>$estado</td>
                    <td>$nombreFichero</td>
                    <td>$tipoFichero</td>
                    <td>$fecha</td>
                    <td>$precio</td>
                    
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