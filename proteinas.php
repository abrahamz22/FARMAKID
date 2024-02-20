<?php

include_once("bbdd/connexionBaseDeDatos.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['busqueda'])) {

  $nombre = $_POST["nombre"];
  $id = $_POST["id"];
  $fecha = $_POST["fecha"];
  $nombreFichero = $_POST["nombreFichero"];
  $tipoFichero = $_POST["tipoFichero"];
  $especie = $_POST["especie"];
  $resolucion = $_POST["resolucion"];
  $metodo = $_POST["metodo"];
  
   // paos a realizar la búsqueda en la base de datos
   $sql = "SELECT * FROM proteina WHERE 1";
  
   if (!empty($nombre)) {
       $sql .= " AND nombre LIKE '%$nombre%'";
   }
   
   if (!empty($id)) {
       $sql .= " AND id LIKE '%$id%'";
   }
   
   if (!empty($fecha)) {
       $sql .= " AND fecha LIKE '%$fecha%'";
   }
   
   if (!empty($especie)) {
       $sql .= " AND especie LIKE '%$especie%'";
   }
   
   if (!empty($resolucion)) {
       $sql .= " AND resolucion LIKE '%$resolucion%'";
   }

   if(!empty($metodo)){
      $sql .= "AND metodo LIKE '%$metodo%'";
   }

   if (!empty($nombreFichero)) {
       $sql .= " AND nombreFichero LIKE '%$nombreFichero%'";
   }
   
   if (!empty($tipoFichero)) {
       $sql .= " AND tipoFichero LIKE '%$tipoFichero%'";
   }
  
  
   if (!empty($nombre) || !empty($id) || !empty($fecha) || !empty($especie) || !empty($resolucion) || !empty($metodo) || !empty($nombreFichero) || !empty($tipoFichero)) {
    $sql .= " ORDER BY nombre";
    $result = mysqli_query($conexion, $sql);
  } 
  
  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteínas</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/proteinas.css">
    <link rel="stylesheet" type="text/css" href="css/headerBlue.css">
    <link rel="stylesheet" type="text/css" href="css/footerBlue.css">
    <link rel="stylesheet" type="text/css" href="css/tablas.css" >
    <!-- <link rel="stylesheet" type="text/css" href="css/tablas.css" > -->
    <input  id="selector" type="hidden" value="2">
    <script src="header.js"></script>
    <script src="js/tablaProteina.js"></script>
    <script src="js/login.js"></script>

    <script>

document.addEventListener('DOMContentLoaded', function() {
    var btnModificarPro = document.getElementById('btn_modificarPro');
    var tablaModificar = document.getElementById('tablaModificar');

    btnModificar.addEventListener('click', function() {
        // Cambia el estilo de la tabla entre display: none y display: block
        btnModificarPro.style.display = (btnModificarPro.style.display === 'none' || btnModificarPro.style.display === '') ? 'block' : 'none';

        // let valores = [];
        //     for (let i = 0; i < fila.cells.length - 1; i++) { // No incluir la última celda con el botón
        //         valores.push(fila.cells[i].textContent);
        //     }
        //     // Hacer algo con los valores, por ejemplo, imprimirlos en la consola
        //     console.log(valores);
        //     document.getElementById("nombreMod").value = valores[0];
        //     document.getElementById("principiosMod").value = valores[1];
        //     document.getElementById("inchiMod").value = valores[2].slice(6);
        //     document.getElementById("smilesMod").value = valores[3];
        //     document.getElementById("estadoMod").value = valores[4];
        //     document.getElementById("nombreFicherolMod").value = valores[5];
        //     document.getElementById("tipoFicheroMod").value = valores[6];
        //     document.getElementById("fechaMod").value = valores[7];
        //     document.getElementById("stockMod").value = valores[8];
        //     document.getElementById("precioMod").value = valores[9].slice(0, -1);
        //     document.getElementById("idMod").value = valores[10];
    });
});
    </script>
</head>
<body>
      <!--HEADER-->
      <?php require("footerHeader/header.php")?>
    <!--/HEADER-->


   

   <!--CONTENEDOR DE BUSQUEDA DE PROTEINAS-->
   <div class="contenedor-principal" style='margin-top: 134px'>
        <div class="contenedor-titulo">
            <h1>Búsqueda de estructura</h1>
        </div>    
    </div>



<main>
    <div class="contenedor-img">

        <img class="img1" src="multimedia/proteinas/Albumina.jpg" alt="Imagen no encontarda">
        <input class="edit-prot" type="submit" value="EDITAR FOTO" ></input>
    </div>

<div class="container-info">
    <div class="container-table">
      <form action="proteinas.php" method='post' class="formulario_prot">
        <table>
            
            <tr class="edit_tr1">
              <td id="columna1">Name:</td>
              <td ><input type="text" name='nombre' id="name"></input></td>
            </tr>
            <tr class="edit_tr1">
              <td id="columna1">ID:</td>
              <td><input type="text" name='id' id="id"></td>
            </tr>
            <tr class="edit_tr1">
              <td id="columna1">Data:</td>
              <td><input type="text" name='fecha' id="data"></td>
            </tr>
            <tr class="edit_tr1">
              <td id="columna1">Especie(Animal/Vegetal):</td>
              <td><input type="text" name='especie' id="especie"></td>
            </tr>
            <tr class="edit_tr1">
                <td id="columna1">Método:</td>
                <td><input type="text" name='metodo' id="metodo"></td>
              </tr>
              <tr class="edit_tr1">
                <td id="columna1">Resolución:</td>
                <td><input type="text" name='resolucion' id="resolucion"></td>
              </tr>
              <tr class="edit_tr1">
                <td id="columna1">Nombre del fichero:</td>
                <td><input type="text" name='nombreFichero' id="nombre_fichero"></td>
              </tr>
              <tr class="edit_tr1">
                <td id="columna1">Tipos del fichero:</td>
                <td><input type="text" name='tipoFichero' id="tipos"></td>
              </tr>
          </table>
          <div class="input_field">
            <button type="submit"  name='busqueda' class="enviar">Buscar</button>
        </div>
        </form>
    </div>
</div>
</main>


<!-- FORMULARIO DE COMPROBACIÓN PARA ELIMINAR PROTEINA -->
<form  id="compEliminarUsuario" action="bbdd/eliminarProteina.php" method="post">
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

<!--CONTENEDOR DE BUSQUEDA DE PROTEINAS-->

<?php
// Verificar si se encontraron resultados de la búsqueda
if (isset($result) && mysqli_num_rows($result) > 0): ?>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        $fecha = $row["fecha"];
        $nombreFichero = $row["nombreFichero"];
        $tipoFichero = $row["tipoFichero"];
        $especie = $row["especie"];
        $metodo = $row["metodo"];
        $resolucion = $row["resolucion"];



echo "<div class='container-general'>


        <div class='proteina'>
            <a><img class='img-ejem' src='multimedia/proteinas/Albumina.jpg'></a>
            <div class='superpos'>
                <p>Id:  ".$id."</p>
                <p>Nombre:  ".$nombre."</p>
                <p>Resolución:  ".$resolucion."</p>
                <p>Especie: ".$especie."</p>
                <p>Metodo:  ".$metodo."</p>
                <p>Tipo de fichero:  ".$tipoFichero."</p>
                <p>Nombre fichero:  ".$nombreFichero."</p>
                <p>Fecha:  ".$fecha."</p>

                <button style='width:30%' id='btn_modificarPro'>MODIFICAR</button>
                        <button style='width:30%' class='eliminar'>ELIMINAR</button>
            </div>
        </div>
</div>";
    }
?>
<?php elseif(isset($result) && mysqli_num_rows($result) ==0):?>
<?php endif ?>

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