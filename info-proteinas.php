<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <link rel="stylesheet" type="text/css" href="css/headerBlue.css" >
    <link rel="stylesheet" type="text/css" href="css/footerBlue.css" >
    <link rel="stylesheet" type="text/css" href="css/proteinas.css">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input id="selector" type="hidden" value="2">
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
    
    <!--INFORMACION DE LAS PROTEINAS GENERAL-->
    <div class="contenedor-principal-info">

        <!--classe para titulo-->
        <div class="title">
            <h1>Proteinas</h1>
        </div>
        
        <div class="informacion">
        <!--Contenedro de la imagen-->
        <div class="imagen"> 
            <img class="imggg" src="multimedia/proteinas/proteinas.png" alt="no hay "> 
        </div>
            <div class="texto">
                <p>Las proteínas son macromoléculas biológicas compuestas por cadenas de aminoácidos. Son uno de los componentes fundamentales de los seres vivos y desempeñan una variedad de funciones esenciales en 
                     los organismos, incluyendo: <br>

                    Estructural: Las proteínas pueden formar estructuras esenciales en las células y tejidos. Por ejemplo, el colágeno es una  proteína que proporciona resistencia y elasticidad a la piel, los huesos
                    y los tendones.<br>
                
                    Enzimáticas: Las enzimas son proteínas que catalizan reacciones químicas en el cuerpo, acelerando y regulando las reacciones  metabólicas necesarias para el funcionamiento celular.<br>
                
                    Transporte: Algunas proteínas, como la hemoglobina, transportan moléculas importantes, como el oxígeno, a través del torrente sanguíneo.<br>
                
                    Defensa: Los anticuerpos son proteínas del sistema inmunológico que ayudan a combatir infecciones y enfermedades.<br>
                    

                    
                </p>

                    
            </div>
        </div>

        <!--contenedor del subtitulo-->
        <div class="subtitulo">
            <h2>Lista de proteinas más importantes
            </h2>
        </div>


        <div class="banco-img">
            <div class="proteina-lista">
                <img class="proteimg" src="multimedia/proteinas/Albumina.jpg">
                <h3>ALBUMINA</h3>
                <p>La albúmina es una proteína que se encuentra en el suero sanguíneo de los mamíferos, incluyendo los seres humanos. Es la proteína más abundante en el plasma sanguíneo y desempeña varias funciones importantes en el cuerpo.</p>
            </div>

            <div class="proteina-lista">
                <img class="proteimg" src="multimedia/proteinas/caseina.jpg">
                <h3>CASEINA</h3>
                <p>La caseína es una proteína que se encuentra en la leche y es la principal proteína presente en la leche de mamíferos, incluyendo los humanos. La caseína representa aproximadamente el 80% de las proteínas contenidas en la leche de vaca, y su concentración es un poco menor en la leche humana. </p>
            </div>

            <div class="proteina-lista">
                <img class="proteimg" src="multimedia/proteinas/colageno.jpeg">
                <h3>COLÁGENO</h3>
                <p>El colágeno es una proteína estructural esencial que se encuentra en abundancia en el cuerpo humano y en otros animales. Es una de las proteínas más importantes en el tejido conectivo, que forma parte de órganos como la piel, los huesos, los tendones, los cartílagos y los ligamentos.</p>
            </div>

            <div class="proteina-lista">
                <img class="proteimg" src="multimedia/proteinas/hemoglobina.png">
                <h3>HEMOGLOBINA</h3>
                <p>La hemoglobina es una proteína compleja que se encuentra en los glóbulos rojos (eritrocitos) de la sangre y desempeña un papel esencial en el transporte de oxígeno desde los pulmones a los tejidos del cuerpo, así como en el transporte de dióxido de carbono desde los tejidos de vuelta a los pulmones para su eliminación. </p>
        </div>
    </div>
    </div>
    <!--/INFORMACION DE LAS PROTEINAS GENERAL-->

    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>