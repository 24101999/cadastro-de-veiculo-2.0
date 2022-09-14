<?php

require_once("./banco.php");

$id = $_GET['id'];

$msg = '';

$veiculo = filter_input(INPUT_POST, 'veiculo');
$ano = filter_input(INPUT_POST, 'ano');
$descricao = filter_input(INPUT_POST, 'descricao');

$select = $conn->prepare("SELECT * FROM veiculos WHERE id = $id");

$select->execute();

$dados = $select->fetchAll();

$editar = $conn->prepare("UPDATE veiculos SET veiculo = :veiculo , ano = :ano, descricao = :descricao, marca = :marca WHERE id = $id ");

$editar->bindParam(':veiculo', $veiculo);
$editar->bindParam(':ano', $ano);
$editar->bindParam(':descricao', $descricao);
$editar->bindParam(':marca', $_POST['marca']);

if ($veiculo and $ano and $descricao and $_POST['marca']) {
    $editar->execute();
    $msg = 'HOME';
}