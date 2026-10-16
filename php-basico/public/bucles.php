<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>
<body>
    <?php
    /* Los bucles son estructuras de control que ejecutan el mismo
    bloque de código una y otra vez mientras se cumplan ciertas
    condiciones */

    // BUCLE WHILE (mientras..)
    echo "Inicio del programa 1<br>";
    $i1 = 0;
    while ($i1 < 10) {
        // Bloque que se repite mientras la condición sea true
        echo "La variable i1 tiene un valor de: " . $i1 . "<br>";
        $i1++;
    }
    echo "Fin del programa 1<br><br>";

    /* Instrucción break: interrumpe automáticamente el bucle
    sin importar el estado de la condición */
    $i1 = 0;
    echo "Inicio del programa 2<br>";
    while ($i1 < 10) {
        // Bloque que se repite mientras la condición sea true
        echo "La variable i1 tiene un valor de: " . $i1 . "<br>";
        if ($i1 === 5) {
            break;
        }
        $i1++;
    }
    echo "Fin del programa 2<br><br>";

    // Instrucción continue: interrumpe la iteración actual del bucle
    $i1 = 0;
    echo "Inicio del programa 3<br>";
    while ($i1 < 10) {
        // Bloque que se repite mientras la condición sea true
        $i1++;
        if ($i1 === 5) {
            continue;
        }
        echo "La variable i1 tiene un valor de: " . $i1 . "<br>";
    }
    echo "Fin del programa 3<br><br>";

    /* Reescribiendo el programa 2 para evitar el uso del break
    break y continue rompen el flujo natural del programa por lo que
    se recomienda usarlos sólo si es necesario
    */
    $i1 = 0;
    echo "Inicio del programa 4<br>";
    while ($i1 < 10 && $i1 !== 6) {
        // Bloque que se repite mientras la condición sea true
        echo "La variable i1 tiene un valor de: " . $i1 . "<br>";
        $i1++;
    }
    echo "Fin del programa 4<br><br>";

    // BUCLE DO WHILE
    // El bloque de código se va a ejecutar al menos una vez
    echo "Inicio del programa 5<br>";
    $i1 = 100;
    do {
        // Bloque que se repite
        echo "La variable i1 tiene un valor de: " . $i1 . "<br>";
        $i1++;
    } while ($i1 < 10);

    echo "Fin del programa 5<br><br>";

    // BUCLE FOR

    /* Contador, con el valor inicial: $i2 = 0
       Condición: $i2 > 10
       Incremento / decremento, que se aplica al finalizar una iteración: $i2--
    */
    echo "Inicio del programa 6<br>"; 
    for ($i2 = 10; $i2 > 0; $i2--) {
        echo "El contador i2 tiene un valor de: " . $i2 . "<br>";
    }
    echo "Fin del programa 6<br><br>";

    // BUCLE FOREACH

    /* El bucle foreeach realiza una iteración por cada uno de los
    elementos de un array indexado */
    echo "Inicio del programa 7<br>";
    $calificaciones = [7.3, 4.5, 10.0, 8.4, 5.5, 9.0];
    
    /* Primero tenemos el nombre del array a iterar, seguido de la palabra
    clave as y luego el nombre con el cual querramos identificar 
    al elemento actual
    */
    // Variable acumuladora
    $sumaCalificaciones = 0;
    foreach ($calificaciones as $calificacion) {
        // Bloque a ejecutar
        echo "La calificación actual es: " . $calificacion . "<br>";
        $sumaCalificaciones += $calificacion;
    }
    // count() me devuelve el número de elementos que tiene el array
    $promedio = $sumaCalificaciones / count($calificaciones);
    echo "El promedio de calificaciones es " . $promedio . "<br>";
    echo "Fin del programa 7<br><br>";
    ?>
</body>
</html>