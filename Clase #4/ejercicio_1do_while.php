<?php
/*primero se define la primera variable y luego se le pone el READLINE para que se muestre el mensaje en pantalla y tmabién para que el ususario pueda ingrresar un dato*/
  $cantidad_notas = readline("Ingresar cantidad de notas: ");

  /*DEFINIR LAS VARIABLES*/
  $nota_mayor = 0;
  $nota_menor = 5;
  $suma = 0;
  $i = 0;

  /*USO DEL CICLO DO WHILE*/
  do {
    /*definir otra pariable para que el ususario ingrese la cantidad de notas*/
    $notas = readline ("Ingrese la nota " . ($i + 1) . " : ");
    $suma = $suma + $notas;

    /*condicionales para encontrar la nota mayor y la nota menor*/
    if ($notas > $nota_mayor ) {
        $nota_mayor = $notas;
    }

    if ($notas < $nota_menor) {
        $nota_menor = $notas;
    }
    $i++;
  } while ($i < $cantidad_notas);

  /*CONDICIONALES PARA VER SI APRUEBA O REPRUEBA*/
  if ($nota_mayor >= 3.5) {
    echo $nota_mayor . " Nota mayor aprobada" . PHP_EOL;
  }else {
    echo $nota_mayor . " Nota mayor reprobada" . PHP_EOL;
  }

  if ($nota_menor < 3.5) {
    echo $nota_menor . " Nota menor reprobada" . PHP_EOL;
  } else {
    echo $nota_menor . " Nota menor aprobada" . PHP_EOL;
  }
  
  $promedio = $suma/$cantidad_notas;
  echo "Promedio: " . $promedio;
?> 