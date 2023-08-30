

<?php
include('connection.php');
$eid = $_GET['eid'];
/*if($eid=="")
{
header('location:Login.php');
}*/
$sql= mysqli_query($con,"select * from user where email='$eid' ");

$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);

$status="failed";
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];
$zip = $_GET['zip'];
$country = $_GET['country'];
$room_type = $_GET['room_type'];
$cdate = $_GET['cdate'];
$ctime = $_GET['ctime'];
$codate = $_GET['codate'];
$Occupancy = $_GET['occupancy'];
$sql2= mysqli_query($con,"select rooms.price from rooms where type='$room_type' ");
$result2=mysqli_fetch_assoc($sql2);
$amount=$result2["price"];

$uid=mysqli_fetch_assoc(mysqli_query($con,"select id from user where email='$email' "));
$userid = $uid["id"];
$rid=mysqli_fetch_assoc(mysqli_query($con,"select room_id from rooms where type='$room_type' "));
$roomid = $rid["room_id"];

$sql= mysqli_query($con,"select * from room_booking_details where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {

    $sql="insert into room_booking_details(name,user_id,room_id,email,phone,address,city,state,zip,contry,room_type,check_in_date,check_in_time,check_out_date,Occupancy) 
    values('$name','$userid','$roomid','$email','$phone','$address','$city','$state','$zip','$country',
    '$room_type','$cdate','$ctime','$codate','$Occupancy')";
  
  
   if(mysqli_query($con,$sql))
   {
    $status="paid";
   $msg= "<h1 style='color:blue'>You have Successfully booked this room</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
?>
<?php
        $id2=rand(1591059,5591059);
        $sql= " insert into payment values ('$id2','$userid','$name','$email','$amount','$status')";
        mysqli_query($con,$sql);
        ?>
<html>
    <head></head>
    <body>
        <?php echo @$msg; ?>
        <style>
table, th, td {
  border:1px solid black;
}
</style>
<div style="border:2px solid black; margin-left:10%; width: 80%;">        
<h1 style="margin-left:45%;">INVOICE</h1><hr>
<h3>User Details</h3>
<div style="padding-left:50px; padding-bottom: 20px;">
        <p><b>name:</b>&emsp;&emsp;&emsp;&emsp;   <?php echo $name ?></p>
        <p><b>email:</b>&emsp;&emsp;&emsp;&emsp;   <?php echo $email ?></p>
        <p><b>phone:</b>&emsp;&emsp;&emsp;&ensp;&nbsp; <?php echo $phone ?></p>
        <p><b>address:</b>&emsp;&emsp;&emsp;&ensp;<?php echo $address ?></p>
        <p><b>country:</b>&emsp;&emsp;&emsp;&ensp;<?php echo $country ?></p>
        
</div><hr>
<div>
<p><b>invoice id:</b> <?php echo $id2 ?></p>    
<table style="width:100%">
  <tr>
    <th>Date</th>
    <th>Room type</th>
    <th>Occupancy</th>
    <th>Amount</th>
  </tr>
  <tr>
    <td><?php echo $cdate ?></td>
    <td><?php echo $room_type ?></td>
    <td><?php echo $Occupancy ?></td>
    <td><?php echo $amount ?></td>
  </tr>
</table>
<p><b>Total Amount:</b> Rs <?php echo $amount ?>\-</p>
<p><b>Transaction Status:</b> <?php echo $status ?></p>
</div>        

        
</body>
</html>