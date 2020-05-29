<?php
	include('DbCon.php');
	include('session.php');
$unit_name = strtoupper($_POST['unit_name']);
$parish_id = $_POST['parish'];
$deanery_id = $_POST['deanery'];
$diocese_id = $_POST['diocese'];
$regid = $_POST['region'];


mysqli_query($mysqli,"insert into unit (unit_name,parish_id,diocese_id,deanery_id,reg_id) values('$unit_name','$parish_id','$diocese_id','$deanery_id','$regid')")or die(mysqli_error($mysqli));
//mysqli_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error($mysqli));
?>