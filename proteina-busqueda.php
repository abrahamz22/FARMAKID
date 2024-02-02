<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/proteina_busqueda.css">
    <link rel="stylesheet" type="text/css" href="css/proteinas.css">
    <link rel="stylesheet" type="text/css" href="css/headerBlue.css">
    <link rel="stylesheet" type="text/css" href="css/footerBlue.css">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/proteinaBusqueda.js"></script>
    <input id="selector" type="hidden" value="2">
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


     <!--CONTENEDOR GENERAL DE PROTEINAS-INICIO-->
     <div class="container-general">

        <div class="title-prote">
            <h1>Proteinas</h1>
        </div>

        <div class="filtro">
            
            <input type="text" id="seleccion" list="lista-options" placeholder="Ordenar por">
            <datalist id="lista-options">
                <option value="Orden de fecha">
                <option value="Orden por precio">
                <option value="Ordenar por recien añadido">
            </datalist>

        </div>
        

        <div id="btn-admin">
            <input id="añadir" value="Añadir proteina" type="button" ></input>
        </div>

        <div class="container-proteinas">
            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
                
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

        </div>
    </div>
    <!--FOOTER-->
    <?php require("footer.php")?>
    <!--/FOOTER-->

</body>
</html>