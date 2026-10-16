<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    <?php
    /* Programación orientada a objetos. (OOP por sus siglas en inglés)
    Modela el problema real en clases y objetos dentro del código. */


    /* Definición de una clase: podemos pensar en una clase, como
    el "molde" o  "patrón" con el que se van a crear todos los objetos individuales.
    Por ejemplo la clase Coche define las propiedades de cada uno de los
    coches particulares de nuestra app */
    class Coche {
        /* Atributos: son características propias de la clase,
        las voy a definir con variables */
        public $marca;
        public $modelo;

        /* Métodos: son las funciones propias de la clase. */
        public function setDetalles($marcaCoche, $modeloCoche) {
            $this->marca = $marcaCoche;
            $this->modelo = $modeloCoche;
        }

        public function verDetalles() {
            echo "Marca: " . $this->marca . " - " . "Modelo: " . $this->modelo . "<br>";
        }
    }
    // Instanciar (crear) un objeto de la clase Coche
    $coche1 = new Coche();

    // El objeto invoca / llama al método de la clase
    $coche1->verDetalles();
    $coche1->setDetalles("Seat", "León");
    $coche1->verDetalles();
    $coche2 = new Coche();
    $coche3 = new Coche();
    $coche3->verDetalles();
    $coche2->setDetalles("Ford", "Mustang");
    $coche2->verDetalles();
    ?>
</body>
</html>