/**
 * archivo: chuletaTabla.js
 * 
 * Función para generar la tabla de chuleta 
 * 
 * Funciones:
 *
 * 
 * Autor: Leo González Yamada
 * Fecha: 18/07/2025
 */

//Búsqueda de obligaciones
function generarChuleta() {
    fetch('../includes/generarChuleta.php')
    .then(res => res.text())
    .then(data => {
        document.getElementById('contChuleta').innerHTML = data;
    });
}