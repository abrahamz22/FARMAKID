
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/admin.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
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
    <!--DIV DE USUARIO-->
    <div  id="divUsuario">
        <h1>Cuenta Usuario</h1>
        <div id="contImg">
        <img src="multimedia/userIcon1.png" alt="Administrador">
        </div>
        <div>
            <button class="botonUsuario"><a href="loggin.php">Salir de Tu cuenta</a></button>
        </div>
    </div>
    <!--/DIV DE USUARIO-->
    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>