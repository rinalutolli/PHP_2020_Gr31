<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="jquery-1.11.2.min.js"></script>

<script>
$(document).ready(function(){
  $("#btn2").click(function(){
  $("#test").slideToggle("slow");
  var testRole = $("#btn2").text().trim(); 
  if(testRole=="Click to open"){
	  
	  
    $("#btn2").text("Click to close");
  }
  else{
    $("#btn2").text("Click to open");
  }
  });
});
</script>
  <style type="text/css">
  .grad {
  background-image: linear-gradient(to right, lightgray , white);
}
  body
  {
    background-color: lightgray;
    font-family: sans-serif;
  }
    div{
      background-color: white;
      margin: 10px 400px 10px 400px;
      border: outset grey;
      border-width:5px; 
      padding: 2em;
    }
    input
    {
      border-radius: 3px;
      padding: 0.5em;
      border-color: black;
    }
    #btn2 {
      background-color: black;
      color: white;
      padding: 0.5em;
      border-radius: 10px;
    }
    #rv{
      background-color: black;
      color:white;
      text-align: center;
      padding: 1em;
    }
    #Sign{
      background-color: black;
      color: white;
      padding: 1em;
      border-radius: 10px;
    }
     button a 
    {
      text-decoration: none;
      color:white;
    }
    #signup_btn
    {
      background-color: black;
      color: white;
      padding: 1em;
      border-radius: 10px;
    }
  </style>
</head>
<body> //trupi
  <div class="grad">
  <h4 id="rv"><b>Sign Up to be a part of us</b></h4><br/>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
  <h3><b>Name</b></h3>
  <input type="text" id="fname" name="fname" placeholder="Enter Name">
  <h5 style="color:red">
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty!";
    } 
}
?></h5>
  <h3><b>Surname</b></h3>//surname
  <input type="text" id="surname" name="surname" placeholder="Enter Surname">
  <h5 style="color:red">
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fname = $_POST['surname'];
    if (empty($fname)) {
        echo "Surname is empty!";
    } 
}
?></h5>
  <h3><b>Birthday</b></h3>
  <input type="date" id="birthday" name="birthday">
  
  <h3><b>Gender</b></h3>
  <input type="radio" id="gender" name="gender" value='F'>F
  <input type="radio" id='gender' name="gender" value='M'>M

     <h3><b>Email</b></h3>
  <input type="email" id="email"name="email" placeholder="Enter Email">
  <?php 
 ?>
   <h3><b>Password</b></h3> //password
  <input type="password" id="password" name="fpassword" placeholder="New Password">
  <h5 style="color:red">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$password = $_POST['fpassword'];
if(strlen($password) < 6 ) {
echo "Your password is ".strlen($_POST["fpassword"])." characters. Password must be at least 6 characters!";
} 
}
?></h5>
 <h3><b>Confirm Password</b></h3>  Pasword
  <input type="password" name="c_password" placeholder="Confirm Password">
  <h5 style="color:red">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$password = $_POST['c_password'];
$password1 = $_POST['fpassword'];
if($password!== $password1 ) {
echo "Your passwords dont match!";
} else {
echo "You confirmed your password.";
}
}
?></h5>
  <input type="submit" name="add" id="add" value="Sign  up">

</form>

<br>
<br>





</div>




<?php

require("dbconfig.php");

$conn = mysqli_connect(servername, username, password, dbname); 
if (!$conn) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

if(isset($_POST['add'])){ 

	$fname = $_POST['fname'];
	$surname = $_POST['surname'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];

	$email = $_POST['email'];
$fpassword=$_POST['fpassword'];
$c_password=$_POST['c_password'];
	
	$sql = "INSERT INTO users (name, surname,  birthday,  gender ,email,  password, c_password)
	VALUES ('$fname', '$surname',  '$birthday' , '$gender','$email','$fpassword', '$c_password')";

	$retval = mysqli_query($conn, $sql );
	if(! $retval )
	{
	die('Nuk mund te shtohen te dhenat ne tabele: ' . mysqli_error($conn));
	}

	$last_id = mysqli_insert_id($conn); //ID e rekordit te fundit
	echo "Te dhenat u shtuan me sukses.\nID eshte: ". $last_id;
	mysqli_close($conn);
}

?>


</body>
</html>
