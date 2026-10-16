<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semáforo de temperatura</title>
</head>
<body>
    <h1>Semáforo de temperatura</h1>
    <?php
    $temperatura = 28;
    if ($temperatura < 15) {
        echo "Hace frío.<br>";
    } elseif ($temperatura < 25) { // Aquí sabemos que ya es >= 15.
        echo "Tiempo templado.<br>";
    } else {
        echo "Hace calor.<br>";
    }
    ?>
</body>
</html>
