<?php
/**
 * Ejercicio 3
 * Bloque-01-Fundamentos-Sintaxis-Basica
 * 100 Ejercicios Prácticos de PHP: De Cero a Full Stack
 */

/**
 * Condicional Simple (if/else)
 * Evalúa si un número entero determinado es par o impar
 * utilizando el operador de módulo.
 */

// Número a evaluar (puedes cambiar este valor)
$numero = 42;

// Operador de módulo: si el resto de dividir entre 2 es 0, es par
if ($numero % 2 == 0) {
    echo "El número $numero es PAR.\n";
} else {
    echo "El número $numero es IMPAR.\n";
}

?>
