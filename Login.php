<?php 
session_start();
error_reporting(1);
if($_SESSION['user_logged_in']!="")
{
header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
    $p = md5($pass);
  $sql=mysqli_query($con,"select * from user where email='$eid' && password='$p' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['user_logged_in']=$eid;  
    header('location:Booking Form.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alpha Royal Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="icon" href="./logo/logo2.png" type="image/ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
</head>
<body id="primary"style="margin-top:50px;">
<?php
include('Menu Bar.php')
?>
<div class="container-fluid"><!-- Primary Id-->
  <div class="container" style="">
    <div class="row1"><br>
      
        <div class="col-sm-12 text-center"style="width:450px;height:fit-content;background-color:white;box-shadow:2px 2px 2px;"><br>

        	<h1 style="align:center; font-family: Verdana, Geneva, Tahoma, sans-serif; color: #212221; position:relative; top:-20px;"><b>User Login </b></h1>
          <img src="image/clipart/login-user-icon.png" class="img-circle" alt="Bird" width="150" height="150">
          <?php echo @$error; ?>
          <form method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid"placeholder="Email Id" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
          <div class="form-group forget">
                <a href="Forgot account.php">Forgot Password?</a>&nbsp; <b>|</b>&nbsp; 
                <a href="Registation form.php">Create an Account</a>
            </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
<?php

?>
</body>
</html>
