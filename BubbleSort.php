<?php
/**
 * Ordena una lista de números de forma descendente usando Bubble Sort.
 */

// Función para realizar Bubble Sort
function bubbleSortDesc(&$list) {
    $n = count($list);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($list[$j] < $list[$j + 1]) {
                $temp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] = $temp;
            }
        }
    }
}

// Lista de ejemplo
$numbers = [3, -1, 5, 3, 0, -7, 8, 10,-11,14,57,-80];

// Salida en HTML
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ordenamiento Bubble Sort</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
    <header>Ordenamiento con Bubble Sort</header>
    <div class='container'>
        <div class='list before'><strong>Lista original:</strong> " . implode(", ", $numbers) . "</div>";

// Ordenar la lista
bubbleSortDesc($numbers);

echo "
        <div class='list after'><strong>Lista ordenada (descendente):</strong> " . implode(", ", $numbers) . "</div>
    </div>
</body>
</html>";
?>