<?php
/*
$num1 = readline ("Ingresa el 1er número: ");
$num2 = readline ("Ingresa el 2do número: ");

$suma = $num1 + $num2;

echo $suma . PHP_EOL;



$num1 = readline ("Ingresa el 1er número: ");
$num2 = readline ("Ingresa el 2do número: ");

$resta = $num1 - $num2;

echo $resta . PHP_EOL;



$num1 = readline ("Ingresa el 1er número: ");
$num2 = readline ("Ingresa el 2do número: ");

$mult = $num1 * $num2;

echo $mult . PHP_EOL;



$num1 = readline ("Ingresa el 1er número: ");
$num2 = readline ("Ingresa el 2do número: ");

$div = $num1/$num2;

echo $div . PHP_EOL;

//¡¡¡¡¡¡¡¡¡¡¡ FUNCIONES !!!!!!!!!!!!

//entre los paréntesis puede ir un parámetro, como variables para que se ingrese un dato
function saludar($nombre){
    //recibe un parámetro y lo trabaja internamente, esto haría que salude y se le coloque el nombre que se ingrese
    return "Hola ♥" . $nombre . PHP_EOL; //la palabra reservada DENTRO de la función, para que imprima lo que esté dentro es RETURN
}
//al imprimir en consola, en los paréntesis se coloca la variable qeu necesitamos, en este caso se coloca el nombre
echo "El saludo es: " . saludar(" Laura");
*/

//las vbariables que se colocan acá, no necesariamente tiene que ser la misma del parámetro
$n1 = readline("Ingrese el 1er número: ");
$n2 = readline("Ingrese el 2do número: ");
$opera = readline("Ingrese la operación que desea realizar (el signo): ");

function operaciones($num1, $num2, $operacion){
    
    //las || representan un o, para qeu sea la primera opción O la segunda
    if ($operacion == "+" || $operacion == "suma") {
        return $num1 + $num2 . PHP_EOL; 
    }
    if ($operacion == "-" || $operacion == "resta") {
        return $num1 - $num2 . PHP_EOL; 
    }
    if ($operacion == "*" || $operacion == "multiplicación") {
        return $num1 * $num2 . PHP_EOL; 
    }
    if ($operacion == "/" || $operacion == "división") {
        return $num1 / $num2 . PHP_EOL; 
    }
     
}
//al imprimir en consola, en los paréntesis se coloca la variable qeu necesitamos, en este caso se coloca el nombre
echo "El resultado es: " . operaciones($n1, $n2, $opera);

?>
