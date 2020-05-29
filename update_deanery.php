<?php		
include('DbCon.php');
include('session.php');
$deanery_id = $_POST['deanery_id'];
$deanery_name = strtoupper($_POST['deanery_name']);

mysqli_query($mysqli,"update deanery set deanery_name = '$deanery_name'  where deanery_id = '$deanery_id' ")or die(mysqli_error($mysqli));
//mysqli_query($mysqli,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Class $class_name')")or die(mysqli_error($mysqli));
?>

