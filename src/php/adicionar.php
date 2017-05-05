<?php
$servername = "mysql367.umbler.com";
$username = "discovery";
$password = "CS.1f6417e7";
$dbname = "teste";
$nome = $_POST['nome'];
$email = $_POST['email'];
$depoimento = $_POST['depoimento'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO teste (firstname, lastname, email)
VALUES ('.$nome.', '.$email.', '.$depoimento.')";

if (mysqli_query($conn, $sql)) {
    echo "adicionado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>