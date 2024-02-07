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
              <td ><input type="text" id="name" value="T STATE HUMAN HEMOGLOBIN" readonly></input><input class="edit" type="button" value="EDITAR NOMBRE"></td>
              
            </tr>

            <tr class="editar_tr">
              <td class="columna1">ID:</td>
              <td><input type="text" id="id" value="1VWT" readonly></input><input class="edit2" type="button" value="EDITAR ID"></td>
            </tr>

            <tr class="editar_tr">
              <td class="columna1">Data:</td>
              <td><input type="text" id="data" value="...." readonly></input><input class="edit" type="button" value="EDITAR DATA"></td>
            </tr>
            
            <tr class="editar_tr">
                <td class="columna1">Especie:</td>
                <td><input type="text" id="Especie" value="Homo sapiens" readonly></input><input class="edit2" type="button" value="EDITAR ESPECIE"></td>
            </tr>

            <tr class="editar_tr">
                <td class="columna1">Metodo:</td>
                <td><input type="text" id="metodo" value="X-RAY DIFFRACTION" readonly></input><input class="edit" type="button" value="EDITAR METODO"></td>
            </tr>

            <tr class="editar_tr">
                <td class="columna1">Nombre del fichero:</td>
                <td><input type="text" id="nombre_fichero" value="1vwt.pdb" readonly></input><input class="edit2" type="button" value="EDITAR"></td>
            </tr>

            <tr class="editar_tr">
                <td class="columna1">Tipos del fichero:</td>
                <td><input type="text" id="tipos" value="(.pdb)" readonly></input><input class="edit" type="button" value="EDITAR TIPO"></td>
            </tr>
            <tr class="editar_tr">
                <td class="columna1">Resolucion:</td>
                <td><input type="text" id="resolucion" value=" 1.90 Å" readonly></input><input class="edit2" type="button" value="EDITAR RESOLUCION"></td>
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