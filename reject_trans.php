<?php
include ('DbCon.php');
 $get_id = $_GET['id']; 
$select="DELETE FROM annual_registration_paymenttbl  WHERE crusader_id='$get_id' ";

if(mysqli_query($mysqli, $select)){
	header('location: payreg.php');
}