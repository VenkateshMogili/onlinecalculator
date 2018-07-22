<?php
session_start();
require 'connect.php';
?>
<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="font-size:30px;color:yellow;">Calculator</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <?php
        if(isset($_SESSION['email'])==true)
        {
  ?>
        <li><a href="history.php">See older calculations</a></li>
        <li><a href="calculator.php">Perform calculations</a></li> 
        <?php
      }
      ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION['email'])==true)
        {
          $email=$_SESSION['email'];
?>
        <li><a href="logout.php"><?php echo $email." ->Logout";?></a></li>
        <?php
        }
        else{
          ?>
        <li><a href="signup.php" style="color:white"> Sign Up</a></li>
        <li><a href="login.php" style="color:white;"> Login</a></li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>