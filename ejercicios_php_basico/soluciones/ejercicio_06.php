<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorro semanal</title>
</head>
<body>
    <h1>Ahorro semanal</h1>
    <?php
    $ahorro = 0; // Acumulador.
    $semana = 0; // Contador.
    while ($ahorro < 30) {
        $semana++;
        $ahorro += 5; // Sumamos el ahorro semanal.
        echo "Semana $semana: $ahorro €<br>";
    }
    ?>
</body>
</html>
