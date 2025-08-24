<?php
/**
 * footer.php
 *
 * HTML del footer de toda la página.
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML del footer.
 *
 * Autor:    Leo González Yamada
 * Fecha:    26/06/2025
 */


//Función para redirigir a index.php si se intenta abrir solo este archivo
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: /gestor/index.php");
    exit;
}

?>

    <footer>
        <p>© 2025 Empresa</p>
    </footer>
</body>
</html>