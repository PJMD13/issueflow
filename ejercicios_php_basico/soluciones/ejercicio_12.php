<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de satisfacción</title>
</head>
<body>
    <h1>Encuesta de satisfacción</h1>
    <?php
    $respuestas = [5, 4, 2, 5, 3, 4, 1];
    $suma = 0;
    $positivas = 0;
    foreach ($respuestas as $respuesta) {
        $suma += $respuesta;
        if ($respuesta >= 4) {
            $positivas++;
        }
    }
    $promedio = $suma / count($respuestas);
    echo "Promedio: $promedio<br>Respuestas positivas: $positivas<br>";
    ?>
</body>
</html>
