
<html>
<head>
<title>Help Center</title>
<style type="text/css">

input
{
border-radius: 3px;
padding: 0.5em;
border-color: black;
margin-top: 5px;
}
input:focus{
border-color:#086EB4;
border-width: 4px;
}
input[type=submit]:active{
background-color: #086EB4

}
#btn2 {
background-color: black;
color: white;
padding: 0.5em;
border-radius: 10px;
}
textarea{
border-color: black;
border-radius: 3px;
border-width: 3px;
margin-top: 5px;
}
textarea:focus{
border-color: blue;
}
label{
color:gray;
}
</style>
</head>
<body>

<h2 style="text-align: center;background-color: #086EB4;color:white;padding: 35px; "><b>HELP CENTER</b></h2>
<h2 style="text-align: center;color:gray;padding: 20px; "><i>We will do the best to help you!</i></h2>


<form method="post" action="phpmailer.php" style="margin-left:400px;">
<label><b>Name</b></label><br>
<input type="text" name="name" placeholder="Name" required><br>
<br>
<label><b>Email</b></label><br>
<input type="Email" name="email" placeholder="Email" required><br><br>
<label><b>Subject</b></label><br>
<input type="text" name="subject" placeholder="Subject" required><br><br>
<label><b>Tell us your problem</b></label><br>
<textarea name="msg" rows="5" cols="60" placeholder="Do not hesitate!" id="tarea"required></textarea><br><br>
<input type="submit" id="btn2" name="submit">

</form>
<h5 style="color:red">

</h5>
<h2 style="text-align: right;background-color:#086EB4;color:white;padding: 35px; "><b>©MAG MAGAZINE</b></h2>
</body>
</html>