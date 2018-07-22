<?php
session_start();
error_reporting(0);
require 'connect.php';
if(isset($_SESSION['email'])==true)
{
	?>
<table class="table table-hover">
	<thead>
		<th>Operation</th>
		<th>Result</th>
	</thead>
	<tbody>
<link rel="stylesheet" href="css/bootstrap.css">
<center><h1>Calculations history</h1></center>
<?php
	$email=$_SESSION['email'];
	$sql=mysql_query("SELECT * FROM calculator where email='$email' order by id DESC");
	while($row=mysql_fetch_array($sql))
	{
		$operation=$row['operation'];
		$result=$row['result'];
		echo "<tr><td>".$operation."</td><td>".$result."</td></tr>";
	}
}
else{
	echo "<script>window.location='index.php';</script>";
}
?>
</tbody>
</table>