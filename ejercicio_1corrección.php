<?php
/*readline para que aparezca el mensaje e ingreses datos */
$cantidad_estudiantes = readline ("Ingresa la cantidad de estudiantes:");
$notamayor = 0;
$notamenor = 5;
$suma = 0;

/*la variable se inicializa desde cero para que empiece a contar desde ahí, y que la condición sea solo < y no <=*/
for ($i=0; $i < $cantidad_estudiantes; $i++) { 
  $notas_estudiantes = readline ("Ingrese sus notas " . ($i+1) ." :");
  $suma = $suma + $notas_estudiantes;

/*si la nota del estudiante es mayor a nota mayor (0 como primer número), entonces*/
if ($notas_estudiantes > $notamayor) {
  /*nota mayor se convierte en la nota que acaba de ingresar el usuario*/
      $notamayor = $notas_estudiantes;
}
/*si la nota del estudiante es menor a nota menor (5 como primer número), entonces*/
if ($notas_estudiantes < $notamenor) {
  /*nota menor se convierte en la nota que acaba de ingresar el usuario*/
  $notamenor = $notas_estudiantes;
}
}

if ($notamayor >= 3.5) {
  echo $notamayor . " Nota aprobada" . PHP_EOL;
} else {
  echo $notamayor . " Nota reprobada" . PHP_EOL;
}

if ($notamenor <= 3.5) {
  echo $notamenor . " Nota reprobada" . PHP_EOL;
} else {
  echo $notamenor . " Nota aprobada" . PHP_EOL;
}

$promedio = $suma/$cantidad_estudiantes;
echo "La nota mayor es: " . $notamayor . PHP_EOL;
echo "La nota menor es: " . $notamenor . PHP_EOL;
echo "El promedio de las notas es: " . $promedio . PHP_EOL;

?>