<?php
	include('DbCon.php');
	include('session.php');
$deanery_name = strtoupper($_POST['deanery_name']);
$diocese_id = $_POST['diocese'];
$regid = $_POST['region'];


mysqli_query($mysqli,"insert into deanery (deanery_name,diocese_id,reg_id) values('$deanery_name','$diocese_id','$regid')")or die(mysqli_error($mysqli));
//mysqli_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error($mysqli));
?>