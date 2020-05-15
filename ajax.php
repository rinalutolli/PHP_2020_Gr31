<!DOCTYPE html>
<html>
<head>
<style type="text/css">
form{
margin-top: 50px;
}
select{
border-radius: 12px;
padding:10px;
}
</style>
<script>
function showUser(str) {
if (str=="") {
document.getElementById("txtHint").innerHTML="";
return;
}
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
if (this.readyState==4 && this.status==200) {
document.getElementById("txtHint").innerHTML=this.responseText;
}
}
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<h2 style="text-align: center;background-color: #72B599;color:white;padding: 35px; "><b>MEET OUR TEAM</b></h2>

<form>
<select name="admins" onchange="showUser(this.value)">
<option value="">Team members:</option>
<option value="1">Elda Lamaxhema</option>
<option value="2">Fjolla Hajdarhoxha</option>
<option value="3">Rina Lutolli</option>
<option value="4">Vesa Qilerxhiu</option>
</select>
</form>
<br>
<div id="txtHint"><b>MAG Team members info will be listed here.</b></div>
<h2 style="text-align: right;background-color:#72B599;color:white;padding: 35px; "><b>©MAG MAGAZINE</b></h2>

</body>
</html>