let botonAceptarCookie = document.getElementById("btn-aceptar-cookies");

let avisoCookies = document.getElementById("cookies");

let fondoAvisoCookies = document.getElementById("fondo-aviso-cookies");

if(!localStorage.getItem("cookies-aceptadas")){
    avisoCookies.classList.add("activo");
    fondoAvisoCookies.classList.add("activo");

}

botonAceptarCookie.addEventListener("click", () =>{
    avisoCookies.classList.remove("activo");
    fondoAvisoCookies.classList.remove("activo");

    localStorage.setItem("cookies-aceptadas", true);
});