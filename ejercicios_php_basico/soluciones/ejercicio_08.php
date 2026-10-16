<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de exámenes</title>
</head>
<body>
    <h1>Promedio de exámenes</h1>
    <?php
    $notas = [7, 4, 9, 6, 8];
    $suma = 0;
    $aprobadas = 0;
    foreach ($notas as $nota) {
        $suma += $nota; // Acumulamos las notas.
        if ($nota >= 5) {
            $aprobadas++; // Contamos las aprobadas.
        }
    }
    $promedio = $suma / count($notas);
    echo "Promedio: $promedio<br>Aprobadas: $aprobadas<br>";
    if ($promedio >= 5) {
        echo "Promedio aprobado.<br>";
    } else {
        echo "Promedio suspenso.<br>";
    }
    ?>
</body>
</html>
