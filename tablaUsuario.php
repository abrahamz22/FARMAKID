
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
    <link rel="stylesheet" type="text/css" href="css/tablas.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/admin.js"></script>
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
                    <a  id="nombreUsuario" href="loggin.php">tu cuenta</a>
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
    <!--/HEADER-->
     <!--DIV DE TABLA-->
     <div id="divTabla">
        <h1>Tabla de usuarios</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Código Postal</th>
                <th>DNI</th>
                <th>Otro teléfono de contacto</th>
                <th>Contraseña</th>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
            <tr>
                <td>Julio</td>
                <td>Martinez Vazquez</td>
                <td>Martinez_Vazquez@hotmail.es</td>
                <td>MartVez</td>
                <td>08020</td>
                <td>12345678B</td>
                <td>6453789873</td>
                <td>AellaLeGustaLaGasolina44</td>
            </tr>
        </table>
        <button><a href="administrador.php">Volver a opciones de administrador</a></button>
    </div>
    <!--/DIV DE TABLA-->
    <!--FOOTER-->
    <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>