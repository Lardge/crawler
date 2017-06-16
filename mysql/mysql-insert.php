<?php
include 'mysql-connection.php';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO stock (stockName, stockOwners, stockYearlyChange, date) VALUES ('". $instrumentNameText ."', '". $instrumentOwnersValue ."', '". $instrumentYearlyChangeValue ."', '". $date ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
