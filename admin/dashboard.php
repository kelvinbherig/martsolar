<?php
require 'includes/auth.php';
require '../includes/conexao.php';

$totalClientes =
$pdo->query("SELECT COUNT(*) FROM clientes")
->fetchColumn();

$totalKits =
$pdo->query("SELECT COUNT(*) FROM kits")
->fetchColumn();

$totalPedidos =
$pdo->query("SELECT COUNT(*) FROM pedidos")
->fetchColumn();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

<h2>Dashboard MartSolar</h2>

<div class="row">

<div class="col-md-4">
<div class="card text-center">
<div class="card-body">
<h3><?= $totalClientes ?></h3>
Clientes
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center">
<div class="card-body">
<h3><?= $totalKits ?></h3>
Kits
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center">
<div class="card-body">
<h3><?= $totalPedidos ?></h3>
Pedidos
</div>
</div>
</div>

</div>

</div>

</body>
</html>