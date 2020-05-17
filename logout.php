<?php
session_start();
unset($_SESSION["lemail"]);
unset($_SESSION["lpassword"]);
header("Location:login.php");
?>