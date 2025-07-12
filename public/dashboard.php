<?php
session_start();
if (!isset($_SESSION['user'])) {header('Location: login.php');exit;}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h1 class="text-xl font-bold">Dashboard</h1>
<ul>
    <li><a href="../modules/dashboard/index.php">Dashboard</a></li>
    <li><a href="../modules/reuniones/index.php">Reuniones</a></li>
    <li><a href="../modules/votaciones/index.php">Votaciones</a></li>
    <li><a href="../modules/carga_bd/index.php">Carga BD</a></li>
    <li><a href="../modules/rutas/index.php">Rutas</a></li>
    <li><a href="../modules/reportes/index.php">Reportes</a></li>
    <li><a href="../modules/prep/index.php">PREP</a></li>
    <li><a href="../modules/funcionarios/index.php">Funcionarios</a></li>
    <li><a href="../modules/reception/index.php">Recepcion</a></li>
    <li><a href="../modules/partido/index.php">Partido</a></li>
    <li><a href="../modules/afiliacion/index.php">Afiliacion</a></li>
</ul>
</body>
</html>
