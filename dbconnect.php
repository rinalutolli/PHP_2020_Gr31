<?php 
	
	$host='localhost';
	$username='root';
	$pass='Vesa1234';
	$db='projektiphp';
    //konektimi

	$conn=mysqli_connect($host,$username,$pass,$db);

	if(!$conn) die("Connection refused").mysql_connect_error();

 ?>
