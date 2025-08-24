<?php

/**
 * inicioSesion.php
 *
 * HTML del inicio de sesión.
 * Coloca el mensaje de error y en el entry, el usuario y contraseña puesto anteriormente
 * (si existe).
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML del inicio de sesión.
 *
 * Autor:    Leo González Yamada
 * Fecha:    26/06/2025
 */


//Función para redirigir a index.php si se intenta abrir solo este archivo
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: /gestor/index.php");
    exit;
}


require_once __DIR__ . '/../config.php';


$error = $_SESSION['error'] ?? "";
$entUsu = $_SESSION['entryUsu'] ?? "";
$entPass = $_SESSION['entryCont'] ?? "";

//Lit significa, si existe el de SESSION, la variable es el valor de SESSION
//Pero si no existe, es ""
//Un If profecional

//Quito esto para que en la siguiente, no vuelva a aparecer nada
unset($_SESSION['error'], $_SESSION['entryUsu'], $_SESSION['entryCont']);

?>

<div class="inicioSesion">
        <h2>Inicio de sesión</h2>
        <form action="/gestor/abrirSesion.php" method="post">
            <table>
                <tr>
                    <td><label for="usu:">Usuario:</label></td>
                    <td><input type="text" id="usu" name="usu" value="<?php echo htmlspecialchars($entUsu); ?>" required></td>
                </tr>
                <tr>
                    <td><label for="passw:">Contraseña:</label></td>
                    <td><input type="password" id="passw" name="passw" value="<?php echo htmlspecialchars($entPass); ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                      <label><?php echo $error; ?></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Ingresar">
                    </td>
                </tr>
            </table>
        </form>
    </div>


