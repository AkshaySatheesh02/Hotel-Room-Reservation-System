<?php 
session_start();
$_SESSION['user_logged_in']=$eid;  
header('location:index.php'); 
?>