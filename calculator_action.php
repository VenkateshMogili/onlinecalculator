<title>Calculating....</title>
<?php
session_start();
require 'connect.php';
if(isset($_SESSION['email']))
{
	$values1=mysql_real_escape_string(htmlspecialchars(htmlspecialchars_decode($_POST['values1'])));
	$values2=mysql_real_escape_string(htmlspecialchars(htmlspecialchars_decode($_POST['values2'])));
	$operation=$_POST['operation'];
	if((is_numeric($values1)==true  && is_numeric($values2)==true) && ($operation=='+' || $operation=='-' || $operation=='*' || $operation=='/' || $operation=='%'))
	{
	if($operation=='+')
	{
		$result=$values1+$values2;
	}
	else if($operation=='-')
	{
		$result=$values1-$values2;
	}
	else if($operation=='*')
	{
		$result=$values1*$values2;
	}
	else if($operation=='/')
	{
		$result=$values1/$values2;
	}
	else if($operation=='%')
	{
		$result=$values1%$values2;
	}
	else{
		echo "<script>alert('Error...Please enter a valid operation symbol');window.history.back();</script>";
	}
	$result1=$values1.$operation.$values2;
	$email=$_SESSION['email'];
	$k=mysql_query("INSERT INTO calculator (operation,result,email) VALUES ('$result1','$result','$email')");
	if($k==true)
	{
		echo "<script>alert('Answer: ".$result."');window.location='calculator.php'</script>";
	}
	else{
		echo "<script>alert('Error');window.history.back();</script>";
	}
}
else{
	echo "<script>alert('Error...Please enter a valid values and symbol');window.history.back();</script>";
}
}
?>