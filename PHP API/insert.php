<?php
require_once('./banco.php');

$name = filter_input(INPUT_POST, 'name');
$marca = filter_input(INPUT_POST, 'marca');
$ano = filter_input(INPUT_POST, 'ano');



if ($name and $marca and $ano and $_POST['descricao_do_texto']) {
    $insert = $conn->prepare('INSERT INTO veiculos (veiculo , marca , ano , descricao) VALUE (:veiculo , :marca , :ano , :descricao)');

    $insert->bindParam(':veiculo', $name);
    $insert->bindParam(':marca', $marca);
    $insert->bindParam(':ano', $ano);
    $insert->bindParam(':descricao', $_POST['descricao_do_texto']);

    $insert->execute();
    header('location:' . '/redirecinamento.html');
}
