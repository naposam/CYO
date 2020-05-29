		
		<?php
		error_reporting(1);
		include('DbCon.php');
		include('session.php');
		if(isset($_POST['save'])){
		$crusader_id = $_POST['crusader_id'];
		$fname = strtoupper($_POST['fname']);
		$mname = strtoupper($_POST['mname']);
		$lname = strtoupper($_POST['lname']);
		$gender = strtoupper($_POST['gender']);
		$userDob = $_POST['dob'];
		$contact = $_POST['contact'];
		$ResAddress = strtoupper($_POST['ResAddress']);
		$EmailAddress = $_POST['EmailAddress'];
		$region = ($_POST['region']);
		$diocese = ($_POST['diocese']);
		$deanery = ($_POST['deanery']);
		$parish = ($_POST['parish']);
		$unit = ($_POST['unit']);
		$officetitle = $_POST['officetitle'];
		$officelevel = $_POST['officelevel'];
		$datejoi = $_POST['datejoi'];
		$dateini = $_POST['dateini'];
		$password = $_POST['password'];
		$confrimpassword = $_POST['confrimpassword'];
		$target="uploads/".basename($_FILES['image']['name']);
        $image=$_FILES['image']['name'];
         
         //auto id generation with unit and parish id
        $a=rand(000001,999999);
        $fn = substr(($_POST['fname']), 0,1);
        $ln =substr($_POST['lname'], 0,1);
       // $un=$_POST['unit'];
        //$dean=$_POST['deanery'];

        $CYO='CYO';
        $select="SELECT *  from parish where parish_id='$parish'";
    $result=mysqli_query($mysqli,$select) or die(mysqli_error($mysqli));
    $row=mysqli_fetch_array($result);
    $id=$row['parish_id'];

    $select1="SELECT *  from unit where unit_id='$unit'";
   $result1=mysqli_query($mysqli,$select1) or die(mysqli_error($mysqli));
   $row1=mysqli_fetch_array($result1);
   $id1=$row1['unit_id'];
    $crusader_id=$CYO.$fn.$id1.$a.$id.$ln;
      //Create a DateTime object using the user's date of birth.
       $dob = new DateTime($userDob);
 
       //We need to compare the user's date of birth with today's date.
       $now = new DateTime();
 
       //Calculate the time difference between the two dates.
       $difference = $now->diff($dob);
 
       //Get the difference in years, as we are looking for the user's age.
       $age = $difference->y;

     //check age
       if($age>=17){
	       $section='CHRISTIAN SOLDIER';
       }if ($age>=12) {
	       $section='YOUNG APOSTLES';
       }if ($age>=6){
          $section='INFANT JESUS';

        if($password==$confrimpassword){
       // $password=password_hash($password, PASSWORD_DEFAULT);	
       $select ='SELECT * FROM crusaders where ';

if(preg_match('!image!', $_FILES['image']['type'])){
		mysqli_query($mysqli,"insert into crusaders(crusader_id,fname,mname,lname,DOB,unit,parish,deanery,diocese,contact,email_address,residential_address,region,office_title,office_level,gender,date_joined,date_initiated,picture,date_registered)values ('$crusader_id','$fname','$mname','$lname','$userDob','$unit','$parish','$deanery','$diocese','$contact','$EmailAddress','$ResAddress','$region','$officetitle','$officelevel','$gender','$datejoi','$dateini','$image',NOW())")or die(mysqli_error($mysqli));
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target )) { 
      echo "<script>
     alert('Officer Successfully Added.');
       document.location='crusader.php';
      </script>" ; 
      $user_id=mysqli_insert_id($mysqli);
      

      mysqli_query($mysqli,"insert into login_tb (user_id,crusader_id,fname,lname,password) values('$user_id','$crusader_id','$fname','$lname','$password')")or die (mysqli_error($mysqli));

      //mysqli_query($mysqli,"INSERT INTO annual_registration_paymenttbl(id,crusader_id)VALUES('$user_id','$crusader_id')") or die(mysqli_error($mysqli));


      } 
     }else{
		echo "<center><div class='btn btn-danger' style='color:white; font-family:sans-serif' font-weight:bold;> Please Upoads only JPG,PNG or GIF image </div></center>";
	}   
		
		//mysqli_query($mysqli,"insert into activity_log (name,date,action) values('$user_username',NOW(),'Add Student $fname $mname')")or die (mysqli_error($mysqli));
		
		//$result = mysqli_query($mysqli,"select * from students where firstname='$fname' AND middlename='$mname' AND lastname='$lname' AND tel='$tel' ")or die(mysqli_error($mysqli));
		//while($row = mysqli_fetch_array($result)){
				//$student_id = $row['student_id'];
		//}
		//$result1 = mysqli_query($mysqli,"select * from class where class_name='$student_class'  ")or die(mysqli_error($mysqli));
		//while($row1 = mysqli_fetch_array($result1)){
				
		
	}else {echo "<center><div class='btn btn-danger' style='color:white; font-family:sans-serif' font-weight:bold;> Password Don't Match </div></center>" ;}

	 }else
	 {
       echo "<center><div class='btn btn-danger' style='color:white; font-family:sans-serif' font-weight:bold;>Crusader must be at leat 6 years to register.".' Your age is currently '.$age.' years'."</div></center>";
	 }
		
		}
		
		?>