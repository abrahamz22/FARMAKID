
window.addEventListener('load', function() {
    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') { //c.trim()
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
        }
        }
        return "";
        }
    function ocultarBotones(){
    let usuario = getCookie("usuario");
    if(usuario == "admin"){ 
        document.getElementById("nombreUsuario").href = "administrador.html";
            for(posicion in document.getElementsByClassName("boton")){
                document.getElementsByClassName("boton")[posicion].style.display = "block";
            }
    } 
    if(usuario == "usuario"){ 
        for(posicion in document.getElementsByClassName("boton")){
            document.getElementsByClassName("boton")[posicion].style.display = "none";
        }
    }  

    if(usuario == "editor"){ 
        for(posicion in document.getElementsByClassName("boton")){
            document.getElementsByClassName("boton")[posicion].style.display = "none";
        }
    }  
    } 
    ocultarBotones();
    alert(usuario);
    
   });