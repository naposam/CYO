<?php
include ('DbCon.php');
 $get_id = $_GET['unset_id']; 
$status="Normal";
$select="UPDATE login_tb SET status='$status' WHERE crusader_id='$get_id' ";

if(mysqli_query($mysqli, $select)){
	header('location: setparishadmin.php');
}
