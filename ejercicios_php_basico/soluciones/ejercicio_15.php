<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta bancaria</title>
</head>
<body>
    <h1>Cuenta bancaria</h1>
    <?php
    class Cuenta {
        public $titular;
        private $saldo;
    
        public function __construct($titular, $saldo) {
            $this->titular = $titular; // Guardamos los datos iniciales.
            $this->saldo = $saldo;
        }
    
        public function depositar($cantidad) {
            if ($cantidad > 0) { // Solo admitimos ingresos positivos.
                $this->saldo += $cantidad;
            }
        }
    
        public function mostrarSaldo() {
            echo "Titular: " . $this->titular . " - Saldo: " . $this->saldo . " €<br>";
        }
    }
    $cuenta = new Cuenta("Ana", 100); // Creamos un objeto.
    $cuenta->depositar(40); // Llamamos a un método.
    $cuenta->mostrarSaldo();
    ?>
</body>
</html>
