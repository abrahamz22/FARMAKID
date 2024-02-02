/*window.addEventListener('load', function() {
    document.getElementById("buttonLogin").addEventListener("click", function logearse(event) {
        let usuario = document.getElementById("usuario").value;
        let contrasena = document.getElementById("contrasena").value;

        if(usuario == "usuario" || usuario == "admin" || usuario == "editor"){
            if(usuario == "usuario"){
                if(contrasena == "123"){
                    document.cookie = "usuario="+usuario;
                    window.location.href = "usuario.php";
                }else{
                    document.getElementById("divError").innerHTML = "La <b>contraseña</b> es incorrecta";
                    document.getElementById("divError").style.display = "block";
                }
            }
            if(usuario == "editor"){
                if(contrasena == "1a2b"){
                    document.cookie = "usuario="+usuario;
                    window.location.href = "editor.php";
                }else{
                    document.getElementById("divError").innerHTML = "La <b>contraseña</b> es incorrecta";
                    document.getElementById("divError").style.display = "block";
                }
            }
            if(usuario == "admin"){
                if(contrasena == "abc"){
                    document.cookie = "usuario="+usuario;
                    window.location.href = "administrador.php";
                }else{
                    document.getElementById("divError").innerHTML = "La <b>contraseña</b> es incorrecta";
                    document.getElementById("divError").style.display = "block";
                }
            }
        }else{
            document.getElementById("divError").innerHTML = "El <b>usuario</b> no existe";
            document.getElementById("divError").style.display = "block";
        }

  })     


   });


   function borrarCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var igual = cookie.indexOf("=");
        var nombre = igual > -1 ? cookie.substr(0, igual) : cookie;
        document.cookie = nombre + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }

    console.log("Cookies borradas");
}*/

