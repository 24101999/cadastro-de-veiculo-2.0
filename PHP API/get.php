<?php
require_once('./banco.php');


$img = $conn->prepare('SELECT * FROM veiculos');

$img->execute();

$el = $img->fetchAll();