<?php
include_once("bbdd/connexionBaseDeDatos.php");
// include("bibliotecaUsuarios.php");
// unset($_SESSION['mensajeError']);
// unset($_SESSION['ExitoRegistro']);

session_start(); // Asegúrate de iniciar la sesión al principio del archivo
// ...
$claseEliminar = "";
$claseModificar = "";

if (isset($_SESSION["rol"])) {
    $rol_user = $_SESSION["rol"];

    // Aquí puedes verificar el rol del usuario y asignar las clases CSS según sea necesario
    if ($rol_user === "usuario") {
        // Si el usuario es de tipo "usuario", ocultar los botones asignando clases
        $claseEliminar = "oculto";
        $claseModificar = "oculto";
    }
}

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
    <link rel="stylesheet" type="text/css" href="css/tablas.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/medicamentoBusqueda.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var btnModificar = document.getElementById('btn_modificar');
    var tablaModificar = document.getElementById('tablaModificar');

    btnModificar.addEventListener('click', function() {
        // Cambia el estilo de la tabla entre display: none y display: block
        tablaModificar.style.display = (tablaModificar.style.display === 'none' || tablaModificar.style.display === '') ? 'block' : 'none';

        let valores = [];
            for (let i = 0; i < fila.cells.length - 1; i++) { // No incluir la última celda con el botón
                valores.push(fila.cells[i].textContent);
            }
            // Hacer algo con los valores, por ejemplo, imprimirlos en la consola
            console.log(valores);
            document.getElementById("nombreMod").value = valores[0];
            document.getElementById("principiosMod").value = valores[1];
            document.getElementById("inchiMod").value = valores[2].slice(6);
            document.getElementById("smilesMod").value = valores[3];
            document.getElementById("estadoMod").value = valores[4];
            document.getElementById("nombreFicherolMod").value = valores[5];
            document.getElementById("tipoFicheroMod").value = valores[6];
            document.getElementById("fechaMod").value = valores[7];
            document.getElementById("stockMod").value = valores[8];
            document.getElementById("precioMod").value = valores[9].slice(0, -1);
            document.getElementById("idMod").value = valores[10];
    });
});


    </script>
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
        <table id='tabla_med'>
            
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


<!-- FORMULARIO DE COMPROBACIÓN PARA ELIMINAR USUARIO -->
<form  id="compEliminarUsuario" action="bbdd/eliminarMedicamento.php" method="post">
    <p id="infoBlockEliminar" ></p>
    <input id="idValueEliminar" name="idValueEliminar" type="hidden" value="0">
    <input id="checkbox1" type="checkBox" name="si">
    <label for="si">Sí</label>
    <input id="checkbox2" type="checkBox" name="no">
    <label for="no">No</label>
    <input type="submit" value ="Aceptar">
</form>
<!--/FORMULARIO DE COMPROBACIÓN PARA ELIMINAR USUARIO -->

<table id="tablaModificar">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>PRINCIPIOS ACTIVOS</th>
                <th>INCHI</th>
                <th>SMILES</th>
                <th>ESTADO</th>
                <th>NOMBRE FICHERO</th>
                <th>TIPO FICHERO</th>
                <th>FECHA</th>
                <th>STOCK</th>
                <th>PRECIO</th>
                <th>ACCIONES</th>
        </thead>
            </tr>
        <tr>
        <form action="bbdd/modificarMedicamento.php" method="post">
            <input id="idMod" name="idMod" type="hidden" value="0">
        <td titulo='NOMBRE:'><input id="nombreMod" name="nombreMod" type="text"></th>
        <td titulo='PRINCIPIOS ACTIVOS:'><input id="principiosMod" name="principiosMod" type="text"></th>
        <td titulo='INCHI:'><input id="inchiMod" name="inchiMod" type="text"></td>
        <td titulo='SMILES:'><input id="smilesMod" name="smilesMod" type="text"></td>
        <td titulo='ESTADO:'>
            <select id="estadoMod" name="estadoMod" >
                <option value="aprobado">Aprobado</option>
                <option value="regulacion">Regulación</option>
                <option value="ensayo clinico">Ensayo clínico</option>
                <option value="en desarrollo">En desarrollo</option>
                <option value="suspendido">suspendido</option>
                <option value="retirado del mercado">Retirado del mercado</option>
                <option value="rechazado">rechazado</option>
                <option value="investigacion preclinica">Investigación preclínica</option>
            </select>
        </td>
        <td titulo='NOMBRE FICHERO:'><input id="nombreFicherolMod" name="nombreFicheroMod" type="text"></td>
        <td titulo='TIPO FICHERO:'><input id="tipoFicheroMod" name="tipoFicheroMod" type="text"></td>
        <td titulo='FECHA:'><input  type="datetime-local"  id="fechaMod" name="fechaMod" placeholder="yyyy-mm-dd hh:mm:ss"></td>
        <td titulo='STOCK:'><input type="number"  id="stockMod" name="stockMod" ></td>
        <td titulo='PRECIO:'><input id="precioMod" step="0.01" min="0.00"  type="number" name='precioMod'></td>
        <td titulo='VERIFICAR CAMBIOS:'><input type="submit" value="Verificar cambios"></td>
        </form>
        </tr>
    </table>


  <?php if (isset($result) && mysqli_num_rows($result) > 0):?>
    <?php
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

        echo "<div class='container-medica'>
        
            <div class='med'>
                <a>
                    <img class='img-ej' src='multimedia/proteinas/Albumina.jpg'>
                </a>
                <div class='superpos'>
                    <p>Id:  ".$id_farmaco."</p>
                    <p>Nombre:".$nombre."</p>
                    <p>Inchl:  ".$inChl."</p>
                    <p>Smiles:  ".$smiles."</p>
                    <p>Estado: ".$estado."</p>
                    <p>Precio: ".$precio."</p>
                    <p>Tipo fichero:   ".$tipoFichero."</p>
                    <p>Nombre fichero:  ".$nombreFichero."</p>
                    <p>Fecha:  ".$fecha."</p>
                  <form method='post' action='carrito.php'>
                      <input type='hidden' name='idMedicamento' value='".$id_farmaco."'>
                      <button type='submit' class='comprar' name='addToCart'>AÑADIR A CARRITO</button>
                      
                  </form>

                    <table>
                    <td class='td-btn'>
                    
                    <button style='width:30%' id='btn_modificar' $claseEliminar>MODIFICAR</button>
                        <button style='width:30%'  id='btn_eliminar' $claseModificar>ELIMINAR</button>
                        </td>
                        </table>
                </div>
            </div>
        </div>";
    }
    ?>
 <?php elseif(isset($result) && mysqli_num_rows($result) == 0 ):?>
    <h3 style='text-align:center'>No se ha encontrado la búsqueda</h3>;
  <?php endif;?>

    
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