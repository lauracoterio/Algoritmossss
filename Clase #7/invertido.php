<?php

/*Invertir los elementos de un arreglo
Crea un algoritmo que, dado un arreglo, invierta el orden de sus elementos y muestre el arreglo invertido. */

$numeros = array();
$cantidad = readline("Ingrese la cantidad de números del arreglo: ");
$i = 0;

// Leer los números y almacenarlos en el arreglo
while ($i < $cantidad) {
    $num = readline("Ingrese el número: ");
    array_push($numeros, $num);
    $i++;
}

// Invertir el arreglo manualmente
for ($i = 0; $i < $cantidad / 2; $i++) {
    // Intercambiar elementos
    $temp = $numeros[$i];
    $numeros[$i] = $numeros[$cantidad - $i - 1];
    $numeros[$cantidad - $i - 1] = $temp;
}

// Mostrar el arreglo invertido
echo "El arreglo invertido es: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo PHP_EOL;

?>
