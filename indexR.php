<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
 
<?php
if($_SESSION["lemail"]) {
?>
Welcome <?php echo $_SESSION["lemail"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
<?php
if(!$_SESSION["lemail"]) {
?>
You are not logged in. Click here to <a href="logout.php" tite="Logout">Login.
<?php
}
?>
 
</body>
</html>