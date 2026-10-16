<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de habitaciones</title>
</head>
<body>
    <h1>Reserva de habitaciones</h1>
    <?php
    $habitaciones = [
        ["numero" => 101, "precio" => 75, "disponible" => true],
        ["numero" => 102, "precio" => 95, "disponible" => true],
        ["numero" => 103, "precio" => 85, "disponible" => false]
    ];
    foreach ($habitaciones as $habitacion) {
        if ($habitacion["disponible"] === true && $habitacion["precio"] <= 90) {
            echo "Habitación " . $habitacion["numero"] . ": " . $habitacion["precio"] . " €<br>";
        }
    }
    ?>
</body>
</html>
