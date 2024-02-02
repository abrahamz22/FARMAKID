<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicidad</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/publicidad.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
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
     <!--MARCAS-->
     <div class="publi">
        <h2 class="publicidad">Confían en Pharma kids...</h2>
        <div id="marcas">
            <a href="https://www.jnj.com/" target="_blank"><img src="multimedia/johnson.png" alt="johnson"></a>
            <a href="https://www.nivea.es/" target="_blank"><img src="multimedia/nivea.png" alt="nivea"></a>
            <a href="https://www.pfizer.es/" target="_blank"><img src="multimedia/pzifer.png" alt="pzifer"></a>
            <a href="https://www.nutriben.es/" target="_blank"><img src="multimedia/nutriben.png" alt="nutriben"></a>
            <a href="https://www.bayer.com/es/es/espana-home" target="_blank"><img src="multimedia/bayer.png" alt="bayer"></a>
            <a href="https://www.novartis.com/es-es/" target="_blank"><img src="multimedia/novartis.png" alt="novartis"></a>
        </div>
    </div>
     <!--/MARCAS-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>