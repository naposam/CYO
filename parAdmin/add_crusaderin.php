<?php include('includes/banner.php'); ?>
<?php include 'save_crusader.php';?>
<?php include('session.php'); ?>
<?php include_once ('LoaduserForm.php');?>
<?php include('validation.php');?>
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
		<?php include('sidebar_crusaders.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                      <div  id="block_bg" class="block muted pull-left">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right"><i class="icon-plus-sign icon-large"></i><strong>REGISTRATION</strong></div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="crusader.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
     
                               <div class="block-content collapse in">						
						<form id="add_crusader" class="form-signin" method="post" enctype='multipart/form-data' autocomplete="off">
						<!-- span 4 -->
										<div class="span4">
										
											<label>PROFILE PICTURE:</label>
											<input type="file" class="input-block-level"  name="image" required placeholder="First Name" accept="image/*">
											<label>FIRST NAME:</label>
											<input type="text" class="input-block-level"  name="fname" placeholder="First Name" required onkeyup="letteronly(this)" value="<?php echo $fname;?>">
											<label>MIDDLE NAME:</label>
											<input type="text" class="input-block-level"  name="mname"     placeholder="Middle Name" onkeyup="letteronly(this)"  value="<?php echo $mname;?>">
											<label>LAST NAME:</label>
											<input type="text" class="input-block-level"  name="lname"  placeholder="Last Name"  required onkeyup="letteronly(this)" value="<?php echo $lname;?>">
											<label>GENDER:</label>
												<select name="gender" class="form-controls" required value="<?php echo $gender;?>">
													<option selected="" disabled="">Select Gender</option>
													<option>Male</option>
													<option>Female</option>
												</select>
											<label>DATE JOINED:</label>
							<input type="date" class="input-block-level"  name="datejoi" required value="<?php echo $datejoi;?>">
							<label>DATE INITIATED:</label>
							<input type="date" class="input-block-level"  name="dateini" required value="<?php echo $dateini;?>">
													
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4">
					
											<label>DATE OF BIRTH:</label>
											<input type="date" name="dob" id="dob" required value="<?php echo $userDob;?>">
											<label>PHONE NUMBER:</label>
							                <input type="text" class="input-block-level"  name="contact" placeholder="Telephone No" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="10" required value="<?php echo $contact;?>">
											<label>RESIDENTIAL ADDRESS:</label>
											<input type="text" Placeholder="Residential Address" name="ResAddress" required value="<?php echo $ResAddress;?>">
											<label> EMAIL ADDRESS:</label>
											<input type="Email" Placeholder="Email Address" name="EmailAddress" required value="<?php echo $EmailAddress;?>">
											
											<label>REGION:</label>		
											<select name="region" id="region"class="form-controls" required onchange="region_change()" value="<?php echo $region;?>">
											<option selected="" disabled="">Select Region</option>
                                            <?php echo fill_region($mysqli);?>
											
							           </select>
							            <label>DIOCESE:</label>		
											<select name="diocese" id ="diocese" class="form-controls" required onchange="diocese_change()" value="<?php echo $diocese;?>">
											<option selected="" disabled="">Select Diocese</option>
											<?php echo fill_diocese($mysqli);?>
						        	</select>
							           <label>DEANERY:</label>		
											<select name="deanery" class="form-controls" id="deanery" required onchange="deanery_change()" value="<?php echo $deanery;?>">
											<option selected="" disabled="">Select Deanery</option>
											<?php echo fill_deanery($mysqli);?>
											
							</select>		
											
						</div>

						<div class="span4">
							<label>PARISH:</label>		
											<select name="parish" class="form-controls" id="parish" required onchange="parish_change()" value="<?php echo $parish;?>">
											<option selected="" disabled="">Select Parish</option>
											<?php echo fill_parish($mysqli);?>
							</select>
							
							<label>UNIT:</label>		
											<select name="unit" class="form-controls" id="unit" required value="<?php echo $unit;?>">
											<option selected="" disabled="">Select Unit</option>
											<?php echo fill_unit($mysqli);?>
							</select>
							
							<label>OFFICE TITLE:</label>
												<select name="officetitle" class="form-controls" required value="<?php echo $officetitle;?>">
													<option selected="" disabled="">select Offfice Title</option>
													<option>CHAIRMAN</option>
													<option>ORGANIZING SECRETARY</option>
												</select>
							<label>OFFICE LEVEL:</label>
												<select name="officelevel" class="form-controls" required value="<?php echo $officelevel;?>">
													<option>UNIT</option> 
												</select>
							<label>PASSWORD:</label>
							<input type="password" class="input-block-level"name="password" placeholder="Enter your password" required>
                            <label>CONFIRM PASSWORD:</label>
							<input type="password" class="input-block-level"name="confrimpassword" placeholder="Enter your password" required>
							<br><br>
											
								<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Save </button>
									<input type="reset" name="clear" value="Clear" class="btn btn-success" >
							
                                   
						</div>
						<!--end span 4 -->
						</form>						
			<!--<script>
			jQuery(document).ready(function($){
				$("#add_crusader").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_crusader.php",
						data: formData,
						success: function(html){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							window.location = 'LoginForm.php';  
						}
					});
				});
			});
			</script>-->
                            </div>
                        </div>
                        <!-- /block -->
               <?php include ('Form_reg_main_ajax.php');?>
                    </div>
                </div>
            </div>
		<?php include ('footer.php'); ?>	
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>