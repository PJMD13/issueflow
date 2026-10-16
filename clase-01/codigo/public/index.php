<?php

$courseCode = 'IFCT092PO';
$courseName = 'Programación Web con Software Libre';
$classNumber = 1;

$message = 'Mi entorno PHP funciona correctamente.';

$phpVersion = PHP_VERSION;
$operatingSystem = PHP_OS_FAMILY;
$currentDate = date('d/m/Y H:i:s');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 01 - IFCT092PO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f7fa;
            color: #1f2937;
        }
        main {
            max-width: 760px;
            margin: 60px auto;
            padding: 32px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        h1 { margin-bottom: 8px; }
        .subtitle { color: #475569; margin-top: 0; }
        .success {
            margin: 28px 0;
            padding: 16px;
            background: #ecfdf5;
            border-left: 5px solid #22c55e;
        }
        dl {
            display: grid;
            grid-template-columns: 180px 1fr;
            gap: 10px;
        }
        dt { font-weight: bold; }
        footer {
            margin-top: 32px;
            padding-top: 16px;
            border-top: 1px solid #e5e7eb;
            font-size: 0.9rem;
            color: #64748b;
        }
    </style>
</head>
<body>
<main>
    <p><?= $courseCode ?></p>
    <h1><?= $courseName ?></h1>
    <p class="subtitle">Clase <?= $classNumber ?> — Primera aplicación PHP</p>
    <div class="success"><?= $message ?></div>
    <h2>Mi entorno</h2>
    <dl>
        <dt>PHP</dt>
        <dd><?= $phpVersion ?></dd>
        <dt>Sistema operativo</dt>
        <dd><?= $operatingSystem ?></dd>
        <dt>Fecha del servidor</dt>
        <dd><?= $currentDate ?></dd>
    </dl>
    <footer>Proyecto formativo IssueFlow · IFCT092PO</footer>
</main>
</body>
</html>
