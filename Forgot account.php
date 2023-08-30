<?php 
include('connection.php');
error_reporting(1);
extract($_REQUEST);
if(isset($submit))
{
  $sql=mysqli_query($con,"select * from user where email='$email' ");
    if(mysqli_num_rows($sql))
    {
     $res=mysqli_fetch_assoc($sql); 
    $error= "<h3 style='color:blue'>Your Passwrod is :".$res['password']."</h3>"; 
    }
    else
    {
    $error= "<h3 style='color:red'>Invalid  details</h3>"; 
    }  
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alpha Royal Hotels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="icon" href="./logo/logo2.png" type="image/ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
<?php
include('Menu Bar.php')
?>
<div class="container-fluid"id="primary" style="margin-top: 12%;"> <!-- Primary Id-->
  <div class="container" style="background-color:white">
    <div class="row">
      <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h1 style="margin-top:50px;padding-top:50px; color: black; text-align: center; font-family: Verdana, Geneva, Tahoma, sans-serif;">Forgot Account?</h1><hr>
          <?php echo  @$error; ?>
          <p class="text-center">Please Enter your Email-id or Phone Number to Find Your Account.</p><br><br>
          <form method="post">
        <div class="form-group">
          <input type="Email" name="email" class="form-control" id="#"placeholder="Email Id or Phone Number"required>
        </div><hr>
          <input type="submit" value="submit" name="submit" class="btn btn-primary btn-group-justified"required>
        </form><br><br><br><br>  
        </div>
    </div>
  </div>
</div>

<?php

?>
</body>
</html>
