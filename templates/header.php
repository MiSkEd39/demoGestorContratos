<?php
/**
 * header.php
 *
 * HTML del header de toda la página.
 * 
 * Recibe: nada
 * 
 * Devuelve: 
 *      Formato HTML del header.
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


<!DOCTYPE html>
<html>
<head>
    <title>Gestor de Contratos</title>
    <link rel="stylesheet" href="/gestor/assets/estilos.css?v=1">
    <link rel="stylesheet" href="/gestor/assets/estObligContr.css?v=2">
    <link rel="stylesheet" href="/gestor/assets/estCalen.css?v=1">
    <link rel="stylesheet" href="/gestor/assets/estChuleta.css?v=1">
    <link rel="stylesheet" href="/gestor/assets/estMenu.css?v=1">
    <link rel="icon" href="/faviconGestor.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1 class="titulo">Gestor de Contratos</h1>
    </header>    





