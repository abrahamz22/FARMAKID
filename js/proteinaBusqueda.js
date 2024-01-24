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
    function ocultarBusc(){
    let usuario = getCookie("usuario");
    if(usuario == "admin"){ 
            for(let i = 0; i < document.getElementsByClassName("boton").length; i++){
                document.getElementsByClassName("boton")[i].style.display = "block";
            }
            document.getElementById("añadir").style.display = "block";
        } 
    if(usuario == "usuario"){ 
        for(let i = 0; i < document.getElementsByClassName("boton").length; i++){
            document.getElementsByClassName("boton")[i].style.display = "none";
        }
        document.getElementById("añadir").style.display = "none";

    }  

    if(usuario == "editor"){ 
        for(let i = 0; i < document.getElementsByClassName("boton").length; i++){
            document.getElementsByClassName("boton")[i].style.display = "none";
        }
        document.getElementById("añadir").style.display = "none";
    }  
    } 
    ocultarBusc();
    
    
   });