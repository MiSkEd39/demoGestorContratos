<?php
/**
 * opOblig.php
 *
 * HTML de la opción de obligaciones.
 * Tiene un include de drDownFideos.php para generar las opciones de fideos desde la db.
 * Las opciones de proyectos y bancos se hacen solitas desde js y otros PHPs.
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML de la opción de obligaciones.
 *
 * Autor:    Leo González Yamada
 * Fecha:    02/07/2025
 */


//Función para redirigir a index.php si se intenta abrir solo este archivo
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: /gestor/index.php");
    exit;
}

?>


<div id="panel2" class="panel">
    <div class = "boxBusqGeneral">                                      <!--Panel con la caja de búsqueda, separador y caja de resultados-->   
        <div class = "boxBusq">                                         <!--Caja con buscador de contratos-->  
            <div class="posTitulo">Búscador de obligaciones</div>
            <div class="posLabFid">Fideicomiso:</div>
            <div class="posLabProy">Proyecto:</div>
            <div class="posLabBanc">Banco:</div>
            
            <!--Menú desplegable de fideos-->
            <div class="posMenuFid">
                <select id="fideosOblig" name="menuFideos" onchange = changeBancOblig(this.value)>
                    <?php include '../includes/drDownFideos.php'; ?>
                </select>
            </div>

            <div class="posMenuBanc">
                <select id="bancOblig" name="menuBanc" onchange = changeProyOblig(this.value)>
                    <!--Opciones cargadas con el onchange-->
                </select>
            </div>
            <div class="posMenuProy">
                <select id="proyOblig" name="menuProy" onchange = buscarOblig(this.value)>
                    <!--Opciones cargadas con el onchange-->
                </select>
            </div>

        </div>
        <div class="sepHor"></div>
        <div id = "boxOblig" class = "boxOblig">
            <!--Obligaciones generadas con el onchange-->
        </div>
        
        
        <!--script que hace que las funciones de cargar dropdown se ejecuten al cargar la página-->
        <!--para que ya de inicio las opciones proyecto y banco estén cargadas-->
        <script>
            window.addEventListener('load', function () {
            const selectFid = document.getElementById('fideosOblig');
            if (selectFid && selectFid.value !== "") {
                changeBancOblig(selectFid.value); 
            }
            });
        </script>
    </div>
</div>