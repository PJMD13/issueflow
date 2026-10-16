<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <?php
    $numero = 7;
    for ($i = 1; $i <= 10; $i++) { // Repetimos diez veces.
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
    ?>
</body>
</html>
