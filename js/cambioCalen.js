document.addEventListener("DOMContentLoaded", function () {
    //Obtener datos del selector de fechas
    const selector = document.getElementById("selectorMes");

    if (!selector) {
        console.error("No se encontró el input con id 'selectorMes'");
        return;
    }

    //Obtener fecha actual
    //Setear para que al cargar la página, aparezca con la fecha actual
    const fechaActual = new Date();
    selector.value = `${fechaActual.getFullYear()}-${String(fechaActual.getMonth() + 1).padStart(2, '0')}`;
    mostrarMes(fechaActual.getFullYear(), fechaActual.getMonth());

    //Agregar listener, detecta cambio de fecha y busca en db
    selector.addEventListener("change", () => {
        const [año, mesStr] = selector.value.split("-");
        fechaActual.setFullYear(parseInt(año));
        fechaActual.setMonth(parseInt(mesStr) - 1);
        mostrarMes(fechaActual.getFullYear(), fechaActual.getMonth());
    });
});

function mostrarMes(año, mes) {
    
    //Cambio del contenido, por php
    fetch('../includes/busquedaCalen.php?mon=' + mes + '&an=' + año)
    .then(res => res.text())
    .then(data => {
            document.querySelector(".calenGrid").innerHTML = data;
    });


}


