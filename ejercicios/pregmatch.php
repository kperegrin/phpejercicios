<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="breadcrumb">
        <a href="../index.php">Inicio</a> <span>›</span> preg_match
    </div>

    <div class="page-header">
        <h1>🔍 <span class="accent">preg_match</span></h1>
        <p>Domina las expresiones regulares en PHP para búsquedas y validaciones avanzadas.</p>
    </div>

    <!-- TEORÍA -->
    <div class="theory-box">
        <h2>📖 Repaso Teórico</h2>
        <ul>
            <li><code>preg_match("/patrón/", $string)</code> — Devuelve 1 si encuentra coincidencia, 0 si no.</li>
            <li><code>preg_match("/patrón/", $string, $matches)</code> — Guarda las coincidencias en <code>$matches</code>.</li>
            <li><code>preg_match_all("/patrón/", $string, $matches)</code> — Encuentra TODAS las coincidencias.</li>
            <li><code>preg_replace("/patrón/", "reemplazo", $string)</code> — Busca y reemplaza.</li>
        </ul>
        <h2 style="margin-top:16px">🔤 Metacaracteres principales</h2>
        <ul>
            <li><code>.</code> — Cualquier carácter (excepto salto de línea).</li>
            <li><code>^</code> — Inicio del string. <code>$</code> — Final del string.</li>
            <li><code>\d</code> — Dígito (0-9). <code>\D</code> — No dígito.</li>
            <li><code>\w</code> — Letra, dígito o _. <code>\W</code> — Lo contrario.</li>
            <li><code>\s</code> — Espacio en blanco. <code>\S</code> — No espacio.</li>
            <li><code>[abc]</code> — Uno de estos caracteres. <code>[a-z]</code> — Rango.</li>
            <li><code>[^abc]</code> — Cualquiera EXCEPTO estos.</li>
        </ul>
        <h2 style="margin-top:16px">🔢 Cuantificadores</h2>
        <ul>
            <li><code>*</code> — 0 o más veces. <code>+</code> — 1 o más veces. <code>?</code> — 0 o 1 vez.</li>
            <li><code>{3}</code> — Exactamente 3. <code>{2,5}</code> — Entre 2 y 5. <code>{3,}</code> — 3 o más.</li>
        </ul>
        <h2 style="margin-top:16px">📦 Grupos y modificadores</h2>
        <ul>
            <li><code>(abc)</code> — Grupo de captura. <code>(a|b)</code> — Alternativa (a O b).</li>
            <li><code>/i</code> — Case insensitive. <code>/m</code> — Multilínea.</li>
        </ul>
    </div>

    <!-- EJERCICIO 1 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 1: Buscar patrón simple</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado un array de strings, usa <code>preg_match</code> para encontrar cuáles contienen un número de teléfono (9 dígitos seguidos que empiezan por 6 o 9).</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="1">
                <textarea name="code1" class="code-input"><?= isset($_POST['code1']) ? htmlspecialchars($_POST['code1']) : "<?php\n\$textos = [\n    \"Llama al 612345678\",\n    \"Sin teléfono aquí\",\n    \"Mi número: 912345678\",\n    \"Código: 12345\",\n    \"Contacto: 687654321\"\n];\n// Usa preg_match para encontrar teléfonos\n\n?>" ?></textarea>
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
                <p>Patrón: <code>/[69]\d{8}/</code> — Empieza por 6 o 9, seguido de 8 dígitos. Usa el tercer parámetro para capturar: <code>preg_match('/[69]\d{8}/', $texto, $matches)</code></p>
            </div>
            <div class="solution-box" id="solution-1">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$textos</span> = [
    <span class="string">"Llama al 612345678"</span>,
    <span class="string">"Sin teléfono aquí"</span>,
    <span class="string">"Mi número: 912345678"</span>,
    <span class="string">"Código: 12345"</span>,
    <span class="string">"Contacto: 687654321"</span>
];

<span class="keyword">foreach</span> (<span class="variable">$textos</span> <span class="keyword">as</span> <span class="variable">$texto</span>) {
    <span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="string">'/[69]\d{8}/'</span>, <span class="variable">$texto</span>, <span class="variable">$matches</span>)) {
        <span class="function">echo</span> <span class="string">"✓ Teléfono encontrado: </span><span class="variable">{$matches[0]}</span><span class="string"> → en \"</span><span class="variable">$texto</span><span class="string">\"\n"</span>;
    } <span class="keyword">else</span> {
        <span class="function">echo</span> <span class="string">"✗ Sin teléfono → \"</span><span class="variable">$texto</span><span class="string">\"\n"</span>;
    }
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 2 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 2: Validar formato de fecha</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Valida que una fecha tenga el formato <strong>DD/MM/AAAA</strong> (dos dígitos / dos dígitos / cuatro dígitos). Prueba con varias fechas.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="2">
                <textarea name="code2" class="code-input"><?= isset($_POST['code2']) ? htmlspecialchars($_POST['code2']) : "<?php\n\$fechas = [\"15/03/2024\", \"1/3/2024\", \"15-03-2024\", \"31/12/2025\", \"abc\"];\n\n// Valida cada fecha con preg_match\n\n?>" ?></textarea>
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
                <p>Patrón: <code>/^\d{2}\/\d{2}\/\d{4}$/</code>. La barra <code>/</code> se escapa con <code>\/</code>. Los <code>^</code> y <code>$</code> aseguran que sea exactamente ese formato.</p>
            </div>
            <div class="solution-box" id="solution-2">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$fechas</span> = [<span class="string">"15/03/2024"</span>, <span class="string">"1/3/2024"</span>, <span class="string">"15-03-2024"</span>, <span class="string">"31/12/2025"</span>, <span class="string">"abc"</span>];

<span class="keyword">foreach</span> (<span class="variable">$fechas</span> <span class="keyword">as</span> <span class="variable">$fecha</span>) {
    <span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="string">'/^\d{2}\/\d{2}\/\d{4}$/'</span>, <span class="variable">$fecha</span>)) {
        <span class="function">echo</span> <span class="string">"✓ Válida:   </span><span class="variable">$fecha</span><span class="string">\n"</span>;
    } <span class="keyword">else</span> {
        <span class="function">echo</span> <span class="string">"✗ Inválida: </span><span class="variable">$fecha</span><span class="string">\n"</span>;
    }
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 3 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 3: Grupos de captura</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dada una fecha en formato "DD/MM/AAAA", usa <strong>grupos de captura</strong> con <code>preg_match</code> para extraer el día, mes y año por separado.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="3">
                <textarea name="code3" class="code-input"><?= isset($_POST['code3']) ? htmlspecialchars($_POST['code3']) : "<?php\n\$fecha = \"25/12/2024\";\n\n// Usa grupos de captura () para extraer día, mes, año\n// preg_match('/patrón/', \$fecha, \$matches)\n\n?>" ?></textarea>
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
                <p>Patrón con grupos: <code>/(\d{2})\/(\d{2})\/(\d{4})/</code>. En <code>$matches</code>: [0] es la coincidencia completa, [1] el día, [2] el mes, [3] el año.</p>
            </div>
            <div class="solution-box" id="solution-3">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$fecha</span> = <span class="string">"25/12/2024"</span>;

<span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="string">'/(\d{2})\/(\d{2})\/(\d{4})/'</span>, <span class="variable">$fecha</span>, <span class="variable">$matches</span>)) {
    <span class="function">echo</span> <span class="string">"Fecha completa: </span><span class="variable">{$matches[0]}</span><span class="string">\n"</span>;
    <span class="function">echo</span> <span class="string">"Día:  </span><span class="variable">{$matches[1]}</span><span class="string">\n"</span>;
    <span class="function">echo</span> <span class="string">"Mes:  </span><span class="variable">{$matches[2]}</span><span class="string">\n"</span>;
    <span class="function">echo</span> <span class="string">"Año:  </span><span class="variable">{$matches[3]}</span><span class="string">\n"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"Formato no válido"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 4 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 4: Validar matrícula española</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Las matrículas españolas actuales tienen el formato: <strong>4 dígitos + espacio + 3 letras consonantes</strong> (sin vocales ni Ñ ni Q). Ejemplo: "1234 BCF". Valida un array de matrículas.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="4">
                <textarea name="code4" class="code-input"><?= isset($_POST['code4']) ? htmlspecialchars($_POST['code4']) : "<?php\n\$matriculas = [\"1234 BCF\", \"0000 AAA\", \"9999 ZZZ\", \"123 BCD\", \"1234 BCD\", \"1234BCD\"];\n\n// Valida cada matrícula con preg_match\n\n?>" ?></textarea>
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
                <p>Las consonantes válidas son: BCDFGHJKLMNPRSTVWXYZ. Patrón: <code>/^\d{4}\s[BCDFGHJKLMNPRSTVWXYZ]{3}$/</code></p>
            </div>
            <div class="solution-box" id="solution-4">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$matriculas</span> = [<span class="string">"1234 BCF"</span>, <span class="string">"0000 AAA"</span>, <span class="string">"9999 ZZZ"</span>, <span class="string">"123 BCD"</span>, <span class="string">"1234 BCD"</span>, <span class="string">"1234BCD"</span>];

<span class="variable">$patron</span> = <span class="string">'/^\d{4}\s[BCDFGHJKLMNPRSTVWXYZ]{3}$/'</span>;

<span class="keyword">foreach</span> (<span class="variable">$matriculas</span> <span class="keyword">as</span> <span class="variable">$mat</span>) {
    <span class="keyword">if</span> (<span class="function">preg_match</span>(<span class="variable">$patron</span>, <span class="variable">$mat</span>)) {
        <span class="function">echo</span> <span class="string">"✓ Válida:   </span><span class="variable">$mat</span><span class="string">\n"</span>;
    } <span class="keyword">else</span> {
        <span class="function">echo</span> <span class="string">"✗ Inválida: </span><span class="variable">$mat</span><span class="string">\n"</span>;
    }
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 5 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 5: preg_match_all - Extraer emails</h3>
            <span class="difficulty hard">Difícil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado un texto largo, usa <strong>preg_match_all</strong> para encontrar y extraer todas las direcciones de email que contenga.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="5">
                <textarea name="code5" class="code-input"><?= isset($_POST['code5']) ? htmlspecialchars($_POST['code5']) : "<?php\n\$texto = \"Contacta con juan@gmail.com o con maria@empresa.es. \nTambién puedes escribir a soporte@web.org o info@tienda.com\";\n\n// Usa preg_match_all para extraer todos los emails\n\n?>" ?></textarea>
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
                <p>Patrón de email básico: <code>/[\w.-]+@[\w.-]+\.\w+/</code>. <code>preg_match_all</code> guarda todas las coincidencias en <code>$matches[0]</code>.</p>
            </div>
            <div class="solution-box" id="solution-5">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$texto</span> = <span class="string">"Contacta con juan@gmail.com o con maria@empresa.es.
También puedes escribir a soporte@web.org o info@tienda.com"</span>;

<span class="variable">$patron</span> = <span class="string">'/[\w.-]+@[\w.-]+\.\w+/'</span>;
<span class="variable">$total</span> = <span class="function">preg_match_all</span>(<span class="variable">$patron</span>, <span class="variable">$texto</span>, <span class="variable">$matches</span>);

<span class="function">echo</span> <span class="string">"Se encontraron </span><span class="variable">$total</span><span class="string"> emails:\n\n"</span>;

<span class="keyword">foreach</span> (<span class="variable">$matches</span>[<span class="number">0</span>] <span class="keyword">as</span> <span class="variable">$i</span> => <span class="variable">$email</span>) {
    <span class="function">echo</span> (<span class="variable">$i</span> + <span class="number">1</span>) . <span class="string">") </span><span class="variable">$email</span><span class="string">\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 6 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 6: preg_replace - Censurar palabras</h3>
            <span class="difficulty hard">Difícil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado un texto, usa <strong>preg_replace</strong> para:
            <br>1) Reemplazar números de teléfono por "***-OCULTO"
            <br>2) Censurar una lista de palabras reemplazándolas por asteriscos de la misma longitud</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="6">
                <textarea name="code6" class="code-input"><?= isset($_POST['code6']) ? htmlspecialchars($_POST['code6']) : "<?php\n\$texto = \"Llámame al 612345678, mi otro número es 934567890. Esto es un tonto ejemplo malo.\";\n\n// 1) Oculta los teléfonos\n// 2) Censura palabras 'tonto' y 'malo'\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(6)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(6)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '6'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php ob_start(); try { eval('?>' . $_POST['code6']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); } echo htmlspecialchars(ob_get_clean()); ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-6">
                <h4>💡 Pista</h4>
                <p>Para teléfonos: <code>preg_replace('/\d{9}/', '***-OCULTO', $texto)</code>. Para censurar palabras: <code>preg_replace('/tonto|malo/i', '****', $texto)</code>. Para asteriscos de la misma longitud usa un callback.</p>
            </div>
            <div class="solution-box" id="solution-6">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$texto</span> = <span class="string">"Llámame al 612345678, mi otro número es 934567890. Esto es un tonto ejemplo malo."</span>;

<span class="function">echo</span> <span class="string">"Original:\n</span><span class="variable">$texto</span><span class="string">\n\n"</span>;

<span class="comment">// 1) Ocultar teléfonos</span>
<span class="variable">$resultado</span> = <span class="function">preg_replace</span>(<span class="string">'/\d{9}/'</span>, <span class="string">'***-OCULTO'</span>, <span class="variable">$texto</span>);
<span class="function">echo</span> <span class="string">"Sin teléfonos:\n</span><span class="variable">$resultado</span><span class="string">\n\n"</span>;

<span class="comment">// 2) Censurar palabras (con asteriscos de la misma longitud)</span>
<span class="variable">$censurado</span> = <span class="function">preg_replace_callback</span>(
    <span class="string">'/tonto|malo/i'</span>,
    <span class="keyword">function</span>(<span class="variable">$match</span>) {
        <span class="keyword">return</span> <span class="function">str_repeat</span>(<span class="string">'*'</span>, <span class="function">strlen</span>(<span class="variable">$match</span>[<span class="number">0</span>]));
    },
    <span class="variable">$texto</span>
);
<span class="function">echo</span> <span class="string">"Censurado:\n</span><span class="variable">$censurado</span><span class="string">"</span>;
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>
