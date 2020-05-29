<?php
	include('DbCon.php');
	include('session.php');
$parish_name = strtoupper($_POST['parish_name']);
$deanery_id = $_POST['deanery'];
$diocese_id = $_POST['diocese'];
$regid = $_POST['region'];


mysqli_query($mysqli,"insert into parish (parish_name,diocese_id,deanery_id,reg_id) values('$parish_name','$diocese_id','$deanery_id','$regid')")or die(mysqli_error($mysqli));
//mysqli_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error($mysqli));
?>