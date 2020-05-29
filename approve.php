<?php
 include ('DbCon.php');
 $get_id = $_GET['id']; 
$status=true;
$sql="select trans_id from annual_registration_paymenttbl Where crusader_id='$get_id'";
$set=mysqli_query($mysqli,$sql);
 $row=mysqli_fetch_array($set);
 
$select="UPDATE annual_registration_paymenttbl SET status='$status' WHERE crusader_id='$get_id' ";

if(mysqli_query($mysqli, $select)){
	header('location: payreg.php');
}



?>