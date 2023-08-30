<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($con,"select * from rooms where room_id='$id' ");
$res=mysqli_fetch_assoc($sql);

$img=$res['image'];

unlink("../image/rooms/$img");

if(mysqli_query($con,"delete from rooms where room_id='$id' "))
{
header('location:dashboard.php?option=rooms');	
}

?>