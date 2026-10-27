<?php
/**
 * Ejercicio 1
 * Bloque-01-Fundamentos-Sintaxis-Basica
 * 100 Ejercicios Prácticos de PHP: De Cero a Full Stack
 */

/**
 * Hola Mundo y Variables
 * Declara variables de diferentes tipos (string, int, float, bool) e imprímelas
 * combinadas en una sola salida mediante concatenación e interpolación.
 */

// Variables de diferentes tipos
$nombre   = "PHP";      // string
$version  = 8;          // int
$precio   = 99.99;      // float
$activo   = true;       // bool

// Salida mediante concatenación
$salidaConcatenacion = "Hola Mundo. Lenguaje: " . $nombre . ", versión: " . $version . ", precio: $" . $precio . ", activo: " . ($activo ? "sí" : "no");

// Salida mediante interpolación (comillas dobles)
$salidaInterpolacion = "Hola Mundo. Lenguaje: $nombre, versión: $version, precio: \$$precio, activo: " . ($activo ? "sí" : "no");

echo $salidaConcatenacion . "\n";
echo $salidaInterpolacion . "\n";

?>
