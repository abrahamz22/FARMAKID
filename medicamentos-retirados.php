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
    <link rel="stylesheet" type="text/css" href="css/medicamentos.css">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <input id="selector" type="hidden" value="1">
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

    <div class="contenedor-principal2">
        <h1>Medicamentos retirados</h1>
        <div class="banco-img">
            <div class="proteina">
                <img class="proteimg" src="multimedia/medicamentos/montelukast.jpg">
                <h3>Montelukast Cinfa
                    Trato de Asma infantil</h3>
                <p>El año pasado la Agencia Española de Medicamentos y Productos Sanitarios (AEMPS) retiró un lote del ibuprofeno Kern Pharma.
                    el jarabe presentó un número de levaduras superior al límite</p>
            </div>

            <div class="proteina">
                <img class="proteimg" src="multimedia/medicamentos/ibuprofeno-kern-pharma.jpeg">
                <h3>Ibuprofeno Ken Pharma EFG</h3>
                <p>El año pasado la Agencia Española de Medicamentos y Productos Sanitarios (AEMPS) retiró un lote del ibuprofeno Kern Pharma.
                    el jarabe presentó un número de levaduras superior al límite. </p>
            </div>

            <div class="proteina">
                <img class="proteimg" src="multimedia/medicamentos/primperan.jpg">
                <h3>Primperan</h3>
                <p>Este compuesto quedó desaconsejado hace tres años en niños y adolescentes, por su homóloga europea por su elevado riesgo de provocar reacciones cardiovasculares adversas.</p>
            </div>

            <div class="proteina">
                <img class="proteimg" src="multimedia/medicamentos/motilium.jpg">
                <h3>Motilium</h3>
                <p>Varios estudios vinculan la domperidona con la aparición de arritmias ventriculares graves o muerte súbita de origen cardiaco. Esto se comercializo em marcas como Motilium. </p>
        </div>
        </div>

        <div class="info">
            <p>Las razones del retiro pueden ser muchos pero las mas comunes son por su fecha de caducidad o bien por infecacia.
            Mientras que las consecuencias es que corre  el riesgo de experimentar efectos secundarios adversos graves que pueden poner en peligro su salud.</p>
        </div>

    </div>

    <!--/ HASTA AQUI MEDICAMENTOS REIRADOS-->
    <!--/HEADER-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>