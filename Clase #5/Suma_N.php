<?php
#Ciclos

#Ciclo for
/*Calcular la suma de los primeros N números:
1. Pide al Usuario que ingrese un número N
2. Utiliza el ciclo for para sumar los números de 1 al N*/
$num = readline ("Ingresa un número: ");
$suma = 0;
for ($i=1; $i <= $num; $i++) { 
    echo $i . PHP_EOL;
    $suma = $suma + $i;
}

echo "Total : " . $suma;
?>