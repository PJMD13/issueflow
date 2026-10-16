<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    /* Los arrays son variables que pueden almacenar varios
    valores */

    //Ejemplos
    $frutas = array("Mango", "Pera", "Uva", "Manzana");
    $edades = [25, 18, 1, 42, 18, 20, 42, 50, 100];
    $turnos = [1, 1, 1, 1, 1, 1, 1];

    /* Array indexado: cada elemento del array tiene
    un índice numérico que indica su posición en este. 
    Las posiciones comienzan en cero "0" y continuan de 1 en 1 
    en forma ascendente */
    $nombres = ["Francisco", "Yaiza", "María", "Jesús"];

    // Accedo a un elemento por su índice (index)
    echo $nombres[1];
    echo "<br>";
    echo $nombres[0];
    echo "<br>";
    // No existe este elemento dentro del array
    echo $nombres[4];
    echo "<br>";

    // Cambiar el valor de un elemento
    echo $nombres[3];
    echo "<br>";
    $nombres[3] = "Alan";
    echo $nombres[3];
    echo "<br>";
    $nombres[3] = "Jesús";
    echo $nombres[3];
    echo "<br>";

    // Los elementos de un array pueden ser de diferentes tipos
    $arrayMix = ["Hola", true, 25, 10.7, false, [1, 2, 3]];
    $arrayMix[4] = "Carlos";

    /* Arrays asociativos: en vez de que cada valor almacenado esté
    identificado con un índice, va a estar identificado con una clave
    clave => valor o key => value 
    Las claves tienen que ser únicas, no se admiten duplicados */
    $usuario = [
        "nombre" => "María",
        "apellido" => "Rodríguez",
        "segundoApellido" => "Rodríguez",
        "nota" => 9,
        "asistencia" => 89.7,
        "viveEnBilbao" => false,
    ];

    // Accediendo a un valor del array
    echo $usuario["nota"];
    echo "<br>";

    // Modificar un valor del array
    $usuario["nota"] = 2;
    echo $usuario["nota"];
    echo "<br>";


    // Modificaciones de un array
    // Agregar un elemento:
    $nombres = ["José", "María", "Luisa"];
    var_dump($nombres);
    echo "<br>";
    $nombres[] = "Ana";
    var_dump($nombres);
    echo "<br>";

    $coche = [
        "marca" => "Ford",
        "modelo" => "Explorer"
    ];
    var_dump($coche);
    echo "<br>";
    $coche["año"] = 2023;
    var_dump($coche);
    echo "<br>";

    // Agregar uno o más elementos al inicio del array:
    $calificaciones = [7.5, 5.5, 8.2, 10.0];
    array_unshift($calificaciones, 2.5, 7.9);
    var_dump($calificaciones);
    echo "<br>";

    // Eliminar el primer elemento del array
    $idUsuarios = [1001, 1002, 1003, 1004, 1005, 1006];
    array_shift($idUsuarios);
    var_dump($idUsuarios);
    echo "<br>";

    // Eliminar el último elemento del array
    array_pop($idUsuarios);
    var_dump($idUsuarios);
    echo "<br>";

    // Arrays multidimensionales
    $coordenadas = [[25, 32], [-14, 0], [10, 15], [-8, -1]];
    echo $coordenadas[1][1];
    echo "<br>";
    echo $coordenadas[2][0];
    echo "<br>";

    $usuarios = [
        [
            "nombre" => "María",
            "apellido" => "Rodríguez",
            "nota" => 9,
        ],
        [
            "nombre" => "Erika",
            "apellido" => "Martina",
            "nota" => 9.5,
        ],
        [
            "nombre" => "Jesús",
            "apellido" => "Campo",
            "nota" => 5,
        ]
    ];

    // Esto es un array vacío, no tiene elementos
    $usuariosSuspendidos = [];
    ?>
</body>
</html>