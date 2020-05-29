<?php
include 'DbCon.php';
if(isset($_GET['del_id'])){
 	$del_id=$_GET['del_id'];
 
 	mysqli_query($mysqli,"DELETE FROM unit WHERE unit_id='$del_id'")or die(mysqli_error($mysqli));
 	//mysqli_query($mysqli,"DELETE FROM login_tb WHERE user_id='$del_id'")or die(mysqli_error($mysqli));
 echo "<div class='alert alert-success'>Success! Data deleted sucessfully.</div>";
 echo "<script>document.location='add_units.php'</script>";
	
 }
 


?>