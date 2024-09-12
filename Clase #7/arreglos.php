<?php

//Arreglos

//Declarar un arreglo
  //se puede hacer de esta forma
/*$personas = ["Fabián"];
$personas = ["Sofía"];
$personas = ["Laura"];
$personas = ["Maria Fernanda"];*/

//llenado manual
/*$personas = array("Laura", "Sofía", "Mafe");
$i = 0;
while ($i < count($personas)) { //COUNT es para que de la longitud del arreglo
    print($personas[$i] . PHP_EOL); //que imprima la posición dependiendo de lo que sea i
    $i++; //que i aumente cada vez que se vuelva a empezar el ciclo
}
*/

/*ciclo en FOR
for ($i=0; $i < count($personas); $i++) { 
    print($personas[$i] . PHP_EOL);
}*/

//Llenado dinámicamente
$notas = array();
$cantidadnotas = readline("Ingresa la cantidad de notas: ");
$i = 0;
while ($i < $cantidadnotas) {
    $notaingresada = readline("Ingrese la nota: ");
    array_push($notas, $notaingresada); //ARRAY_PUSH sirve para llenar el arreglo, primero va el array donde se debe ingresar, y luego, la variable con la que se está llenando
    $i++;
}

$j = 0;
while ($j < count($notas)) {
    print($j . $notas[$j] . PHP_EOL);
    $j++;
}



//Acceder a un elemento
  //para que se impriman todos los elementos: PRINT_R
//print_r($personas);
  
  //para imprimir un elemento del array: PRINT
//print($personas[0]);


?>