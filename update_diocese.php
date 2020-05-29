<?php		
include('DbCon.php');
include('session.php');
$diocese_id = $_POST['diocese_id'];
$diocese_name = strtoupper($_POST['diocese_name']);

mysqli_query($mysqli,"update diocese set diocese_name = '$diocese_name'  where diocese_id = '$diocese_id' ")or die(mysqli_error($mysqli));
//mysqli_query($mysqli,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Class $class_name')")or die(mysqli_error($mysqli));
?>

