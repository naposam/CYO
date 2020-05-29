<?php
include('DbCon.php');
include('session.php');
if (isset($_POST['delete_class'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($mysqli,"select * from class where class_id ='$id[$i]'")or die(mysqli_error($mysqli));
	$row = mysqli_fetch_array($query);
	$class_name = $row['class_name'];

	mysqli_query($mysqli,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Deleted  Class $class_name')")or die (mysqli_error($mysqli));
	mysqli_query($mysqli,"DELETE FROM class where class_id='$id[$i]'") or die(mysqli_error($mysqli));
}
header("location: add_class.php");
}
?>