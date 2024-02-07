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
    <script src="js/medicamentoBusqueda.js"> </script>
    <input  id="selector" type="hidden" value="1">
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->
    
   
    
    
    <!--AQUI VA MEDICAMENTOS INICIOO-->
    <div class="container-general">

        <div class="title">
            <h1>Medicamentos</h1>
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
            <input id="añadir" value="Añadir Medicamento" type="button" ></input>
        </div>

        <div class="container-medica">

            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>
                <p>Dextrometorfano</p>
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>

            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>                <p>Paracetamol</p>
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>

            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>                <p>Ibuprofeno</p>
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>

            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>             
                <p>Amoxicilina</p>
                
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>


            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>                <p>Ranitidina</p>
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>

            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a> 
                <p>Cetirizina</p>
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>

            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>
                <p>Salbutamol</p>
                
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>

            <div class="med">
                <a href="editar_medicamento.php">
                    <img class="img-ej" src="multimedia/proteinas/Albumina.jpg">
                </a>
                <p>Vitamina D</p>
                <div class="superpos">
                    <input class="boton" type="button" value="Borrar">
                </div>
            </div>

        </div>
    </div>  
    <!--//AQUI TERMINA MEDICAMENTOS INICIOO-->
    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>