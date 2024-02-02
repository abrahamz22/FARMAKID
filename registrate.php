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
    <script src="https://kit.fontawesome.com/b0bcda9532.js" crossorigin="anonymous"></script>
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input  id="selector" type="hidden" value="0">
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
    <!--CONTENEDOR REGISTRATEE-->
    <div class="container-registro">
        
        <form class="formulario-register">
            
                <div class="signup">
                    <img class="registro" src="multimedia/loggin-register/registro2.jpg" alt="no funciona">
                </div>
            <div class="container-reg">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellidos" required>
                <input type="text" name="email" placeholder="Email">
                <input type="tetx" name="usuario" placeholder="Usuario">
                <input type="text" name="C.P" placeholder="Código postal">
                <input type="id" id="identification" placeholder="DNI/NIE" required>
                <input type="text" name="phone contact" placeholder="Otro teléfono de contacto" required>
                <input type="password" name="contraseña" placeholder="Contraseña" required>
                <input type="password" name="confirm" placeholder="Confirmar contraseña" required>
                <button type="submit" name="registrarse" >Registrarse</button>
            </div>
        </form>
    </div>


    <!--////CONTENEDOR REGISTRATEE-->
    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>