
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
        <h1>Tabla de Medicamentos</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Data</th>
                <th>InChl</th>
                <th>SMILES</th>
                <th>Nombre del fichero</th>
                <th>Tipos del fichero</th>
                <th>Estado del medicamento</th>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
            <tr>
                <td>IBUPROFEN</td>
                <td>CHEMBL521</td>
                <td>....</td>
                <td>InChI=1S/C13H18O2/c1-9(2)8-11-4-6-12(7-5-11)10(3)13(14)15/h4-7,9-10H,8H2,1-3H3,(H,14,15)</td>
                <td>CC(C)Cc1ccc(C(C)C(=O)O)cc1</td>
                <td>CHEMBL521.smi</td>
                <td>(.smi)</td>
                <td>Aprobado"</td>
            </tr>
        </table>
        <button><a href="administrador.php">Volver a opciones de administrador</a></button>
    </div>
    <!--/DIV DE TABLA-->
    <!--FOOTER-->
    <footer>
    <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>