<?php
require_once __DIR__ . '../../php/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$serverName = $_ENV['DB_HOST'];
$userName = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbName = $_ENV['DB_DATABASE'];

//create connection

$connection = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) {
    echo "Failed to connect";
    exit();
} 

?>