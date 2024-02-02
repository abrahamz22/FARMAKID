<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteínas</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/proteinas.css">
    <link rel="stylesheet" type="text/css" href="css/headerBlue.css">
    <link rel="stylesheet" type="text/css" href="css/footerBlue.css">
    <input  id="selector" type="hidden" value="2">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
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

   <!--CONTENEDOR DE BUSQUEDA DE PROTEINAS-->
   <div class="contenedor-principal">
    <div class="contenedor-titulo">
        <h1>Búsqueda de estructura</h1>
    </div>

    
</div>



<main>
    <div class="contenedor-img">

        <img class="img1" src="multimedia/proteinas/Albumina.jpg" alt="Imagen no encontarda">
        <input class="edit-prot" type="submit" value="EDITAR FOTO" ></input>


    </div>

<div class="container-info">
    <div class="container-table">
        <table>
            
            <tr class="edit_tr1">
              <td id="columna1">Name:</td>
              <td ><input type="text" id="name"></input></td>
            </tr>
            <tr class="edit_tr1">
              <td id="columna1">ID:</td>
              <td><input type="text" id="id"></td>
            </tr>
            <tr class="edit_tr1">
              <td id="columna1">Data:</td>
              <td><input type="text" id="data"></td>
            </tr>
            <tr class="edit_tr1">
              <td id="columna1">Especie(Animal/Vegetal):</td>
              <td><input type="text" id="especie"></td>
            </tr>
            <tr class="edit_tr1">
                <td id="columna1">Método:</td>
                <td><input type="text" id="metodo"></td>
              </tr>
              <tr class="edit_tr1">
                <td id="columna1">Resolución:</td>
                <td><input type="text" id="resolucion"></td>
              </tr>
              <tr class="edit_tr1">
                <td id="columna1">Nombre del fichero:</td>
                <td><input type="text" id="nombre_fichero"></td>
              </tr>
              <tr class="edit_tr1">
                <td id="columna1">Tipos del fichero:</td>
                <td><input type="text" id="tipos"></td>
              </tr>
          </table>
    </div>
</div>
</main>

<div class="input_field">
    <button type="button"  class="enviar"><a href="proteina-busqueda.php">BUSCAR</a></button>
</div>
<!--CONTENEDOR DE BUSQUEDA DE PROTEINAS-->


    <!--FOOTER-->
    <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>