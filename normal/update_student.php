<?php

		//include('DbCon.php');
		//include('session.php');
		if(isset($_POST['update_btn'])){		
		$crusader_id = $_POST['crusader_id'];
		$fname = strtoupper($_POST['fname']);
		$mname = strtoupper($_POST['mname']);
		$lname = strtoupper($_POST['lname']);
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$e_address = $_POST['e_address'];
		$r_address = strtoupper($_POST['r_address']);
		$officetitle = $_POST['officetitle'];
		$officelevel = $_POST['officelevel'];
		$region = $_POST['region'];
		$diocese = $_POST['diocese'];
		$deanery = $_POST['deanery'];
		$parish = $_POST['parish'];
		$unit = $_POST['unit'];
		$tel = $_POST['tel'];
$query = "UPDATE `crusaders` set `fname` = '$fname', mname ='$mname',lname ='$lname',gender ='$gender',dob='$dob',residential_address ='$r_address',email_address='$r_address',region ='$region',diocese ='$diocese',deanery ='$deanery',parish ='$parish',unit ='$unit',contact ='$tel' where crusader_id = '$crusader_id'";
 if(mysqli_query($mysqli,$query)) {
			echo"<script>
      window.location = 'view_stud.php';
			</script>";
		}else
		{
				echo "update not successful";
					}
		
	// mysqli_query($mysqli,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Updated Student $fname $mname')")or die (mysqli_error($mysqli));

		
		}
		?>	
		
		
		
		
		
		
		
		
		
		
		
		
	
		
		