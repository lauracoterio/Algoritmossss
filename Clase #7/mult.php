<?php

$numeros = array();
$cantidad = readline("Ingrese la cantidad de números del arreglo: ");
$i = 0;

while ($i < $cantidad) {
    $num = readline("Ingrese el número: ");
    array_push($numeros, $num);
    $i++;
}

// Pedir el valor multiplicador
$multiplicador = readline("Ingrese el valor por el que desea multiplicar los números: ");

// Crear un nuevo arreglo para almacenar los resultados
$numerosMultiplicados = array();

// Multiplicar cada elemento y mostrar la información detallada
foreach ($numeros as $indice => $num) {
    $resultado = $num * $multiplicador;
    array_push($numerosMultiplicados, $resultado);
    echo  $num . " x " . $multiplicador . " = " . $resultado . PHP_EOL;
}

?>