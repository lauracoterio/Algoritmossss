<?php

/*Buscar un número en un arreglo
Diseña un algoritmo que, dado un arreglo y un número, determine si el número está presente en el arreglo. Si lo está, debe mostrar su posición. */

$numeros = array();
$cantidad = readline("Ingrese la cantidad de números del arreglo: ");
$i = 0;

// Leer los números y almacenarlos en el arreglo
while ($i < $cantidad) {
    $num = readline("Ingrese el número: ");
    array_push($numeros, $num);
    $i++;
}

// Leer el número a buscar
$buscar = readline("Ingrese el número que desea buscar: ");
$encontrado = false; // Variable para indicar si se encontró el número

// Buscar el número en el arreglo
foreach ($numeros as $indice => $numero) {
    if ($numero == $buscar) {
        echo "El número $buscar se encuentra en la posición: " . $indice . PHP_EOL;
        $encontrado = true;
        break; // Terminar el bucle si se encuentra el número
    }
}

// Si no se encuentra el número, mostrar mensaje
if (!$encontrado) {
    echo "El número $buscar no está en el arreglo." . PHP_EOL;
}

?>
