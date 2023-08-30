<?php 
session_start();
extract($_REQUEST);
include('../connection.php');
$admin=$_SESSION['admin_logged_in'];	
if($admin=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Alpha royal hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="dashboard.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
  </style>
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome <?php echo $admin; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php?option=admin_profile">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="dashboard.php?option=update_password">Update Password</a></li>
            <li><a href="dashboard.php?option=feedback">Feedback</a></li>
            <li><a href="dashboard.php?option=rooms">Room</a></li>
			<li><a href="dashboard.php?option=booking_details">Booking Details</a></li>
      <li><a href="dashboard.php?option=user_registration">User Registration</a></li>
			<li><a href="dashboard.php?option=slider">Slider</a></li>
      <!---<li><a href="#">Payment</a></li>
			<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="#">Logo Update</a></li>
              <li><a href="#">Address Update</a></li>
          </ul>
      </li>--->
          </ul>
          </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php 
@$opt=$_GET['option'];
if($opt=="")
{
include('reports.php');	
}
else
{
	if($opt=="feedback")
	{
	include('feedback.php');	
	}
	else if($opt=="slider")
	{
	include('slider.php');	
	}
	else if($opt=="update_slider")
	{
	include('update_slider.php');	
	}
	else if($opt=="add_slider")
	{
	include('add_slider.php');	
	}
	else if($opt=="update_password")
	{
	include('update_password.php');	
	}
	else if($opt=="rooms")
	{
	include('rooms.php');	
	}
	
	else if($opt=="add_rooms")
	{
	include('add_rooms.php');	
	}
	else if($opt=="delete_room")
	{
	include('delete_room.php');	
	}
  
  else if($opt=="update_room")
  {
    include('update_room.php');
  }
  else if($opt=="booking_details")
  {
    include('booking_details.php');
  }
  else if($opt=="user_registration")
  {
    include('user_registration.php');
  }
  else if($opt=="admin_profile")
  {
    include('admin_profile.php');
  }
}
?>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
