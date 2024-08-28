<?php
$num1 = readline("Ingrese número: ");
$num2 = readline("Ingrese número: ");
$num3 = readline("Ingrese número: ");

$nummayor= 0;
$nummenor= 10;

if ($num1>$nummayor) {
    $nummayor  = $num1;
}

if ($num2>$nummayor) {
    $nummayor = $num2;
}

if ($num3>$nummayor) {
    $nummayor = $num3;
}


if ($num1<$nummenor) {
    $nummenor=$num1;
}
if ($num2<$nummenor) {
    $nummenor=$num2;
}
if ($num3<$nummenor) {
    $nummenor=$num3;
}

echo "Número menor: " . $nummenor . PHP_EOL;
echo "Número mayor: " . $nummayor . PHP_EOL;

?>