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



$sql = "CREATE TABLE login (
lid INT(6) UNSIGNED AUTO_INCREMENT ,
lemail VARCHAR(50)  PRIMARY KEY,
lpassword VARCHAR(50),
data_loginit TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql = "CREATE TABLE admins (
   AdminId int(5) PRIMARY KEY,
   nameAdmin VARCHAR(50) ,
   lastnameAdmin VARCHAR(50),
   emailAdmin VARCHAR(50),
   ageAdmin INT(50),
   jobAdmin VARCHAR(50)
   )";




 
$retval = mysqli_query($conn, $sql );
if(! $retval )
{
die('Nuk mund te krijohet tabla: ' . mysqli_error($conn));
}
echo "Tabela u krijua me sukses\n";
mysqli_close($conn);










	
?>

