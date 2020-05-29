<?php
		include('DbCon.php');
		session_start();
		$username = mysqli_real_escape_string($mysqli,$_POST['username']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		/* student */
		$query = "SELECT * FROM login_tb WHERE crusader_id='$username' AND password='$password'";
		$result = mysqli_query($mysqli,$query)or die(mysqli_error());
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);
		$pass=$row['password'];
		$fullname=$row['fname'].' '. $row['lname'];
		$status =$row['status'];
		
		if( $num_row > 0 ) { 
		//if(password_verify($password, $pass)){
		
		$_SESSION['id']=$row['user_id'];
		
		if($status=='administrator'){
			echo 'true_admin';	
			mysqli_query($mysqli,"insert into user_log (Name,login_date,Login_attempt_per_id,crusader_id)values('$fullname',NOW(),".$row['user_id'].",'$username')")or die(mysqli_error($mysqli));
			//header("Location: dashboard.php");
		}else
		if($status=='diocAd'){
			echo 'true_dioAd';	
			mysqli_query($mysqli,"insert into user_log (Name,login_date,Login_attempt_per_id,crusader_id)values('$fullname',NOW(),".$row['user_id'].",'$username')")or die(mysqli_error($mysqli));
		}else
		if($status=='deanAd'){
			echo 'true_deaAd';	
			mysqli_query($mysqli,"insert into user_log (Name,login_date,Login_attempt_per_id,crusader_id)values('$fullname',NOW(),".$row['user_id'].",'$username')")or die(mysqli_error($mysqli));
		}else
		if($status=='pariAd'){
			echo 'true_parAd';	
			mysqli_query($mysqli,"insert into user_log (Name,login_date,Login_attempt_per_id,crusader_id)values('$fullname',NOW(),".$row['user_id'].",'$username')")or die(mysqli_error($mysqli));
		}else
		if($status=='unitAd'){
			echo 'true_uniAd';	
			mysqli_query($mysqli,"insert into user_log (Name,login_date,Login_attempt_per_id,crusader_id)values('$fullname',NOW(),".$row['user_id'].",'$username')")or die(mysqli_error($mysqli));
		}else
		if($status=='Normal'){
			echo 'true_user';	
			mysqli_query($mysqli,"insert into user_log (Name,login_date,Login_attempt_per_id,crusader_id)values('$fullname',NOW(),".$row['user_id'].",'$username')")or die(mysqli_error($mysqli));
		}
		else{ 
				echo 'false';
		}}	
          // }
		
		?>