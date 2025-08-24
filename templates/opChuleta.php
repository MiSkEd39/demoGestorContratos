<?php
/**
 * opChuleta.php
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML de la opción de contratos.
 *
 * Autor:    Leo González Yamada
 * Fecha:    18/07/2025
 */



//Función para redirigir a index.php si se intenta abrir solo este archivo
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: /gestor/index.php");
    exit;
}

?>

    <script src="../js/chuletaTabla.js?v=1"></script>
    <div id="panel4" class="panel activo">
        <div class = "boxChuleta" id ="contChuleta">
            <!--Contenido generado por js-->
        </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        generarChuleta(); 
      });
    </script>
        
    </div>
<!--Cierre de menú inicio-->
</div>   