<?php

require("dbconfig.php");

//MySQLi object oriented
$conn = new mysqli(servername, username, password); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE ushtrime";
//$sql = 'DROP Database ushtrime';

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();



?>