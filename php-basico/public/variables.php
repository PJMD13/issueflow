<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables en PHP</title>
</head>
<body>
    <?php
    $edad = 33;
    // Muestra en pantalla la información que almacena la variable $edad
    echo $edad;
    echo "<br>"; // Salto de línea
    $nombre = "Juan";
    echo $nombre;

    /* Los nombres de variables comienzan con $, y
    a continuación una letra o _ */
    $_time = 10;
    $x2026 = 54.33;

    /* Los nombres de variables son sensibles a mayúsculas 
    Por ejemplo, las variables $Apellido y $apellido no
    represental al mismo "contenedor" */
    $Apellido = "López";
    $apellido = "Salazar";
    echo "<br>";
    echo $Apellido;
    echo "<br>";
    echo $apellido;
    ?>
</body>
</html>