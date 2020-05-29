<?php
	include('DbCon.php');
	include('session.php');
$class_name = $_POST['class_name'];
$category = $_POST['category'];


mysqli_query($mysqli,"insert into class (class_name,category) values('$class_name','$category')")or die(mysqli_error($mysqli));
mysqli_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error($mysqli));
?>