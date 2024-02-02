<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesionales</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/profesionales.css">
    <link rel="stylesheet" type="text/css" href="css/headerPink.css" >
    <link rel="stylesheet" type="text/css" href="css/footerPink.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input id="selector" type="hidden" value="3">
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
     <!--MEGADIV-->
     <div id="megadiv">
        <!--PRESENTACIÓN-->
        <div id="presentacion">
            <h1>Consulta con nuestros especialistas</h1>
            <p>¿Tienes una consulta específica? Te ponemos en contacto con los mejores especialistas para responder a tus dudas.Rellene el formulario de contacto y en un plazo de 7 días hábiles te concertamos una visita virtual con él o la profesional que más se adapte a tus necesidades.</p>
        </div>
        <div id="doctora">
            <img src="multimedia/doctora.png" alt="ruizDoctora">
        </div>
        <!--/PRESENTACIÓN-->
        <!--FORMULARIO CONTACTO-->
            <div id="datosCont">
                <h2>Formulario de contacto</h2>
                <form action="">
                    <input  class="input1" type="text" placeholder="Tu nombre">
                    <input class="input1" type="email" placeholder="Correo electrónico">
                    <label for="">Indicanos tu disponibilidad horaria</label>
                    <div>
                        <input  class="input2" type="time">
                        <small>-</small>
                        <input class="input2" type="time">
                    </div>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Describe brevemente el motivo de tu consulta"></textarea>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        <!--/FORMULARIO CONTACTO-->
    </div>
    <!--MEGADIV-->
     <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footer.php")?>
    <!--/FOOTER-->
    
</body>
</html>