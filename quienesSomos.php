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
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input  id="selector" type="hidden" value="4">
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

    <!--QUIENES SOMOS-->

    <div class="container-quienes">
        <h1>¿Quiénes somos?</h1>
        <img  src="multimedia/Conocenos.jpg">


        

        <p>En [Nombre de tu Empresa], nos enorgullece servir como una farmacia comprometida con la salud y el bienestar de los niños. Nuestra misión es proporcionar soluciones de salud de alta calidad para las necesidades específicas de los más pequeños de la familia. Con años de experiencia en el campo de la pediatría y la farmacología, nuestro equipo de profesionales está dedicado a brindar productos farmacéuticos seguros y suplementos de proteínas de alta calidad diseñados especialmente para los niños.</p>
        <h2>Nuestra Visión</h2>

        <div class="vision">
            <img src="multimedia/quienesSomos.jpg" alt="quiene somos img">
        <p>Mejorar la comprensión y gestión de medicamentos y proteínas en el ámbito pediátrico, aspirando a convertirnos en el recurso de confianza para los padres y cuidadores que buscan el mejor cuidado de la salud para sus hijos. Creemos fervientemente que cada niño merece un comienzo saludable en la vida, y estamos comprometidos a brindar las herramientas necesarias para lograrlo mediante la entrega de recursos educativos y herramientas prácticas. Nuestra visión se centra en empoderar a las familias para tomar decisiones informadas y proactivas en el cuidado de la salud de sus hijos,
             creando un impacto positivo en su bienestar a largo plazo. Una de nuestras metas es desarrollar contenido multimedia en diversos formatos, como videos, infografías animadas, para adaptarse a diferentes estilos de aprendizaje.</p>
            
        </div>
    </div>
    <!--//QUIENES SOMOS-->

    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>