<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
    // OPERADORES ARITMÉTICOS
    // Creo dos variables para probar los operadores aritméticos
    $x1 = 20;
    $x2 = 7;

    // Adición o suma, símbolo +
    echo $x1 + $x2;
    echo "<br>";

    // Resta, diferencia o sustracción, símbolo -
    echo $x1 - $x2;
    echo "<br>";

    // Multiplicación o producto, símbolo *
    echo $x1 * $x2;
    echo "<br>";

    // División o cociente, símbolo /
    echo $x1 / $x2;
    echo "<br>";

    // Residuo, resto o módulo, símbolo %
    echo $x1 % $x2;
    echo "<br>";

    // Potencia, símbolo **
    echo $x1 ** $x2;
    echo "<br>";

    // OPERADORES DE ASIGNACIÓN
    /* Asignación, símbolo =, al operando de la izquierda se le asigna el valor
    de la expresión de la derecha */
    $a = 5;
    $b = 7;
    $c = 15 + 18;
    $d = $b + $a;
    $e = $a + $b * $c;
    echo $e;
    echo "<br>";

    // Operación y asignación simultánea
    $y1 = 10;
    $y1 = $y1 + 5;
    echo $y1;
    echo "<br>";

    // De manera simultánea:
    $y2 = 10;
    $y2 += 5;
    echo $y2;
    echo "<br>";

    $y3 = 18;
    $y3 -= 9;
    echo $y3;
    echo "<br>";

    $y4 = 3;
    $y4 *= 7;
    echo $y4;
    echo "<br>";

    $y5 = 15;
    $y5 /= 5;
    echo $y5;
    echo "<br>";

    $y6 = 15;
    $y6 %= 7;
    echo $y6;
    echo "<br>";

    // OPERADORES DE COMPARACIÓN
    // Las comparaciones van a devolver true o false
    
    // Igualdad, operador ==
    $z1 = 100;
    $z2 = 100;
    $z3 = 75;
    $z4 = "100";
  
    // Comparamos $z1 con $z2
    var_dump($z1 == $z2);
    echo "<br>";

    // Comparamos $z2 con $z3
    var_dump($z2 == $z3);
    echo "<br>";

    // Verificamos que $z1 y $z4 son de tipos distintos
    var_dump($z1);
    echo "<br>";
    var_dump($z4);
    echo "<br>";

    // Comparamos $z1 con $z4
    // Son iguales porque == transforma $z4 a 100 (int)
    var_dump($z1 == $z4);
    echo "<br>";

    $t1 = "Hola";
    $t2 = "Hola";
    $t3 = "Hola ";
    var_dump($t1 == $t2);
    echo "<br>";
    var_dump($t1 == $t3);
    echo "<br>";

    // Identidad ===
    // Para ser idénticos deben ser del mismo tipo
    var_dump($z1 === $z4);
    echo "<br>";

    // No igualdad != o <>
    var_dump($z1 != $z2);
    echo "<br>";
    var_dump($z2 <> $z3);
    echo "<br>";

    // No identidad !==
    var_dump($z1 !== $z4);
    echo "<br>";


    /* Mayor que >, mayor o igual que >=
    menor que <, menor o igual que <= */
    var_dump($z1 < $z3);
    echo "<br>";
    var_dump($z2 >= $z1);
    echo "<br>";

    /* Operadores de incremento y decremento.
    Se usan para aumentar o disminuir el valor de una variable en
    una unidad */
    
    // Pre-incremento: ++ seguido de la variable a incrementar
    $i1 = 0;
    echo ++$i1;
    echo "<br>";
    echo $i1;
    echo "<br>";

    // Post-incremento: la variable a incrementar seguido de ++
    $i2 = 20;
    echo $i2++;
    echo "<br>";
    echo $i2;
    echo "<br>";

    // Pre-decremento: -- seguido de la variable a decrementar
    $i3 = 0;
    echo --$i3;
    echo "<br>";
    echo $i3;
    echo "<br>";

    // Post-decremento: la variable a decrementar seguido de --
    $i4 = 10;
    echo $i4--;
    echo "<br>";
    echo $i4;
    echo "<br>";

    // OPERADORES LÓGICOS
    $j1 = 10;
    $j2 = 25;
    $j3 = 40;

    /* Operador Y: el símbolo es and o también &&
    La combinación de condición1 and condición2 ... and condición100
    será verdadera si todas las condiciones individuales son verdaderas */
    var_dump($j1 > 0 and $j2 <= 100);
    echo "<br>";
    var_dump($j1 > 0 and $j2 <= 100 and $j3 === "40");
    echo "<br>";
    var_dump($j1 > 0 && $j2 <= 100 && $j3 == "40");
    echo "<br>";

    /* Operador O: el símbolo es or o también ||
    La combinación de condición1 or condición2 ... or condición100
    será verdadera si al menos una de
    las condiciones individuales es verdadera */
    var_dump($j1 > 0 or $j2 <= 100);
    echo "<br>";
    var_dump($j1 > 0 or $j2 <= 100 or $j3 === "40");
    echo "<br>";
    var_dump($j1 > 0 || $j2 <= 100 || $j3 == "40");
    echo "<br>";
    var_dump($j1 > 50 || $j2 <= 0 || $j3 == "55");
    echo "<br>";

    /* Operador XOR (O exclusivo): el símbolo es xor
    La combinación de condición1 xor condición2 ... xor condición100
    será verdadera si sólo una de
    las condiciones individuales es verdadera */
    var_dump($j1 > 0 xor $j2 <= 100);
    echo "<br>";
    var_dump($j1 > 0 xor $j2 <= 0);
    echo "<br>";

    /* Operador No: símbolo !. Si expresion es verdadera,
    !expresion es falsa. Si expresion es falsa,
    !expresion es verdadera */
    var_dump($j1 > 0);
    echo "<br>";
    var_dump(!($j1 > 0));
    echo "<br>";

    // CONCATENACIÓN DE CADENAS. Operador .
    $t1 = "abc";
    $t2 = "def";
    echo $t1 . $t2 . "<br>";
    $t3 = "Carlos";
    $t4 = "Salazar";
    echo "Nombre completo: " . $t3 . " " . $t4 . "." . "<br>";
    ?>
</body>
</html>