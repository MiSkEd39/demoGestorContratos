<?php
/**
 * opIncumpl.php
 *
 * HTML de la opción de incumplimientos.
 * Las opciones de proyectos y bancos se hacen solitas desde js y otros PHPs.
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML de la opción de obligaciones.
 *
 * Autor:    Leo González Yamada
 * Fecha:    12/08/2025
 */


//Función para redirigir a index.php si se intenta abrir solo este archivo
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: /gestor/index.php");
    exit;
}

?>


<div id="panel5" class="panel">
    <div class = "boxBusqGeneral">                                      <!--Panel con la caja de búsqueda, separador y caja de resultados-->   
        <div class = "boxBusq">                                         <!--Caja con buscador de contratos-->  
            <div class="posTitulo">Búscador de incumplimientos</div>
            <div class="posLabFid">Fideicomiso:</div>
            <div class="posLabProy">Proyecto:</div>
            <div class="posLabBanc">Banco:</div>
            
            <!--Menú desplegable de fideos-->
            <div class="posMenuFid">
                <select id="fideosIncumpl" name="menuFideos" onchange = changeBancIncumpl(this.value)>
                    <?php include '../includes/drDownFideos.php'; ?>
                </select>
            </div>

            <div class="posMenuBanc">
                <select id="bancIncumpl" name="menuBanc" onchange = changeProyIncumpl(this.value)>
                    <!--Opciones cargadas con el onchange-->
                </select>
            </div>
            <div class="posMenuProy">
                <select id="proyIncumpl" name="menuProy" onchange = buscarIncumpl(this.value)>
                    <!--Opciones cargadas con el onchange-->
                </select>
            </div>

        </div>
        <div class="sepHor"></div>
        <div id = "boxIncumpl" class = "boxIncumpl">
            <!--Obligaciones generadas con el onchange-->
        </div>
        
        
        <!--script que hace que las funciones de cargar dropdown se ejecuten al cargar la página-->
        <!--para que ya de inicio las opciones proyecto y banco estén cargadas-->
        <script>
            window.addEventListener('load', function () {
            const selectFid = document.getElementById('fideosOblig');
            if (selectFid && selectFid.value !== "") {
                changeBancIncumpl(selectFid.value); 
            }
            });
        </script>
    </div>
</div>