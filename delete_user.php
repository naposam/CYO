<?php
include('DbCon.php');
include('session.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($mysqli,"select * from users where user_id ='$id[$i]'")or die(mysqli_error($mysqli));
	$row = mysqli_fetch_array($query);
	$uname = $row['username'];

	mysqli_query($mysqli,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Deleted  user $uname')")or die (mysql_error($mysqli,));
	mysqli_query($mysqli,"DELETE FROM users where user_id='$id[$i]'");
}
header("location: users.php");
}
?>