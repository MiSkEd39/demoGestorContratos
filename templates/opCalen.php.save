<?php
/**
 * opCalen.php
 *
 * HTML de la opción de calendarios.
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML de la opción de calendarios.
 *
 * Autor:    Leo González Yamada
 * Fecha:    02/07/2025
 */



//Función para redirigir a index.php si se intenta abrir solo este archivo
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: /gestor/index.php");
    exit;
}

//Cargar la fecha siempre que cargue esto por primera vez
require_once '../config.php';


?>

    <script src="../js/cambioCalen.js"></script>
    <div id="panel3" class="panel">
        <div class = "calenGridGeneral" id="CalenAll">
            <div class = "posTitulo">Calendario de obligaciones</div>

            <div class = "posLabFecha">
                <label for="selectorMes">Mes y año:</label>
                <input type="month" id="selectorMes" name="selectorMes" min="2025-06">
            </div>

            <div class = "posSepHor">
                <div class="sepHor"></div>
            </div>

            <div class = "posCalen">
                <div class = "calenGrid">
                    <!--Contenido del calendario-->
                </div>
            </div>
        </div>
    </div>

