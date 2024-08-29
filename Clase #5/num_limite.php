<?php

/*Imprimir números hasta que la suma de ellos sea mayor a un valor:
  Pide al usuario que ingrese un valor límite.
  Utiliza un ciclo while para seguir sumando números aleatorios (o dados por el usuario) hasta que la suma total supere el valor límite.*/

 $num_lim = readline ("Ingresa un número límite: ");
 $suma = 0;

 while ( $suma <= $num_lim) {
    $numeros = readline ("Ingresa un número: ");
    $suma = $suma + $numeros; 
 }

?>
  