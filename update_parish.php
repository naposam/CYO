<?php		
include('DbCon.php');
include('session.php');
$parish_id = $_POST['parish_id'];
$parish_name = strtoupper($_POST['parish_name']);

mysqli_query($mysqli,"update parish set parish_name = '$parish_name'  where parish_id = '$parish_id' ")or die(mysqli_error($mysqli));
//mysqli_query($mysqli,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Class $class_name')")or die(mysqli_error($mysqli));
?>

