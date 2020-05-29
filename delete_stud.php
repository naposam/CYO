<?php
include('DbCon.php');
include('session.php');
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($mysqli,"select * from crusaders where id ='$id[$i]'")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$fname = $row['fname'];
	$mname = $row['lname'];
	mysqli_query($mysqli,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Deleted Student $fname $mname')")or die (mysqli_error($mysqli));
	mysqli_query($mysqli,"DELETE FROM crusaders where id ='$id[$i]'");
	
}
header("location: crusader.php");
}
?>