<?php 
include('../connection.php');

$id=$_GET['id'];
$sql=mysqli_query($con,"select * from user where id='$id' ");
$res=mysqli_fetch_assoc($sql);
//$img=$res['image'];
//unlink("../image/Slider/$img");

if(mysqli_query($con,"delete from user where id='$id' "))
{
header('location:dashboard.php?option=user_registration');	
}

?>