<?php 
include('../connection.php');

$id=$_GET['id'];
$sql=mysqli_query($con,"select * from slider where id='$id' ");
$res=mysqli_fetch_assoc($sql);
$img=$res['image'];
unlink("../image/Slider/$img");

if(mysqli_query($con,"delete from slider where id='$id' "))
{
header('location:dashboard.php?option=slider');	
}

?>