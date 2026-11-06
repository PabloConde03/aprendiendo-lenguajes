<?php
// Ejercicio 2: Operaciones Aritméticas: Realiza un conversor de grados Celsius a Fahrenheit y Kelvin utilizando operadores aritméticos básicos.
//
// Este ejercicio forma parte del curso de PHP práctico.
// Bloque: Bloque 1 - Arquitecturas web y Sintaxis basica
//
// Instrucciones: Implementa la lógica solicitada en el comentario anterior.
// Completa el código PHP siguiendo las mejores prácticas.
//
// Resultado esperado: Ejecutar este archivo debería demostrar el concepto
// mencionado en la descripción del ejercicio.

// 1. Pedir el dato al usuario primero
echo "¿Cuántos grados Celsius hace? ";
$temperaturaCelsius = (float) trim(fgets(STDIN));

// 2. Realizar los cálculos con el valor recibido
$temperaturaFahrenheit = ($temperaturaCelsius * 9 / 5) + 32;
$temperaturaKelvin = $temperaturaCelsius + 273.15; 

// 3. Mostrar los resultados
echo "Hace " . $temperaturaFahrenheit . " ºF\n";
echo "Hace " . $temperaturaKelvin . " K\n";

?>