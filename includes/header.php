<?php
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice - Repaso para Examen</title>
    <link rel="stylesheet" href="<?= $currentPage === 'index' ? 'css/style.css' : '../css/style.css' ?>">
</head>
<body>
    <div class="navbar">
        <a href="<?= $currentPage === 'index' ? 'index.php' : '../index.php' ?>" class="logo">PHP<span>Practice</span></a>
        <nav>
            <a href="<?= $currentPage === 'index' ? 'ejercicios/condicionales.php' : 'condicionales.php' ?>" <?= $currentPage === 'condicionales' ? 'class="active"' : '' ?>>Condicionales</a>
            <a href="<?= $currentPage === 'index' ? 'ejercicios/bucles.php' : 'bucles.php' ?>" <?= $currentPage === 'bucles' ? 'class="active"' : '' ?>>Bucles</a>
            <a href="<?= $currentPage === 'index' ? 'ejercicios/arrays.php' : 'arrays.php' ?>" <?= $currentPage === 'arrays' ? 'class="active"' : '' ?>>Arrays</a>
            <a href="<?= $currentPage === 'index' ? 'ejercicios/archivos.php' : 'archivos.php' ?>" <?= $currentPage === 'archivos' ? 'class="active"' : '' ?>>Archivos</a>
            <a href="<?= $currentPage === 'index' ? 'ejercicios/validacion.php' : 'validacion.php' ?>" <?= $currentPage === 'validacion' ? 'class="active"' : '' ?>>Validación</a>
            <a href="<?= $currentPage === 'index' ? 'ejercicios/pregmatch.php' : 'pregmatch.php' ?>" <?= $currentPage === 'pregmatch' ? 'class="active"' : '' ?>>preg_match</a>
        </nav>
    </div>
