<?php

$serverName = "localhost";
$userName = "root";
$password = "mysql123";
$dbName = "node_express_api";

//create connection

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) {
    echo "Failed to connect";
    exit();
} 

echo "connection succes!";

?>