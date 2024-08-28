<?php
#Ciclos
 /*Imprimir una tabla de multiplicar:
  Pide al usuario que ingrese un número.
  Utiliza un ciclo for para imprimir la tabla de multiplicar de ese número (del 1 al 10).*/
$num = readline ("Ingrese el número de tablas que desee: ");
#Ciclo for
for ($i = 1; $i <= $num; $i++) { 
    echo "Tabla del :" . $i . PHP_EOL;

    for ($j = 1; $j <= 10; $j++) { 
        echo $i . " x " . $j . " = " . ($i * $j) . PHP_EOL;
    }
}
?> 