<?php 

$servername = "localhost:3307";
$username = "vesa";
$password = "Vesa1234";

//MySQLi Object oriented
$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();

?>
 
 