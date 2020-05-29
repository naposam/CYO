<?php
	include('DbCon.php');
	include('session.php');
$diocese_name = strtoupper($_POST['diocese_name']);
$regid = $_POST['regid'];


mysqli_query($mysqli,"insert into diocese (diocese_name,reg_id) values('$diocese_name', '$regid')")or die(mysqli_error($mysqli));
//mysqli_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error($mysqli));
?>