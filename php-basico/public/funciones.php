<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    /* Las funciones son bloques de código que se pueden reutilizar.
    Cuando se define o crea la función esta no es ejecutada
    La función, se ejecuta solo cuando es llamada. */

    /* Nuestra primera función:
    para definirla o crearla comenzamos con la palabra clave function,
    seguido de el nombre que le asignemos a la función, y luego, entre paréntesis,
    los parámetros de la función. 
    Una función puede tener cero, uno o muchos parámetros.
    Después, entre llaves tendré el bloque de código que se ejecuta cuando la función es llamada
    */
    function saludo() {
        echo "Esta es la función saludo <br>";
        echo "Hola a todas y todos!!!!!<br>";
    }

    // Llamamos o invocamos a la función saludo():
    saludo();

    // Parámetros de una función: son datos de entrada de la función
    // Función con un parámetro
    function saludoPersonal($nombre) {
        echo "Esta es la función saludo personal<br>";
        echo "Hola $nombre<br>";
    }

    // Llamamos a saludoPersonal()
    saludoPersonal("Pablo");
    $nombreUsuario = "Milagros";
    saludoPersonal($nombreUsuario);

    // Función con dos parámetros
    function verificarEdad($edadUsuario, $edadMinimaRequerida) {
        if ($edadUsuario >= $edadMinimaRequerida) {
            echo "El usuario cumple con los requisitos de edad.<br>";
        } else {
            echo "El usuario NO cumple con los requisitos de edad.<br>";
        }
    }

    verificarEdad(20, 18);
    verificarEdad(15, 18);

    // Valores por defecto de los parámetros
    function saludoUsuario($nombreUsuario = "usuario") {
        echo "Esta es la función saludoUsuario<br>";
        echo "Hola $nombreUsuario<br>";
    }
    saludoUsuario("Denia");
    saludoUsuario();

    // Valores de retorno de las funciones
    function verificarEdadMinima($edadUsuario, $edadMinimaRequerida) {
        /*    
        if ($edadUsuario >= $edadMinimaRequerida) {
            return true;
        } else {
            return false;
        }
        */
        return $edadUsuario >= $edadMinimaRequerida;
    }
    $tieneEdadRequerida = verificarEdadMinima(40, 35);
    var_dump($tieneEdadRequerida);
    echo "<br>";
    $tieneEdadRequerida = verificarEdadMinima(10, 35);
    var_dump($tieneEdadRequerida);
    echo "<br>";

    function suma($x1, $x2) {
        $suma = $x1 + $x2;
        return $suma;
    }
    
    $total = suma(10, 25);
    echo "Total: $total<br>";
    $superTotal = suma(15, 20) * suma(3, 3);
    echo "Supertotal: $superTotal<br>";
    ?>
</body>
</html>
