<?php
/*Ciclo while*/
/*Determinar si un número es primo:
  Pide al usuario que ingrese un número.
  Utiliza un ciclo while para verificar si el número es divisible por algún número menor que él mismo.*/

  // Solicitar al usuario que ingrese un número
 $numero = readline ("Ingresa un número: ");
  
  $divisor = 2;
  $encontradoDivisor = 0;
  
  while ($divisor < $numero && $encontradoDivisor == 0) {
      $encontradoDivisor += $numero % $divisor == 0;
      $divisor++;
  }
  
  $primoTexto = ['no es un número primo.', 'es un número primo.'];
  echo "$numero " . $primoTexto[!$encontradoDivisor] . "\n";
  ?>
  