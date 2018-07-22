<?php
session_start();
error_reporting(0);
require "connect.php";
if (isset($_SESSION['email']))
{

$email=$_SESSION['email'];
session_unset("email");
session_destroy();
header("location:index.php");
}
else{
	header('Location: index.php');
}
?>
