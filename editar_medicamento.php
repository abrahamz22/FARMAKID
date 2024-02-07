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
    <link rel="stylesheet" type="text/css" href="css/medicamentos.css">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/medicamentosEditar.js"></script>
    <input  id="selector" type="hidden" value="1">
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->

    

   <!--SECCION DE EDITAR MEDICAMENTOS-->
   
   <div class="contenedor-principal">
    <div class="contenedor-titulo">
        <h1>Editar medicamento</h1>
    </div>

    
</div>



<main>
    <div class="contenedor-img">

        <img class="img1" src="multimedia/proteinas/Albumina.jpg" alt="Imagen no encontarda">
        <input class="edit-fot-med" type="button" value="EDITAR FOTO" ></input>
    </div>

<div class="container-info">
    <div class="container-table">
        <table>
            
            <tr class="editar_tr">
              <td id="columna1">Name:</td>
              <td ><input type="text" id="name" value="IBUPROFEN" readonly></input><input class="edit" type="button" value="EDITAR NOMBRE"></input></td>
            </tr>

            <tr class="editar_tr">
              <td id="columna1">ID:</td>
              <td><input type="text" id="id" value="CHEMBL521" readonly><input class="edit2" type="button" value="EDITAR ID"></input></td>
            </tr>

            <tr class="editar_tr">
              <td id="columna1">Data:</td>
              <td><input type="text" id="data" value="...." readonly><input class="edit" type="button" value="EDITAR DATA"></input></td>
            </tr>
            
            

            <tr class="editar_tr">
                <td id="columna1">InChl:</td>
                <td><input type="text" id="InChl" value="InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)" readonly><input class="edit2" type="button" value="EDITAR InChl"></input></td>
            </tr>

            <tr class="editar_tr">
            <td id="columna1">SMILES:</td>
            <td><input type="text" id="SMILES" value="CC(C)Cc1ccc(C(C)C(=O)O)cc1" readonly><input class="edit" type="button" value="EDITAR SMILES"></input></td>
            </tr>

            <tr class="editar_tr">
            <td id="columna1">Nombre del fichero:</td>
            <td><input type="text" id="nombre_fichero" value="CHEMBL521.smi" readonly><input class="edit2" type="button" value="EDITAR"></input></td>
            </tr>

            <tr class="editar_tr">
            <td id="columna1">Tipos del fichero:</td>
            <td><input type="text" id="tipos" value="(.smi)" readonly><input class="edit" type="button" value="EDITAR FICHERO"></input></td>
            </tr>
            <tr class="editar_tr">
                <td id="columna1">Estado del medicamento:</td>
                <td><input type="text" id="especie" value="Aprobado" readonly><input class="edit2" type="button" value="EDITAR ESTADO"></input></td>
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