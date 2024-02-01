let botonAceptarCookie = document.getElementById("btn-aceptar-cookies");

let avisoCookies = document.getElementById("cookies");

let fondoAvisoCookies = document.getElementById("fondo-aviso-cookies");

dataLayer = [];//variable global

//condicional para acceder al local-storage.getItem , obtener el elemento cookies-aceptadas
if(!localStorage.getItem("cookies-aceptadas")){
    avisoCookies.classList.add("activo");
    fondoAvisoCookies.classList.add("activo");

}else{
    dataLayer.push({'event': 'cookies aceptadas'});//con este agregar un objeto, que es un evento que se llama cookies aceptadas 
}

//cuando da click al boton de aceptar cookies 
botonAceptarCookie.addEventListener("click", () =>{
    avisoCookies.classList.remove("activo");
    fondoAvisoCookies.classList.remove("activo");

    localStorage.setItem("cookies-aceptadas", true);

    dataLayer.push({'event': 'cookies aceptadas'});//con este agregar un objeto, que es un evento que se llama cookies aceptadas 
});