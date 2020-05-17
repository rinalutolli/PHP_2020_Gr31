<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title> //titulli
 
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
<body>
  <div class="grad">
  <h4 id="rv"><b>Sign Up to be a part of us</b></h4><br/>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <h3><b>Name</b></h3>
  <input type="text" id="name" name="fname" placeholder="Enter Name">
  <h5 style="color:red">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty!";
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Only letters and white space allowed.";
    }
}
?></h5>
  <h3><b>Surname</b></h3>
  <input type="text" id="surname" name="surname" placeholder="Enter Surname">
    <h5 style="color:red">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fsurname = $_POST['surname'];
    if (empty($fsurname)) {
        echo "Surame is empty!";
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$fsurname)) {
      echo "Only letters and white space allowed.";
    }
}
?></h5>
 <h3><b>Birthday</b></h3>
  <input type="date" id="birthday" name="birthday">
  <h5 style="color:red">
  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bday = $_POST['birthday'];
    if (empty($bday)) {
        echo "Birthday is empty!";
      }
    } ?>
      </h5>
  <h3><b>Gender</b></h3>
  <input type="radio"  name="gender" value='F'>F
  <input type="radio"  name="gender" value='M'>M
  <h5 style="color:red">
  <?php
if (isset($_POST['add'])) {
if(isset($_POST['gender']))
{
echo "";
}
else{ echo "Please choose any gender button.";}
}
?>
  </h5>
  <h3><b>Email</b></h3>
  <input type="text" id="email" name="email" placeholder="Enter Email">
   <h5 style="color:red">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    if (empty($email)) {
        echo "Email is empty!";
    }
    else if(preg_match('/[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9\.\-]+$/',$email) === 0) {
      echo "This is an invalid email.";
    }
}
?></h5>
  <h3><b>Password</b></h3>
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
  <h3><b>Confirm Password</b></h3>
  <input type="password" name="c_password" placeholder="Confirm Password"><br><br>
  <h5 style="color:red">
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $password = $_POST['c_password'];
  $password1 = $_POST['fpassword'];
  if($password!== $password1 ) {
  echo "Your passwords dont match!";
  }
}
?></h5>
 
  <input name="add" type="submit" id="add" value="Sign Up">
 
</form>
 
</div>
 
<h3 style="color:red; text-align: center; padding: 3px;">
 
<?php
 
require("dbconfig.php");
 
$conn = mysqli_connect(servername, username, password, dbname);
if (!$conn) {  
   die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_POST['add'])){
 
  $fname =md5($_POST['fname']);
  $surname = md5($_POST['surname']);
  $birthday =  md5($_POST['birthday']);
  $gender = $_POST['gender'];
  $email = md5($_POST['email']);
  $fpassword = md5( $_POST['fpassword']);
  $c_password = md5($_POST['c_password']);
 
 
  if(empty($fname) || empty($surname) || empty($birthday) || empty($gender) || empty($email) || empty($fpassword) || empty($c_password)){
    echo "Please fill all the fields!";  
    exit(0);
  }
 
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST['email'];
 
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST["email"] . "'");
 
 
$num = mysqli_num_rows($result);
if($num>0){
  echo"Email already taken";
  exit(0);
}
}
 
    if (!preg_match("/^[a-zA-Z]*$/",$fname) || !preg_match("/^[a-zA-Z ]*$/",$fsurname) || preg_match('/[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9\.\-]+$/',$email) === 0 || strlen($password) < 6 || $password!== $password1) {
      echo "You didn't fill the fields correctly!";
      exit(0);
 
    }
 
 
 
  $sql = "INSERT INTO users (name, surname, birthday, gender, email, password, c_password)
  VALUES ('$fname', '$surname', '$birthday', '$gender', '$email', md5('$fpassword'), md5('$c_password'))";
 
  $retval = mysqli_query($conn, $sql);
  if(! $retval )
  {
  die('Nuk mund te shtohen te dhenat ne tabele: ' . mysqli_error($conn));
  }
 
  $last_id = mysqli_insert_id($conn); //ID e rekordit te fundit
  echo "Te dhenat u shtuan me sukses.\nID eshte: ". $last_id;
  mysqli_close($conn);
 
}
 
?>
</h3>
 
 
</body>
</html>
