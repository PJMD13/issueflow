<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de invitados</title>
</head>
<body>
    <h1>Lista de invitados</h1>
    <?php
    $invitados = ["Ana", "Luis", "Marta", "Pablo", "Sara"];
    foreach ($invitados as $nombre) { // Recorremos cada elemento.
        echo "Bienvenido/a, $nombre<br>";
    }
    echo "Total de invitados: " . count($invitados) . "<br>";
    ?>
</body>
</html>
