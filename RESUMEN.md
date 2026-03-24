# PHP Practice App - Resumen del Proyecto

## Qué es esta aplicación

Aplicación web en PHP para **repasar y practicar** los temas del examen de PHP. Cada sección incluye:

- **Repaso teórico** con la sintaxis y funciones clave
- **Ejercicios progresivos** (Fácil → Medio → Difícil)
- **Editor de código** donde puedes escribir y ejecutar PHP
- **Pistas** para cuando te atasques
- **Soluciones completas** con el código resaltado

---

## Estructura de archivos

```
php/
├── index.php                      # Página principal con los 6 temas
├── css/
│   └── style.css                  # Estilos (tema oscuro)
├── includes/
│   ├── header.php                 # Cabecera y navegación
│   └── footer.php                 # Pie de página y JavaScript
├── ejercicios/
│   ├── condicionales.php          # 6 ejercicios de if/else/switch
│   ├── bucles.php                 # 6 ejercicios de for/while/foreach
│   ├── arrays.php                 # 6 ejercicios de arrays
│   ├── archivos.php               # 5 ejercicios de lectura de ficheros
│   ├── validacion.php             # 5 ejercicios de validación de datos
│   └── pregmatch.php              # 6 ejercicios de expresiones regulares
├── datos/
│   ├── notas.txt                  # Fichero de notas (nombre,nota)
│   ├── productos.csv              # CSV de productos (separador ;)
│   └── usuarios.txt               # Lista de emails
└── RESUMEN.md                     # Este archivo
```

---

## Temas y ejercicios incluidos

### 1. Condicionales (6 ejercicios)
| # | Ejercicio | Dificultad | Conceptos |
|---|-----------|-----------|-----------|
| 1 | Mayor de edad | Fácil | if/else |
| 2 | Clasificar nota | Fácil | if/elseif/else |
| 3 | Día de la semana | Medio | switch/case/break/default |
| 4 | Par o impar | Fácil | Operador ternario, módulo % |
| 5 | Calculadora | Medio | switch + validación div/0 |
| 6 | Año bisiesto | Difícil | Operadores lógicos && \|\| |

### 2. Bucles (6 ejercicios)
| # | Ejercicio | Dificultad | Conceptos |
|---|-----------|-----------|-----------|
| 1 | Números 1-20 | Fácil | for |
| 2 | Tabla multiplicar | Fácil | for, concatenación |
| 3 | Suma 1-100 | Medio | while |
| 4 | Números pares | Medio | for + continue |
| 5 | Recorrer asociativo | Medio | foreach $clave => $valor |
| 6 | FizzBuzz | Difícil | for + if/elseif + módulo |

### 3. Arrays (6 ejercicios)
| # | Ejercicio | Dificultad | Conceptos |
|---|-----------|-----------|-----------|
| 1 | Crear y recorrer | Fácil | Array indexado, foreach |
| 2 | Ficha de alumno | Fácil | Array asociativo |
| 3 | Funciones de arrays | Medio | sort, in_array, implode, count |
| 4 | Notas multidimensional | Medio | Array multidimensional + ternario |
| 5 | explode e implode | Medio | explode, implode, foreach |
| 6 | Media y filtrado | Difícil | array_sum, count, filtrado manual |

### 4. Lectura de Archivos (5 ejercicios)
| # | Ejercicio | Dificultad | Conceptos |
|---|-----------|-----------|-----------|
| 1 | Leer completo | Fácil | file_get_contents, file_exists |
| 2 | Leer línea a línea | Fácil | file(), FILE_IGNORE_NEW_LINES |
| 3 | fopen/fgets | Medio | fopen, fgets, feof, fclose, explode |
| 4 | Leer CSV | Difícil | fgetcsv con separador ; |
| 5 | Contar y buscar | Medio | file(), strpos, contadores |

### 5. Validación de Datos (5 ejercicios)
| # | Ejercicio | Dificultad | Conceptos |
|---|-----------|-----------|-----------|
| 1 | isset y empty | Fácil | isset(), empty(), var_export |
| 2 | Validar emails | Fácil | filter_var, FILTER_VALIDATE_EMAIL |
| 3 | Formulario completo | Medio | trim, strlen, filter_var, array errores |
| 4 | htmlspecialchars | Medio | Prevención XSS, ENT_QUOTES |
| 5 | Contraseña segura | Difícil | strlen + preg_match para criterios |

### 6. preg_match (6 ejercicios)
| # | Ejercicio | Dificultad | Conceptos |
|---|-----------|-----------|-----------|
| 1 | Buscar teléfono | Fácil | preg_match, \d, {n}, $matches |
| 2 | Validar fecha | Fácil | ^, $, \d{2}, escape \/ |
| 3 | Grupos de captura | Medio | Paréntesis (), $matches[1][2]... |
| 4 | Matrícula española | Medio | Clases de caracteres [ABC], {n} |
| 5 | Extraer emails | Difícil | preg_match_all, [\w.-]+ |
| 6 | preg_replace | Difícil | preg_replace, preg_replace_callback |

---

## Cómo usar la aplicación

1. **Arranca un servidor PHP** en la carpeta del proyecto:
   ```
   php -S localhost:8000
   ```
2. **Abre** `http://localhost:8000` en el navegador
3. **Elige un tema** en la página principal
4. **Lee la teoría** y luego intenta cada ejercicio
5. Si te atascas, pulsa **"Pista"**
6. Si necesitas ver la respuesta, pulsa **"Solución"**
7. Escribe tu código en el editor y pulsa **"Ejecutar"** para probarlo

---

## Total: 34 ejercicios interactivos con teoría, pistas y soluciones
