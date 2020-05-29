<?php
 include ('DbCon.php');
 $get_id = $_GET['id']; 
$status=true;
$sql="select trans_id from annual_registration_paymenttbl Where crusader_id='$get_id'";
$set=mysqli_query($mysqli,$sql);
 $row=mysqli_fetch_array($set);
 $trans_id=$row['trans_id'];
 
$select="UPDATE annual_registration_paymenttbl SET status='$status' WHERE crusader_id='$get_id' and trans_id='$trans_id'";

if(mysqli_query($mysqli, $select)){
	header('location: payreg.php');
}



?>