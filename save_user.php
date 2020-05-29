<?php
include('DbCon.php');
include('session.php');
$status= $_POST['status'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $fname.'.'.$lname;

mysqli_query($mysqli,"insert into user(username,password,firstname,lastname,status) values('$uname','12345','$fname','$lname','$status')")or die(mysqli_error($mysqli));
mysqli_query($mysqli,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add User $uname')")or die(mysqli_error($mysqli));
?>