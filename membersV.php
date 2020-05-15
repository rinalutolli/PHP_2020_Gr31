<!DOCTYPE html>
<html>
<head>
  <title>MEMBERS</title>

</head>
<body style="background-color: white;">


<h2 style="text-align: center;background-color:#E9B6CE;color:white;padding: 35px;margin-top: "><b>MAG MAGAZINE MEMBERS</b></h2>
<div style="margin-left: 110px;">
  <table border=1>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Birthday</th>
   <th>Gender</th>
    <th>Email</th>
    <th>Password</th>
    <th>Conf.Password</th>

    <th>Delete</th>
    <th>Edit</th>
<div style="margin:20px 450px 0 450px;">
<?php
require_once "connection.php";
 
$conn = mysqli_connect(servername, username, password, dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
     

if (mysqli_num_rows($result) > 0) {
  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    echo "<tr>";
    echo "<td> " . $row["id"]. "</td>";
    echo "<td> " . $row["name"]. "</td>";
    echo "<td>  " . $row["surname"]. "</td>";
    echo "<td> " . $row["birthday"]. "</td>";
    echo "<td> " . $row["gender"]. "</td>";
    echo "<td>  " . $row["email"]. "</td>";
    echo "<td> " . $row["password"]. "</td>";
    echo "<td> " . $row["c_password"]. "</td>";
    echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
   echo "<td> <a href='edit.php?id=".$row['id']."'>Edit</a></td>";
    echo "</tr>";
    ;
   
  }
   echo"</table>";
} else {
  echo "0 results";
}


?>
</div>
<footer>
<h2 style="text-align: right;background-color:#E9B6CE;color:white;padding: 35px; "><b>©MAG MAGAZINE</b></h2>
</footer>
</body>
</html>
