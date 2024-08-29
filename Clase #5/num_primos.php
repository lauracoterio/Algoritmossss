<?php
/*Ciclo while*/
/*Determinar si un número es primo:
  Pide al usuario que ingrese un número.
  Utiliza un ciclo while para verificar si el número es divisible por algún número menor que él mismo.*/

  // Solicitar al usuario que ingrese un número
 $numero = readline ("Ingresa un número: "); 
  
  $divisor = 2; /*se inicializa en 2, ya que comenzamos a verificar la divisibilidad desde 2 (los números menores a 2 no son primos*/
  $encontradoDivisor = 0; /*Se para saber si se encuentra un divisor del número, si, se mantiene en 0, es primo; sino, no es primo*/
  
  while ($divisor < $numero && $encontradoDivisor == 0) { /*el ciclo funciona mientras el divisor sea menor que el número y la variable $encontradoDivisor se mantenga en 0*/
    $resta = $numero; /*Se inicializa la variable resta para que guarde el núemero actual */

    /*Se hace otro ciclo para hacer una resta */
    while ($resta >= $divisor) {
        $temp = $resta - $divisor; /*se inicializa la variable temp para hacer la resta entre $resta y $divisor */
        $resta = $temp; /*el resultado de $temp se guarda en la variable $resta */
    }

    // Determinamos si encontramos un divisor sin usar +=
    $esDivisible = ($resta == 0) ? 1 : 0; // Asignamos 1 si la resta es 0, de lo contrario 0
    $encontradoDivisor = $encontradoDivisor || $esDivisible; // Actualizamos encontradoDivisor usando OR lógico

    $divisor++; // Incrementar el divisor
}

$primoTexto = ['no es un número primo.', 'es un número primo.'];
echo "$numero " . $primoTexto[!$encontradoDivisor] . "\n";
?>
  