<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de inventario</title>
</head>
<body>
    <h1>Control de inventario</h1>
    <?php
    $productos = [
        ["nombre" => "Teclado", "stock" => 0, "minimo" => 3],
        ["nombre" => "Ratón", "stock" => 2, "minimo" => 5],
        ["nombre" => "Monitor", "stock" => 8, "minimo" => 2]
    ];
    foreach ($productos as $producto) { // Cada producto es un array asociativo.
        $nombre = $producto["nombre"];
        $stock = $producto["stock"];
        $minimo = $producto["minimo"];
        if ($stock === 0) {
            $estado = "Agotado";
        } elseif ($stock < $minimo) {
            $estado = "Stock bajo";
        } else {
            $estado = "Stock correcto";
        }
        echo "$nombre: $estado ($stock unidades)<br>";
    }
    ?>
</body>
</html>
