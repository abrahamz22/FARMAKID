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
    <script src="header.js"></script>
    <input  id="selector" type="hidden" value="0">
</head>
<body>
    <!--HEADER-->
    <header id="header">
        <!--NAV-->
        <nav>
            <!--BUSCADOR-->
            <form>
            <input type="search" name="buscadorProtMed" placeholder="busca entre más de 50 marcas...">
            </form>
            <!--/BUSCADOR-->
            <img class="imgNav" src="multimedia/logoHeader.png" alt="logo">
            <div class="linksNavegacion">
                <a class="navLink" href="index.php">Inicio</a>
                <a class="navLink" href="medicamentos.php">Medicamentos</a>
                <a class="navLink" href="proteinas.php">Proteínas</a>
                <a class="navLink" href="profesionales.php">Contacto</a>
                <a class="navLink" href="quienesSomos.php">¿Quiénes somos?</a>
            </div>
            <div class="divNav">
                <img src="multimedia/userIcon.png" alt="User">
                <a href="loggin.php">tu cuenta</a>
            </div>
            <div class="divNav">
                 <img src="multimedia/shopping.png" alt="carrito">
                 <a href="carrito.php">carrito</a>
            </div>
        </nav>
        <!--/NAV-->
    </header>
    <!--/HEADER-->
    <!--MENU DESPLEGABLE MEDICAMENTOS-->
    <div id="desplegableMedicamentos">
        <ul id="listaD">
            <li><a href="medicamentos-interaccion.php">Interecciones entre medicamentos</a></li>
            <li><a href="medicamentos-retirados.php">Medicamentos retirados</a></li>
        </ul>
    </div>
    <!--/MENU DESPLEGABLE MEDICAMENTOS-->
    <!--MENU DESPLEGABLE MEDICAMENTOS-->
    <div id="desplegableProteinas">
        <ul id="listaD">
      
            <li><a href="info-proteinas.php">Información general sobre las proteínas</a></li>
        </ul>
    </div>
    <!--/MENU DESPLEGABLE MEDICAMENTOS-->
    
    <!--CONTENEDOR DEL AVISO LEGAL-->
    
    <div class="container-aviso">

        <h1 class="title-aviso">AVISO DE CONFIDENCIALIDAD
        </h1>


        <p class="parrafo-aviso">
            Este mensaje va dirigido exclusivamente a su destinatario, en caso de haber recibido este mensaje por
            error, puede comunicárnoslo mediante el correo electrónico remitido a nuestra atención y procederemos a
            revisar el motivo del error.
            Asimismo, el email puede contener documentos y/o información confidencial propia o de terceros por lo
            que rogamos que se proceda a su eliminación, tanto del email como de los documentos adjuntos para así
            prevenir mayores fugas de información confidencial.
            En cumplimiento del Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de
            2016, puede ejercer los derechos de acceso, rectificación, cancelación y oposición (derechos ARCO) a
            través de: pharmakid2003.com
            El Aviso de Confidencialidad ha sido creado mediante el generador de textos legales online web el día
            23/11/2023.
        </p>

    </div>
    <!--//CONTENEDOR DEL AVISO LEGAL-->

    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>