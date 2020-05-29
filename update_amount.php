<?php		
include('DbCon.php');
include('session.php');
$amount_id = $_POST['amount_id'];
$amount = $_POST['amount'];
$section=$_POST['section'];

mysqli_query($mysqli,"update amount set amount = '$amount'  where amount_id = '$amount_id' and section='$section' ")or die(mysqli_error($mysqli));
//mysqli_query($mysqli,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Class $class_name')")or die(mysqli_error($mysqli));
?>

