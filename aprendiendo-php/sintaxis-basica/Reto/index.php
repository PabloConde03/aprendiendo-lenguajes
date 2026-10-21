<?php

#Variables y tipos de datos

$nombreCliente1 = "Pablo";
$nombreCliente2 = "María";
$nombreCliente3 = "Juan";
$montoCompra1 = 50.00;
$montoCompra2 = 200.00;
$montoCompra3 = 20.00;
$esSocio1 = true;
$esSocio2 = false;
$esSocio3 = false;

$descuentoSocio = 0.20; // 20% de descuento para socios
$descuenteMonto= 0.10; // 10% de descuento para compras mayores a 100 euros

# Lógica de descuentos con condicionales

if ($esSocio1 === true) {
    echo "El cliente " . $nombreCliente1 . " es socio y ha comprado " . $montoCompra1 . " euros pero con el descuento de socio " . ($descuentoSocio * 100) . "% se queda en " . ($montoCompra1 - ($montoCompra1 * $descuentoSocio)) . " euros.<br>";
}else if ($montoCompra1 >= 100) {
    echo "El cliente " . $nombreCliente1 . " no es socio y ha comprado " . $montoCompra1 . " euros pero con el descuento por monto de " . ($descuenteMonto * 100) . "% se queda en " . ($montoCompra1 - ($montoCompra1 * $descuenteMonto)) . " euros.<br>";
}else {
    echo "El cliente " . $nombreCliente1 . " no es socio y ha comprado " . $montoCompra1 . " euros.<br>";
}

if ($esSocio2 === true) {
    echo "El cliente " . $nombreCliente2 . " es socio y ha comprado " . $montoCompra2 . " euros pero con el descuento  de socio " . ($descuentoSocio * 100) . "% se queda en " . ($montoCompra2 - ($montoCompra2 * $descuentoSocio)) . " euros.<br>";
} else if ($montoCompra2 >= 100) {
    echo "El cliente " . $nombreCliente2 . " no es socio y ha comprado " . $montoCompra2 . " euros pero con el descuento por monto de " . ($descuenteMonto * 100) . "% se queda en " . ($montoCompra2 - ($montoCompra2 * $descuenteMonto)) . " euros.<br>";
} else {
    echo "El cliente " . $nombreCliente2 . " no es socio y ha comprado " . $montoCompra2 . " euros.<br>";
}

if ($esSocio3 === true) {
    echo "El cliente " . $nombreCliente3 . " es socio y ha comprado " . $montoCompra3 . " euros pero con el descuento de socio " . ($descuentoSocio * 100) . "% se queda en " . ($montoCompra3 - ($montoCompra3 * $descuentoSocio)) . " euros.<br>";
}else if ($montoCompra3 >= 100) {
    echo "El cliente " . $nombreCliente3 . " no es socio y ha comprado " . $montoCompra3 . " euros pero con el descuento por monto de " . ($descuenteMonto * 100) . "% se queda en " . ($montoCompra3 - ($montoCompra3 * $descuenteMonto)) . " euros.<br>";
} else {
    echo "El cliente " . $nombreCliente3 . " no es socio y ha comprado " . $montoCompra3 . " euros.<br>";
}
