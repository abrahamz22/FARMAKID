<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <link rel="stylesheet" type="text/css" href="css/headerBlue.css">
    <link rel="stylesheet" type="text/css" href="css/footerBlue.css">
    <link rel="stylesheet" type="text/css" href="css/proteinas.css">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/proteinasEditar.js"></script>
   
    <input  id="selector" type="hidden" value="2">
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


   <!--SECCION DE EDITAR MEDICAMENTOS-->
   
   <div class="contenedor-principal">
    <div class="contenedor-titulo">
        <h1>Editar proteina</h1>
    </div>

    
</div>

<main>
    <div class="contenedor-img">

        <img class="img1" src="multimedia/proteinas/Albumina.jpg" alt="Imagen no encontarda">
        <input class="edit-prot" type="button" value="EDITAR FOTO" ></input>
    </div>

<div class="container-info">
    <div class="container-table">
        <table>
            
            <tr class="editar_tr">
              <td class="columna1">Name:</td>
              <td ><input type="text" id="name" placeholder="T STATE HUMAN HEMOGLOBIN"></input><input class="edit" type="button" value="EDITAR NOMBRE"></td>
              
            </tr>

            <tr class="editar_tr">
              <td class="columna1">ID:</td>
              <td><input type="text" id="id" placeholder="1VWT"></input><input class="edit2" type="button" value="EDITAR ID"></td>
            </tr>

            <tr class="editar_tr">
              <td class="columna1">Data:</td>
              <td><input type="text" id="data" placeholder="...."></input><input class="edit" type="button" value="EDITAR DATA"></td>
            </tr>
            
            <tr class="editar_tr">
                <td class="columna1">Especie:</td>
                <td><input type="text" id="Especie" placeholder="Homo sapiens"></input><input class="edit2" type="button" value="EDITAR ESPECIE"></td>
            </tr>

            <tr class="editar_tr">
                <td class="columna1">Metodo:</td>
                <td><input type="text" id="metodo" placeholder="X-RAY DIFFRACTION"></input><input class="edit" type="button" value="EDITAR METODO"></td>
            </tr>

            <tr class="editar_tr">
                <td class="columna1">Nombre del fichero:</td>
                <td><input type="text" id="nombre_fichero" placeholder="1vwt.pdb"></input><input class="edit2" type="button" value="EDITAR"></td>
            </tr>

            <tr class="editar_tr">
                <td class="columna1">Tipos del fichero:</td>
                <td><input type="text" id="tipos" placeholder="(.pdb)"></input><input class="edit" type="button" value="EDITAR TIPO"></td>
            </tr>
            <tr class="editar_tr">
                <td class="columna1">Resolucion:</td>
                <td><input type="text" id="resolucion" placeholder=" 1.90 Å"></input><input class="edit2" type="button" value="EDITAR RESOLUCION"></td>
            </tr>

          </table>
    </div>
</div>
</main>

<div class="input_field">
    <button type="submit" value="SAVE" class="enviar">SAVE</button>
</div>
   <!--/SECCION DE EDITAR MEDICAMENTOS-->



    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>