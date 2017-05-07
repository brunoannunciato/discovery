<?php

include ('database/config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$depoimento = $_POST['depoimento'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `depoimentos`(`nome`, `email`, `depoimento`) VALUES ('$nome','$email', '$depoimento');";

if ($conn->query($sql) === TRUE) {
    echo "Depoimento cadastrado!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>