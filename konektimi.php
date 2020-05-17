<?php 

$servername = "localhost";
$username = "root";
$password = "";

//MySQLi Object oriented
$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!mysqli_connect($servername,$username,$password,"ushtrime")) {
    error_log("Failed to connect to database!", 0);
}
echo "Connected successfully";
$conn->close();

//MySQLi procedurale


?>
 
 