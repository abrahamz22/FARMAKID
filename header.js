window.addEventListener('load', function() {
      let navLinks = document.getElementsByClassName("navLink");
      let inicio = navLinks[0];
      let medicamentos = navLinks[1];
      let proteinas = navLinks[2];
      let profesionales = navLinks[3];

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
    
        function obtenerUsuario(){
            let usuario = getCookie("usuario");
     
            if( usuario == ""){
                document.getElementById("carrito").href = "loggin.html";
                document.getElementsByClassName("navLink")[3].href = "loggin.html";
            }
            if(usuario == "usuario"){
                document.getElementById("nombreUsuario").innerHTML = usuario;
                document.getElementById("nombreUsuario").href = "usuario.php";
            }
            if(usuario == "editor"){
                document.getElementById("nombreUsuario").innerHTML = usuario;
                document.getElementById("nombreUsuario").href = "editor.php";
            }
    
            if(usuario == "admin"){
                document.getElementById("nombreUsuario").innerHTML = usuario;
                document.getElementById("nombreUsuario").href = "administrador.php";
            }
        }
    
        obtenerUsuario();
      

      //funcion para ocultar y mostrar menu desplegable de medicamentos
      medicamentos.addEventListener("mouseover", function desplegarMenuMedicamentos(event) {
           document.getElementById("desplegableMedicamentos").style.visibility = "visible";
           document.getElementById("desplegableProteinas").style.visibility = "hidden";

      });

     document.getElementById("desplegableMedicamentos").addEventListener("mouseleave", function ocultarMenuMedicamentos(event) {
            document.getElementById("desplegableMedicamentos").style.visibility = "hidden";      
      })
      inicio .addEventListener("mouseover", function ocultarMenuMedicamentos(event) {
            document.getElementById("desplegableMedicamentos").style.visibility = "hidden";
            document.getElementById("desplegableProteinas").style.visibility = "hidden";      
      })


      //funcion para ocultar y mostrar menu desplegable de proteinas
      proteinas.addEventListener("mouseover", function desplegarProteinas(event) {
            document.getElementById("desplegableProteinas").style.visibility = "visible";
            document.getElementById("desplegableMedicamentos").style.visibility = "hidden";   
 
       });
 
      document.getElementById("desplegableProteinas").addEventListener("mouseleave", function ocultarProteinas(event) {
             document.getElementById("desplegableProteinas").style.visibility = "hidden";      
       })

       profesionales.addEventListener("mouseover", function ocultarMenuMedicamentos(event) {
            document.getElementById("desplegableProteinas").style.visibility = "hidden";
            document.getElementById("desplegableMedicamentos").style.visibility = "hidden";      
      })

      document.getElementById("menuHamburguesa").addEventListener("click", function menuHamburguesa(event) {
            let menu = document.getElementsByClassName("linksNavegacion");
            let menu1 = menu[0];
            let quitaClase = document.getElementsByClassName("removeId");
            let medicamentosD = quitaClase[0];
            let proteinasD = quitaClase[1];
            let links2 = document.getElementsByClassName("nav2");
            if(menu1.style.visibility == "hidden"){
                  proteinasD.removeAttribute("id");
                  proteinasD.style.display = "none"
                  medicamentosD.removeAttribute("id");
                  medicamentosD.style.display = "none"
                  document.getElementById("header").style.height  = '45.5em';
                  menu1.style.visibility = "visible";
                  links2[0].style.display = "block";
                  links2[1].style.display = "block";
                  
            }else{
                  document.getElementById("header").style.height  = '11em';
                  menu1.style.visibility = "hidden";
                  links2[0].style.display = "none";
                  links2[1].style.display = "none";

            }
      })

      window.addEventListener("resize", function selectorPagina(event) {
            let anchoBody = document.body.clientWidth;
            let menu = document.getElementsByClassName("linksNavegacion");
            let menu1 = menu[0];
            let umbralAncho = 700;
            let quitaClase = document.getElementsByClassName("removeId");
            let medicamentosD = quitaClase[0];
            let proteinasD = quitaClase[1];
            let links2 = document.getElementsByClassName("nav2");
            if (anchoBody < umbralAncho) {
                  document.getElementById("header").style.height  = '11em';
                  menu1.style.visibility = 'hidden';
                  
            } else {
                  medicamentosD.setAttribute("id", "desplegableMedicamentos");
                  proteinasD.setAttribute("id", "desplegableProteinas");
                  proteinasD.style.display = "block"
                  medicamentosD.style.display = "block"
                  document.getElementById("header").style.height  = '9em';
                  menu1.style.visibility = 'visible';
                  links2[0].style.display = "none";
                  links2[1].style.display = "none";
            }
      });

      let quienesSomos = navLinks[4];
      function menu(){
            let selector = document.getElementById("selector").value;
            switch(selector){
                  case "0":
                        inicio.style.backgroundColor = "#7FC6AF";
                  break;
                  case "1":
                        medicamentos.style.backgroundColor = "#7FC6AF";
                  break;
                  case "2":
                        proteinas.style.backgroundColor = "#B8D0E3";
                  break;
                  case "3":
                        profesionales.style.backgroundColor = "#F1D4D3";
                  break; 
                  case "4":
                        quienesSomos.style.backgroundColor = "#7FC6AF";
                  break; 
            }
      }

      menu();

});




      


