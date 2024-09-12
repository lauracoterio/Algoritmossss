<?php
 /*Inicialización del arreglo*/
$numeros = array();
$cantidad = readline("Ingrese la cantidad de números del arreglo: ");
$i = 0;

/*Que se haga el ciclo para pedir nos número según lo digitado anteriormente */
while ($i < $cantidad) {
    $num = readline("Ingrese el número: ");
    array_push($numeros, $num);
    $i++;
}

/*contadores y acumuladores*/
$pares = 0;
$impares = 0;
$sumaPares = 0;
$restaImpares = 0;
$ceros = 0;

/*Que recorra el arreglo para encontrar los pares, impares y 0, al mismo tiempo se va haciendo la suma y la resta de estos */
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {  /*que si el residuo de la división da 0 entonces es un número par */
        $pares++; /*si sí es número par entonces que se acumule en la variable pares*/
        $sumaPares += $numero; /*suma pares es igual a el número que esté ahí actualmente + el nuevo número que se ingrese*/
    } else if ($numero % 2 != 0) { /*Si el residuo del número es diferente a 0 entonces es un número impar*/
        $impares++; /*el numero se agrega a la variable impares*/
        $restaImpares -= $numero; /*resta impares es igual al número qeu está actualmente - el numero que se ingrese*/
    } else {
        $ceros++;/*si no cumple ninguna condición es porque el numero ingresado es 0*/
    }
}

/*Suma total y el promedio*/
$sumaTotal = array_sum($numeros); /*array para hacer la suma*/
$promedio = $sumaTotal / $cantidad; /*promedio*/


echo "Cantidad de números pares: " . $pares . PHP_EOL;
echo "Cantidad de números impares: " . $impares . PHP_EOL;
echo "Suma de números pares: " . $sumaPares . PHP_EOL;
echo "Resta de números impares: " . $restaImpares . PHP_EOL;
echo "Promedio de todos los números: " . $promedio . PHP_EOL;

if ($ceros > 0) {
    echo "Hay " . $ceros . " ceros en el arreglo." . PHP_EOL;
} else {
    echo "No hay ceros en el arreglo." . PHP_EOL;
}

?>