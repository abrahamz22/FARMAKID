window.addEventListener('load', function() {
    document.getElementsByClassName("botonUsuario")[3].addEventListener("click", function deslogearse(event) {
        document.cookie = "usuario=";
        let usuario = getCookie("usuario");
        alert(usuario);

  })     


   });

