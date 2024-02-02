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
              <td ><input type="text" id="name" placeholder="IBUPROFEN"></input><input class="edit" type="button" value="EDITAR NOMBRE"></input></td>
            </tr>

            <tr class="editar_tr">
              <td id="columna1">ID:</td>
              <td><input type="text" id="id" placeholder="CHEMBL521"><input class="edit2" type="button" value="EDITAR ID"></input></td>
            </tr>

            <tr class="editar_tr">
              <td id="columna1">Data:</td>
              <td><input type="text" id="data" placeholder="...."><input class="edit" type="button" value="EDITAR DATA"></input></td>
            </tr>
            
            

            <tr class="editar_tr">
                <td id="columna1">InChl:</td>
                <td><input type="text" id="InChl" placeholder="InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)"><input class="edit2" type="button" value="EDITAR InChl"></input></td>
            </tr>

            <tr class="editar_tr">
            <td id="columna1">SMILES:</td>
            <td><input type="text" id="SMILES" placeholder="CC(C)Cc1ccc(C(C)C(=O)O)cc1"><input class="edit" type="button" value="EDITAR SMILES"></input></td>
            </tr>

            <tr class="editar_tr">
            <td id="columna1">Nombre del fichero:</td>
            <td><input type="text" id="nombre_fichero" placeholder="CHEMBL521.smi"><input class="edit2" type="button" value="EDITAR"></input></td>
            </tr>

            <tr class="editar_tr">
            <td id="columna1">Tipos del fichero:</td>
            <td><input type="text" id="tipos" placeholder="(.smi)"><input class="edit" type="button" value="EDITAR FICHERO"></input></td>
            </tr>
            <tr class="editar_tr">
                <td id="columna1">Estado del medicamento:</td>
                <td><input type="text" id="especie" placeholder="Aprobado"><input class="edit2" type="button" value="EDITAR ESTADO"></input></td>
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
    <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>