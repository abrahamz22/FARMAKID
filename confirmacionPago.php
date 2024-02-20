<?php
// métodoPago.php

// Aquí deberías incluir cualquier lógica específica para el método de pago, como procesar información del usuario, validar la elección del pago, etc.
// ...

// Inicia la sesión si aún no está iniciada
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <link rel="icon" href="multimedia/icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/medicamentos.css" >
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <link rel="stylesheet" type="text/css" href="css/footer.css" >
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <!-- <link rel="stylesheet" type="text/css" href="css/tablas.css" > -->
    <script src="header.js"></script>
    <script src="js/login.js"></script>

</head>
<body>

<!--HEADER-->
<?php require("footerHeader/header.php")?>
    <!--/HEADER-->

    <div class="contenedor_pago">
        <h1>Selecciona tu método de pago</h1>

        <form method="post" action="procesarPago.php">

            <label>
                <input type="radio" name="metodo_pago" value="tarjeta_credito">
                Tarjeta de Crédito
            </label>

            <label>
                <input type="radio" name="metodo_pago" value="paypal">
                PayPal
            </label>


            <button type="submit" name="confirmar_pago">Confirmar Pago</button>
        </form>
    </div>
  <!--FOOTER-->
  <?php require("footerHeader/footer.php")?>
  <!--/FOOTER-->
</body>
</html>