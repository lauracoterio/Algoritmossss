<?php
 
 /*Sumar todos los elementos de un arreglo, dado un arreglo de números enteros, crea un algoritmo que calcule y muestre la suma de todos los elementos y el promedio de ellos*/

$numeros = array();
$cantidad = readline("Ingrese la cantidad de números del arreglo: ");
$i = 0;


while ($i < $cantidad) {
    $num = readline("Ingrese el número: ");
    array_push($numeros, $num);
    $i++;
}

/*$j = 0;
$suma = 0;
while ($j < count($numeros)) {
    
    $suma += $numeros[$j];
    $j++;
}*/
$suma = 0;
foreach ($numeros as $posicion) {
    $suma += $posicion;
}

echo "La suma de las notas es de : " . $suma . PHP_EOL;
echo "El promedio de las notas es: " . ($suma/$cantidad);

?>