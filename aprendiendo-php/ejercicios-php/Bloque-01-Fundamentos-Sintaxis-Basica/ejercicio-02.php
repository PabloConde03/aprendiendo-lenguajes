<?php
/**
 * Ejercicio 2
 * Bloque-01-Fundamentos-Sintaxis-Basica
 * 100 Ejercicios Prácticos de PHP: De Cero a Full Stack
 */

/**
 * Conversor de grados Celsius a Fahrenheit y Kelvin
 * Utilizando operadores aritméticos básicos.
 *
 * Formulas:
 *   Fahrenheit = (Celsius × 9/5) + 32
 *   Kelvin     = Celsius + 273.15
 */

// Temperatura en grados Celsius (puedes cambiar este valor)
$celsius = 25;

// Conversión a Fahrenheit: (°C × 9/5) + 32
$fahrenheit = ($celsius * 9 / 5) + 32;

// Conversión a Kelvin: °C + 273.15
$kelvin = $celsius + 273.15;

// Salida de resultados
echo "Temperatura en Celsius:   " . $celsius . " °C\n";
echo "Temperatura en Fahrenheit: " . $fahrenheit . " °F\n";
echo "Temperatura en Kelvin:    " . $kelvin . " K\n";

?>
