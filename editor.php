<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuemta de Editor</title>
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

    
    <!--DIV DE USUARIO-->
    <div  id="divUsuario">
        <h1><?php echo $_SESSION["usuario"]?> (Editor)</h1>
        <div id="contImg">
        <img src="multimedia/editorIcon.png" alt="Administrador">
        </div>
        <div>
            <button class="botonUsuario"><a href="bbdd/desconexion.php">Salir de Tu cuenta</a></button>
        </div>
    </div>
    <!--/DIV DE USUARIO-->
    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>