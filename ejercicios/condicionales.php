<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="breadcrumb">
        <a href="../index.php">Inicio</a> <span>›</span> Condicionales
    </div>

    <div class="page-header">
        <h1>🔀 <span class="accent">Condicionales</span></h1>
        <p>Controla el flujo de ejecución de tu programa con if, else, elseif, switch y el operador ternario.</p>
    </div>

    <!-- TEORÍA -->
    <div class="theory-box">
        <h2>📖 Repaso Teórico</h2>
        <ul>
            <li><code>if (condición) { ... }</code> — Ejecuta el bloque si la condición es verdadera.</li>
            <li><code>else { ... }</code> — Se ejecuta si la condición del if es falsa.</li>
            <li><code>elseif (condición) { ... }</code> — Añade condiciones adicionales.</li>
            <li><code>switch ($var) { case valor: ... break; }</code> — Compara una variable con múltiples valores.</li>
            <li><code>$resultado = (condición) ? "sí" : "no";</code> — Operador ternario (if en una línea).</li>
        </ul>
        <p style="margin-top:10px"><strong>Operadores de comparación:</strong> <code>==</code> (igual), <code>===</code> (idéntico), <code>!=</code>, <code>!==</code>, <code>&lt;</code>, <code>&gt;</code>, <code>&lt;=</code>, <code>&gt;=</code></p>
        <p><strong>Operadores lógicos:</strong> <code>&&</code> (AND), <code>||</code> (OR), <code>!</code> (NOT)</p>
    </div>

    <!-- EJERCICIO 1 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 1: Mayor de edad</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Escribe un programa que dada una variable <code>$edad</code>, imprima si la persona es <strong>"Mayor de edad"</strong> o <strong>"Menor de edad"</strong> (el límite es 18 años).</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="1">
                <textarea name="code1" class="code-input" placeholder="<?= htmlspecialchars("<?php\n\$edad = 20;\n// Tu código aquí...\n?>") ?>"><?= isset($_POST['code1']) ? htmlspecialchars($_POST['code1']) : "<?php\n\$edad = 20;\n// Escribe tu condicional aquí\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(1)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(1)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '1'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try {
                        eval('?>' . $_POST['code1']);
                    } catch (Throwable $e) {
                        echo "Error: " . htmlspecialchars($e->getMessage());
                    }
                    $output = ob_get_clean();
                    echo htmlspecialchars($output);
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-1">
                <h4>💡 Pista</h4>
                <p>Usa <code>if ($edad >= 18)</code> para comprobar si es mayor de edad y <code>else</code> para el caso contrario.</p>
            </div>

            <div class="solution-box" id="solution-1">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$edad</span> = <span class="number">20</span>;

<span class="keyword">if</span> (<span class="variable">$edad</span> >= <span class="number">18</span>) {
    <span class="function">echo</span> <span class="string">"Mayor de edad"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"Menor de edad"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 2 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 2: Clasificar nota</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dada una variable <code>$nota</code> (0-10), muestra:
            <strong>"Suspenso"</strong> si es menor que 5,
            <strong>"Aprobado"</strong> si es 5-6,
            <strong>"Notable"</strong> si es 7-8,
            <strong>"Sobresaliente"</strong> si es 9-10.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="2">
                <textarea name="code2" class="code-input" placeholder="Tu código aquí..."><?= isset($_POST['code2']) ? htmlspecialchars($_POST['code2']) : "<?php\n\$nota = 7;\n// Usa if/elseif/else para clasificar la nota\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(2)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(2)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '2'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try {
                        eval('?>' . $_POST['code2']);
                    } catch (Throwable $e) {
                        echo "Error: " . htmlspecialchars($e->getMessage());
                    }
                    $output = ob_get_clean();
                    echo htmlspecialchars($output);
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-2">
                <h4>💡 Pista</h4>
                <p>Usa una cadena de <code>if / elseif / else</code>. Empieza comprobando <code>$nota &lt; 5</code>, luego <code>$nota &lt;= 6</code>, luego <code>$nota &lt;= 8</code>, y finalmente <code>else</code>.</p>
            </div>

            <div class="solution-box" id="solution-2">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$nota</span> = <span class="number">7</span>;

<span class="keyword">if</span> (<span class="variable">$nota</span> < <span class="number">5</span>) {
    <span class="function">echo</span> <span class="string">"Suspenso"</span>;
} <span class="keyword">elseif</span> (<span class="variable">$nota</span> <= <span class="number">6</span>) {
    <span class="function">echo</span> <span class="string">"Aprobado"</span>;
} <span class="keyword">elseif</span> (<span class="variable">$nota</span> <= <span class="number">8</span>) {
    <span class="function">echo</span> <span class="string">"Notable"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"Sobresaliente"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 3 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 3: Día de la semana con switch</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dada una variable <code>$dia</code> (1-7), usa un <strong>switch</strong> para mostrar el nombre del día (1=Lunes, 2=Martes, ..., 7=Domingo). Si el número no es válido, muestra <strong>"Día no válido"</strong>.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="3">
                <textarea name="code3" class="code-input"><?= isset($_POST['code3']) ? htmlspecialchars($_POST['code3']) : "<?php\n\$dia = 3;\n// Usa switch para determinar el día\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(3)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(3)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '3'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try {
                        eval('?>' . $_POST['code3']);
                    } catch (Throwable $e) {
                        echo "Error: " . htmlspecialchars($e->getMessage());
                    }
                    $output = ob_get_clean();
                    echo htmlspecialchars($output);
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-3">
                <h4>💡 Pista</h4>
                <p>Estructura: <code>switch($dia) { case 1: echo "Lunes"; break; case 2: ... default: echo "Día no válido"; }</code></p>
            </div>

            <div class="solution-box" id="solution-3">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$dia</span> = <span class="number">3</span>;

<span class="keyword">switch</span> (<span class="variable">$dia</span>) {
    <span class="keyword">case</span> <span class="number">1</span>: <span class="function">echo</span> <span class="string">"Lunes"</span>; <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="number">2</span>: <span class="function">echo</span> <span class="string">"Martes"</span>; <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="number">3</span>: <span class="function">echo</span> <span class="string">"Miércoles"</span>; <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="number">4</span>: <span class="function">echo</span> <span class="string">"Jueves"</span>; <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="number">5</span>: <span class="function">echo</span> <span class="string">"Viernes"</span>; <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="number">6</span>: <span class="function">echo</span> <span class="string">"Sábado"</span>; <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="number">7</span>: <span class="function">echo</span> <span class="string">"Domingo"</span>; <span class="keyword">break</span>;
    <span class="keyword">default</span>: <span class="function">echo</span> <span class="string">"Día no válido"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 4 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 4: Operador ternario</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Usa el <strong>operador ternario</strong> para asignar a <code>$tipo</code> el valor <strong>"Par"</strong> si <code>$numero</code> es par, o <strong>"Impar"</strong> si es impar. Luego imprime el resultado.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="4">
                <textarea name="code4" class="code-input"><?= isset($_POST['code4']) ? htmlspecialchars($_POST['code4']) : "<?php\n\$numero = 15;\n// Usa el operador ternario: \$tipo = (condición) ? \"Par\" : \"Impar\";\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(4)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(4)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '4'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try {
                        eval('?>' . $_POST['code4']);
                    } catch (Throwable $e) {
                        echo "Error: " . htmlspecialchars($e->getMessage());
                    }
                    $output = ob_get_clean();
                    echo htmlspecialchars($output);
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-4">
                <h4>💡 Pista</h4>
                <p>Para saber si un número es par: <code>$numero % 2 == 0</code>. El operador <code>%</code> devuelve el resto de la división.</p>
            </div>

            <div class="solution-box" id="solution-4">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$numero</span> = <span class="number">15</span>;
<span class="variable">$tipo</span> = (<span class="variable">$numero</span> % <span class="number">2</span> == <span class="number">0</span>) ? <span class="string">"Par"</span> : <span class="string">"Impar"</span>;
<span class="function">echo</span> <span class="string">"El número </span><span class="variable">$numero</span><span class="string"> es: </span><span class="variable">$tipo</span><span class="string">"</span>;
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 5 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 5: Calculadora básica</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dadas las variables <code>$a</code>, <code>$b</code> y <code>$operacion</code> ("+", "-", "*", "/"), realiza la operación correspondiente. Si la operación es "/" y <code>$b</code> es 0, muestra <strong>"Error: división por cero"</strong>. Si la operación no es válida, muestra <strong>"Operación no reconocida"</strong>.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="5">
                <textarea name="code5" class="code-input"><?= isset($_POST['code5']) ? htmlspecialchars($_POST['code5']) : "<?php\n\$a = 10;\n\$b = 3;\n\$operacion = \"+\";\n// Usa if/elseif o switch para realizar la operación\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(5)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(5)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '5'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try {
                        eval('?>' . $_POST['code5']);
                    } catch (Throwable $e) {
                        echo "Error: " . htmlspecialchars($e->getMessage());
                    }
                    $output = ob_get_clean();
                    echo htmlspecialchars($output);
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-5">
                <h4>💡 Pista</h4>
                <p>Puedes usar <code>switch($operacion)</code> con cases "+", "-", "*", "/". Dentro del case "/", comprueba primero si <code>$b == 0</code>.</p>
            </div>

            <div class="solution-box" id="solution-5">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$a</span> = <span class="number">10</span>;
<span class="variable">$b</span> = <span class="number">3</span>;
<span class="variable">$operacion</span> = <span class="string">"+"</span>;

<span class="keyword">switch</span> (<span class="variable">$operacion</span>) {
    <span class="keyword">case</span> <span class="string">"+"</span>:
        <span class="function">echo</span> <span class="variable">$a</span> + <span class="variable">$b</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="string">"-"</span>:
        <span class="function">echo</span> <span class="variable">$a</span> - <span class="variable">$b</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="string">"*"</span>:
        <span class="function">echo</span> <span class="variable">$a</span> * <span class="variable">$b</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="string">"/"</span>:
        <span class="keyword">if</span> (<span class="variable">$b</span> == <span class="number">0</span>) {
            <span class="function">echo</span> <span class="string">"Error: división por cero"</span>;
        } <span class="keyword">else</span> {
            <span class="function">echo</span> <span class="variable">$a</span> / <span class="variable">$b</span>;
        }
        <span class="keyword">break</span>;
    <span class="keyword">default</span>:
        <span class="function">echo</span> <span class="string">"Operación no reconocida"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 6 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 6: Año bisiesto</h3>
            <span class="difficulty hard">Difícil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Escribe un programa que determine si un año es <strong>bisiesto</strong>. Un año es bisiesto si: es divisible entre 4 Y (no es divisible entre 100 O es divisible entre 400).</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="6">
                <textarea name="code6" class="code-input"><?= isset($_POST['code6']) ? htmlspecialchars($_POST['code6']) : "<?php\n\$anio = 2024;\n// Determina si es bisiesto usando operadores lógicos && y ||\n\n?>" ?></textarea>
                <button type="submit" class="btn btn-run">▶ Ejecutar</button>
                <button type="button" class="btn btn-hint" onclick="toggleHint(6)">💡 Pista</button>
                <button type="button" class="btn btn-solution" onclick="toggleSolution(6)">👁 Solución</button>
            </form>

            <?php if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == '6'): ?>
            <div class="result-box">
                <h4>📤 Resultado:</h4>
                <pre><?php
                    ob_start();
                    try {
                        eval('?>' . $_POST['code6']);
                    } catch (Throwable $e) {
                        echo "Error: " . htmlspecialchars($e->getMessage());
                    }
                    $output = ob_get_clean();
                    echo htmlspecialchars($output);
                ?></pre>
            </div>
            <?php endif; ?>

            <div class="hint-box" id="hint-6">
                <h4>💡 Pista</h4>
                <p>La condición es: <code>($anio % 4 == 0) && ($anio % 100 != 0 || $anio % 400 == 0)</code>. Recuerda que <code>%</code> es el operador módulo.</p>
            </div>

            <div class="solution-box" id="solution-6">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$anio</span> = <span class="number">2024</span>;

<span class="keyword">if</span> ((<span class="variable">$anio</span> % <span class="number">4</span> == <span class="number">0</span>) && (<span class="variable">$anio</span> % <span class="number">100</span> != <span class="number">0</span> || <span class="variable">$anio</span> % <span class="number">400</span> == <span class="number">0</span>)) {
    <span class="function">echo</span> <span class="string">"</span><span class="variable">$anio</span><span class="string"> es bisiesto"</span>;
} <span class="keyword">else</span> {
    <span class="function">echo</span> <span class="string">"</span><span class="variable">$anio</span><span class="string"> NO es bisiesto"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>
