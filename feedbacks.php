<!DOCTYPE html>
<html>
<head>
    <title>Feedbacks</title>
    <style type="text/css">
    .error {color: #FF0000;}
    body{
background-image: url("./images/feedbacks.jpg"),url("./images/6.jpg");
background-repeat: no-repeat, repeat;
background-attachment:fixed;
background-position: right bottom, left top;
background-size: 250px;
 
 
}
    textarea {
            resize: horizontal;
    }    
   
        button{
            background-color: black;
            padding:1em;
            border-radius: 8px;
 
 
        }
        button a
        {
            text-decoration: none;
            color:white;
 
 
        }
        button a:hover
        {
            color:gray;
        }
    </style>
 
</head>
<body>
    <?php
// define variables and set to empty values
$nameErr = $surnameErr = $emailErr = "";
$name = $surname = $email = $comment = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
 
  if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
  } else {
    $surname = test_input($_POST["surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
      $surnameErr = "Only letters and white space allowed";
    }
  }
 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <h3 style="font-size: 25px;">Your opinion is too important to us! </h3>
    <p id="demo"></p>
    <p id="demo1"></p>
 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   
           
 
            <h3><b>Name</b></h3>
  <input type="text" name="name" placeholder="Enter Name" ><span class="error">* <?php echo $nameErr;?></span>
   <h5 style="color:red">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    if (strlen($name) < 2) {
        echo "Your name is ".strlen($_POST["name"])." character. Name must have at least 2 characters!";
    }
}
?></h5>
  <h3 id="surname"><b>Surname</b></h3>
 
  <input type="text" name="surname" placeholder="Enter Surname" ><span class="error">* <?php echo $surnameErr;?></span>
 
  <h3><b>Email</b></h3>
  <input type="text" name="email" placeholder="Enter Email" ><span class="error">* <?php echo $emailErr;?></span>
 
 
            <h3><b>Comment</b></h3><br/>
                    <textarea name="comment" rows="5" cols="60">
                    </textarea><br><br> <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                          $fp=fopen('comments/comment.txt', 'w');
                           fwrite($fp,$_POST["comment"]);
                           fclose($fp);
                        } ?>
                      <input type="submit" name="submit" value="Submit">  <br><br>
    </form>
 
<?php
class artikulli {
  public $name;
 
  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "<h2>Thank you for your {$this->name}!</h2>";
  }
}
 
$faqja = new artikulli("time");
?>
 
 
</body>
</html>