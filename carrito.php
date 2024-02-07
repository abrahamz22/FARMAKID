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
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->
    
  

    <!--CONTENEDOR CARRITO-->
    <div class="container-carrito">
        <h1>Carrito de compra</h1>
        <h3>Productos en cola</h3>
    <div class="linea"></div>
        <div class="contenido-carrito">
            <div class="imagenes-carrito">
                <div class="carrito">
                    <img class="img" src="multimedia/carrito/apiretal.png" alt="no se encuentra">
                    <p>Apiretal 100mg
                        5,49$</p>
                    <img class="img" src="multimedia/carrito/carnotprim.png" alt="no se encuentra">
                    <p>Carnotprim 100ml
                        13,33$</p>
                    <img class="img" src="multimedia/carrito/Ensoy.jpg" alt="no se encuentra">
                    <p>Ensoy 400gr
                        13,67$</p>


                </div>
                
            

                <div class="carrito">
                    <img class="img" src="multimedia/carrito/pediasure.jpg" alt="no se encuentra">
                    <p>Pediasure 850 gr
                        19,98$</p>
                    <img class="img" src="multimedia/carrito/dramame.png" alt="no se encuentra">
                    <p>Dramame 250mg/100ml
                        5,49$</p>
                    <img class="img" src="multimedia/carrito/pediasure.jpg" alt="no se encuentra">
                    <p>Pediasure 850 gr
                        19,98$</p>


                </div>

            
                <div class="carrito">
                    <img class="img" src="multimedia/carrito/dalsy.png" alt="no se encuentra">
                    <p>Dalsy 40 mg/ml</p><br>
                    <img class="img" src="multimedia/carrito/meritene.jpg" alt="no se encuentra">
                    <p>Meritene 100mg/ml
                        5,49$</p>
                    <img class="img" src="multimedia/carrito/ensure.png" alt="no se encuentra">
                    <p>Ensure 400gr
                        15,40$</p>
                </div>
            </div>
        <div class="pedido">
                <h2>Resumen del pedido</h2>
                <div class="linea"></div>
                <input type="text"><br><br><br><br>

                <h3>Mercancia:</h3><br><br>

                <h3>Compra estimada</h3><br>
                <div class="linea"></div><br>

                <h3>ORDER TOTAL:</h3><br><br>

                <input class="my-input" type="text" placeholder="PAGAR CON TARGETA">

        </div>
        </div>
    </div>
    <!--/CONTENEDOR CARRITO-->
    




    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->
</body>
</html>