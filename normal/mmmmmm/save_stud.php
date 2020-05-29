
		<?php
		include('DbCon.php');
		include('../session.php');
		
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
		$target="../uploads/".basename($_FILES['image']['name']);
        $image=$_FILES['image']['name'];
		mysqli_query($mysqli,"insert into students(picture,Firstname,Middlename,Lastname,Gender,Dob,Address,Class,Gfirstname,Gmiddlename,Glastname,Rship,Tel,DOA)values ('$image','$fname','$mname','$lname','$gender','$dob','$address','$student_class','$gfname','$gmname','$glname','$rship','$tel',NOW())")or die(mysqli_error($mysqli));
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target )) { 
      echo '<script>
     alert("Records Inserted Successfully");
      </script>';  
      }      
		
		mysqli_query($mysqli,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Student $fname $mname')")or die (mysqli_error($mysqli));
		
		$result = mysqli_query($mysqli,"select * from students where firstname='$fname' AND middlename='$mname' AND lastname='$lname' AND tel='$tel' ")or die(mysqli_error($mysqli));
		while($row = mysqli_fetch_array($result)){
				$student_id = $row['student_id'];
		}
		$result1 = mysqli_query($mysqli,"select * from class where class_name='$student_class'  ")or die(mysqli_error($mysqli));
		while($row1 = mysqli_fetch_array($result1)){
				
		}
		
		
		
		?>