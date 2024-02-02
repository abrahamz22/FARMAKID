<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-52LHVZG6');</script>
    <!-- End Google Tag Manager -->

    <title>Index</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input  id="selector" type="hidden" value="0">
    
   
</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52LHVZG6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ---------COKIES --------->

    <div class="aviso-cookies " id="cookies">
        <img class="galleta" src="multimedia/cookies/cookie.png" alt="galleta">
        <h3 class="titulo">Cookies</h3>
        <p class="parrafo">Utilizamos cookies propias y de terceros  para mejorar nuestros servicios</p>
        <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
        <a class="enlace" href="aviso_legal.php">Aviso de cookies</a>
    </div>

    <div class="fondo-aviso-cookies " id="fondo-aviso-cookies"></div>

    <script src="js/aviso-cookies.js"></script>

    <!-------- AQUI TERMINA APARTADO DE COOKIES -------->
    
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
    <!--CONTENEDOR PUBLI-->
    <div  id="publicidad22">
        <img  id="imgPub" src="multimedia/publi.jpg" alt="imgPubli">
        <button><a target="_blank" href="https://www.nivea.es/">Marcas</a></button>
    </div>
    <!--/CONTENEDOR PUBLI-->

      <!--CONTENEDOR MAS INFO HOME-->
      <h2 id="titulo1">ESPECIALISTA EN NUSTRO CAMPO DESDE 1920</h2>
      <div id="info-home">
              
              <img src="multimedia/chico-inicio.jpg" alt=" imagen de niño">
  
              <img src="multimedia/inicio-niños.jpeg" alt=" imagen de niño">
  
      </div>
      
      <div id="container-paragrag">
          <p>
            ¡Bienvenidos a Pharmakid, tu guía completa de medicamentos pediátricos! En Pharmakid, nos dedicamos a proporcionar información confiable y fácil de entender sobre medicamentos específicamente diseñados para niños. Sabemos lo importante que es cuidar la salud de los más pequeños de la casa, y nuestro objetivo es brindarte una herramienta útil y segura para tomar decisiones informadas.
            
            Características destacadas de Pharmakid:

            Base de Datos Exhaustiva: Contamos con una extensa base de datos que abarca una amplia gama de medicamentos pediátricos, desde jarabes hasta tabletas y más. Encuentra la información que necesitas de manera rápida y sencilla.
            
            Información Actualizada: Nuestra plataforma se actualiza regularmente para asegurarnos de que siempre tengas acceso a la información más reciente sobre medicamentos, dosis recomendadas, efectos secundarios y precauciones.
            
        </p>

        <p>
            Navegación Intuitiva: Diseñamos Pharmakid pensando en la facilidad de uso. Nuestra interfaz intuitiva te permite buscar medicamentos por nombre, indicación o categoría, proporcionándote resultados precisos de manera instantánea.
            
            Consejos y Recomendaciones: Además de la información básica sobre medicamentos, ofrecemos consejos útiles para el cuidado infantil, así como recomendaciones de profesionales de la salud para garantizar un uso seguro y efectivo de los medicamentos.
            
            Comunidad Pharmakid: Únete a nuestra comunidad en línea donde padres, cuidadores y profesionales de la salud comparten experiencias, consejos y preguntas. ¡Juntos podemos construir un recurso valioso para el bienestar de nuestros niños!
            
            En Pharmakid, entendemos la importancia de la salud infantil, y nos comprometemos a ser tu aliado confiable en el viaje de cuidar a tus seres queridos. Explora nuestra página web y descubre cómo Pharmakid puede ser tu fuente de confianza para obtener información sobre medicamentos pediátricos.


        </p>
      </div>
  
      <!--/CONTENEDOR MAS INFO HOME-->

    <!--/HEADER-->
    <!--FOOTER-->

    <?php require("footerHeader/footer.php")?>
    
</body>
</html>