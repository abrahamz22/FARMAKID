<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesionales</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/profesionales.css">
    <link rel="stylesheet" type="text/css" href="css/headerPink.css" >
    <link rel="stylesheet" type="text/css" href="css/footerPink.css" >
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input id="selector" type="hidden" value="3">
</head>
<body>
     <!--HEADER-->
     <?php require("footerHeader/header.php")?>
    <!--/HEADER-->
   
     <!--MEGADIV-->
     <div id="megadiv">
        <!--PRESENTACIÓN-->
        <div id="presentacion">
            <h1>Consulta con nuestros especialistas</h1>
            <p>¿Tienes una consulta específica? Te ponemos en contacto con los mejores especialistas para responder a tus dudas.Rellene el formulario de contacto y en un plazo de 7 días hábiles te concertamos una visita virtual con él o la profesional que más se adapte a tus necesidades.</p>
        </div>
                <!-- DIVS CON LOS MENSAJES DE COMPROBACIÓN -->
<?php if(isset($_SESSION["mensajeError"]))://si el mensaje de error existe?>
        <p id="divError"><?php echo $_SESSION["mensajeError"]//imprimimos?></p>
<?php endif;?>
<?php if(isset($_SESSION["ExitoRegistro"]))://si el mensaje de error existe?>
        <p id="ExitoRegistro"><?php echo $_SESSION["ExitoRegistro"]//imprimimos?></p>
<?php endif;?>
        <div id="doctora">
            <img src="multimedia/doctora.png" alt="ruizDoctora">
        </div>
        <!--/PRESENTACIÓN-->
        <!--FORMULARIO CONTACTO-->
            <div id="datosCont">
                <h2>Formulario de contacto</h2>
                <form action="bbdd/crearCita.php" method = "post">
                    <input  class="input1" type="text" name="nombre" placeholder="Tu nombre">
                    <input class="input1" type="email"  name="email" placeholder="Correo electrónico">
                    <label for="">Indicanos tu disponibilidad horaria</label>
                    <div>
                        <input  class="input2" name="hora1" type="time">
                        <small>-</small>
                        <input class="input2"name="hora2" type="time">
                    </div>
                    <textarea name="motivo"  cols="30" rows="10" placeholder="Describe brevemente el motivo de tu consulta"></textarea>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        <!--/FORMULARIO CONTACTO-->
    </div>
    <!--MEGADIV-->
     <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
    
</body>
<?php 
?>
</html>