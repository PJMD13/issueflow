# Cuaderno de ejercicios PHP básico

## Instrucciones
Cada ejercicio se desarrolla en un archivo `.php` independiente, con HTML básico y un bloque PHP dentro de `<body>`. Cambia los datos iniciales para comprobar distintos resultados. No se requieren formularios, bases de datos ni Symfony.

## 01. Ficha de una mascota — Fácil
**Conceptos:** Variables, tipos y concatenación.
Declara nombre, especie, edad y peso de una mascota. Muestra una ficha con esos datos y di si es mayor de 5 años.

## 02. Compra en una papelería — Fácil
**Conceptos:** Operadores aritméticos.
Una persona compra 3 cuadernos de 2,50 € y 2 bolígrafos de 1,20 €. Calcula subtotal, IVA del 21 % y total.

## 03. Acceso a una piscina — Fácil
**Conceptos:** Condicionales y operadores lógicos.
Con las variables edad=15 y acompañado=true, permite el acceso si tiene 16 años o más, o si va acompañado. Muestra el resultado.

## 04. Semáforo de temperatura — Fácil
**Conceptos:** if, elseif, else.
Según una temperatura de 28 °C, muestra frío (menos de 15), templado (15 a 24) o calor (25 o más). Prueba otros valores.

## 05. Tabla de multiplicar — Fácil
**Conceptos:** Bucle for.
Declara un número y muestra su tabla de multiplicar del 1 al 10.

## 06. Ahorro semanal — Fácil
**Conceptos:** while y acumulador.
Comienza con 0 € y ahorra 5 € cada semana hasta llegar a 30 €. Muestra el ahorro acumulado por semana.

## 07. Lista de invitados — Fácil
**Conceptos:** Arrays indexados y foreach.
Crea un array con cinco nombres y muestra una línea de bienvenida por cada persona.

## 08. Promedio de exámenes — Media
**Conceptos:** Arrays, foreach, operadores y condicionales.
Dadas las notas [7, 4, 9, 6, 8], calcula el promedio, cuenta cuántas son aprobadas (>=5) y muestra si el promedio aprueba.

## 09. Descuento de tienda — Media
**Conceptos:** Funciones, parámetros y return.
Crea una función calcularPrecioFinal(precio, descuento) que devuelva el precio tras aplicar un porcentaje de descuento. Pruébala con 80 € y 15 %.

## 10. Control de inventario — Media
**Conceptos:** Arrays asociativos, foreach y condicionales.
Crea un array de productos con nombre, stock y mínimo. Muestra el estado de cada uno: agotado (0), bajo (menor que mínimo) o correcto.

## 11. Tarifa de aparcamiento — Media
**Conceptos:** Funciones y condicionales.
Crea una función que calcule el coste: primera hora 2 €, cada hora adicional 1,50 €. Si el vehículo permanece 0 horas o menos, devuelve 0. Prueba con 4 horas.

## 12. Encuesta de satisfacción — Media
**Conceptos:** Arrays, foreach y contadores.
Con las respuestas [5, 4, 2, 5, 3, 4, 1], calcula el promedio y cuenta cuántas respuestas son positivas (4 o 5).

## 13. Reserva de habitaciones — Media
**Conceptos:** Arrays multidimensionales y condicionales.
Crea tres habitaciones con número, precio y disponible (booleano). Muestra solo las disponibles que cuestan 90 € o menos.

## 14. Números pares — Fácil
**Conceptos:** for y módulo.
Muestra los números pares entre 1 y 20 usando el operador %.

## 15. Cuenta bancaria — Media
**Conceptos:** Clases, constructor, atributos y métodos.
Crea una clase Cuenta con titular y saldo privado, constructor, depositar(cantidad) y mostrarSaldo(). Crea una cuenta con 100 € y deposita 40 €.

## 16. Biblioteca de libros — Media
**Conceptos:** Clases, constructor, getter y setter.
Crea una clase Libro con título público y páginas privadas. Añade constructor, getPaginas(), setPaginas() que solo acepte valores positivos y mostrarDetalles(). Prueba un cambio válido y uno inválido.
