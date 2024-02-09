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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="header.js"></script>
    
    <script src="js/login.js"></script>
</head>
<body>
    <!--HEADER-->
    <?php require("footerHeader/header.php")?>
    <!--/HEADER-->
    
    
<!-- contenedor de los elementos  -->
<div class="header-titulo">
    <h1>Carrito de compra</h1>
</div>
<div class="container-carrito">
<!-- </div> -->
    <div class="contenedor-items">
        <div class="item">
            <span class="titulo-item">Apiretal</span>
            <img class="img-item" src="multimedia/carrito/apiretal.png" alt="no se encuentra">
            <span class="precio">5.45</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>

        <div class="item">
            <span class="titulo-item">Dramame</span>
            <img class="img-item" src="multimedia/carrito/dramame.png" alt="no se encuentra">
            <span class="precio">5.45</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>

        <div class="item">
            <span class="titulo-item">Dalsy</span>
            <img class="img-item" src="multimedia/carrito/dalsy.png" alt="no se encuentra">
            <span class="precio">4.09$</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>

        <div class="item">
            <span class="titulo-item">Meritene</span>
            <img class="img-item" src="multimedia/carrito/dalsy.png" alt="no se encuentra">
            <span class="precio">3.78$</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>

        <div class="item">
            <span class="titulo-item">Apiretal</span>
            <img class="img-item" src="multimedia/carrito/pediasure.jpg" alt="no se encuentra">
            <span class="precio">4.45$</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>

        <div class="item">
            <span class="titulo-item">Apiretal</span>
            <img class="img-item" src="multimedia/carrito/apiretal.png" alt="no se encuentra">
            <span class="precio">5.45</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>

        <div class="item">
            <span class="titulo-item">Dramame</span>
            <img class="img-item" src="multimedia/carrito/dramame.png" alt="no se encuentra">
            <span class="precio">5.45</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>


        <div class="item">
            <span class="titulo-item">Dramame</span>
            <img class="img-item" src="multimedia/carrito/dramame.png" alt="no se encuentra">
            <span class="precio">5.45</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>


        <div class="item">
            <span class="titulo-item">Dramame</span>
            <img class="img-item" src="multimedia/carrito/dramame.png" alt="no se encuentra">
            <span class="precio">5.45</span>
            <button class="boton-item">Agregar al carrito</button>
        </div>
    </div>    

<!-- CARRITO DE COMPRA -->
    <div class="carrito">
        <div class="header-carrito">
            <h2>Tu carrito</h2>        
        </div>

        <div class="carrito-items">
            <div class="carrito-elemento">
                <img class="img" src="multimedia/carrito/dramame.png" width="80px" alt="no se encuentra">
                <div class="carrito-detalles">
                    <span class="carrito-item-titulo">Dramame</span>
                    <div class="cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-cantidad" disabled> 
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$4,45</span>
                </div>
                <span class="boton-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>

            <div class="carrito-elemento">
                <img class="img" src="multimedia/carrito/dalsy.png" width='80px' alt="no se encuentra">
                <div class="carrito-detalles">
                    <span class="carrito-item-titulo">Dramame</span>
                    <div class="cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="2" class="carrito-cantidad" disabled> 
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$3,04</span>
                </div>
                <span class="boton-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>

            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu total</strong>
                    <span class="carrito-precio-total">
                        $10.00,00$
                    </span>
                </div>
            
            <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i></button>

            </div>

        </div>
    </div>
</div>
<!--/CONTENEDOR CARRITO-->







    <!--FOOTER-->
    <?php require("footerHeader/footer.php")?>
    <!--/FOOTER-->

<!-- 
    <div class="carrito1">
                <p>Apiretal 100mg
                    5,49$</p>
            </div>
            

            <div class="carrito">
                
                <img class="img" src="multimedia/carrito/carnotprim.png" alt="no se encuentra">
                <p>Carnotprim 100ml
                    13,33$</p>
                
            </div>


            <div class="carrito">
                
                <img class="img" src="multimedia/carrito/Ensoy.jpg" alt="no se encuentra">
                <p>Ensoy 400gr
                    13,67$</p>
            </div>
        

            <div class="carrito">
                <img class="img" src="multimedia/carrito/pediasure.jpg" alt="no se encuentra">
                <p>Pediasure 850 gr
                    19,98$</p>
                
            </div>

            <div class="carrito">
                <img class="img" src="multimedia/carrito/dramame.png" alt="no se encuentra">
                
                <p>Dramame 250mg/100ml
                    5,49$</p>
                
            </div>



            <div class="carrito">
               
                <img class="img" src="multimedia/carrito/pediasure.jpg" alt="no se encuentra">
                <p>Pediasure 850 gr
                    19,98$</p>
            </div>

        
            <div class="carrito">
                <img class="img" src="multimedia/carrito/dalsy.png" alt="no se encuentra">
                <p>Dalsy 40 mg/ml</p><br>
               
            </div>

            <div class="carrito">
                
                <img class="img" src="multimedia/carrito/meritene.jpg" alt="no se encuentra">
                <p>Meritene 100mg/ml
                    5,49$</p>
                
            </div>


            <div class="carrito">
                
                <img class="img" src="multimedia/carrito/ensure.png" alt="no se encuentra">
                <p>Ensure 400gr
                    15,40$</p>
            </div> -->
</body>
</html>