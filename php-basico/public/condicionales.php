<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php
    /* CONDICIONAL if.
    if ejecuta un bloque de código solo si la condición
    especificada es verdadera */
    echo "Inicio del programa 1<br>";
    $saldoCuenta = 50;
    $montoTransferencia = 100;
    echo "Saldo: " . $saldoCuenta . "<br>";
    echo "Monto a tranferir: " . $montoTransferencia . "<br>";

    // Este if verifica si hay saldo suficiente para la transferencia
    if ($saldoCuenta >= $montoTransferencia) {
        // Este bloque de instrucciones se ejecuta solo si la condición es true
        
        // Al saldo le resto el monto de la transferencia
        $saldoCuenta -= $montoTransferencia;
        // Muestro un mensaje de éxito
        echo "Transferencia realizada<br>";
    }
    echo "Saldo: " . $saldoCuenta . "<br>";
    echo "Fin del programa 1<br><br>";

    /* Condicional if..else
    if...else ejecuta un bloque de código si la condición es verdadera o
    otro bloque de código si la condición es falsa */
    echo "Inicio del programa 2<br>";
    $edad = 30;
    $montoBasePrima = 400.0;
    $montoPrima = null;
    if ($edad >= 60) {
        echo "Calculando prima para una edad de " . $edad . "<br>";
        $montoPrima = $montoBasePrima * 1.25;
    } else {
        echo "Calculando prima para una edad de " . $edad . "<br>";
        $montoPrima = $montoBasePrima;
    }
    echo "El monto de la prima es: " . $montoPrima . ".<br>";
    echo "Fin del programa 2<br><br>";
    
    /* Condicional if..elseif..else
    Ejecuta diferentes bloques de código para más de dos condiciones */
    echo "Inicio del programa 3<br>";
    $edad = 80;
    $montoBasePrima = 100.0;
    $ciudad = "Madrid";

    // Inicializamos la variable $montoPrima
    $montoPrima = null;

    // El último bloque, correspondiente al else es opcional
    if ($ciudad !== "Madrid") {
        echo "Sólo aseguramos a residentes de Madrid<br>";
    } elseif ($edad >= 60) {
        echo "Calculando prima para una edad de " . $edad . "<br>";
        $montoPrima = $montoBasePrima * 1.25;
    } elseif($edad >= 45) {
        echo "Calculando prima para una edad de " . $edad . "<br>";
        $montoPrima = $montoBasePrima * 1.15;
    } elseif($edad >= 18) {
        echo "Calculando prima para una edad de " . $edad . "<br>";
        $montoPrima = $montoBasePrima;
    } else {
        echo "Edad no válida. Solo aseguramos personas mayores de edad<br>";
    }
    echo "El monto de la prima es: " . $montoPrima . ".<br>";
    echo "Fin del programa 3<br><br>";

    echo "Inicio del programa 4<br>";
    
    // Condicional switch
    $estado = "Carolina del Norte";
    $tasa = null;

    // default es opcional
    switch ($estado) {
        case "Texas":
            $tasa = 10;
            break;
        case "California":
            $tasa = 8.3;
            break;
        case "Carolina del Norte":
            $tasa = 11.5;
            break;
        case "Florida":
            $tasa = 14.0;
            break;
        case "Virginia":
            $tasa = 9.7;
            break;
        default:
            $tasa = 15;
    }
    echo "Para " . $estado . " la tasa de impuesto es de " . $tasa . "%<br>"; 
    echo "Fin del programa 4<br><br>";

    // Condicional match
    echo "Inicio del programa 5<br>";
    $estado = "Carolina del Norte";
    $tasa = match($estado) {
        "Texas" => 10,
        "California" => 8.3,
        "Carolina del Norte" => 11.5,
        "Florida" => 14.0,
        "Virginia" => 9.7,
        default => 15,
    };
    echo "Para " . $estado . " la tasa de impuesto es de " . $tasa . "%<br>";        
    echo "Fin del programa 5<br><br>";
    ?>
</body>
</html>