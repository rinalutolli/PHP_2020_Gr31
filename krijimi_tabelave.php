<?php

require("dbconfig.php");


//MySQLi Procedurale
$conn = mysqli_connect(servername, username, password, dbname); 
if (!$conn) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

//OSE
//mysqli_select_db($conn, dbname);

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL,
birthday DATE,
gender VARCHAR(30),
email VARCHAR(30),
password VARCHAR(30),
c_password VARCHAR(30)
)";
 
$retval = mysqli_query($conn, $sql );
if(! $retval )
{
die('Nuk mund te krijohet tabla: ' . mysqli_error($conn));
}
echo "Tabela u krijua me sukses\n";
mysqli_close($conn);
	
?>

