
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
    <link rel="stylesheet" type="text/css" href="css/admin.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/admin.js"></script>
</head>
<body>
    
    <!--/HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->
    
    <!--DIV DE USUARIO-->
    <div  id="divUsuario">
        
        <h1><?php echo $_SESSION["usuario"]?> (Administrador)</h1>
        <div id="contImg">
        <img src="multimedia/icon-admin.png" alt="Administrador">
        </div>
        <div>
            <button class="botonUsuario"><a href="tablaUsuario.php">Tabla usuario</a></button>
            <button class="botonUsuario"><a href="tablaMedicamentos.php">Tabla medicamentos</a></button>
            <button class="botonUsuario"><a href="tablaProteinas.php">Tabla proteínas</a></button>
        </div>
        <div>
            <button class="botonUsuario"><a href="bbdd/desconexion.php">Salir de Tu cuenta</a></button>
        </div>
    </div>
    <!--/DIV DE USUARIO-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>