<?php
require 'connect.php';
$email=mysql_real_escape_string(htmlspecialchars(htmlspecialchars_decode($_POST['email'])));
$password=mysql_real_escape_string(htmlspecialchars(htmlspecialchars_decode($_POST['password'])));
if(isset($_POST['email'])!=null && isset($_POST['password'])!=null)
{
$sql=mysql_query("SELECT * FROM users where email='$email'");
if(mysql_fetch_array($sql)!=true)
{
$ok=mysql_query("INSERT INTO users (email,password) VALUES ('$email','$password')");
if($ok==true)
{
	echo "<script>alert('Successfully registered....');window.location='index.php'</script>";
}
}
else{
	echo "<script>alert('Already registered with this email...try with another email');window.history.back()</script>";
}
}
?>