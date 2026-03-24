<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="breadcrumb">
        <a href="../index.php">Inicio</a> <span>›</span> Lectura de Archivos
    </div>

    <div class="page-header">
        <h1>📄 <span class="accent">Lectura de Archivos</span></h1>
        <p>Aprende a abrir, leer y procesar archivos de texto y CSV en PHP.</p>
    </div>

    <!-- TEORÍA -->
    <div class="theory-box">
        <h2>📖 Repaso Teórico</h2>
        <ul>
            <li><code>file_get_contents("archivo.txt")</code> — Lee TODO el archivo en un string.</li>
            <li><code>file("archivo.txt")</code> — Lee el archivo y devuelve un array (una línea por elemento).</li>
            <li><code>fopen("archivo.txt", "r")</code> — Abre el archivo para lectura. Modos: "r" (leer), "w" (escribir), "a" (añadir).</li>
            <li><code>fgets($handle)</code> — Lee una línea del archivo abierto.</li>
            <li><code>feof($handle)</code> — Comprueba si hemos llegado al final del archivo.</li>
            <li><code>fclose($handle)</code> — Cierra el archivo.</li>
            <li><code>fgetcsv($handle, 0, ";")</code> — Lee una línea CSV y la devuelve como array.</li>
            <li><code>file_exists("archivo.txt")</code> — Comprueba si el archivo existe.</li>
            <li><code>trim($linea)</code> — Elimina espacios y saltos de línea al inicio y final.</li>
        </ul>
    </div>

    <div class="theory-box" style="border-left-color: #e94560; margin-bottom: 30px;">
        <h2>📁 Archivos de prueba disponibles</h2>
        <p>En la carpeta <code>datos/</code> tienes estos archivos para practicar:</p>
        <ul>
            <li><code>datos/notas.txt</code> — Lista de alumnos con notas (una por línea)</li>
            <li><code>datos/productos.csv</code> — Catálogo de productos separado por punto y coma</li>
            <li><code>datos/usuarios.txt</code> — Lista de emails de usuarios</li>
        </ul>
    </div>

    <!-- EJERCICIO 1 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 1: Leer archivo completo</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Lee el contenido completo de <code>../datos/notas.txt</code> usando <strong>file_get_contents</strong> y muéstralo.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="1">
                <textarea name="code1" class="code-input"><?= isset($_POST['code1']) ? htmlspecialchars($_POST['code1']) : "<?php\n// Lee el archivo completo con file_get_contents\n\$ruta = \"../datos/notas.txt\";\n\n?>" ?></textarea>
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
                <p>Primero comprueba que existe con <code>file_exists()</code>, luego usa <code>$contenido = file_get_contents($ruta);</code></p>
            </div>
            <div class="solution-box" id="solution-1">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$ruta</span> = <span class="string">"../datos/notas.txt"</span>;

<span class="keyword">if</span> (<span class="function">file_exists</span>(<span class="variable">$ruta</span>)) {
    <span class="variable">$contenido</span> = <span class="function">file_get_contents</span>(<span class="variable">$ruta</span>);
    <span class="function">echo</span> <span class="variable">$contenido</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"El archivo no existe"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 2 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 2: Leer línea a línea con file()</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Usa <strong>file()</strong> para leer <code>../datos/notas.txt</code> como array de líneas. Muestra cada línea con su número (empezando por 1).</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="2">
                <textarea name="code2" class="code-input"><?= isset($_POST['code2']) ? htmlspecialchars($_POST['code2']) : "<?php\n\$ruta = \"../datos/notas.txt\";\n// Usa file() para leer como array de líneas\n\n?>" ?></textarea>
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
                <p><code>$lineas = file($ruta);</code> y luego <code>foreach ($lineas as $num => $linea)</code>. Recuerda que los índices empiezan en 0, así que suma 1.</p>
            </div>
            <div class="solution-box" id="solution-2">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$ruta</span> = <span class="string">"../datos/notas.txt"</span>;
<span class="variable">$lineas</span> = <span class="function">file</span>(<span class="variable">$ruta</span>, FILE_IGNORE_NEW_LINES);

<span class="keyword">foreach</span> (<span class="variable">$lineas</span> <span class="keyword">as</span> <span class="variable">$num</span> => <span class="variable">$linea</span>) {
    <span class="function">echo</span> (<span class="variable">$num</span> + <span class="number">1</span>) . <span class="string">") "</span> . <span class="variable">$linea</span> . <span class="string">"\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 3 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 3: Leer con fopen/fgets</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Lee <code>../datos/notas.txt</code> usando <strong>fopen + fgets + feof</strong>. Para cada línea, separa el nombre de la nota (formato: "nombre,nota") y muestra solo los aprobados.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="3">
                <textarea name="code3" class="code-input"><?= isset($_POST['code3']) ? htmlspecialchars($_POST['code3']) : "<?php\n\$ruta = \"../datos/notas.txt\";\n// Abre con fopen, lee con fgets, cierra con fclose\n// Separa nombre y nota con explode\n\n?>" ?></textarea>
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
                <p>Estructura: <code>$f = fopen($ruta, "r");</code> → <code>while (!feof($f)) { $linea = fgets($f); ... }</code> → <code>fclose($f);</code>. Usa <code>explode(",", trim($linea))</code> para separar.</p>
            </div>
            <div class="solution-box" id="solution-3">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$ruta</span> = <span class="string">"../datos/notas.txt"</span>;
<span class="variable">$f</span> = <span class="function">fopen</span>(<span class="variable">$ruta</span>, <span class="string">"r"</span>);

<span class="function">echo</span> <span class="string">"=== APROBADOS ===\n"</span>;
<span class="keyword">while</span> (!<span class="function">feof</span>(<span class="variable">$f</span>)) {
    <span class="variable">$linea</span> = <span class="function">trim</span>(<span class="function">fgets</span>(<span class="variable">$f</span>));
    <span class="keyword">if</span> (empty(<span class="variable">$linea</span>)) <span class="keyword">continue</span>;

    <span class="variable">$datos</span> = <span class="function">explode</span>(<span class="string">","</span>, <span class="variable">$linea</span>);
    <span class="variable">$nombre</span> = <span class="variable">$datos</span>[<span class="number">0</span>];
    <span class="variable">$nota</span> = (<span class="keyword">float</span>)<span class="variable">$datos</span>[<span class="number">1</span>];

    <span class="keyword">if</span> (<span class="variable">$nota</span> >= <span class="number">5</span>) {
        <span class="function">echo</span> <span class="string">"</span><span class="variable">$nombre</span><span class="string">: </span><span class="variable">$nota</span><span class="string">\n"</span>;
    }
}
<span class="function">fclose</span>(<span class="variable">$f</span>);
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 4 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 4: Leer CSV con fgetcsv</h3>
            <span class="difficulty hard">Difícil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Lee el archivo <code>../datos/productos.csv</code> (separado por ;). La primera línea es la cabecera. Muestra los productos en formato tabla y calcula el precio total del inventario (precio × stock).</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="4">
                <textarea name="code4" class="code-input"><?= isset($_POST['code4']) ? htmlspecialchars($_POST['code4']) : "<?php\n\$ruta = \"../datos/productos.csv\";\n// Usa fopen + fgetcsv con separador ;\n// Primera línea = cabecera\n// Calcula precio total del inventario\n\n?>" ?></textarea>
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
                <p><code>fgetcsv($f, 0, ";")</code> lee una línea CSV con separador ;. La primera llamada la usas para la cabecera. Luego en el while, multiplica precio × stock para el total.</p>
            </div>
            <div class="solution-box" id="solution-4">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$ruta</span> = <span class="string">"../datos/productos.csv"</span>;
<span class="variable">$f</span> = <span class="function">fopen</span>(<span class="variable">$ruta</span>, <span class="string">"r"</span>);
<span class="variable">$cabecera</span> = <span class="function">fgetcsv</span>(<span class="variable">$f</span>, <span class="number">0</span>, <span class="string">";"</span>);
<span class="variable">$total</span> = <span class="number">0</span>;

<span class="function">echo</span> <span class="function">implode</span>(<span class="string">" | "</span>, <span class="variable">$cabecera</span>) . <span class="string">" | VALOR\n"</span>;
<span class="function">echo</span> <span class="function">str_repeat</span>(<span class="string">"-"</span>, <span class="number">50</span>) . <span class="string">"\n"</span>;

<span class="keyword">while</span> ((<span class="variable">$fila</span> = <span class="function">fgetcsv</span>(<span class="variable">$f</span>, <span class="number">0</span>, <span class="string">";"</span>)) !== <span class="keyword">false</span>) {
    <span class="variable">$valor</span> = (<span class="keyword">float</span>)<span class="variable">$fila</span>[<span class="number">2</span>] * (<span class="keyword">int</span>)<span class="variable">$fila</span>[<span class="number">3</span>];
    <span class="variable">$total</span> += <span class="variable">$valor</span>;
    <span class="function">echo</span> <span class="function">implode</span>(<span class="string">" | "</span>, <span class="variable">$fila</span>) . <span class="string">" | "</span> . <span class="variable">$valor</span> . <span class="string">"€\n"</span>;
}

<span class="function">fclose</span>(<span class="variable">$f</span>);
<span class="function">echo</span> <span class="string">"\nVALOR TOTAL INVENTARIO: </span><span class="variable">$total</span><span class="string">€"</span>;
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 5 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 5: Contar líneas y buscar texto</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Lee <code>../datos/usuarios.txt</code>. Cuenta cuántas líneas tiene, cuántos emails son de Gmail y cuántos de Hotmail.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="5">
                <textarea name="code5" class="code-input"><?= isset($_POST['code5']) ? htmlspecialchars($_POST['code5']) : "<?php\n\$ruta = \"../datos/usuarios.txt\";\n// Lee el archivo y cuenta emails por dominio\n\n?>" ?></textarea>
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
                <p>Usa <code>file()</code> para leer todo como array. <code>count()</code> te da el total. Para buscar "gmail" usa <code>strpos($linea, "@gmail") !== false</code>.</p>
            </div>
            <div class="solution-box" id="solution-5">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$ruta</span> = <span class="string">"../datos/usuarios.txt"</span>;
<span class="variable">$lineas</span> = <span class="function">file</span>(<span class="variable">$ruta</span>, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

<span class="variable">$gmail</span> = <span class="number">0</span>;
<span class="variable">$hotmail</span> = <span class="number">0</span>;

<span class="keyword">foreach</span> (<span class="variable">$lineas</span> <span class="keyword">as</span> <span class="variable">$email</span>) {
    <span class="keyword">if</span> (<span class="function">strpos</span>(<span class="variable">$email</span>, <span class="string">"@gmail"</span>) !== <span class="keyword">false</span>) <span class="variable">$gmail</span>++;
    <span class="keyword">if</span> (<span class="function">strpos</span>(<span class="variable">$email</span>, <span class="string">"@hotmail"</span>) !== <span class="keyword">false</span>) <span class="variable">$hotmail</span>++;
}

<span class="function">echo</span> <span class="string">"Total emails: "</span> . <span class="function">count</span>(<span class="variable">$lineas</span>) . <span class="string">"\n"</span>;
<span class="function">echo</span> <span class="string">"Gmail: </span><span class="variable">$gmail</span><span class="string">\n"</span>;
<span class="function">echo</span> <span class="string">"Hotmail: </span><span class="variable">$hotmail</span><span class="string">\n"</span>;
<span class="function">echo</span> <span class="string">"Otros: "</span> . (<span class="function">count</span>(<span class="variable">$lineas</span>) - <span class="variable">$gmail</span> - <span class="variable">$hotmail</span>);
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>
