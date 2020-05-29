<?php
include('DbCon.php');
include('session.php');
mysqli_query($mysqli,"update user_log set logout_Date = NOW() where Login_attempt_per_id = '$session_id' ")or die(mysqli_error($mysqli));
session_destroy();
header('location:../index.php'); 
?>