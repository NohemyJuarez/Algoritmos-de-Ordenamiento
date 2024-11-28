<?php
/*
 * Ordena una lista de nombres en orden alfabético usando Insertion Sort.
 */

// Función para realizar Insertion Sort
function insertionSort(&$list) {
    $n = count($list);
    for ($i = 1; $i < $n; $i++) {
        $key = $list[$i];
        $j = $i - 1;

        // Mover elementos mayores al valor de la clave una posición adelante
        while ($j >= 0 && strcmp($list[$j], $key) > 0) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $key;
    }
}

// Lista de ejemplo
$names = ["Carlos", "Ana", "Luis", "Pedro", "Marta", "Beatriz"];

// Salida en HTML
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ordenamiento Insertion Sort</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
    <header>Ordenamiento con Insertion Sort</header>
    <div class='container'>
        <div class='list before'><strong>Lista original:</strong> " . implode(", ", $names) . "</div>";

// Ordenar la lista
insertionSort($names);

echo "
        <div class='list after'><strong>Lista ordenada (alfabética):</strong> " . implode(", ", $names) . "</div>
    </div>
</body>
</html>";
?>
