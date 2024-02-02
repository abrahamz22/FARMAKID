<?php
// session_start();
// if(!empty($_SESSION['activo'])){
//     header("location: index.php");
// }else{


// if(!empty($_POST)){
//     if(empty($_POST["usuario"]) || empty($_POST["contraseña"]) ) {
//         echo "INGRESA TU USUARIO Y CONTRASEÑA";
//     }else{
//         include_once('connexionBaseDeDatos.php');
//         $user = mysqli_real_escape_string($conexion, $_POST["usuario"]);
//         $pass = mysqli_real_escape_string($conexion, $_POST["contraseña"]);

//         // $pass = md5(mysqli_real_escape_string($conexion, $_POST["password"]));

//         $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$user' AND Password = '$pass' ");
//         $resultado = mysqli_num_rows($query);

//         if($resultado > 0){
//             $row = mysqli_fetch_assoc($query);
//             session_start();
//             $_SESSION['activo'] = true;
//             $_SESSION['idUsuario'] = $row['IdUsuario'];
//             $_SESSION['nombre'] = $row['nombre']; 
//             // $_SESSION['tipo'] = $row['Tipo']; 


//             header("location: index.php");


//         }else{
//             echo "EL USUARIO Y LA CONTRASEÑA SON INCORRECTOS";
//             session_destroy();
//         }
//     }
// }
// }


// include("bbdd/connexionBaseDeDatos.php");
// session_start();
// $usuarioLocal = $_POST["usuario"];
// // $contraseñaLocal = $_POST["contraseña"];
// $consultaUsuario = "SELECT * FROM `usuario` WHERE usuario LIKE \"$usuarioLocal\"";
// $resultado = mysqli_query($conexion, $consultaUsuario);
// if(mysqli_num_rows($resultado) > 0){
//     $row = mysqli_fetch_assoc($resultado);
//     echo  "Bienvenido " . $row['usuario'];
// }else{
//     echo  "El usuario solicitado no existe";
// }
// echo "</br> Consulta utilizada para la busqueda = " . $consultaUsuario;
?>


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
    <script src="https://kit.fontawesome.com/b0bcda9532.js" crossorigin="anonymous"></script>
    <script src="header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
    <!--HEADER-->
    <header id="header">
        <!--NAV-->
        <nav>
            <img class="imgNav" src="multimedia/logoHeader.png" alt="logo">
            <div id="userInfo">
                <div class="divNav">
                    <img src="multimedia/userIcon.png" alt="User">
                    <a id="nombreUsuario" href="loggin.php">tu cuenta</a>
                </div>
                <div class="divNav">
                    <img src="multimedia/shopping.png" alt="carrito">
                    <a id="carrito" href="carrito.php">carrito</a>
                </div>
            </div>
            <!--BUSCADOR-->
            <div>
                <img id="menuHamburguesa" src="multimedia/iconHamburger.png" alt="hamburguesaMenu">
                <form id="buscador">
                    <button><img id="lupa" src="multimedia/search.png" alt=""></button>
                    <input type="search" name="buscadorProtMed" placeholder="busca entre más de 50 marcas...">
                </form>
            </div>
            <!--/BUSCADOR-->
            <div class="linksNavegacion">
                <a class="navLink" href="index.php">Inicio</a>
                <a class="navLink" href="medicamentos.php">Medicamentos</a>
                <ul class="nav2">
                    <li><a  href="medicamentos-interaccion.php">⚪Interecciones entre medicamentos</a></li>
                    <li><a  href="medicamentos-retirados.php">⚪Medicamentos retirados</a></li>
                </ul>
                <a class="navLink" href="proteinas.php">Proteínas</a>
                <ul class="nav2">
                    <li><a href="info-proteinas.php">⚪Información general sobre las proteínas</a></li>
                </ul>
                <a class="navLink" href="profesionales.php">Contacto</a>
                <a class="navLink" href="quienesSomos.php">¿Quiénes somos?</a>
            </div>
        </nav>
        <!--/NAV-->
    </header>
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
    <!--LOGINNNN-->
    <p id="divError"></p>
    <div id="contenedor">
        <form id="formulario" action="bbdd/conexionUser.php" method="post">
            <div class="container_login">
                <!--<img class="signin" src="imgs/login.jpg" alt="no funciona">/-->
                <i class="fa-solid fa-user-lock login"></i>
            </div>
            <input type="text" name="usuario" id="usuario" placeholder="Tu usuario">
            <input type="password" id="contrasena" name="contraseña" placeholder="Contraseña">
            <div class="form">
                <a href="#">Recordar contraseña</a>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="register">
                <a  href="registrate.php">¿No tienes cuenta? Registrate</a>
            </div>
   
            <input type="button" value="LOGIN" id="buttonLogin">
            <input type="submit" value="Entrar">

        </form>
    </div>

    <!--/LOGINNNN-->

     <!--FOOTER-->
     <?php require("footer.php")?>
    <!--/FOOTER-->
</body>
</html>