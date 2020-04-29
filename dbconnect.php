<?php 
	
	$host='localhost';
	$username='root';
	$pass='Vesa1234';
	$db='projektiphp';
    //konektimi
//lidhja me db
	$conn=mysqli_connect($host,$username,$pass,$db);

	if(!$conn) die("Connection refused").mysql_connect_error();

 ?>
