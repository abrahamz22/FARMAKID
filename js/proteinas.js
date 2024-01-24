

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
            for(posicion in document.getElementsByClassName("edit")){
                document.getElementsByClassName("edit")[posicion].style.display = "block";
            }
            for(posicion in document.getElementsByClassName("edit-prot")){
                document.getElementsByClassName(".boton")[posicion].style.display = "block";
            }
            for(posicion in document.getElementsByClassName("edit")){
                document.getElementsByClassName("edit")[posicion].style.display = "block";
            }
    } 
    if(usuario == "usuario"){ 

    }  

    if(usuario == "editor"){ 

    }  
    } 
    ocultarBotones();
    
    
   });