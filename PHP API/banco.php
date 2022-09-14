<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$host = 'localhost';
$db = 'cadastro_veiculo';
$name = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$db", $name, $pass);
// print_r($el); 