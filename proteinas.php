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
    <input  id="selector" type="hidden" value="2">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
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