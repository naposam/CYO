<?php
	include('DbCon.php');
	include('session.php');
$amount = $_POST['Amount'];
//$category = $_POST['category'];


mysqli_query($mysqli,"insert into amount (amount) values('$amount')")or die(mysqli_error($mysqli));
//mysqli_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error($mysqli));
?>