<?php

require("dbconfig.php");



//MySQLi Procedurale
$conn = mysqli_connect(servername, username, password); 
if (!$conn) {  
   die("Connection failed: " . mysqli_error($conn)); 
}

$sql = 'CREATE Database ushtrime';


$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
die('Could not create database: ' . mysqli_error($conn));
}
echo "Database Ushtrime created successfully\n";
mysqli_close($conn);
	


?>