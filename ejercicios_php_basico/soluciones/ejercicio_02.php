<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra en una papelería</title>
</head>
<body>
    <h1>Compra en una papelería</h1>
    <?php
    $cuadernos = 3;
    $precioCuaderno = 2.50;
    $boligrafos = 2;
    $precioBoligrafo = 1.20;
    $subtotal = $cuadernos * $precioCuaderno + $boligrafos * $precioBoligrafo; // Sumamos ambos importes.
    $iva = $subtotal * 0.21; // Calculamos el impuesto.
    $total = $subtotal + $iva;
    echo "Subtotal: $subtotal €<br>IVA: $iva €<br>Total: $total €<br>";
    ?>
</body>
</html>
