<link rel="stylesheet" href="css/bootstrap.css">
<title>Registration</title>
<?php
include 'header.php';
if(isset($_SESSION['email'])!=true)
{
?>
<center><img src="images/register.jpg" style="width:15%;height:200px;border-radius:100px;"></center>
<center><h1>Registration</h1></center>
<form action="signup_action.php" method="post">
<center>	<input type="email" class="form-control" name="email" placeholder="E-main Address: " style="width:30%;" autofocus required>
	<br><input type="password" class="form-control" name="password" placeholder="Password" style="width:30%;" required>
	<br><input type="submit" value="Register" class="btn btn-success"></center>
</form>
<?php
}
else{
	echo "<script>window.location='index.php';</script>";
}
?>