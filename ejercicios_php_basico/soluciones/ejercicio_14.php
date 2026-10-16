<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números pares</title>
</head>
<body>
    <h1>Números pares</h1>
    <?php
    for ($numero = 1; $numero <= 20; $numero++) {
        if ($numero % 2 === 0) { // El resto de dividir entre 2 es cero.
            echo "$numero es par<br>";
        }
    }
    ?>
</body>
</html>
