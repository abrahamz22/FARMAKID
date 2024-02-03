
<?php
include_once("bbdd/connexionBaseDeDatos.php");

session_start();//para crear sesion

if($_SESSION['rol'] != 'administrador'){//compruebo si el usuario rol  es administrador, en caso de no serlo se redirige a la pagina principal
    header('location: index.php');
}
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
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->

    
    <!--MENU DESPLEGABLE MEDICAMENTOS-->
    <div id="desplegableMedicamentos" class="removeId">
        <ul id="listaD">
            <li><a href="medicamentos-interaccion.php">Interecciones entre medicamentos</a></li>
            <li><a href="medicamentos-retirados.php">Medicamentos retirados</a></li>
        </ul>
    </div>
    <!--/MENU DESPLEGABLE MEDICAMENTOS-->
    <!--MENU DESPLEGABLE MEDICAMENTOS-->
    <div id="desplegableProteinas" class="removeId">
        <ul id="listaD">
            
            <li><a href="info-proteinas.php">Información general sobre las proteínas</a></li>
        </ul>
    </div>
    <!--/MENU DESPLEGABLE MEDICAMENTOS-->
    <!--/HEADER-->
     <!--DIV DE TABLA-->
     <div id="divTablaProteina">
        <h1>Tabla de proteínas</h1>

        <!-- BOTON DE BUSCAR TABLA MEDICAMENTOS -->
        <form action="buscar-user.php" class="form-buscar-user" method="get" name="formu">
                <div class="inputs-buscar-user"> 
                    <input class="busqueda" type="text" placeholder="Buscar"/>
                    <input class="buscar-user" type="submit" value="buscar"/>
                </div>
            </form>
        
        <!-- BOTON DE BUSCAR TABLA MEDICAMENTOS -->

        <?php
        //CONSULTA PARA PILLAR LOS DATOS DE LA TABLA MEDICAMENTO MEDIANTE EL NOMBRE
        $sql= mysqli_query($conexion, "SELECT * FROM proteina ORDER BY nombre");
        $resultado = mysqli_num_rows($sql);

        if ($resultado > 0){//SI EN LAS COLUMN ES MAYOR QUE 0 PUES SE CREARA LA TABLA CON CON SUS COLUMNS
            echo "
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Id</th>
                        <th>Metodo</th>
                        <th>Resolucion</th>
                        <th>Especie</th>
                        <th>Nombre fichero</th>
                        <th>Tipos de fichero</th>
                        <th>Fecha</th>
                    
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
                        <div class='btn-mod-act'>    
                            <input class='modificar' type='submit' value='MODIFICAR'/> 
                            <input class='eliminar' type='submit' value='ELIMINAR'/>
                        </div>  
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
        <button><a href="administrador.php">Volver a opciones de administrador</a></button>
    </div>
    <!--/DIV DE TABLA-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>