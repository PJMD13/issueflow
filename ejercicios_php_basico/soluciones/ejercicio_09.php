<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento de tienda</title>
</head>
<body>
    <h1>Descuento de tienda</h1>
    <?php
    function calcularPrecioFinal($precio, $descuento) {
        $rebaja = $precio * $descuento / 100; // Porcentaje en euros.
        return $precio - $rebaja; // Devolvemos el precio final.
    }
    $precioFinal = calcularPrecioFinal(80, 15);
    echo "Precio final: $precioFinal €<br>";
    ?>
</body>
</html>
