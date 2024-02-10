window.addEventListener('load', function() {
    document.getElementById("anadirButton").addEventListener("click", function() {
        document.getElementById("anadir").style.display = "block";
    });
    let botonesEliminar = document.querySelectorAll(".eliminar"); 

    botonesEliminar.forEach(function(elemento) {
        elemento.addEventListener("click", function() {
            var textoCeldaIzquierda = this.parentNode.previousElementSibling.textContent;
            // Mostrar el texto obtenido
            document.getElementById("compEliminarUsuario").style.display="block";
            document.getElementById("infoBlockEliminar").innerHTML="Seguro que deseas eliminar al usuario con la id " + textoCeldaIzquierda;
            document.getElementById("idValueEliminar").value= textoCeldaIzquierda;
        });
    });

    let checkbox1 = document.getElementById("checkbox1");
    let checkbox2 = document.getElementById("checkbox2");
    
    // Añadir un evento para escuchar los cambios en la casilla de verificación 1
    checkbox1.addEventListener("change", function() {
        // Si checkbox1 está marcado, desmarca checkbox2
        if (checkbox1.checked) {
            checkbox2.checked = false;
        }
    });
    
    // Añadir un evento para escuchar los cambios en la casilla de verificación 2
    checkbox2.addEventListener("change", function() {
        // Si checkbox2 está marcado, desmarca checkbox1
        if (checkbox2.checked) {
            checkbox1.checked = false;
        }
    });
});