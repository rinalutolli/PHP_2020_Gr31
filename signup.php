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
<body>
  <div class="grad">
  <h4 id="rv"><b>Sign Up to be a part of us</b></h4><br/>
  <form action="register.php" method="post"> 
  <h3><b>Name</b></h3>
  <input type="text" id="f_name" name="f_name" placeholder="Enter Name">
  <h3><b>Surname</b></h3>
  <input type="text" id="l_name" name="l_name" placeholder="Enter Surname">
  <h3><b>Birthday</b></h3>
  <input type="date" id="birthday" name="birthday">
  <h3><b>Mobile</b></h3>
  <input type="text" id="mobile" name="mobile">
  <h3><b>Gender</b></h3>
  <input type="radio" id="gender" name="gender" value='F'>F
    <input type="radio" id='gender' name="gender" value='M'>M

     <h3><b>Email</b></h3>
  <input type="email" id="email"name="email" placeholder="Enter Email">
   <h3><b>Password</b></h3>
  <input type="password" id="password" name="password" placeholder="New Password">
   <h3><b>Confirm Password</b></h3>
  <input type="password" name="password11" placeholder="Confirm Password"><br/><br/><br/>

  <input type="submit" class="btn btn-primary" value="Sign Up" name="signup" id="signup_btn">

</form>
<br>
<br>
    <br>





</div>
</body>
</html>
