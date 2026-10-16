<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de libros</title>
</head>
<body>
    <h1>Biblioteca de libros</h1>
    <?php
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
    ?>
</body>
</html>
