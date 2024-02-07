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
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->


    
    <!--LOGINNNN-->
    <?php if(isset($_SESSION["mensajeError"]))://si el mensaje de error existe?>
            <p id="divError"><?php echo $_SESSION["mensajeError"]//imprimimos?></p>
    <?php endif;?>
    <?php unset($_SESSION['mensajeError']);//borramos variable por si el usuario reinicia la página, así no volverá a aparecer el mensaje de error?>

    <div id="contenedor">
        <form id="formulario" action="bbdd/conexionUser.php" method="post">
            <div class="container_login">
                <!--<img class="signin" src="imgs/login.jpg" alt="no funciona">/-->
                <i class="fa-solid fa-user-lock login"></i>
            </div>
            <input type="text" name="usuario" id="usuario" placeholder="Tu usuario">
            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
            <div class="form">
                <a href="#">Recordar contraseña</a>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="register">
                <a  href="registrate.php">¿No tienes cuenta? Registrate</a>
            </div>
            <input type="submit" value="LOGIN" id="buttonLogin">
        </form>

    </div>

    <!--/LOGINNNN-->

     <!--FOOTER-->
     <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>