<?php include('header.php'); ?>
<?php include('../session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<style type="text/css">
    body{
      background-image: url(../images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
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
						<form id="update_student" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
										<input type="hidden" value="<?php echo $row['student_id']; ?>" class="input-block-level"  name="student_id" required>
										<label>FIRST NAME:</label>
											<input type="text" class="input-block-level"  name="fname" value="<?php echo $row['Firstname']; ?>" required>
											<label>MIDDLE NAME:</label>
											<input type="text" class="input-block-level"  name="mname"     value="<?php echo $row['Middlename']; ?>"  >
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
							<button class="btn btn-success" name="update"><i class="icon-save icon-large"></i> Update</button>
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
								<script>
									jQuery(document).ready(function($){
										$("#update_student").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_student.php",
												data: formData,
												success: function(html){
													$.jGrowl("Member Successfully  Updated", { header: 'Student Updated' });
													window.location = 'students.php';
												}
											});
										});
									});
								</script>
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