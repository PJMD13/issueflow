<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso a una piscina</title>
</head>
<body>
    <h1>Acceso a una piscina</h1>
    <?php
    $edad = 15;
    $acompanado = true; // Booleano: sí o no.
    if ($edad >= 16 || $acompanado === true) { // Basta cumplir una condición.
        echo "Acceso permitido.<br>";
    } else {
        echo "Acceso denegado.<br>";
    }
    ?>
</body>
</html>
