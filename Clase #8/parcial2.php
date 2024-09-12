<?php

$nombres = array();
$cantidad = readline("Ingrese la cantidad de nombres: ");
$i = 0;

while ($i < $cantidad) {
    $nombre = readline("Ingrese el nombre " . ($i + 1) . ": ");
    
   /*Volver a pedir el nombre si es necesario*/
    while ($nombre === "") {
        echo "El nombre no puede estar vacío. Por favor, ingrese un nombre válido.\n";
        $nombre = readline("Ingrese el nombre " . ($i + 1) . ": ");
    }

    array_push($nombres, $nombre);
    $i++;
}

/*Encontrar cantidad total de nombres en el arreglo*/
$totalNombres = count($nombres);

/*contar la frecuencia de cada nombre */
$conteoNombres = array();

foreach ($nombres as $nombre) {
    if (!isset($conteoNombres[$nombre])) {
        $conteoNombres[$nombre] = 1; /*Inicializar el conteo en 1*/
    } else {
        $conteoNombres[$nombre]++; /*Incrementar el conteo si el nombre ya existe*/
    }
}

/*Mostrar nombres repetidos y cuántas veces se repiten*/
echo "Nombres repetidos y sus frecuencias:\n";
$nombresRepetidos = 0;
foreach ($conteoNombres as $nombre => $conteo) {
    if ($conteo > 1) {
        echo "El nombre '$nombre' se repite $conteo veces.\n";
        $nombresRepetidos += $conteo;
    }
}

/*porcentaje de nombres repetidos*/
$porcentajeRepetidos = ($nombresRepetidos / $totalNombres) * 100;


/*porcentaje de los nombres */
$porcentajeCantidad = ($cantidad * 1)/100;


echo "Cantidad total de nombres en el arreglo: " . $totalNombres . PHP_EOL;
echo "Porcentaje de nombres repetidos: " . $porcentajeRepetidos . "%" . PHP_EOL;
echo "Porcentaje de nombres: " . $porcentajeCantidad . "%" . PHP_EOL;
?>
