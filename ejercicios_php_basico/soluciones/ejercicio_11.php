<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifa de aparcamiento</title>
</head>
<body>
    <h1>Tarifa de aparcamiento</h1>
    <?php
    function calcularAparcamiento($horas) {
        if ($horas <= 0) {
            return 0; // Sin tiempo, sin coste.
        }
        if ($horas === 1) {
            return 2; // Primera hora.
        }
        return 2 + ($horas - 1) * 1.50; // Horas restantes.
    }
    $horas = 4;
    echo "Coste de $horas horas: " . calcularAparcamiento($horas) . " €<br>";
    ?>
</body>
</html>
