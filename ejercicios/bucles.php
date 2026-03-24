<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="breadcrumb">
        <a href="../index.php">Inicio</a> <span>›</span> Bucles
    </div>

    <div class="page-header">
        <h1>🔄 <span class="accent">Bucles</span></h1>
        <p>Aprende a repetir bloques de código con for, while, do-while y foreach.</p>
    </div>

    <!-- TEORÍA -->
    <div class="theory-box">
        <h2>📖 Repaso Teórico</h2>
        <ul>
            <li><code>for ($i = 0; $i &lt; 10; $i++) { ... }</code> — Bucle con contador. Ideal cuando sabes cuántas veces repetir.</li>
            <li><code>while (condición) { ... }</code> — Repite mientras la condición sea verdadera. Comprueba ANTES de ejecutar.</li>
            <li><code>do { ... } while (condición);</code> — Igual que while, pero se ejecuta AL MENOS una vez.</li>
            <li><code>foreach ($array as $valor) { ... }</code> — Recorre cada elemento de un array.</li>
            <li><code>foreach ($array as $clave => $valor) { ... }</code> — Recorre clave y valor.</li>
            <li><code>break;</code> — Sale del bucle. <code>continue;</code> — Salta a la siguiente iteración.</li>
        </ul>
    </div>

    <!-- EJERCICIO 1 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 1: Números del 1 al 20</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Usa un bucle <strong>for</strong> para imprimir los números del 1 al 20, separados por coma.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="1">
                <textarea name="code1" class="code-input"><?= isset($_POST['code1']) ? htmlspecialchars($_POST['code1']) : "<?php\n// Usa un bucle for para imprimir del 1 al 20\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(1)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(1)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '1'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try { eval('?>' . $_POST['code1']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); }
                    echo htmlspecialchars(ob_get_clean());
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-1">
                <h4>💡 Pista</h4>
                <p><code>for ($i = 1; $i &lt;= 20; $i++)</code>. Para la coma, puedes usar un condicional: si no es el último, añade ", ".</p>
            </div>
            <div class="solution-box" id="solution-1">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="keyword">for</span> (<span class="variable">$i</span> = <span class="number">1</span>; <span class="variable">$i</span> <= <span class="number">20</span>; <span class="variable">$i</span>++) {
    <span class="function">echo</span> <span class="variable">$i</span>;
    <span class="keyword">if</span> (<span class="variable">$i</span> < <span class="number">20</span>) <span class="function">echo</span> <span class="string">", "</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 2 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 2: Tabla de multiplicar</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado un número <code>$n</code>, muestra su tabla de multiplicar del 1 al 10 usando un bucle <strong>for</strong>. Formato: <code>5 x 1 = 5</code></p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="2">
                <textarea name="code2" class="code-input"><?= isset($_POST['code2']) ? htmlspecialchars($_POST['code2']) : "<?php\n\$n = 5;\n// Muestra la tabla de multiplicar de \$n\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(2)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(2)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '2'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try { eval('?>' . $_POST['code2']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); }
                    echo htmlspecialchars(ob_get_clean());
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-2">
                <h4>💡 Pista</h4>
                <p>Usa <code>for ($i = 1; $i &lt;= 10; $i++)</code> y dentro imprime <code>"$n x $i = " . ($n * $i)</code>. Usa <code>\n</code> o <code>&lt;br&gt;</code> para saltos de línea.</p>
            </div>
            <div class="solution-box" id="solution-2">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$n</span> = <span class="number">5</span>;

<span class="keyword">for</span> (<span class="variable">$i</span> = <span class="number">1</span>; <span class="variable">$i</span> <= <span class="number">10</span>; <span class="variable">$i</span>++) {
    <span class="function">echo</span> <span class="string">"</span><span class="variable">$n</span><span class="string"> x </span><span class="variable">$i</span><span class="string"> = "</span> . (<span class="variable">$n</span> * <span class="variable">$i</span>) . <span class="string">"\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 3 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 3: Suma con while</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Usa un bucle <strong>while</strong> para sumar todos los números del 1 al 100. Muestra el resultado final.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="3">
                <textarea name="code3" class="code-input"><?= isset($_POST['code3']) ? htmlspecialchars($_POST['code3']) : "<?php\n\$suma = 0;\n\$i = 1;\n// Usa while para sumar del 1 al 100\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(3)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(3)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '3'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try { eval('?>' . $_POST['code3']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); }
                    echo htmlspecialchars(ob_get_clean());
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-3">
                <h4>💡 Pista</h4>
                <p>Inicializa <code>$suma = 0</code> y <code>$i = 1</code>. En el while: <code>$suma += $i; $i++;</code>. El resultado debe ser 5050.</p>
            </div>
            <div class="solution-box" id="solution-3">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$suma</span> = <span class="number">0</span>;
<span class="variable">$i</span> = <span class="number">1</span>;

<span class="keyword">while</span> (<span class="variable">$i</span> <= <span class="number">100</span>) {
    <span class="variable">$suma</span> += <span class="variable">$i</span>;
    <span class="variable">$i</span>++;
}

<span class="function">echo</span> <span class="string">"La suma del 1 al 100 es: </span><span class="variable">$suma</span><span class="string">"</span>;
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 4 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 4: Números pares con continue</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Usa un bucle for del 1 al 20. Dentro del bucle, usa <strong>continue</strong> para saltar los números impares y solo mostrar los pares.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="4">
                <textarea name="code4" class="code-input"><?= isset($_POST['code4']) ? htmlspecialchars($_POST['code4']) : "<?php\n// Usa for + continue para mostrar solo los pares del 1 al 20\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(4)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(4)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '4'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try { eval('?>' . $_POST['code4']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); }
                    echo htmlspecialchars(ob_get_clean());
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-4">
                <h4>💡 Pista</h4>
                <p>Dentro del for: <code>if ($i % 2 != 0) continue;</code> para saltar los impares.</p>
            </div>
            <div class="solution-box" id="solution-4">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="keyword">for</span> (<span class="variable">$i</span> = <span class="number">1</span>; <span class="variable">$i</span> <= <span class="number">20</span>; <span class="variable">$i</span>++) {
    <span class="keyword">if</span> (<span class="variable">$i</span> % <span class="number">2</span> != <span class="number">0</span>) <span class="keyword">continue</span>;
    <span class="function">echo</span> <span class="variable">$i</span> . <span class="string">" "</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 5 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 5: foreach con array asociativo</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado el array <code>$persona = ["nombre" => "Ana", "edad" => 25, "ciudad" => "Madrid"]</code>, usa <strong>foreach</strong> para mostrar cada clave y valor en formato: <code>nombre: Ana</code></p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="5">
                <textarea name="code5" class="code-input"><?= isset($_POST['code5']) ? htmlspecialchars($_POST['code5']) : "<?php\n\$persona = [\"nombre\" => \"Ana\", \"edad\" => 25, \"ciudad\" => \"Madrid\"];\n// Usa foreach (\$persona as \$clave => \$valor)\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(5)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(5)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '5'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try { eval('?>' . $_POST['code5']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); }
                    echo htmlspecialchars(ob_get_clean());
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-5">
                <h4>💡 Pista</h4>
                <p><code>foreach ($persona as $clave => $valor) { echo "$clave: $valor\n"; }</code></p>
            </div>
            <div class="solution-box" id="solution-5">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$persona</span> = [<span class="string">"nombre"</span> => <span class="string">"Ana"</span>, <span class="string">"edad"</span> => <span class="number">25</span>, <span class="string">"ciudad"</span> => <span class="string">"Madrid"</span>];

<span class="keyword">foreach</span> (<span class="variable">$persona</span> <span class="keyword">as</span> <span class="variable">$clave</span> => <span class="variable">$valor</span>) {
    <span class="function">echo</span> <span class="string">"</span><span class="variable">$clave</span><span class="string">: </span><span class="variable">$valor</span><span class="string">\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 6 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 6: FizzBuzz</h3>
            <span class="difficulty hard">Difícil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Clásico ejercicio de programación: del 1 al 30, imprime <strong>"Fizz"</strong> si es múltiplo de 3, <strong>"Buzz"</strong> si es múltiplo de 5, <strong>"FizzBuzz"</strong> si es múltiplo de ambos, o el número si no es múltiplo de ninguno.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="6">
                <textarea name="code6" class="code-input"><?= isset($_POST['code6']) ? htmlspecialchars($_POST['code6']) : "<?php\n// FizzBuzz del 1 al 30\nfor (\$i = 1; \$i <= 30; \$i++) {\n    // Completa la lógica\n}\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(6)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(6)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '6'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try { eval('?>' . $_POST['code6']); } catch (Throwable $e) { echo "Error: " . htmlspecialchars($e->getMessage()); }
                    echo htmlspecialchars(ob_get_clean());
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-6">
                <h4>💡 Pista</h4>
                <p>¡Cuidado con el orden! Primero comprueba si es múltiplo de AMBOS (3 y 5), luego solo de 3, luego solo de 5, y finalmente el else.</p>
            </div>
            <div class="solution-box" id="solution-6">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="keyword">for</span> (<span class="variable">$i</span> = <span class="number">1</span>; <span class="variable">$i</span> <= <span class="number">30</span>; <span class="variable">$i</span>++) {
    <span class="keyword">if</span> (<span class="variable">$i</span> % <span class="number">3</span> == <span class="number">0</span> && <span class="variable">$i</span> % <span class="number">5</span> == <span class="number">0</span>) {
        <span class="function">echo</span> <span class="string">"FizzBuzz"</span>;
    } <span class="keyword">elseif</span> (<span class="variable">$i</span> % <span class="number">3</span> == <span class="number">0</span>) {
        <span class="function">echo</span> <span class="string">"Fizz"</span>;
    } <span class="keyword">elseif</span> (<span class="variable">$i</span> % <span class="number">5</span> == <span class="number">0</span>) {
        <span class="function">echo</span> <span class="string">"Buzz"</span>;
    } <span class="keyword">else</span> {
        <span class="function">echo</span> <span class="variable">$i</span>;
    }
    <span class="function">echo</span> <span class="string">"\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>
