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
    <!--CONTENEDOR REGISTRATEE-->
    <div class="container-registro">
        <?php if(isset($_SESSION["mensajeError"]))://si el mensaje de error existe?>
            <p id="divError"><?php echo $_SESSION["mensajeError"]//imprimimos?></p>
        <?php endif;?>
        <?php if(isset($_SESSION["ExitoRegistro"]))://si el mensaje de error existe?>
            <p id="ExitoRegistro"><?php echo $_SESSION["ExitoRegistro"]//imprimimos?></p>
        <?php endif;?>
        <?php unset($_SESSION["ExitoRegistro"]);//borramos variable por si el usuario reinicia la página, así no volverá a aparecer el mensaje de error?>
        <?php unset($_SESSION['mensajeError']);//borramos variable por si el usuario reinicia la página, así no volverá a aparecer el mensaje de error?>
        <div id="registro">
            <form class="formulario-register" action = "bbdd/registro.php" method="post">
                <div class="signup">
                    <img class="registro" src="multimedia/loggin-register/registro2.jpg" alt="no funciona">
                </div>
                <div class="container-reg">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" >
                        <input type="text" name="apellido" placeholder="Apellidos">
                        <input type="email" name="email" placeholder="Email">
                        <input type="tetx" name="usuario" placeholder="Usuario">
                        <input type="number" name="cp" placeholder="Código postal">
                        <input type="id" name="dni" placeholder="DNI/NIE">
                        <input type="number" name="telefono" placeholder="Otro teléfono de contacto">
                        <input type="password" name="contrasena" placeholder="Contraseña">
                        <input type="password" name="confirm" placeholder="Confirmar contraseña">
                        <button type="submit" name="registrarse" >Registrarse</button>
                </div>
            </form>
        </div>
    </div>


    <!--////CONTENEDOR REGISTRATEE-->
    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>