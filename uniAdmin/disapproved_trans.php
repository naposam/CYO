<?php
include ('DbCon.php');
 $get_id = $_GET['id']; 
$status=false;
$select="UPDATE annual_registration_paymenttbl SET status='$status' WHERE crusader_id='$get_id' ";

if(mysqli_query($mysqli, $select)){
	header('location: payreg.php');
}
