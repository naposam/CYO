<?php
		include('DbCon.php');
		include('../session.php');
		
		$student_id = $_POST['student_id'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$student_class = $_POST['student_class'];
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$tel = $_POST['tel'];
		$rship = $_POST['rship'];
		/*$status = $_POST['status'];
		$transport = $_POST['transport'];
		$route = $_POST['route'];*/
		
		mysqli_query($mysqli,"UPDATE students set Firstname = '$fname', Middlename ='$mname',Lastname ='$lname',
		Gender ='$gender',
		Dob='$dob',
		Address ='$address',
		Class ='$student_class',
		Gfirstname ='$gfname',
		Gmiddlename ='$gmname',
		Glastname ='$glname',
		Rship ='$rship',
		Tel ='$tel' where Student_id = '$student_id'")or die(mysqli_error($mysqli));
		
		
		mysqli_query($mysqli,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Updated Student $fname $lname')")or die (mysqli_error($mysqli));
		/*
		$result1 = mysql_query("select * from class where class_name='$student_class'  ")or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$myfee = $row1['fee'];
		
		if($status=='paying'){
			$status_fee =$myfee;
		}else
		if($status=='exempted'){
			$status_fee =0;
		}else
		if($status=='half'){
			$status_fee =$myfee/2;
		}else
		if($status=='quarter'){
			$status_fee =$myfee/4;
		}
		mysql_query("update janmar set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysql_query("update aprjun set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysql_query("update julsep set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysql_query("update octdec set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());*/
		?>
		
		
		<!--
		
		