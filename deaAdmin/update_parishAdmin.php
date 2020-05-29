<?php		
include('DbCon.php');
include('session.php');
$crusader_id = $_POST['crusader_id'];
$status="pariAd";
// $diocese_name = strtoupper($_POST['diocese_name']);

mysqli_query($mysqli,"update login_tb set status = '$status'  where crusader_id = '$crusader_id' ")or die(mysqli_error($mysqli));
//mysqli_query($mysqli,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Class $class_name')")or die(mysqli_error($mysqli));
?>

