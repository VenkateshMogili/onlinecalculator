<title>Calculator</title>
<?php
session_start();
error_reporting(0);
require 'connect.php';
if(isset($_SESSION['email']))
{
	?>
	<link rel="stylesheet" href="css/bootstrap.css">
	<?php
	include 'header.php';
	?>
	<center><h1>Calculator</h1></center>
<form action="calculator_action.php" method="post">
	<center>
		<input type="text" id="values" name="values1" placeholder="Enter values here..." class="form-control" style="width:20%;" autofocus required><br>
	<input type="text" id="operation" name="operation" placeholder="Enter operation here..." class="form-control" style="width:20%;" maxlength="1" required><br>
	<input type="text" id="values2" name="values2" placeholder="Enter values here..." class="form-control" style="width:20%;" required><br>
	<div id="content" class="col-md-12" style='height:300px;overflow:auto;display:none;'></div>
	<table>
			<tr>
			<td onclick="fadd()">+</td><td onclick="fsub()">-</td><td onclick="fmul()">*</td>
			</tr>
			<tr>
			<td onclick="fdiv()">/</td><td onclick="fper()">%</td><td onclick="load_page('hhistory.php')">history</td>
			</tr>
			<tr>
			<td onclick="fclear()">clear</td><td onclick="fequal()"><input type="submit" value="=" style="border:0px;background-color:lightgray;color:black"></td>
		</tr>
	</table>
</center>
	<style>
	table{width:80%;}
	td{padding:10px;background-color:lightgray;border:1px solid white;width:50px;}
	td:hover{background-color:black;color:white;cursor:pointer;}
	</style>
	<?php
	}
	else{
		header('Location: index.php');
	}
?>
<script>
function fadd(){
	document.getElementById("operation").value='+';
}
function fsub(){
	document.getElementById("operation").value='-';
}
function fmul(){
	document.getElementById("operation").value='*';
}
function fdiv(){
	document.getElementById("operation").value='/';
}
function fper(){
	document.getElementById("operation").value='%';
}
function fclear(){
	document.getElementById("values").value="";
	document.getElementById("operation").value="";
	document.getElementById("values2").value="";
}
</script>
<script src="js/jquery.js"></script>
<script>
$(document).ready(function(){
	$("#history").click(function(){
		$("#content").slideToggle("fast");
	});
});
function load_page(pageloc,pageid){	
	$("#content").slideToggle("fast");
	$('#content').html("<center><i style='color:white;'>Loading...</i></center>").load(pageloc);
	}
</script>