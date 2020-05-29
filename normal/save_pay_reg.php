<?php
error_reporting(0);
$errors=array();
$amount="";
$period="";
$trans_id="";
if(isset($_POST['pay'])){
	$crusader_id=$_POST['crusader_id'];
	$amount=$_POST['amount'];
	$period=$_POST['period'];
	$trans_id=$_POST['trans_id'];
	$date=date('Y-m-d');
	//validation
if(empty($amount)) {
	$errors['amount']="Amount required";
}
if(empty($period)) {
$errors['period']="Period for payment is required";	
}
if(empty($trans_id)) {
	$errors['trans_id']="Transaction ID required";
}

	$query="SELECT * FROM annual_registration_paymenttbl WHERE trans_id='$trans_id' LIMIT 1";
	$result=mysqli_query($mysqli,$query);
	$count=mysqli_num_rows($result);
	if($count>0){
	echo "<center><div style='color:white; font-weight:bold; ' class='btn btn-warning'>Your transaction already exist</div></center>";
	}
	$per="SELECT * FROM annual_registration_paymenttbl WHERE period='$period' LIMIT 1";
	$resultset=mysqli_query($mysqli,$per);
	$cont=mysqli_num_rows($resultset);
	if($cont>0){
	echo "<center><div style='color:white; font-weight:bold; ' class='btn btn-warning'>You have already paid for $period </div></center>";
	}
	if(count($errors)===0){
    $status=false;
    $payment_type="mobile money";
	$sql= "INSERT INTO annual_registration_paymenttbl(crusader_id,amount,datepaid,payment_type,status,period,trans_id)VALUES('$crusader_id','$amount',NOW(),'$payment_type','$status','$period','$trans_id')";
	if(mysqli_query($mysqli,$sql)){
		header("location: view_account_details.php");
	}

}
	
}



if(isset($_POST['pay_btn'])){
	$crusader_id=$_POST['crusader_ids'];
	$amount=$_POST['amounts'];
	$period=$_POST['periods'];
	//$trans_id=$_POST['trans_id'];
	$date=date('Y-m-d');
	//validation
if(empty($amount)) {
	$errors['amount']="Amount required";
}
if(empty($period)) {
$errors['period']="Period for payment is required";	
}
// if(empty($trans_id)) {
// 	$errors['trans_id']="Transaction ID required";
// }

	 $query="SELECT * FROM annual_registration_paymenttbl WHERE period='$period' LIMIT 1";
	 $result=mysqli_query($mysqli,$query);
	$count=mysqli_num_rows($result);
	 if($count>0){
	echo "<center><div style='color:white; font-weight:bold; ' class='btn btn-warning'>You have already paid for $period </div></center>";
	// }
	if(count($errors)===0){
    $status=false;
    $payment_type="Manual";
	$sql= "INSERT INTO annual_registration_paymenttbl(crusader_id,amount,datepaid,payment_type,status,period)VALUES('$crusader_id','$amount',NOW(),'$payment_type','$status','$period')";
	if(mysqli_query($mysqli,$sql)){
		header("location: view_account_details.php");
	}

}
	
}
}