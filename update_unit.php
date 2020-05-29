<?php		
include('DbCon.php');
include('session.php');

$unit_id = $_POST['unit_id'];
$unit_name = strtoupper($_POST['unit_name']);

mysqli_query($mysqli,"update unit set unit_name = '$unit_name'  where unit_id = '$unit_id'")or die(mysqli_error($mysqli));
//mysqli_query($mysqli,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Class $class_name')")or die(mysqli_error($mysqli));

?>