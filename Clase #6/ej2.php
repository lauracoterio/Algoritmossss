<?php

/*Hacer un algoritmo que digitadas las notas de N estudiantes me las clasifique en las siguientes categorías:
    1. Excelente para las notas superiores o iguales a 4
    2. Sobresaliente para las notas iguales o mayores de 3 y menores de 4 
    3. Deficiente para las notas inferiores a 3 */

    $cantidad_estudiantes = readline("Ingrese la cantidad de estudiantes: ");

    for ($i=0; $i < $cantidad_estudiantes; $i++) { 
        $nota = readline ("Ingrese la nota del estudiante " . ($i + 1) . ": ");
        echo "La nota " . ($i + 1) . " es: " . notas($nota);
    }

    function notas($nota){
    if ($nota >= 4) {
        return "Excelente" . PHP_EOL;
    }
    if ($nota >= 3 && $nota < 4) {
        return "Sobresaliente" . PHP_EOL;
    }
    if ($nota < 3) {
        return "Deficiente" . PHP_EOL;
    }
 } 

?>