<?php
//session_start(); this code not used

// $sql="SELECT crusaders.*, annual_registration_paymenttbl.* FROM crusaders CROSS JOIN annual_registration_paymenttbl WHERE crusaders.crusader_id = annual_registration_paymenttbl.crusader_id";
// $result=mysqli_query($mysqli,$sql);
// $row=mysqli_fetch_array($result);
// $crusader_id=$row['crusader_id'];
// $fullName=$row['fname']." ".$row['mname']." ".$row['lname'];
// $status=$row['status'];
// if($status=0){
// 	$notaproved="Pending";

$date="2013-03-20 01:52:39";
$date2=date('Y-m-d', strtotime($date));

echo $date2;
echo " <br>";
$time=date('H:i A', strtotime($date));

echo $time;
echo "<br>";
$salt="cnlcboacbaczccvnjoiv8989dfdofk";
$hash=hash('sha512', $salt);
echo $hash;

