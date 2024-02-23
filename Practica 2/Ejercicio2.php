<?php


/* Ejercicio 2: Sumar Números
o Escribe un programa que sume todos los números del 1 al 100 utilizando un bucle
“for”
*/

$suma = 0;

// se utiliza el bucle para sumar los numeros 
for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}

echo "La suma de los números del 1 al 100 es: $suma";

?>