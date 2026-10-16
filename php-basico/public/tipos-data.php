<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <?php
    /* Las variables pueden contener información o data
    de distinto tipo */
    // Ejemplo de variable que almacena un número entero
    $x = 10;
    // Un número entero es de tipo int (integar)
    /* Para ver el tipo de datos que almacena una
    variable, puedo usar la función var_dump() */
    // Muestra en pantalla el tipo de dato que almacena $x:
    var_dump($x);
    echo "<br>";

    // Una cadena de texto es un dato de tipo string
    // Ejemplo de una variable de tipo string:
    // Una cadena de texto literal debe ir entre comillas
    $ciudad = "Valencia";
    var_dump($ciudad);
    echo "<br>";

    // Un número decimal es un dato de tipo float
    // Ejemplo de una variable de tipo float:
    $gravedad = 9.8;
    var_dump($gravedad);
    echo "<br>";

    // Un array es tipo de variable que puede almacenar múltiples valores
    $frutas = array("manzana", "mandarina", "banana", "mango");
    var_dump($frutas);
    echo "<br>";

    // Otra manera de definir un array:
    $calificaciones = [9.8, 5.0, 7.2, 10.0, 8.5];
    var_dump($calificaciones);
    echo "<br>";

    // Tipo de dato definido por una clase
    // Definición de la clase Usuario
    class Usuario {
        public $nombre;
        public $correo;

        public function saludo() {
            return "El usuario " . $this->nombre . " tiene el correo " . $this->correo;
        }
    }
    // Creamos un objeto de tipo Usuario
    $usuario1 = new Usuario();
    var_dump($usuario1);
    echo "<br>";

    // Una variable de tipo booleano puede almacenar dos valores: true o false
    $tieneEdadSuficiente = false;
    var_dump($tieneEdadSuficiente);
    echo "<br>";

    $tieneSaldoSuficiente = true;
    var_dump($tieneSaldoSuficiente);
    echo "<br>";
    
    // Una variable de tipo NULL es una que no tiene valor asignado
    $miVariable = null;
    var_dump($miVariable);
    echo "<br>";
    ?>

</body>
</html>