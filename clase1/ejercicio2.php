<?php
$valor1 = 23;
$valor2 = 40;

if ($valor1>$valor2) {
    echo "valor 1 es mayor";
}else{
    echo "valor 2 es mayor";
}

echo "<br>";

//ejemplo switch case

$colores = 'rojo';

switch ($colores) {
    case 'rojo':
        echo "el color seleccionado es rojo!";
        break;
    case 'azul':
        echo "el color seleccionado es azul!";
        break;
    default:
        echo "no se reconoce el valor, intente de nuevo";
        break;
}

?>