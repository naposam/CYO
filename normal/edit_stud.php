<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<!-- <?php $get_id //= $_GET['id']; ?> -->
    <body style="background: url(../images/colorful.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
 background-repeat: no-repeat;
 background-size: cover;">
 		<?php include('navbar.php'); ?>
		<?php $get_id = $crusaders_id;?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('norm_sidebar_edit.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Crusader</div>
                                <div class="muted pull-right"><a href="view_stud.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
                            </div>
                            <div>
                            	<center><button class="btn btn-default" style="color: green; font-weight: bolder; ">KINDLY NOTE !!!</button></center>
                            	<center><button class="btn btn-success">SOME FIELDS ARE NOT EDITABLE FOR SECURITY REASONS. KINDLY SEE YOUR OFFICER TO MAKE ANY NECESSARY CHANGE</button></center>
                            </div>
                            <div class="block-content collapse in">
						<?php
						$query = mysqli_query($mysqli,"SELECT *, region.name, diocese.diocese_name,deanery.deanery_name, parish.parish_name, unit.unit_name, Login_tb.crusader_id from crusaders LEFT JOIN region ON crusaders.region=region.reg_id LEFT JOIN diocese ON crusaders.diocese=diocese.diocese_id LEFT JOIN deanery ON crusaders.deanery=deanery.deanery_id LEFT JOIN parish ON crusaders.parish=parish.parish_id LEFT JOIN unit ON crusaders.unit=unit.unit_id LEFT JOIN Login_tb ON crusaders.crusader_id=Login_tb.crusader_id where Login_tb.crusader_id = '$get_id'")or die(mysqli_error($mysqli));
						$row = mysqli_fetch_array($query);
						?>
						<form  class="form-signin" method="post" >
						<!-- span 4 -->
										<div class="span4">
											<?php require 'update_student.php';?>
										<input type="hidden" value="<?php echo $row['crusader_id']; ?>" class="input-block-level"  name="id">
										<label>CRUSADER ID:</label>
											<input type="text" class="form-control"  name="crusader_id" value="<?php echo $row['crusader_id']; ?>" required readonly>
										   <label>FIRST NAME:</label>
											<input type="text" class="form-control"  name="fname" value="<?php echo $row['fname']; ?>" required readonly>
											<label>MIDDLE NAME:</label>
											<input type="text" class="form-control"  name="mname" value="<?php echo $row['mname']; ?>"  >
											<label>LAST NAME:</label>
											<input type="text" class="form-control"  name="lname"  value="<?php echo $row['lname']; ?>" required readonly>
											<label>GENDER:</label>
												<select name="gender" class="form-control" required readonly>
													<option><?php echo $row['gender']; ?></option>
												</select>
										</div>		
						<div class="span4">
							<label>DATE OF BIRTH:</label>
									<input type="date" class="form-control"  name="dob" value="<?php echo $row['DOB']; ?>" required readonly>
							<label>RESIDENTIAL ADDRESS:</label>
									<input type="text" value="<?php echo $row['residential_address']; ?>" name="r_address" class="form-control" required>
							<label>EMAIL ADDRESS:</label>
									<input type="text" value="<?php echo $row['email_address']; ?>" name="e_address" class="form-control" required>
									<label>OFFICE TITLE:</label>
							<select name="officetitle" class="form-control" readonly>
													<option><?php echo $row['office_title']; ?></option>
												</select>
					       <label>OFFICE LEVEL:</label>
							<select name="officelevel" class="form-control" readonly>
													<option><?php echo $row['office_level']; ?></option>
												</select>			
							<label>REGION:</label>		
									<select name="region" class="form-control" required readonly>
									<option value="<?php echo $row['reg_id'];?>"> <?php echo $row['name'];?></option>
										<!-- <?php 
											$result = mysqli_query($mysqli,"select * from region ")or die(mysqli_error($mysqli));
											while($row1 = mysqli_fetch_array($result)){
											$reg_name = $row1['name'];
											$reg_id = $row1['reg_id'];				
									     ?>
								<option value="<?php echo $reg_id;?>"> <?php echo $reg_name;?> </option>
									<?php }?> -->
							</select>
							
									
									<br>
									<br>
							<center><button class="btn btn-success" name="update_btn"><i class="icon-save icon-large"></i> Update</button></center>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
							<label>DIOCESE:</label>
							<select name="diocese" class="form-controlform-control" required readonly>
									<option value="<?php echo $row['diocese_id'];?>"> <?php echo $row['diocese_name'];?></option>
										<!-- <?php 
											$result = mysqli_query($mysqli,"select * from diocese ")or die(mysqli_error($mysqli));
											while($row2 = mysqli_fetch_array($result)){
											$diocese_name = $row2['diocese_name'];	
											$diocese_id = $row2['diocese_id'];		
									     ?>
								<option value="<?php echo $diocese_id;?>"> <?php echo $diocese_name;?> </option>
									<?php }?> -->
							</select>
							
							<label>DEANERY:</label>
							<select name="deanery" class="form-controlform-control" required readonly>
									<option value="<?php echo $row['deanery_id'];?>"> <?php echo $row['deanery_name'];?></option>
										<!-- <?php 
											$result = mysqli_query($mysqli,"select * from deanery ")or die(mysqli_error($mysqli));
											while($row3 = mysqli_fetch_array($result)){
											$deanery_name = $row3['deanery_name'];
											$deanery_id = $row3['deanery_id'];			
									     ?>
								<option value="<?php echo $deanery_id;?>"> <?php echo $deanery_name;?> </option>
									<?php }?> -->
							</select>
							
							<label>PARISH:</label>
							<select name="parish" class="form-control" required readonly>
									<option value="<?php echo $row['parish_id'];?>"> <?php echo $row['parish_name'];?></option>
										<!-- <?php 
											$result = mysqli_query($mysqli,"select * from parish ")or die(mysqli_error($mysqli));
											while($row4 = mysqli_fetch_array($result)){
											$parish_name = $row4['parish_name'];
											$parish_id = $row4['parish_id'];			
									     ?>
								<option value="<?php echo $parish_id;?>"> <?php echo $parish_name;?> </option>
									<?php }?> -->
							</select>
							<label>UNIT:</label>
							<select name="unit" class="form-control" required readonly>
									<option value="<?php echo $row['unit_id'];?>"> <?php echo $row['unit_name'];?></option>
										<!-- <?php 
											$result = mysqli_query($mysqli,"select * from unit ")or die(mysqli_error($mysqli));
											while($row5 = mysqli_fetch_array($result)){
											$unit_name = $row5['unit_name'];
											$unit_id = $row5['unit_id'];			
									     ?>
								<option value="<?php echo $unit_id;?>"> <?php echo $unit_name;?> </option>
									<?php }?> -->
							</select>
	
							<label>PHONE NUMBER:</label>
							<input type="text" class="form-control"  name="tel" value="<?php echo $row['contact']; ?>" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="10" required>
						</div>
						<!--end span 4 -->
						<div class="span12"><hr></div>		
							</form>			
								<!-- <script>
									jQuery(document).ready(function($){
										$("#update_crusader").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_student.php",
												data: formData,
												success: function(html){
													$.jGrowl("Member Successfully  Updated", { header: 'Crusader Updated' });
													window.location = 'view_stud.php';
												}
											});
										});
									});
								</script> -->
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include 'footer.php';?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>