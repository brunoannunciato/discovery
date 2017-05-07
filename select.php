<?php

include ('database/config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `nome` FROM `depoimentos` WHERE `id` LIKE '9';";

echo $sql;

$conn->close();
?>