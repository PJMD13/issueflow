<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de una mascota</title>
</head>
<body>
    <h1>Ficha de una mascota</h1>
    <?php
    $nombre = "Luna"; // Texto: nombre de la mascota.
    $especie = "Perro";
    $edad = 7; // Número entero.
    $peso = 12.5; // Número decimal.
    echo "Nombre: $nombre<br>Especie: $especie<br>Edad: $edad años<br>Peso: $peso kg<br>";
    if ($edad > 5) { // Comprobamos la edad.
        echo "Tiene más de 5 años.<br>";
    } else {
        echo "Tiene 5 años o menos.<br>";
    }
    ?>
</body>
</html>
