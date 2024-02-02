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
    <header id="header">
        <!--NAV-->
        <nav>
            <img class="imgNav" src="multimedia/logoHeader.png" alt="logo">
            <div id="userInfo">
                <div class="divNav">
                    <img src="multimedia/userIcon.png" alt="User">
                    <a id="nombreUsuario" href="loggin.php">tu cuenta</a>
                </div>
                <div class="divNav">
                    <img src="multimedia/shopping.png" alt="carrito">
                    <a id="carrito" href="carrito.php">carrito</a>
                </div>
            </div>
            <!--BUSCADOR-->
            <div>
                <img id="menuHamburguesa" src="multimedia/iconHamburger.png" alt="hamburguesaMenu">
                <form id="buscador">
                    <button><img id="lupa" src="multimedia/search.png" alt=""></button>
                    <input type="search" name="buscadorProtMed" placeholder="busca entre más de 50 marcas...">
                </form>
            </div>
            <!--/BUSCADOR-->
            <div class="linksNavegacion">
                <a class="navLink" href="index.php">Inicio</a>
                <a class="navLink" href="medicamentos.php">Medicamentos</a>
                <ul class="nav2">
                    <li><a  href="medicamentos-interaccion.php">⚪Interecciones entre medicamentos</a></li>
                    <li><a  href="medicamentos-retirados.php">⚪Medicamentos retirados</a></li>
                </ul>
                <a class="navLink" href="proteinas.php">Proteínas</a>
                <ul class="nav2">
                    <li><a href="info-proteinas.php">⚪Información general sobre las proteínas</a></li>
                </ul>
                <a class="navLink" href="profesionales.php">Contacto</a>
                <a class="navLink" href="quienesSomos.php">¿Quiénes somos?</a>
            </div>
        </nav>
        <!--/NAV-->
    </header>
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
    <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>