<?php
/*
 * Ordena una lista de palabras alfabéticamente usando Merge Sort.
 */

// Función para realizar Merge Sort
function mergeSort($list) {
    if (count($list) <= 1) {
        return $list;
    }

    $middle = intdiv(count($list), 2);
    $left = mergeSort(array_slice($list, 0, $middle));
    $right = mergeSort(array_slice($list, $middle));

    return merge($left, $right);
}

// Función auxiliar para combinar dos listas ordenadas
function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}

// Lista de ejemplo
$words = ["camion", "carro", "bicicleta", "motocicleta", "avioneta", "helicoptero"];

// Salida en HTML
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ordenamiento Merge Sort</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
    <header>Ordenamiento con Merge Sort</header>
    <div class='container'>
        <div class='list before'><strong>Lista original:</strong> " . implode(", ", $words) . "</div>";

// Ordenar la lista
$sortedWords = mergeSort($words);

echo "
        <div class='list after'><strong>Lista ordenada (alfabética):</strong> " . implode(", ", $sortedWords) . "</div>
    </div>
</body>
</html>";
?>
