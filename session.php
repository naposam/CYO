<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php
}
$session_id=$_SESSION['id'];
$query= mysqli_query($mysqli,"select * from Login_tb where user_id = '$session_id'")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	//$user_username = $row['username'];
	$user_username = $row['fname'].' '. $row['lname'];
?>