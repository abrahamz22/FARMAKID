
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
    function ocultarEdit(){
    let usuario = getCookie("usuario");
    if(usuario == "admin"){ 
            for(let i = 0; i < document.getElementsByClassName("edit").length; i++){
                document.getElementsByClassName("edit")[i].style.display = "block";
            }
            for(let i = 0; i < document.getElementsByClassName("edit2").length; i++){
                document.getElementsByClassName("edit2")[i].style.display = "block";
            }    
            for(let i = 0; i < document.getElementsByClassName("edit-prot").length; i++){
                document.getElementsByClassName("edit-prot")[i].style.display = "block";
            } 
        } 
    if(usuario == "usuario"){ 
        for(let i = 0; i < document.getElementsByClassName("edit").length; i++){
            document.getElementsByClassName("edit")[i].style.display = "none";
        }
        for(let i = 0; i < document.getElementsByClassName("edit2").length; i++){
            document.getElementsByClassName("edit2")[i].style.display = "none";
        }    
        for(let i = 0; i < document.getElementsByClassName("edit-prot").length; i++){
            document.getElementsByClassName("edit-prot")[i].style.display = "none";
        } 

    }  

    if(usuario == "editor"){ 
        for(let i = 0; i < document.getElementsByClassName("edit").length; i++){
            document.getElementsByClassName("edit")[i].style.display = "block";
        }
        for(let i = 0; i < document.getElementsByClassName("edit2").length; i++){
            document.getElementsByClassName("edit2")[i].style.display = "block";
        }    
        for(let i = 0; i < document.getElementsByClassName("edit-prot").length; i++){
            document.getElementsByClassName("edit-prot")[i].style.display = "block";
        } 

    }  
    } 
    ocultarEdit();
    
    
   });