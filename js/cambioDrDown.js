/**
 * archivo: cambioDrDown.js
 * 
 * Funciones para cambio de los dropdowns 
 * 
 * Funciones:
 * - changeBancCont(valor): cargar opciones de banco con el cambio de fideos en contratos
 * - changeProyCont(valor): carga opciones de proyecto según el cambio de bancos en contratos
 * - buscarCont(valor): cargar el resultado de la búsqueda de contratos
 * 
 * - changeBancOblig(valor): cargar opciones de banco con el cambio de fideos en obligaciones
 * - changeProyOblig(valor): carga opciones de proyecto según el cambio de bancos en obligaciones
 * - buscarOblig(valor): cargar el resultado de la búsqueda de obligaciones
 * 
 * - changeBancIncumpl(valor): cargar opciones de banco con el cambio de fideos en imcumplimientos
 * - changeProyIncumpl(valor): carga opciones de proyecto según el cambio de bancos en imcumplimientos
 * - buscarIncumpl(valor): cargar el resultado de la búsqueda de imcumplimientos
 * 
 * Autor: Leo González Yamada
 * Fecha: 04/07/2025
 */


//Para contratos
//Cambio de proyecto dependiendo del fideo
//A su vez, cambia el banco con changeBanc
function changeBancCont(valor) {
    fetch('../includes/menuBanc.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        const proySelect = document.getElementById('bancCont');
        proySelect.innerHTML = data;

        //Ejecuto changeBanco acá también con la opción de proy paraa cambiar
        //automáticamente banc si cambio fideo
        const primeraOpcion = proySelect.querySelector('option');
        if (primeraOpcion && primeraOpcion.value !== "") {
            proySelect.value = primeraOpcion.value; 
            changeProyCont(primeraOpcion.value); 
        }
    });
}

//Cambio de banco dependiendo del proyecto para contratos
function changeProyCont(valor) {
    fetch('../includes/menuProy.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        const bancSelect = document.getElementById('proyCont');
        bancSelect.innerHTML = data;

        //Obtengo el id de bancoProyecto para buscar contratos
        const opBanc = bancSelect.querySelector('option');
        if(opBanc && opBanc.value !== ""){
            bancSelect.value = opBanc.value;
            buscarCont(opBanc.value);
        }
    });
}

//Búsqueda de contratos
function buscarCont(valor) {
    fetch('../includes/busquedaCont.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        document.getElementById('boxCont').innerHTML = data;
    });
}


//Para obligaciones
//Cambio de proyecto dependiendo del fideo
//A su vez, cambia el banco con changeBanc
function changeBancOblig(valor) {
    fetch('../includes/menuBanc.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        const proySelect = document.getElementById('bancOblig');
        proySelect.innerHTML = data;

        //Ejecuto changeBanco acá también con la opción de proy para cambiar
        //automáticamente banc si cambio fideo
        const opProy = proySelect.querySelector('option');
        if (opProy && opProy.value !== "") {
            proySelect.value = opProy.value; 
            changeProyOblig(opProy.value); 
        }
    });
}

function changeProyOblig(valor) {
    fetch('../includes/menuProy.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        const bancSelect = document.getElementById('proyOblig');
        bancSelect.innerHTML = data;

        // Obtener la primera opción del nuevo menú de bancos y ejecutar búsqueda
        const opBanc = bancSelect.querySelector('option');
        if (opBanc && opBanc.value !== "") {
            bancSelect.value = opBanc.value;
            buscarOblig(opBanc.value);
        }
    });
}




//Búsqueda de obligaciones
function buscarOblig(valor) {
    fetch('../includes/busquedaOblig.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        document.getElementById('boxOblig').innerHTML = data;
    });
}



//Para incumplimientos
//Cambio de proyecto dependiendo del fideo
//A su vez, cambia el banco con changeBanc
function changeBancIncumpl(valor) {
    fetch('../includes/menuBanc.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        const proySelect = document.getElementById('bancIncumpl');
        proySelect.innerHTML = data;

        //Ejecuto changeBanco acá también con la opción de proy para cambiar
        //automáticamente banc si cambio fideo
        const opProy = proySelect.querySelector('option');
        if (opProy && opProy.value !== "") {
            proySelect.value = opProy.value; 
            changeProyIncumpl(opProy.value); 
        }
    });
}

function changeProyIncumpl(valor) {
    fetch('../includes/menuProy.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        const bancSelect = document.getElementById('proyIncumpl');
        bancSelect.innerHTML = data;

        // Obtener la primera opción del nuevo menú de bancos y ejecutar búsqueda
        const opBanc = bancSelect.querySelector('option');
        if (opBanc && opBanc.value !== "") {
            buscarIncumpl.value = opBanc.value;
            buscarIncumpl(opBanc.value);
        }
    });
}




//Búsqueda de obligaciones
function buscarIncumpl(valor) {
    fetch('../includes/busquedaIncumpl.php?id=' + valor)
    .then(res => res.text())
    .then(data => {
        document.getElementById('boxIncumpl').innerHTML = data;
    });
}

