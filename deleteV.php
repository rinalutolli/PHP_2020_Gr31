<?php

require_once "connection.php";
 
	$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "' ";
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