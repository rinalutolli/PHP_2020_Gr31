<?php
define("servername","localhost");
define("dbname","ushtrime");
define("username","root");
define("password","");


$conn = mysqli_connect(servername, username, password, dbname); //shtojme 'dbname' 
if (!$conn) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

?>

