<?php
session_start();
require 'connect.php';
$email=mysql_real_escape_string(htmlspecialchars(htmlspecialchars_decode($_POST['email'])));
$password=mysql_real_escape_string(htmlspecialchars(htmlspecialchars_decode($_POST['password'])));
if(isset($_POST['email'])!=null && isset($_POST['password'])!=null)
{
$sql=mysql_query("SELECT * FROM users where email='$email' and password='$password'");
if(mysql_fetch_array($sql)==true)
{
$_SESSION['email']=$email;
header('Location: index.php');
}
else{
	echo "<script>alert('Invalid Credentials');window.history.back();</script>";
}
}
else{
	echo "<script>alert('Wrong email or password');windows.history.back()</script>";
}
?>