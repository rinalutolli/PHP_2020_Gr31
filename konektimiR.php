<?php 

$servername = "localhost";
$username = "root";
$password = "";

//MySQLi Object oriented
$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();

//MySQLi procedurale


?>
 
 