<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<?php 
$get_id = $_GET['id'];?>

<?php
error_reporting(0);
  if(isset($_FILES['pic']['name']) && ($_FILES['pic']['name']!="")){
  	 $pic = $_FILES["pic"]["name"];
	if(!empty($pic)){
		    if ($pic=="")
		    {
		     $pic="default.gif";
		    }
		    else	{	
		$type = $_FILES["pic"]["type"];
		$size = $_FILES["pic"]["size"];
		$temp = $_FILES["pic"]["tmp_name"];
		$error = $_FILES["pic"]["error"];
		
			if ($error > 0){
				die("Error uploading file! Code $error.");
				
				}
			else{
				if($size > 100000000000) //conditions for the file
				{
				die("Format is not allowed or file size is too big!");
				
				}
			else
			      {
				move_uploaded_file($temp, "uploads/".$pic);
				
					
			 } }
			}
		}else echo"Upload Picture to update";
  }
mysqli_query($mysqli,"UPDATE students set picture='$pic' where Student_id='$get_id'") or die(mysqli_error($mysqli));


?>


    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_students.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Student</div>
                                <div class="muted pull-right"><a href="students.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
						<?php
						$query = mysqli_query($mysqli,"select * from students where Student_id = '$get_id'")or die(mysqli_error($mysqli));
						$row = mysqli_fetch_array($query);
						?>
						<form  class="form-signin" method="post" enctype='multipart/form-data'>
						<!-- span 4 -->
										<div class="span4">
										<input type="hidden" value="<?php echo $row['student_id']; ?>" class="input-block-level"  name="student_id" required>
										<label>PROFILE PICTURE:</label>
											<input type="FILE" class="input-block-level"  name="pic"  required>
										<label>FIRST NAME:</label>
											<input type="text" class="input-block-level"  name="fname" value="<?php echo $row['Firstname']; ?>" required>
											<label>MIDDLE NAME:</label>
											<input type="text" class="input-block-level"  name="mname"     value="<?php echo $row['Middlename']; ?>"     >
											<label>LAST NAME:</label>
											<input type="text" class="input-block-level"  name="lname"  value="<?php echo $row['Lastname']; ?>"  required>
											<label>GENDER:</label>
												<select name="gender" class="span5" required>
													<option><?php echo $row['Gender']; ?></option>
													<option>Male</option>
													<option>Female</option>
												</select>
										</div>		
						<div class="span4">
							<label>DATE OF BIRTH:</label>
									<input type="date" class="input-block-level"  name="dob" value="<?php echo $row['Dob']; ?>">
							<label>ADDRESS:</label>
									<input type="text" value="<?php echo $row['Address']; ?>" name="address" class="my_message" required>
							<label>CLASS:</label>		
									<select name="student_class" class="span5" required>
									<option> <?php echo $row['Class'];?></option>
										<?php 
											$result = mysqli_query($mysqli,"select * from class ")or die(mysqli_error($mysqli));
											while($row1 = mysqli_fetch_array($result)){
											$myclass = $row1['class_name'];			
									     ?>
								<option value="<?php echo $myclass;?>"> <?php echo $myclass;?> </option>
									<?php }?>
							</select>
							
									<br>
									<br>
									<br>
									<br>
							<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Update</button>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
							<label>GUARDIAN FIRSTNAME:</label>
							<input type="text" class="input-block-level"  name="gfname" value="<?php echo $row['Gfirstname']; ?>" required>
							<label>GUARDIAN MIDDLENAME:</label>
							<input type="text" class="input-block-level"  name="gmname" value="<?php echo $row['Gmiddlename']; ?>" >
							<label>GUARDIAN LASTNAME:</label>
							<input type="text" class="input-block-level"  name="Glname" value="<?php echo $row['Glastname']; ?>" required>
							<label>RELATIONSHIP TO STUDENT:</label>
							<input type="text" class="input-block-level"  name="rship" value="<?php echo $row['Rship']; ?>" required>
							<label>PHONE NUMBER:</label>
							<input type="text" class="input-block-level"  name="tel" value="<?php echo $row['Tel']; ?>" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="10" required>
						</div>
						<!--end span 4 -->
						<div class="span12"><hr></div>		
							</form>			
								
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>