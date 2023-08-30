<?php 
include('connection.php');
$oid=$_GET['order_id'];
$q=mysqli_query($con,"delete from  room_booking_details where id='$oid' ");
if($q)
{
header('location:order.php');
}
?>