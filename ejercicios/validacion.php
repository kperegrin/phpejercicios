<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="breadcrumb">
        <a href="../index.php">Inicio</a> <span>›</span> Validación de Datos
    </div>

    <div class="page-header">
        <h1>✅ <span class="accent">Validación de Datos</span></h1>
        <p>Aprende a validar y sanear datos de entrada del usuario para mantener tu aplicación segura.</p>
    </div>

    <!-- TEORÍA -->
    <div class="theory-box">
        <h2>📖 Repaso Teórico</h2>
        <ul>
            <li><code>isset($var)</code> — Comprueba si una variable existe y no es null.</li>
            <li><code>empty($var)</code> — Verdadero si es "", 0, null, false, [] o no existe.</li>
            <li><code>is_numeric($var)</code> — Comprueba si es un número o string numérico.</li>
            <li><code>is_string($var)</code>, <code>is_int($var)</code>, <code>is_array($var)</code> — Comprueban el tipo.</li>
            <li><code>strlen($str)</code> — Longitud de un string.</li>
            <li><code>trim($str)</code> — Elimina espacios al inicio y final.</li>
            <li><code>htmlspecialchars($str)</code> — Convierte caracteres especiales HTML (previene XSS).</li>
            <li><code>filter_var($email, FILTER_VALIDATE_EMAIL)</code> — Valida un email.</li>
            <li><code>filter_var($url, FILTER_VALIDATE_URL)</code> — Valida una URL.</li>
            <li><code>filter_var($ip, FILTER_VALIDATE_IP)</code> — Valida una IP.</li>
            <li><code>filter_var($num, FILTER_VALIDATE_INT)</code> — Valida un entero.</li>
            <li><code>$_POST["campo"]</code>, <code>$_GET["campo"]</code> — Datos de formularios.</li>
        </ul>
    </div>

    <!-- EJERCICIO 1 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 1: isset y empty</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dadas varias variables, comprueba con <code>isset()</code> y <code>empty()</code> cuáles están definidas y cuáles están vacías. Muestra una tabla con los resultados.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="1">
                <textarea name="code1" class="code-input"><?= isset($_POST['code1']) ? htmlspecialchars($_POST['code1']) : "<?php\n\$a = \"Hola\";\n\$b = \"\";\n\$c = 0;\n\$d = null;\n// \$e no está definida\n\n// Comprueba isset() y empty() para cada variable\n// Muestra los resultados\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(1)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(1)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '1'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php ob_start(); try { eval('?>' . $_POST['code1']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); } echo htmlspecialchars(ob_get_clean()); ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-1">
                <h4>💡 Pista</h4>
                <p><code>isset($a)</code> devuelve true/false. <code>empty($a)</code> devuelve true si es "", 0, null, false o no existe. Usa <code>var_export(isset($a), true)</code> para mostrar "true" o "false".</p>
            </div>
            <div class="solution-box" id="solution-1">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$a</span> = <span class="string">"Hola"</span>;
<span class="variable">$b</span> = <span class="string">""</span>;
<span class="variable">$c</span> = <span class="number">0</span>;
<span class="variable">$d</span> = <span class="keyword">null</span>;

<span class="variable">$vars</span> = [<span class="string">"a"</span> => <span class="variable">$a</span>, <span class="string">"b"</span> => <span class="variable">$b</span>, <span class="string">"c"</span> => <span class="variable">$c</span>, <span class="string">"d"</span> => <span class="variable">$d</span>];

<span class="function">echo</span> <span class="string">"Variable | isset | empty | Valor\n"</span>;
<span class="function">echo</span> <span class="function">str_repeat</span>(<span class="string">"-"</span>, <span class="number">40</span>) . <span class="string">"\n"</span>;

<span class="keyword">foreach</span> (<span class="variable">$vars</span> <span class="keyword">as</span> <span class="variable">$nombre</span> => <span class="variable">$valor</span>) {
    <span class="variable">$is</span> = <span class="function">isset</span>(<span class="variable">$valor</span>) ? <span class="string">"true"</span> : <span class="string">"false"</span>;
    <span class="variable">$em</span> = <span class="function">empty</span>(<span class="variable">$valor</span>) ? <span class="string">"true"</span> : <span class="string">"false"</span>;
    <span class="function">echo</span> <span class="string">"\$</span><span class="variable">$nombre</span>     | <span class="variable">$is</span>  | <span class="variable">$em</span>  | <span class="string">"</span> . <span class="function">var_export</span>(<span class="variable">$valor</span>, <span class="keyword">true</span>) . <span class="string">"\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 2 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 2: Validar email con filter_var</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado un array de emails, valida cada uno usando <code>filter_var</code> con <code>FILTER_VALIDATE_EMAIL</code>. Muestra cuáles son válidos y cuáles no.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="2">
                <textarea name="code2" class="code-input"><?= isset($_POST['code2']) ? htmlspecialchars($_POST['code2']) : "<?php\n\$emails = [\n    \"usuario@gmail.com\",\n    \"invalido@\",\n    \"test@dominio.es\",\n    \"sin-arroba.com\",\n    \"ok@empresa.org\"\n];\n// Valida cada email con filter_var\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(2)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(2)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '2'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php ob_start(); try { eval('?>' . $_POST['code2']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); } echo htmlspecialchars(ob_get_clean()); ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-2">
                <h4>💡 Pista</h4>
                <p><code>filter_var($email, FILTER_VALIDATE_EMAIL)</code> devuelve el email si es válido, o <code>false</code> si no lo es.</p>
            </div>
            <div class="solution-box" id="solution-2">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$emails</span> = [
    <span class="string">"usuario@gmail.com"</span>,
    <span class="string">"invalido@"</span>,
    <span class="string">"test@dominio.es"</span>,
    <span class="string">"sin-arroba.com"</span>,
    <span class="string">"ok@empresa.org"</span>
];

<span class="keyword">foreach</span> (<span class="variable">$emails</span> <span class="keyword">as</span> <span class="variable">$email</span>) {
    <span class="keyword">if</span> (<span class="function">filter_var</span>(<span class="variable">$email</span>, FILTER_VALIDATE_EMAIL)) {
        <span class="function">echo</span> <span class="string">"✓ VÁLIDO:   </span><span class="variable">$email</span><span class="string">\n"</span>;
    } <span class="keyword">else</span> {
        <span class="function">echo</span> <span class="string">"✗ INVÁLIDO: </span><span class="variable">$email</span><span class="string">\n"</span>;
    }
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 3 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 3: Validar formulario completo</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Simula la validación de un formulario. Valida que:
            <br>- <strong>nombre</strong>: no vacío y longitud entre 2 y 50
            <br>- <strong>edad</strong>: número entero entre 1 y 120
            <br>- <strong>email</strong>: formato válido
            <br>Muestra errores o "Datos correctos".</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="3">
                <textarea name="code3" class="code-input"><?= isset($_POST['code3']) ? htmlspecialchars($_POST['code3']) : "<?php\n// Simula datos de formulario\n\$nombre = \"Ana\";\n\$edad = \"25\";\n\$email = \"ana@gmail.com\";\n\n\$errores = [];\n\n// Valida nombre\n\n// Valida edad\n\n// Valida email\n\n// Muestra resultado\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(3)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(3)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '3'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php ob_start(); try { eval('?>' . $_POST['code3']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); } echo htmlspecialchars(ob_get_clean()); ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-3">
                <h4>💡 Pista</h4>
                <p>Para nombre: <code>empty(trim($nombre))</code> y <code>strlen($nombre)</code>. Para edad: <code>filter_var($edad, FILTER_VALIDATE_INT)</code> y compara rango. Para email: <code>FILTER_VALIDATE_EMAIL</code>. Acumula errores en <code>$errores[]</code>.</p>
            </div>
            <div class="solution-box" id="solution-3">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$nombre</span> = <span class="string">"Ana"</span>;
<span class="variable">$edad</span> = <span class="string">"25"</span>;
<span class="variable">$email</span> = <span class="string">"ana@gmail.com"</span>;

<span class="variable">$errores</span> = [];

<span class="comment">// Validar nombre</span>
<span class="variable">$nombre</span> = <span class="function">trim</span>(<span class="variable">$nombre</span>);
<span class="keyword">if</span> (<span class="function">empty</span>(<span class="variable">$nombre</span>)) {
    <span class="variable">$errores</span>[] = <span class="string">"El nombre es obligatorio"</span>;
} <span class="keyword">elseif</span> (<span class="function">strlen</span>(<span class="variable">$nombre</span>) < <span class="number">2</span> || <span class="function">strlen</span>(<span class="variable">$nombre</span>) > <span class="number">50</span>) {
    <span class="variable">$errores</span>[] = <span class="string">"El nombre debe tener entre 2 y 50 caracteres"</span>;
}

<span class="comment">// Validar edad</span>
<span class="keyword">if</span> (!<span class="function">filter_var</span>(<span class="variable">$edad</span>, FILTER_VALIDATE_INT)) {
    <span class="variable">$errores</span>[] = <span class="string">"La edad debe ser un número entero"</span>;
} <span class="keyword">elseif</span> (<span class="variable">$edad</span> < <span class="number">1</span> || <span class="variable">$edad</span> > <span class="number">120</span>) {
    <span class="variable">$errores</span>[] = <span class="string">"La edad debe estar entre 1 y 120"</span>;
}

<span class="comment">// Validar email</span>
<span class="keyword">if</span> (!<span class="function">filter_var</span>(<span class="variable">$email</span>, FILTER_VALIDATE_EMAIL)) {
    <span class="variable">$errores</span>[] = <span class="string">"El email no es válido"</span>;
}

<span class="comment">// Resultado</span>
<span class="keyword">if</span> (<span class="function">empty</span>(<span class="variable">$errores</span>)) {
    <span class="function">echo</span> <span class="string">"✓ Datos correctos!\n"</span>;
    <span class="function">echo</span> <span class="string">"Nombre: "</span> . <span class="function">htmlspecialchars</span>(<span class="variable">$nombre</span>) . <span class="string">"\n"</span>;
    <span class="function">echo</span> <span class="string">"Edad: </span><span class="variable">$edad</span><span class="string">\n"</span>;
    <span class="function">echo</span> <span class="string">"Email: </span><span class="variable">$email</span><span class="string">"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"ERRORES:\n"</span>;
    <span class="keyword">foreach</span> (<span class="variable">$errores</span> <span class="keyword">as</span> <span class="variable">$error</span>) {
        <span class="function">echo</span> <span class="string">"✗ </span><span class="variable">$error</span><span class="string">\n"</span>;
    }
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 4 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 4: Sanear datos con htmlspecialchars</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado un array de strings que pueden contener HTML malicioso, usa <code>htmlspecialchars()</code> para sanearlos. Muestra el antes y después.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="4">
                <textarea name="code4" class="code-input"><?= isset($_POST['code4']) ? htmlspecialchars($_POST['code4']) : "<?php\n\$entradas = [\n    \"Hola mundo\",\n    \"<script>alert('hack')</script>\",\n    \"<b>Texto en negrita</b>\",\n    \"Comillas \\\"dobles\\\" y 'simples'\",\n];\n// Sanea cada entrada con htmlspecialchars\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(4)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(4)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '4'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php ob_start(); try { eval('?>' . $_POST['code4']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); } echo htmlspecialchars(ob_get_clean()); ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-4">
                <h4>💡 Pista</h4>
                <p><code>htmlspecialchars($str, ENT_QUOTES, 'UTF-8')</code> convierte &lt; &gt; &amp; " ' en entidades HTML seguras.</p>
            </div>
            <div class="solution-box" id="solution-4">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$entradas</span> = [
    <span class="string">"Hola mundo"</span>,
    <span class="string">"&lt;script&gt;alert('hack')&lt;/script&gt;"</span>,
    <span class="string">"&lt;b&gt;Texto en negrita&lt;/b&gt;"</span>,
    <span class="string">"Comillas \"dobles\" y 'simples'"</span>,
];

<span class="keyword">foreach</span> (<span class="variable">$entradas</span> <span class="keyword">as</span> <span class="variable">$entrada</span>) {
    <span class="variable">$saneado</span> = <span class="function">htmlspecialchars</span>(<span class="variable">$entrada</span>, ENT_QUOTES, <span class="string">'UTF-8'</span>);
    <span class="function">echo</span> <span class="string">"Original: </span><span class="variable">$entrada</span><span class="string">\n"</span>;
    <span class="function">echo</span> <span class="string">"Saneado:  </span><span class="variable">$saneado</span><span class="string">\n\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 5 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 5: Validar contraseña segura</h3>
            <span class="difficulty hard">Difícil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Valida que una contraseña cumpla:
            <br>- Mínimo 8 caracteres
            <br>- Al menos una mayúscula
            <br>- Al menos una minúscula
            <br>- Al menos un número
            <br>Muestra qué criterios cumple y cuáles no.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="5">
                <textarea name="code5" class="code-input"><?= isset($_POST['code5']) ? htmlspecialchars($_POST['code5']) : "<?php\n\$password = \"MiClave123\";\n\n// Valida cada criterio de la contraseña\n// Puedes usar strlen(), preg_match() o ctype_*\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(5)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(5)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '5'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php ob_start(); try { eval('?>' . $_POST['code5']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); } echo htmlspecialchars(ob_get_clean()); ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-5">
                <h4>💡 Pista</h4>
                <p>Para mayúsculas: <code>preg_match('/[A-Z]/', $password)</code>. Para minúsculas: <code>/[a-z]/</code>. Para números: <code>/[0-9]/</code>. Longitud: <code>strlen($password) >= 8</code>.</p>
            </div>
            <div class="solution-box" id="solution-5">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$password</span> = <span class="string">"MiClave123"</span>;
<span class="variable">$valida</span> = <span class="keyword">true</span>;

<span class="function">echo</span> <span class="string">"Contraseña: </span><span class="variable">$password</span><span class="string">\n\n"</span>;

<span class="comment">// Longitud mínima</span>
<span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$password</span>) >= <span class="number">8</span>) {
    <span class="function">echo</span> <span class="string">"✓ Mínimo 8 caracteres\n"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"✗ Necesita mínimo 8 caracteres\n"</span>;
    <span class="variable">$valida</span> = <span class="keyword">false</span>;
}

<span class="comment">// Mayúscula</span>
<span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="string">'/[A-Z]/'</span>, <span class="variable">$password</span>)) {
    <span class="function">echo</span> <span class="string">"✓ Tiene mayúscula\n"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"✗ Necesita al menos una mayúscula\n"</span>;
    <span class="variable">$valida</span> = <span class="keyword">false</span>;
}

<span class="comment">// Minúscula</span>
<span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="string">'/[a-z]/'</span>, <span class="variable">$password</span>)) {
    <span class="function">echo</span> <span class="string">"✓ Tiene minúscula\n"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"✗ Necesita al menos una minúscula\n"</span>;
    <span class="variable">$valida</span> = <span class="keyword">false</span>;
}

<span class="comment">// Número</span>
<span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="string">'/[0-9]/'</span>, <span class="variable">$password</span>)) {
    <span class="function">echo</span> <span class="string">"✓ Tiene número\n"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"✗ Necesita al menos un número\n"</span>;
    <span class="variable">$valida</span> = <span class="keyword">false</span>;
}

<span class="function">echo</span> <span class="string">"\n"</span> . (<span class="variable">$valida</span> ? <span class="string">"✓ Contraseña SEGURA"</span> : <span class="string">"✗ Contraseña NO segura"</span>);
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>
