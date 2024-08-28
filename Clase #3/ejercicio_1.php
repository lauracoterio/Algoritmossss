<?php
#Solicitar el nombre del estudiante
#ECHO: Muestra un mensaje en la consola
echo "Ingrese el nombre del estudiante: ";
#FGETS(STDIN):Lee una línea de entrada desde la consola
#trim(): Elimina cualquier espacio en blanco al principio y al final de la cadena
$nombre = trim(fgets(STDIN));

#Solicitar la cantidad de notas
echo "Ingrese la cantidad de notas: ";
#INTVAL(): Convierte la cadena de texto ingresada en un número entero
$cantidadNotas = intval(trim(fgets(STDIN)));

#Inicialización de variables
#$notas = []: Declara un array vacío que se usará para almacenar todas las notas ingresadas
$notas = [];
#Inicializa la variable $suma en 0, la cual se usará para acumular la suma de todas las notas
$suma = 0;

// Solicitar las notas
#Un bucle que se repetirá tantas veces como el número de notas que se indicaron en $cantidadNotas
/*cuanta todos los estudiantes ya que inicializa desde 0, por eso es solo < y no <=*/
for ($i = 0; $i < $cantidadNotas; $i++) {
#Muestra un mensaje solicitando la nota número i+1 (i+1 para que coloque nota1, luego, nota 2 (i+2)y así sucesivamente) al usuario
    echo "Ingrese la nota " . ($i + 1) . ": ";
    #floatval(): Convierte la cadena de texto ingresada en un número decimal
    $nota = floatval(trim(fgets(STDIN)));
    # Agrega la nota ingresada al array $notas
    $notas[] = $nota;
    #Llama a la función sumar para agregar la nota actual a la suma acumulada.
    $suma = ($suma + $nota);
}

# Calcular la nota mayor y menor
$notaMayor = max($notas);
$notaMenor = min($notas);

#Calcular el promedio
$promedio = $suma / $cantidadNotas;
#Verificar quién pasó y quién perdió
if ($promedio >= 3.5) {
    echo "El estudiante pasó." . PHP_EOL; #PHP_EOL: Es una constante que añade un salto de línea
} else {
    echo "El estudiante perdió." . PHP_EOL;
}

// Imprimir los resultados
echo "Nombre del estudiante: " . $nombre . PHP_EOL;
echo "Promedio:" . $promedio . PHP_EOL;
echo "Nota mayor: " . $notaMayor . PHP_EOL;
echo "Nota menor: " . $notaMenor . PHP_EOL;
?>
