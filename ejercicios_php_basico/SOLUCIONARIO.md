# Solucionario comentado — PHP básico

Cada solución está en `soluciones/ejercicio_XX.php`, lista para ejecutarse. Las soluciones son orientativas: pueden existir otras correctas.

## 01. Ficha de una mascota
**Conceptos:** Variables, tipos y concatenación.
```php
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
```

## 02. Compra en una papelería
**Conceptos:** Operadores aritméticos.
```php
$cuadernos = 3;
$precioCuaderno = 2.50;
$boligrafos = 2;
$precioBoligrafo = 1.20;
$subtotal = $cuadernos * $precioCuaderno + $boligrafos * $precioBoligrafo; // Sumamos ambos importes.
$iva = $subtotal * 0.21; // Calculamos el impuesto.
$total = $subtotal + $iva;
echo "Subtotal: $subtotal €<br>IVA: $iva €<br>Total: $total €<br>";
```

## 03. Acceso a una piscina
**Conceptos:** Condicionales y operadores lógicos.
```php
$edad = 15;
$acompanado = true; // Booleano: sí o no.
if ($edad >= 16 || $acompanado === true) { // Basta cumplir una condición.
    echo "Acceso permitido.<br>";
} else {
    echo "Acceso denegado.<br>";
}
```

## 04. Semáforo de temperatura
**Conceptos:** if, elseif, else.
```php
$temperatura = 28;
if ($temperatura < 15) {
    echo "Hace frío.<br>";
} elseif ($temperatura < 25) { // Aquí sabemos que ya es >= 15.
    echo "Tiempo templado.<br>";
} else {
    echo "Hace calor.<br>";
}
```

## 05. Tabla de multiplicar
**Conceptos:** Bucle for.
```php
$numero = 7;
for ($i = 1; $i <= 10; $i++) { // Repetimos diez veces.
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
```

## 06. Ahorro semanal
**Conceptos:** while y acumulador.
```php
$ahorro = 0; // Acumulador.
$semana = 0; // Contador.
while ($ahorro < 30) {
    $semana++;
    $ahorro += 5; // Sumamos el ahorro semanal.
    echo "Semana $semana: $ahorro €<br>";
}
```

## 07. Lista de invitados
**Conceptos:** Arrays indexados y foreach.
```php
$invitados = ["Ana", "Luis", "Marta", "Pablo", "Sara"];
foreach ($invitados as $nombre) { // Recorremos cada elemento.
    echo "Bienvenido/a, $nombre<br>";
}
echo "Total de invitados: " . count($invitados) . "<br>";
```

## 08. Promedio de exámenes
**Conceptos:** Arrays, foreach, operadores y condicionales.
```php
$notas = [7, 4, 9, 6, 8];
$suma = 0;
$aprobadas = 0;
foreach ($notas as $nota) {
    $suma += $nota; // Acumulamos las notas.
    if ($nota >= 5) {
        $aprobadas++; // Contamos las aprobadas.
    }
}
$promedio = $suma / count($notas);
echo "Promedio: $promedio<br>Aprobadas: $aprobadas<br>";
if ($promedio >= 5) {
    echo "Promedio aprobado.<br>";
} else {
    echo "Promedio suspenso.<br>";
}
```

## 09. Descuento de tienda
**Conceptos:** Funciones, parámetros y return.
```php
function calcularPrecioFinal($precio, $descuento) {
    $rebaja = $precio * $descuento / 100; // Porcentaje en euros.
    return $precio - $rebaja; // Devolvemos el precio final.
}
$precioFinal = calcularPrecioFinal(80, 15);
echo "Precio final: $precioFinal €<br>";
```

## 10. Control de inventario
**Conceptos:** Arrays asociativos, foreach y condicionales.
```php
$productos = [
    ["nombre" => "Teclado", "stock" => 0, "minimo" => 3],
    ["nombre" => "Ratón", "stock" => 2, "minimo" => 5],
    ["nombre" => "Monitor", "stock" => 8, "minimo" => 2]
];
foreach ($productos as $producto) { // Cada producto es un array asociativo.
    $nombre = $producto["nombre"];
    $stock = $producto["stock"];
    $minimo = $producto["minimo"];
    if ($stock === 0) {
        $estado = "Agotado";
    } elseif ($stock < $minimo) {
        $estado = "Stock bajo";
    } else {
        $estado = "Stock correcto";
    }
    echo "$nombre: $estado ($stock unidades)<br>";
}
```

## 11. Tarifa de aparcamiento
**Conceptos:** Funciones y condicionales.
```php
function calcularAparcamiento($horas) {
    if ($horas <= 0) {
        return 0; // Sin tiempo, sin coste.
    }
    if ($horas === 1) {
        return 2; // Primera hora.
    }
    return 2 + ($horas - 1) * 1.50; // Horas restantes.
}
$horas = 4;
echo "Coste de $horas horas: " . calcularAparcamiento($horas) . " €<br>";
```

## 12. Encuesta de satisfacción
**Conceptos:** Arrays, foreach y contadores.
```php
$respuestas = [5, 4, 2, 5, 3, 4, 1];
$suma = 0;
$positivas = 0;
foreach ($respuestas as $respuesta) {
    $suma += $respuesta;
    if ($respuesta >= 4) {
        $positivas++;
    }
}
$promedio = $suma / count($respuestas);
echo "Promedio: $promedio<br>Respuestas positivas: $positivas<br>";
```

## 13. Reserva de habitaciones
**Conceptos:** Arrays multidimensionales y condicionales.
```php
$habitaciones = [
    ["numero" => 101, "precio" => 75, "disponible" => true],
    ["numero" => 102, "precio" => 95, "disponible" => true],
    ["numero" => 103, "precio" => 85, "disponible" => false]
];
foreach ($habitaciones as $habitacion) {
    if ($habitacion["disponible"] === true && $habitacion["precio"] <= 90) {
        echo "Habitación " . $habitacion["numero"] . ": " . $habitacion["precio"] . " €<br>";
    }
}
```

## 14. Números pares
**Conceptos:** for y módulo.
```php
for ($numero = 1; $numero <= 20; $numero++) {
    if ($numero % 2 === 0) { // El resto de dividir entre 2 es cero.
        echo "$numero es par<br>";
    }
}
```

## 15. Cuenta bancaria
**Conceptos:** Clases, constructor, atributos y métodos.
```php
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
```

## 16. Biblioteca de libros
**Conceptos:** Clases, constructor, getter y setter.
```php
class Libro {
    public $titulo;
    private $paginas;

    public function __construct($titulo, $paginas) {
        $this->titulo = $titulo;
        $this->paginas = $paginas;
    }

    public function getPaginas() {
        return $this->paginas; // Leemos el atributo privado.
    }

    public function setPaginas($paginas) {
        if ($paginas > 0) { // Evitamos números de páginas no válidos.
            $this->paginas = $paginas;
        } else {
            echo "Número de páginas no válido.<br>";
        }
    }

    public function mostrarDetalles() {
        echo "Libro: " . $this->titulo . " - Páginas: " . $this->paginas . "<br>";
    }
}
$libro = new Libro("El faro", 120);
$libro->mostrarDetalles();
$libro->setPaginas(150);
$libro->setPaginas(-10); // Este cambio se rechaza.
$libro->mostrarDetalles();
```
