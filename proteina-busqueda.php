<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/proteina_busqueda.css">
    <link rel="stylesheet" type="text/css" href="css/proteinas.css">
    <link rel="stylesheet" type="text/css" href="css/headerBlue.css">
    <link rel="stylesheet" type="text/css" href="css/footerBlue.css">
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/proteinaBusqueda.js"></script>
    <input id="selector" type="hidden" value="2">
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->
    
    


     <!--CONTENEDOR GENERAL DE PROTEINAS-INICIO-->
     <div class="container-general">

        <div class="title-prote">
            <h1>Proteinas</h1>
        </div>

        <div class="filtro">
            
            <input type="text" id="seleccion" list="lista-options" placeholder="Ordenar por">
            <datalist id="lista-options">
                <option value="Orden de fecha">
                <option value="Orden por precio">
                <option value="Ordenar por recien añadido">
            </datalist>

        </div>
        

        <div id="btn-admin">
            <input id="añadir" value="Añadir proteina" type="button" ></input>
        </div>

        <div class="container-proteinas">
            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
                
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

            <div class="proteina">
                <a href="editar_proteina.php" ><img class="img-ejem" src="multimedia/proteinas/Albumina.jpg"></a>
                <p>Albumina</p>
                   
                    <input class="boton" type="button" value="Borrar">
            </div>

        </div>
    </div>
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->

</body>
</html>