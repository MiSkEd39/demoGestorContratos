/**
 * archivo: cambioOpciones.js
 * 
 * Función para el cambio de vistas
 * 
 * Autor: Leo González Yamada
 * Fecha: 04/07/2025
 */


document.addEventListener("DOMContentLoaded", function() {      //Comprobar si ya se cargó todo
  
    const botones = document.querySelectorAll('.opcion');       //Seleccionar todos los botones
    const paneles = document.querySelectorAll('.panel');        //Seleccionar todos los paneles

    botones.forEach(function(boton) {          //Por cada botón
        boton.addEventListener('click', function() {        //Si se clickea un botón...
        botones.forEach(function(b) { b.classList.remove('active'); });         //Quitar estilo "activado" para los botones menos
        boton.classList.add('active');                                          //Poner estilo "activado" para ese botón

        paneles.forEach(function(p) { p.classList.remove('activo'); });         //Quitar el "activo" para todos los paneles

        const panelId = boton.getAttribute('data-panel');                       //obtener el atributo del panel
        document.getElementById(panelId).classList.add('activo');               //Activar el de ese panel
        });
    });
});

