<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['lemail'];
setcookie("lemail", $email , time() + (86400 * 30), "/");
setcookie("lemail", "", time() - 3600);
}
?>
<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','ushtrime') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM login WHERE lemail='" . $_POST["lemail"] . "' and lpassword = '". $_POST["lpassword"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["lemail"] = $row['lemail'];
$_SESSION["lpassword"] = $row['lpassword'];
}
}
if(isset($_SESSION["lemail"])) {
header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="jquery-1.11.2.min.js"></script>
<script>
  $(document).ready(function(){
   $("input").focus(function(){
    $(this).css("background-color", "yellow");
 
  });
  $("input").blur(function(){
    $(this).css("background-color","lightgreen");
  });
});
</script>
 
 
  <style type="text/css">
  .grad {
  background-image: radial-gradient(white, lightgrey, grey);
}
 
     body
  {
    background-color: lightgray;
    font-family: sans-serif;
  }
    div{
      background-color: white;
      margin: 40px 400px 10px 400px;
      border:groove gray;
      border-radius: 10px;
      padding: 1em;
      text-align: center;
    }
    div#cr
    {
      background-color: white;
      margin: 8px 400px 8px 400px;
      padding:0 0.5em 0 0.5em;
      border:groove gray;
      border-radius: 10px;
     
      text-align: center;
 
    }
     #rv{
      background-color: black;
      color:white;
      text-align: center;
      padding: 1em;
    }
    a
    {
      text-decoration: none;
      color:grey;
 
    }
    a:hover
    {
      background-color:black;
      border-radius: 10px;
      padding:0.5em;
    }
   
    input
    {
      padding: 0.5em;
      border-radius: 5px;
      border-color: black;
    }
    button
    {
      background-color: black;
      color: white;
      padding: 1em;
      border-radius: 10px;
    }
     button a
    {
      text-decoration: none
      font-family:sans-serif;
      color:white;
    }
    #Submit
    {
      background-color: black;
      color: white;
      padding: 1em;
      border-radius: 10px;
 
    }
    </style>
 
 
   
</head>
<body >
 
  <div class="grad">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
   
    <h4 id="rv">Sign In to our community</h4>
    <h3>Email address</h3>
    <input type="text" name="lemail" placeholder="Enter your email address" autocomplete="on">
    <h5 style="color:red"><?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['lemail'];
  if (empty($email)) {
      echo "Email is empty!";
  }
   else if (!preg_match('/[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9\.\-]+$/',$email)) {
    echo "This is an invalid email.";
  }
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST['lemail'];
  $vargu = explode("@",$email);
 
 
  if (empty($vargu[0])) {
      echo "There is no domain and username.";}
  elseif (empty($vargu[1])){
    echo "There is no domain.";
  }
  else {
    echo "Username: ". $vargu[0]. "<br/>";
    echo "Domain: ". $vargu[1]."<br/>";}
   
   }
 
?></h5>
    <h3>Password</h3>
    <input type="password" name="lpassword" keygen="password" placeholder="Enter your password"><br/><br/>
    <input type="submit" name="add" id="add" value="Sign in">
 
    <p id="fp"><a href="#">Forgot your password?</a></p>
   
  </div>
 
  <div id="cr" class="grad">
    <h3>New to Mag Magazine?</h3>
    <h3><a href="signup.php">Sign Up</a></h38>
  </form>  
 
  </div>
  <?php
 
require("dbconfig.php");
 
$conn = mysqli_connect(servername, username, password, dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_POST['add'])){
 
 
$lemail  = $_POST['lemail'];
$lpassword =  $_POST['lpassword'];
 
if(empty($lemail) || empty($lpassword) ){
  echo "Please fill all the fields!";
  exit(0);
  }
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $stmt = mysqli_prepare($conn,"select * from login where lemail=? and lpassword=md5(?)");
  mysqli_stmt_bind_param($stmt, "ss",$lemail, $lpassword);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);  
 
 
 
$num = mysqli_num_rows($result);
if($num==0){
  function function_alert($message) {
     
    // Display the alert box  
    echo "<script>alert('$message');</script>";
}
 
 
// Function call
function_alert("This email does not exist!");
 
 
  exit(0);
}
}
 
$sql = "INSERT INTO login (lemail, lpassword)
VALUES ('$lemail','$lpassword')";
 
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