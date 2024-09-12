<?php

/*Contar cuántos números positivos, negativos y ceros hay en un arreglo
Dado un arreglo de números enteros, elabora un algoritmo que cuente cuántos números positivos, cuántos negativos y cuántos ceros contiene. */

$numeros = array();
$cantidad = readline("Ingrese la cantidad de números del arreglo: ");
$i = 0;

// Leer los números y almacenarlos en el arreglo
while ($i < $cantidad) {
    $num = readline("Ingrese el número: ");
    array_push($numeros, $num);
    $i++;
}

// Inicializar contadores para positivos, negativos y ceros
$positivos = 0;
$negativos = 0;
$ceros = 0;

// Contar positivos, negativos y ceros
foreach ($numeros as $numero) {
    if ($numero > 0) {
        $positivos++;
    } elseif ($numero < 0) {
        $negativos++;
    } else {
        $ceros++;
    }
}

echo "Cantidad de números positivos: " . $positivos . PHP_EOL;
echo "Cantidad de números negativos: " . $negativos . PHP_EOL;
echo "Cantidad de ceros: " . $ceros . PHP_EOL;

?>
