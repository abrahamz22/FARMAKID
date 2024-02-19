<?php
include_once("bbdd/connexionBaseDeDatos.php");
// include("bibliotecaUsuarios.php");
// session_start();
// unset($_SESSION['mensajeError']);
// unset($_SESSION['ExitoRegistro']);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['busqueda'])) {

$nombre = $_POST["nombre"];
$id = $_POST["id"];
$fecha = $_POST["fecha"];
$inchi = $_POST["inchi"];
$smiles= $_POST["smiles"];
$nombreFichero = $_POST["nombreFichero"];
$tipoFichero = $_POST["tipoFichero"];
$estado = $_POST["estado"];

 // paos a realizar la búsqueda en la base de datos
 $sql = "SELECT * FROM medicamento WHERE 1";

 if (!empty($nombre)) {
     $sql .= " AND nombre LIKE '%$nombre%'";
 }
 
 if (!empty($id)) {
     $sql .= " AND id LIKE '%$id%'";
 }
 
 if (!empty($fecha)) {
     $sql .= " AND fecha LIKE '%$fecha%'";
 }
 
 if (!empty($inchi)) {
     $sql .= " AND inchi LIKE '%$inchi%'";
 }
 
 if (!empty($smiles)) {
     $sql .= " AND smiles LIKE '%$smiles%'";
 }
 
 if (!empty($nombreFichero)) {
     $sql .= " AND nombreFichero LIKE '%$nombreFichero%'";
 }
 
 if (!empty($tipoFichero)) {
     $sql .= " AND tiposFichero LIKE '%$tipoFichero%'";
 }


 if (!empty($nombre) || !empty($id) || !empty($fecha) || !empty($inchi) || !empty($smiles) || !empty($nombreFichero) || !empty($tipoFichero) || !empty($estado)) {
  $sql .= " ORDER BY nombre";
  $result = mysqli_query($conexion, $sql);
  $resultado = mysqli_num_rows($result);
} else {
  $resultado = 0; // Si todos los campos están vacíos, establece $resultado a 0
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/medicamentos.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input id="selector" type="hidden" value="1">
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->

    <!--CONTENEDOR DE BUSQUEDA DE MEDICAMENTOS-->
    <div class="contenedor-principal" style='margin-top:144px'>
        <div class="contenedor-titulo">
            <h1>Búsqueda de estructura</h1>
        </div>
    </div>
    
<main>   
  <div class="contenedor-img">
      <img class="img1"  src="multimedia/proteinas/Albumina.jpg" alt="Imagen de estructura medicamento"></img>
      <input class="editar-fot" type="submit" value="EDITAR FOTO" ></input>   
  </div>
        
  <div class="container-info">
    <div class="container-table">
      <form action="medicamentos.php" method='post' class="buscar_medicamento">
        <table>
            
            <tr class="edit_tr1">
              <td class="columna">Name:</td>
              <td class="input"><input name='nombre' type="text" ></input></td>
            </tr>

            <tr class="edit_tr1">
              <td class="columna">ID:</td>
              <td class="input"><input name='id' type="text" /></td>
            </tr>

            <tr class="edit_tr1">
              <td class="columna">Data:</td>
              <td class="input"><input name='fecha' type="text"  /></td>
            </tr>

            <tr class="edit_tr1">
              <td class="columna">InChl:</td>
              <td class="input"><input name='inchi' type="text"  /></td>
            </tr>

            <tr class="edit_tr1">
                <td class="columna">SMILES:</td>
                <td class="input"><input name='smiles' type="text" ></td>
            </tr>
              
            <tr class="edit_tr1">
              <td class="columna">Nombre del fichero:</td>
              <td class="input"><input name='nombreFichero' type="text" ></td>
            </tr>

            <tr class="edit_tr1">
              <td class="columna">Tipos del fichero:</td>
              <td class="input"><input name='tipoFichero' type="text" ></td>
            </tr>

            <tr class="edit_tr1">
              <td class="columna">Estado del medicamento:</td>
              <td class="input"><input name='estado' type="text"  ></td>
            </tr>

              
        </table>
        
        <div class="input_field">
          <!-- <button type="button" class="enviar"><a href="medicamentos-opcion.php">BUSCAR</a></button> -->
          <button type="submit" class="enviar" name='busqueda' >BUSCAR</button>
        </div>
      <?php
        // $sql= mysqli_query("SELECT * FROM medicamento WHERE nombre LIKE '% ". $_POST['nombre'] ."%' OR inchi LIKE '%". $_POST['inchi'] . "%' OR id LIKE '% ". $_POST['id'] ."%' ");
        // $resultado = mysqli_num_rows($sql);
      ?>
      </form>
      </div>
  </div>
</main>
      <?php
// Verificar si se encontraron resultados de la búsqueda
if (isset($resultado) && $resultado > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id_farmaco = $row["id"];
        $nombre = $row["nombre"];
        $fecha = $row["fecha"];
        $nombreFichero = $row["nombreFichero"];
        $tipoFichero = $row["tiposFichero"];
        $smiles = $row["smiles"];
        $inChl = $row["inchi"];
        $estado = $row["estadoMedicamento"];
        $precio = $row['precio'];
?>
        <!-- Código para mostrar cada resultado -->
        <div class="container-medica">
            <div class="med">
                <a>
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>
                <div class="superpos">
                    <p>Id: <?php echo "$id_farmaco"?></p>
                    <p>Nombre: <?php echo "$nombre"?></p>
                    <p>Inchl: <?php echo "$inChl"?></p>
                    <p>Smiles: <?php echo "$smiles"?></p>
                    <p>Estado: <?php echo "$estado"?></p>
                    <p>Precio: <?php echo "$precio"?></p>
                    <p>Tipo fichero: <?php echo "$tipoFichero"?></p>
                    <p>Nombre fichero: <?php echo "$nombreFichero"?></p>
                    <p>Fecha: <?php echo "$fecha"?></p>
                </div>
            </div>
        </div>
<?php
    }
    
} else {
    echo "<h3 style='text-align:center'>No se ha encontrado la búsqueda</h3>";
}
?>
    
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