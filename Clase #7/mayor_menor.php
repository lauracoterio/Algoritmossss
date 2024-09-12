<?php

/* Encontrar el mayor y menor número en un arreglo
Dado un arreglo de números enteros, diseña un algoritmo que encuentre y muestre el número más grande y el más pequeño.*/


$numeros = array();
$cantidad = readline("Ingrese la cantidad de números del arreglo: ");
$i = 0;

// Leer los números y almacenarlos en el arreglo
while ($i < $cantidad) {
    $num = readline("Ingrese el número: ");
    array_push($numeros, $num);
    $i++;
}

// Inicializar el mayor y menor con el primer número del arreglo
$mayor = $numeros[0];
$menor = $numeros[0];

// Encontrar el mayor y el menor
foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
}

echo "El número más grande es: " . $mayor . PHP_EOL;
echo "El número más pequeño es: " . $menor . PHP_EOL;

?>
