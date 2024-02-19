window.addEventListener('load', function() {
 //FUNCIÓN PARA DESMARCAR LAS CASILLAS DE LAS CHEXBOXES DEL FORMULARIO ELIMINAR
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

    //FUNCIONALIDAD DE AÑADIR
    document.getElementById("anadirButton").addEventListener("click", function() {
        document.getElementById("anadir").style.display = "block";
        document.getElementById("compEliminarUsuario").style.display="none";
        document.getElementById("tablaModificar").style.display="none";
    });
  //FUNCIONALIDAD DE ELIMINAR
    let botonesEliminar = document.querySelectorAll(".eliminar"); 

    botonesEliminar.forEach(function(elemento) {
        elemento.addEventListener("click", function() {
            let textoCeldaIzquierda = this.parentNode.previousElementSibling.textContent;
            // Mostrar el texto obtenido
            document.getElementById("anadir").style.display = "none";
            document.getElementById("compEliminarUsuario").style.display="block";
            document.getElementById("tablaModificar").style.display="none";
            document.getElementById("infoBlockEliminar").innerHTML="Seguro que deseas eliminar el medicamento con la id " + textoCeldaIzquierda;
            document.getElementById("idValueEliminar").value= textoCeldaIzquierda;
        });
    });
    /*

    //FUNCIONALIDAD DE MODIFICAR
    let botonesModificar = document.querySelectorAll('.modificar');

    botonesModificar.forEach(function(boton) {
        boton.addEventListener('click', function() {
            document.getElementById("anadir").style.display = "none";
            document.getElementById("compEliminarUsuario").style.display="none";
            document.getElementById("tablaModificar").style.display="block";
            // Obtener la fila actual
            let fila = this.parentNode.parentNode;
            // Obtener los valores de las columnas a la izquierda de la fila
            let valores = [];
            for (let i = 0; i < fila.cells.length - 1; i++) { // No incluir la última celda con el botón
                valores.push(fila.cells[i].textContent);
            }
            // Hacer algo con los valores, por ejemplo, imprimirlos en la consola
            console.log(valores);
            document.getElementById("nombreMod").value = valores[0];
            document.getElementById("apellidosMod").value = valores[1];
            document.getElementById("dniMod").value = valores[2];
            document.getElementById("cpMod").value = valores[3];
            document.getElementById("telefonoMod").value = valores[4];
            document.getElementById("emailMod").value = valores[5];
            document.getElementById("usuarioMod").value = valores[6];
            document.getElementById("rolMod").value = valores[7];
            document.getElementById("contrasenaMod").value = valores[8];
            document.getElementById("idMod").value = valores[9];

        });
    }); */

});