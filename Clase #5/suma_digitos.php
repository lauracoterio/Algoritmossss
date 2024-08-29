<?php

/*Calcular la suma de dígitos de un número:
  Pide al usuario que ingrese un número entero positivo.
  Utiliza un ciclo while para sumar los dígitos del número. */

  $numero = readline("Ingrese un número entero positivo: ");
  
  $suma = 0;
  
  while ($numero > 0) {
      /*variable para extraer el último digito */
      $últimoDígito = $numero % 10; /*al dividir el número entre 10, el residuo, sería el último dígito del número pedido */
      
      $suma += $últimoDígito;
      /*esta variable es para eliminar el último dígito del número */
      $numero = (int)($numero / 10); /*se divide el número entre 10 y esto normalmente daría decimal, entonces, como la variable está especificamente en INT, se convierte de nuevo en entero, y se elimina 
      el último dígito */
  }
  
  echo "La suma de los dígitos es: $suma " . PHP_EOL;

?>
  