<?php include('includes/banner.php'); ?>
<?php include('includes/header.php'); ?>
  <body id="login" style="background-image: url('images/colorful.jpg') !important; background-repeat: no-repeat !important; background-size: cover !important; ">
    <div class="container">
		
	
			<!-- // $sql = mysqli_query($mysqli,"select fname from login_tb where status='pariAd' or status='diocAd' or status='deanAd' or status='unitAd'")or die(mysql_error($mysqli));
			// while($row2 = mysqli_fetch_array($sql)){
			// $fname = $row2['fname'];
			// } -->

								
		<!--code for password change-->							
          <?php
          error_reporting(0);
		    $errors=array();
            $crusader_id="";
            $new_password="";
           $retype_password="";
             $question="";
             $answer="";
             $level="";
         if(isset($_POST['change'])){
         	$crusader_id=$_POST['crusader_id'];
         	$new_password=$_POST['new_password'];
         	$retype_password=$_POST['retype_password'];
         	$question=$_POST['quest'];
         	$level=$_POST['level'];
         	$answer=strtoupper($_POST['answer']);
         if(empty($crusader_id)) {
	           $errors['crusader_id']="crusader_id required";
               }
         if(empty($new_password)) {
	           $errors['new_password']="New Password is required";
               }
          if($new_password !=$retype_password) {
	           $errors['retype_password']="password do not match";
               }
            if(empty($question)) {
	           $errors['quest']="Question is required";
               }

             if(empty($level)) {
	           $errors['level']="Officer's level is required";
               }
               if(empty($answer)) {
	           $errors['answer']="Answer is required";
               }
               $idcheck="SELECT * FROM `login_tb` WHERE `crusader_id`='$crusader_id' ";
             $result=mysqli_query($mysqli,$idcheck)or die(mysqli_error($mysqli));
                 $usercount=mysqli_num_rows($result);
             if($usercount==0) {
	          $errors['crusader_id']="crusader_id does not exists";
                }


                $request= mysqli_query($mysqli,"SELECT * from `login_tb` where  fname='$answer' and status='$level' ")or die(mysql_error($mysqli));

                $countName=mysqli_num_rows($request);
                   if($countName==0){
	              $errors['answer']="Name  does not exists";
                }

           if(count($errors)===0){    
            mysqli_query($mysqli,"UPDATE login_tb set password='$new_password' where crusader_id='$crusader_id' ");
            echo "<script>
            	document.location='LoginForm.php';
            </script>";
           
         }

    }


		?>

	
      <form  class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Change Password</h3>
		<!-- <input type="hidden" id="password" name="password" value="<?php echo $row['password']; ?>"  placeholder="Current Password">  -->
		                  <?php if(count($errors)>0):?>
                            <div class="alert alert-info">
                          <button class='close' data-dismiss='alert'>&times;</button>
                           <?php foreach($errors as $error):?>
                            <li><?php echo $error;?></li>
                           <?php endforeach; ?>
                         </div>
                          <?php endif;?>
		<input type="text" id="current_password" name="crusader_id"  placeholder="Enter Crusader ID" value="<?php echo($crusader_id)?>" style="width:100%;">
        <input type="password" id="new_password" name="new_password" placeholder="New Password"  style="width:100%;">
		<input type="password" id="retype_password" name="retype_password" placeholder="Re-type Password"  style="width:100%;">
		<select name="quest" style="width:100%;">
			<option selected="" disabled="">select sercurity question</option>
		<?php 

		$select= 'SELECT * FROM forgot_password';
		$result=mysqli_query($mysqli, $select);
		while ($row1=mysqli_fetch_array($result)) {
		?>
			<option><?php echo $row1['question']; ?></option>
		<?php
		}?>

		
		</select>
           <br><br>
		 <input type="text" id="retype_password" name="answer" placeholder=" provide an answer " style="width:100%;" >
              

		<select name="level" style="width:100%;">
			<option selected="" disabled="">select your officer's level </option>
		<?php 

		$level3= "SELECT * FROM login_tb where status='unitAd' ";
		$set3=mysqli_query($mysqli, $level3);
		$row3=mysqli_fetch_array($set3);

		$level5= "SELECT * FROM login_tb where status='pariAd' ";
		$set5=mysqli_query($mysqli, $level5);
		$row4=mysqli_fetch_array($set5);

		$level5= "SELECT * FROM login_tb where status='deanAd' ";
		$set5=mysqli_query($mysqli, $level5);
		$row5=mysqli_fetch_array($set5);

		$level6= "SELECT * FROM login_tb where status='diocAd' ";
		$set6=mysqli_query($mysqli, $level6);
		$row6=mysqli_fetch_array($set6);

		

		?>
			<option value="<?php echo $row3['status']; ?>"><?php echo "Unit"; ?></option>
			<option value="<?php echo $row4['status']; ?>"><?php echo "Parish"; ?></option>
			<option value="<?php echo $row5['status']; ?>"><?php echo "Deanery"; ?></option>
			<option value="<?php echo $row6['status']; ?>"><?php echo "Diocese"; ?></option>
			

		

		
		</select>
		<br><br>
		<a href="LoginForm.php" title="Click to Edit"   class="btn btn-inverse">Back</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
        <button  type="submit" data-placement="right" id="save" name="change" class="btn btn-success"><i class="icon-save icon-large"></i> Save</button>
		

			<!-- <script>
			jQuery(document).ready(function(){
			jQuery("#change_password").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var current_password = jQuery('#current_password').val();
						var new_password = jQuery('#new_password').val();
						var retype_password = jQuery('#retype_password').val();
						if (password != current_password)
						{
						$.jGrowl("Password does not match with your current password  ", { header: 'Change Password Failed' });
						}else if  (new_password != retype_password){
						$.jGrowl("Password does not match with your new password  ", { header: 'Change Password Failed' });
						}else if ((password == current_password) && (new_password == retype_password)){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_password.php",
						data: formData,
						success: function(html){
					
						$.jGrowl("Your password has been changed successfully change", { header: 'Change Password Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
						}
					});
					}
				});
			});
			</script> -->
			</form>
			
			
    </div> <!-- /container -->
<?php include('footer.php'); ?>
<?php include('script.php'); ?>
  </body>
</html>