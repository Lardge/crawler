<?php
include 'mysql/mysql-connection.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn,"utf8");

include 'mysql/mysql-get-customers.php';
include 'mysql/mysql-get-quotes.php';


$conn->close();
?>
