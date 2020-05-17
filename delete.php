<?php

require_once "connection.php";
 
	$sql = "DELETE FROM userss WHERE name='" . $_GET["name"] . "' ";
	$rezultati = mysqli_query($conn, $sql);
	if(! $rezultati )
	{
	die('Data cannot be deleted: ' . mysqli_error($conn));
	}
	else
	{
		
		header("Location:members.php");
	}
?>

