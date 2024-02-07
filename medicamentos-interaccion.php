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
    <input id="selector" type="hidden" value="1">
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->


   

    <!--INTERACCIONES ENTRE MEDICAMENTOS-->
    <div class="contenedor-principal">
        <h1 class="titulo">Interacciones entre medicamentos</h1>
        <p>Una interacción de medicamentos es un cambio en la forma en que un medicamento actúa en el cuerpo cuando se toma con otras medicinas, alimentos o suplementos; o cuando se toma mientras tiene ciertas afecciones médicas.
        </p>

        <p>Por ejemplo, entre:<br>
            - Dos medicamentos, como aspirina y anticoagulantes<br>
            - Medicamentos y alimentos, como estatinas y pomelo<br>
            - Medicamentos y suplementos, como ginkgo y anticoagulantes<br>
            - Medicamentos y afecciones médicas, como aspirina y úlceras pépticas</p>
        
        <p>Las interacciones podrían hacer que un medicamento sea más o menos efectivo, causar efectos secundarios o cambiar la forma en que funcionan uno o ambos medicamentos.</p>
        
        
        <h2>Efectos secundarios</h2>
        
        <div class="banco-img">
            <div class="container-imagen">
                <img class="imagen" src="multimedia/medicamentos/dolor-estomago.png" alt="no se encuentra">
                <b>Dolor de estomago</b>
            </div>

            <div class="container-imagen">
                <img class= "imagen" src="multimedia/medicamentos/somnolencia.png">
                <b>Somnolencia</b>
            </div>

            <div class="container-imagen">
                <img class="imagen" src="multimedia/medicamentos/boca-seca.webp">
                <b>Boca seca</b>
            </div>
        </div>
    </div>
    <!--/INTERACCIONES ENTRE MEDICAMENTOS-->


    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>