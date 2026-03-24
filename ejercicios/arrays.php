<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="breadcrumb">
        <a href="../index.php">Inicio</a> <span>›</span> Arrays
    </div>

    <div class="page-header">
        <h1>📦 <span class="accent">Arrays</span></h1>
        <p>Domina los arrays indexados, asociativos y multidimensionales con sus funciones más importantes.</p>
    </div>

    <!-- TEORÍA -->
    <div class="theory-box">
        <h2>📖 Repaso Teórico</h2>
        <ul>
            <li><code>$arr = [1, 2, 3];</code> — Array indexado (índices numéricos 0, 1, 2...).</li>
            <li><code>$arr = ["clave" => "valor"];</code> — Array asociativo (pares clave-valor).</li>
            <li><code>$arr[0]</code> — Acceder por índice. <code>$arr["clave"]</code> — Acceder por clave.</li>
            <li><code>count($arr)</code> — Número de elementos.</li>
            <li><code>array_push($arr, valor)</code> — Añadir al final. <code>$arr[] = valor;</code> — Igual.</li>
            <li><code>array_pop($arr)</code> — Quita y devuelve el último elemento.</li>
            <li><code>sort($arr)</code> — Ordena ascendente. <code>rsort($arr)</code> — Descendente.</li>
            <li><code>in_array(valor, $arr)</code> — Comprueba si un valor existe.</li>
            <li><code>array_merge($a, $b)</code> — Combina dos arrays.</li>
            <li><code>array_keys($arr)</code> — Devuelve las claves. <code>array_values($arr)</code> — Los valores.</li>
            <li><code>implode(", ", $arr)</code> — Une los elementos en un string.</li>
            <li><code>explode(",", $str)</code> — Divide un string en un array.</li>
        </ul>
    </div>

    <!-- EJERCICIO 1 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 1: Crear y recorrer un array</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Crea un array con 5 frutas. Recórrelo con <strong>foreach</strong> y muestra cada fruta en una línea.</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="1">
                <textarea name="code1" class="code-input"><?= isset($_POST['code1']) ? htmlspecialchars($_POST['code1']) : "<?php\n// Crea un array de frutas y recórrelo\n\$frutas = [];\n\n?>" ?></textarea>
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
                <p><code>$frutas = ["Manzana", "Pera", ...];</code> y luego <code>foreach ($frutas as $fruta) { echo $fruta . "\n"; }</code></p>
            </div>
            <div class="solution-box" id="solution-1">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$frutas</span> = [<span class="string">"Manzana"</span>, <span class="string">"Pera"</span>, <span class="string">"Naranja"</span>, <span class="string">"Plátano"</span>, <span class="string">"Uva"</span>];

<span class="keyword">foreach</span> (<span class="variable">$frutas</span> <span class="keyword">as</span> <span class="variable">$fruta</span>) {
    <span class="function">echo</span> <span class="variable">$fruta</span> . <span class="string">"\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 2 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 2: Array asociativo - Ficha de alumno</h3>
            <span class="difficulty easy">Fácil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Crea un array asociativo <code>$alumno</code> con: "nombre", "apellido", "edad", "curso". Muestra todos los datos en formato: <code>Nombre: Juan</code></p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="2">
                <textarea name="code2" class="code-input"><?= isset($_POST['code2']) ? htmlspecialchars($_POST['code2']) : "<?php\n// Crea un array asociativo con datos de alumno\n\$alumno = [];\n\n?>" ?></textarea>
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
                <p>Usa <code>$alumno = ["nombre" => "Juan", ...];</code> y <code>foreach ($alumno as $campo => $valor)</code> para recorrerlo.</p>
            </div>
            <div class="solution-box" id="solution-2">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$alumno</span> = [
    <span class="string">"nombre"</span>   => <span class="string">"Juan"</span>,
    <span class="string">"apellido"</span> => <span class="string">"García"</span>,
    <span class="string">"edad"</span>     => <span class="number">20</span>,
    <span class="string">"curso"</span>    => <span class="string">"DAW"</span>
];

<span class="keyword">foreach</span> (<span class="variable">$alumno</span> <span class="keyword">as</span> <span class="variable">$campo</span> => <span class="variable">$valor</span>) {
    <span class="function">echo</span> <span class="function">ucfirst</span>(<span class="variable">$campo</span>) . <span class="string">": </span><span class="variable">$valor</span><span class="string">\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 3 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 3: Funciones de arrays</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado <code>$numeros = [5, 2, 8, 1, 9, 3]</code>:
            <br>1) Ordénalo de menor a mayor
            <br>2) Añade el número 10 al final
            <br>3) Comprueba si el 8 está en el array
            <br>4) Muestra el array resultante con <code>implode</code></p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="3">
                <textarea name="code3" class="code-input"><?= isset($_POST['code3']) ? htmlspecialchars($_POST['code3']) : "<?php\n\$numeros = [5, 2, 8, 1, 9, 3];\n\n// 1) Ordena el array\n\n// 2) Añade el 10\n\n// 3) Comprueba si está el 8\n\n// 4) Muestra con implode\n\n?>" ?></textarea>
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
                <p>Funciones: <code>sort()</code>, <code>array_push()</code> o <code>$arr[] = 10</code>, <code>in_array(8, $numeros)</code>, <code>implode(", ", $numeros)</code></p>
            </div>
            <div class="solution-box" id="solution-3">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$numeros</span> = [<span class="number">5</span>, <span class="number">2</span>, <span class="number">8</span>, <span class="number">1</span>, <span class="number">9</span>, <span class="number">3</span>];

<span class="comment">// 1) Ordenar</span>
<span class="function">sort</span>(<span class="variable">$numeros</span>);
<span class="function">echo</span> <span class="string">"Ordenado: "</span> . <span class="function">implode</span>(<span class="string">", "</span>, <span class="variable">$numeros</span>) . <span class="string">"\n"</span>;

<span class="comment">// 2) Añadir 10</span>
<span class="variable">$numeros</span>[] = <span class="number">10</span>;
<span class="function">echo</span> <span class="string">"Con 10 añadido: "</span> . <span class="function">implode</span>(<span class="string">", "</span>, <span class="variable">$numeros</span>) . <span class="string">"\n"</span>;

<span class="comment">// 3) Comprobar si está el 8</span>
<span class="keyword">if</span> (<span class="function">in_array</span>(<span class="number">8</span>, <span class="variable">$numeros</span>)) {
    <span class="function">echo</span> <span class="string">"El 8 está en el array\n"</span>;
}

<span class="comment">// 4) Resultado final</span>
<span class="function">echo</span> <span class="string">"Total elementos: "</span> . <span class="function">count</span>(<span class="variable">$numeros</span>);
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 4 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 4: Array multidimensional - Notas</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Crea un array multidimensional <code>$alumnos</code> donde cada alumno tiene "nombre" y "nota". Recorre el array y muestra cada alumno con su nota y si está aprobado (nota >= 5).</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="4">
                <textarea name="code4" class="code-input"><?= isset($_POST['code4']) ? htmlspecialchars($_POST['code4']) : "<?php\n\$alumnos = [\n    [\"nombre\" => \"Ana\", \"nota\" => 8],\n    [\"nombre\" => \"Luis\", \"nota\" => 4],\n    [\"nombre\" => \"María\", \"nota\" => 6],\n];\n// Recorre y muestra nombre, nota y si aprobó\n\n?>" ?></textarea>
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
                <p>Usa <code>foreach ($alumnos as $alumno)</code> y dentro accede a <code>$alumno["nombre"]</code> y <code>$alumno["nota"]</code>. El ternario es ideal para "Aprobado"/"Suspenso".</p>
            </div>
            <div class="solution-box" id="solution-4">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$alumnos</span> = [
    [<span class="string">"nombre"</span> => <span class="string">"Ana"</span>,   <span class="string">"nota"</span> => <span class="number">8</span>],
    [<span class="string">"nombre"</span> => <span class="string">"Luis"</span>,  <span class="string">"nota"</span> => <span class="number">4</span>],
    [<span class="string">"nombre"</span> => <span class="string">"María"</span>, <span class="string">"nota"</span> => <span class="number">6</span>],
];

<span class="keyword">foreach</span> (<span class="variable">$alumnos</span> <span class="keyword">as</span> <span class="variable">$alumno</span>) {
    <span class="variable">$estado</span> = (<span class="variable">$alumno</span>[<span class="string">"nota"</span>] >= <span class="number">5</span>) ? <span class="string">"Aprobado"</span> : <span class="string">"Suspenso"</span>;
    <span class="function">echo</span> <span class="variable">$alumno</span>[<span class="string">"nombre"</span>] . <span class="string">" - Nota: "</span> . <span class="variable">$alumno</span>[<span class="string">"nota"</span>] . <span class="string">" - </span><span class="variable">$estado</span><span class="string">\n"</span>;
}
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 5 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 5: explode e implode</h3>
            <span class="difficulty medium">Medio</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dada la cadena <code>$csv = "Juan,25,Madrid,DAW"</code>:
            <br>1) Sepárala en un array usando <code>explode</code>
            <br>2) Muestra cada parte
            <br>3) Une el array de nuevo con " | " usando <code>implode</code></p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="5">
                <textarea name="code5" class="code-input"><?= isset($_POST['code5']) ? htmlspecialchars($_POST['code5']) : "<?php\n\$csv = \"Juan,25,Madrid,DAW\";\n// 1) Usa explode para separar\n// 2) Recorre y muestra\n// 3) Une con implode\n\n?>" ?></textarea>
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
                <p><code>$partes = explode(",", $csv);</code> — divide por coma. <code>implode(" | ", $partes)</code> — une con " | ".</p>
            </div>
            <div class="solution-box" id="solution-5">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$csv</span> = <span class="string">"Juan,25,Madrid,DAW"</span>;

<span class="comment">// 1) Separar</span>
<span class="variable">$partes</span> = <span class="function">explode</span>(<span class="string">","</span>, <span class="variable">$csv</span>);

<span class="comment">// 2) Mostrar cada parte</span>
<span class="keyword">foreach</span> (<span class="variable">$partes</span> <span class="keyword">as</span> <span class="variable">$i</span> => <span class="variable">$parte</span>) {
    <span class="function">echo</span> <span class="string">"Parte </span><span class="variable">$i</span><span class="string">: </span><span class="variable">$parte</span><span class="string">\n"</span>;
}

<span class="comment">// 3) Unir con implode</span>
<span class="function">echo</span> <span class="string">"\nUnido: "</span> . <span class="function">implode</span>(<span class="string">" | "</span>, <span class="variable">$partes</span>);
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

    <!-- EJERCICIO 6 -->
    <div class="exercise">
        <div class="exercise-header">
            <h3>Ejercicio 6: Media de notas y filtrado</h3>
            <span class="difficulty hard">Difícil</span>
        </div>
        <div class="exercise-body">
            <p class="description">Dado <code>$notas = [7, 4, 9, 3, 8, 5, 2, 10, 6]</code>:
            <br>1) Calcula la media
            <br>2) Crea un nuevo array solo con los aprobados (>= 5)
            <br>3) Muestra cuántos aprobados y suspensos hay</p>

            <form method="post">
                <input type="hidden" name="ejercicio" value="6">
                <textarea name="code6" class="code-input"><?= isset($_POST['code6']) ? htmlspecialchars($_POST['code6']) : "<?php\n\$notas = [7, 4, 9, 3, 8, 5, 2, 10, 6];\n\n// 1) Calcula la media\n// 2) Filtra aprobados\n// 3) Muestra resultados\n\n?>" ?></textarea>
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
                <p>Media: <code>array_sum($notas) / count($notas)</code>. Para filtrar, recorre con foreach y si es >= 5, <code>$aprobados[] = $nota</code>.</p>
            </div>
            <div class="solution-box" id="solution-6">
                <h4>✅ Solución</h4>
                <div class="code-block"><span class="keyword">&lt;?php</span>
<span class="variable">$notas</span> = [<span class="number">7</span>, <span class="number">4</span>, <span class="number">9</span>, <span class="number">3</span>, <span class="number">8</span>, <span class="number">5</span>, <span class="number">2</span>, <span class="number">10</span>, <span class="number">6</span>];

<span class="comment">// 1) Media</span>
<span class="variable">$media</span> = <span class="function">array_sum</span>(<span class="variable">$notas</span>) / <span class="function">count</span>(<span class="variable">$notas</span>);
<span class="function">echo</span> <span class="string">"Media: "</span> . <span class="function">round</span>(<span class="variable">$media</span>, <span class="number">2</span>) . <span class="string">"\n"</span>;

<span class="comment">// 2) Filtrar aprobados</span>
<span class="variable">$aprobados</span> = [];
<span class="keyword">foreach</span> (<span class="variable">$notas</span> <span class="keyword">as</span> <span class="variable">$nota</span>) {
    <span class="keyword">if</span> (<span class="variable">$nota</span> >= <span class="number">5</span>) {
        <span class="variable">$aprobados</span>[] = <span class="variable">$nota</span>;
    }
}

<span class="comment">// 3) Resultados</span>
<span class="function">echo</span> <span class="string">"Aprobados: "</span> . <span class="function">count</span>(<span class="variable">$aprobados</span>) . <span class="string">" ("</span> . <span class="function">implode</span>(<span class="string">", "</span>, <span class="variable">$aprobados</span>) . <span class="string">")\n"</span>;
<span class="function">echo</span> <span class="string">"Suspensos: "</span> . (<span class="function">count</span>(<span class="variable">$notas</span>) - <span class="function">count</span>(<span class="variable">$aprobados</span>));
<span class="keyword">?&gt;</span></div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>
