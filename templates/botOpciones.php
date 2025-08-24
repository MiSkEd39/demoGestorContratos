<?php
/**
 * botOpciones.php
 *
 * HTML de la parte de los botones de opciones de la izquierda en menú inicio.
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML de los botones de opciones
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


<div class="menuInicioBox">         <!--Este div se cierra después en opCalen.php-->
    <script src="../js/cambioOpciones.js"></script>
    <div class="boxOpciones">
        <button class="opcion active" data-panel="panel4">Chuleta</button>
        <button class="opcion" data-panel="panel1">Contratos</button>
        <button class="opcion" data-panel="panel2">Obligaciones</button>
        <button class="opcion" data-panel="panel5">Incumplimientos</button>
        <button class="opcion" data-panel="panel3">Calendario</button>
        <div class="sepHor"></div>
        <form action="../cerrarSesion.php" method="post" class="botClose">
            <button type="submit">Cerrar Sesión</button>
        </form>
    </div>
<div class="sepVer"></div>
