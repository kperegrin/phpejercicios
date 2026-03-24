<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="hero">
        <h1>Repaso <span>PHP</span> para Examen</h1>
        <p>Practica cada tema con ejercicios progresivos. Cada sección incluye teoría, pistas y soluciones paso a paso.</p>
    </div>

    <div class="topics-grid">
        <a href="ejercicios/condicionales.php" class="topic-card">
            <div class="icon">🔀</div>
            <h3>Condicionales</h3>
            <p>if, else, elseif, switch, operador ternario. Aprende a controlar el flujo de tu programa.</p>
            <span class="badge">6 ejercicios</span>
        </a>

        <a href="ejercicios/bucles.php" class="topic-card">
            <div class="icon">🔄</div>
            <h3>Bucles</h3>
            <p>for, while, do-while, foreach. Domina la repetición y el recorrido de datos.</p>
            <span class="badge">6 ejercicios</span>
        </a>

        <a href="ejercicios/arrays.php" class="topic-card">
            <div class="icon">📦</div>
            <h3>Arrays</h3>
            <p>Arrays indexados, asociativos, multidimensionales. Funciones clave: sort, array_push, array_merge...</p>
            <span class="badge">6 ejercicios</span>
        </a>

        <a href="ejercicios/archivos.php" class="topic-card">
            <div class="icon">📄</div>
            <h3>Lectura de Archivos</h3>
            <p>fopen, fgets, fread, file_get_contents, file(). Lectura línea a línea y procesamiento de CSV.</p>
            <span class="badge">5 ejercicios</span>
        </a>

        <a href="ejercicios/validacion.php" class="topic-card">
            <div class="icon">✅</div>
            <h3>Validación de Datos</h3>
            <p>isset, empty, is_numeric, filter_var, htmlspecialchars. Valida entradas de usuario de forma segura.</p>
            <span class="badge">5 ejercicios</span>
        </a>

        <a href="ejercicios/pregmatch.php" class="topic-card">
            <div class="icon">🔍</div>
            <h3>preg_match</h3>
            <p>Expresiones regulares en PHP. Patrones, metacaracteres, grupos de captura y validaciones avanzadas.</p>
            <span class="badge">6 ejercicios</span>
        </a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
