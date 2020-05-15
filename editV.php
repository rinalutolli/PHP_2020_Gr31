<head>
<style>
	label{
		font-weight:bold;
	}
	input
    {
      border-radius: 3px;
      padding: 0.5em;
      border-color: black;
    }

</style>
</head>
<body>
	<h2 style="text-align: center;background-color: #C49AD1;color:white;padding: 35px;margin-top: "><b>EDIT</b></h2>
	<div style="margin-left:500px;">
	<?php
require("dbconfig.php");

$conn = mysqli_connect(servername, username, password, dbname);  
if (!$conn) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

//Select by ID me GET

if(isset($_GET['id'])){ 
$id = $_GET['id'];
$sql = 'SELECT * FROM users where id='.$_GET['id'];
	$rezultati = mysqli_query($conn, $sql );
	if(! $rezultati )
	{
	die('Data cannot be save: ' . mysqli_error($conn));
	}
	if(mysqli_num_rows($rezultati)>0)
	{  
		while($rreshti = mysqli_fetch_assoc($rezultati))
		{ 
		echo '<form method="post">
			<label>Name</label>
			<br>
			<input name="name" type="text" id="emri" value="'.$rreshti["name"].'"/>
			<br>
			<label>Surname</label>
			<br>
			<input name="surname" type="text" id="mbiemri" value="'.$rreshti['surname'].'"/>
			<br>
			<label>Birthday</label>
			<br>
			<input name="birthday" type="date" id="email" value="'.$rreshti['email'].'"/>
			<br>
			

			<label>Email</label>
			<br>
			<input name="email" type="text" id="mbiemri" value="'.$rreshti['email'].'"/>
			<br>
			<label>Password</label>
			<br>
			<input name="password" type="password" id="email" value="'.$rreshti['password'].'"/><br>
			<label>Confirm Password</label>
			<br>
			<input name="c_password" type="password" id="email" value="'.$rreshti['c_password'].'"/>


			<br><br>
			<input name="edit" type="submit" id="edit" value="Edit user">
			</form>';
		}
	}
}

//EDIT me post pas ndryshimit
if(isset($_POST['edit'])){ 

 $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
 
  $email = $_POST['email'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];
	
	$sql = "UPDATE users  set name = '$name', surname ='$surname', email ='$email', birthday = '$birthday', email ='$email', password = md5('$password'), c_password =md5('$c_password') where id =$id";

	$retval = mysqli_query($conn, $sql );
	if(! $retval )
	{
	die('Data cannot be save: ' . mysqli_error($conn));
	}

	$last_id = mysqli_insert_id($conn); //ID e rekordit te fundit
	header("Location: members.php"); 
	mysqli_close($conn);
}


?>

</div>  
<h2 style="text-align: right;background-color:#C49AD1;color:white;padding: 35px; "><b>©MAG MAGAZINE</b></h2>
</body> 



