<?php 
include('../connection.php');
$oid=$_GET['booking_id'];
$q=mysqli_query($con,"delete from  room_booking_details where id='$oid' ");
if($q)
{
header('location:dashboard.php?option=booking_details');
}
?>