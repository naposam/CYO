
<?php error_reporting(0);?>
<?php session_start();?>
<?php error_reporting(0) ; ?>
<?php include('includes/banner.php'); ?>
<?php include('includes/head.php');?>
<!-- <?php// include 'save_crusader.php';?> -->
<?php include('validation.php');?>
<?php include_once ('LoaduserForm.php');?>
<?php 
	if(isset($_POST['pages2'])){	
	$_SESSION['fname']=$_POST['fname'];
	$_SESSION['mname']=$_POST['mname'];
	$_SESSION['lname']=$_POST['lname'];
	$_SESSION['gender']=$_POST['gender'];
	$_SESSION['datejoi']=$_POST['datejoi'];
	$_SESSION['dateini']=$_POST['dateini'];
	$_SESSION['dob']=$_POST['dob'];
	$_SESSION['contact']=$_POST['contact'];
	$_SESSION['ResAddress']=$_POST['ResAddress'];
	$_SESSION['EmailAddress']=$_POST['EmailAddress'];
	$_SESSION['region']=$_POST['region'];
	$_SESSION['diocese']=$_POST['diocese'];
	$_SESSION['deanery']=$_POST['deanery'];
	$_SESSION['parish']=$_POST['parish'];
	$_SESSION['unit']=$_POST['unit'];
    $_SESSION['officetitle']=$_POST['officetitle'];
    $_SESSION['officelevel']=$_POST['officelevel'];
	$_SESSION['password']=$_POST['password'];

	$_SESSION['region']=$_POST['region'];
	$_SESSION['diocese']=$_POST['diocese'];
	$_SESSION['deanery']=$_POST['deanery'];
	$_SESSION['parish']=$_POST['parish'];
	$_SESSION['unit']=$_POST['unit'];
    $_SESSION['officetitle']=$_POST['officetitle'];
    $_SESSION['officelevel']=$_POST['officelevel'];
	$_SESSION['password']=$_POST['password'];

	}
?>
<head>
<style type="text/css">
	body{
      background-image: url(images/colorful.jpg) !important;
    }
</style>

</head>
    <body>

        <div class="container-fluid">
            <div class="row-fluid">
				
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block muted pull-right">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i><strong>REGISTRATION</strong></div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
						    <!-- validation to allow ony only on a text box-->
						    
                               <div class="block-content collapse in">						
						<form id="add_crusader" class="form-signin" method="post" enctype='multipart/form-data' action="form_data.php" autocomplete="off">
						<!-- span 4 -->
										
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4">			
											
											
											<label>REGION:</label>		
											<select name="region" id="region"class="form-controls" onchange="region_change()" value="<?php if(isset($_SESSION['region'])){  echo $_SESSION['region'];}?>" required>
											<option selected="" disabled="">Select Region</option>
                                            <?php echo fill_region($mysqli);?>
											
							           </select>
							            <label>DIOCESE:</label>		
											<select name="diocese" id ="diocese" class="form-controls" onchange="diocese_change()" value="<?php if(isset($_SESSION['diocese'])){  echo $_SESSION['diocese'];}?>" required>
											<option selected="" disabled="">Select Diocese</option>
											<?php echo fill_diocese($mysqli);?>
						        	</select>
							           <label>DEANERY:</label>		
											<select name="deanery" class="form-controls" id="deanery" onchange="deanery_change()" value="<?php if(isset($_SESSION['deanery'])){  echo $_SESSION['deanery'];}?>" required>
											<option selected="" disabled="">Select Deanery</option>
											<?php echo fill_deanery($mysqli);?>
											
							</select>		
										<label>PARISH:</label>		
											<select name="parish" class="form-controls" id="parish" onchange="parish_change()" value="<?php if(isset($_SESSION['parish'])){  echo $_SESSION['parish'];}?>" required>
											<option selected="" disabled="">Select Parish</option>
											<?php echo fill_parish($mysqli);?>
							</select>			
						</div>

						<div class="span4" style="margin-left: 90px">
							
							
							<label>UNIT:</label>		
											<select name="unit" class="form-controls" id="unit" value="<?php if(isset($_SESSION['unit'])){  echo $_SESSION['unit'];}?>" required>
											<option selected="" disabled="">Select Unit</option>
											<?php echo fill_unit($mysqli);?>
							</select>
							
							<label>OFFICE TITLE:</label>
												<select name="officetitle" class="form-controls" value="<?php if(isset($_SESSION['officetitle'])){  echo $_SESSION['officetitle'];}?>">
													<option selected="" disabled="">select Offfice Title</option>
													<option>CHAIRMAN</option>
													<option>VICE CHAIRMAN</option>
													<option>1ST VICE CHAIRMAN</option>
													<option>2ND VICE CHAIRMAN</option>
													<option>INTERNAL AUDITOR</option>
													<option>ORGANIZING SECRETARY</option>
													<option>ASS. ORGANIZING SECRETARY</option>
													<option>FINANCIAL SECRETARY</option>
													<option>TREASURER</option>
													<option>LADY ORGANIZER</option>
													<option>CO-OPTED MEMBER</option>
													<option>EX-OFFICIO</option>
												</select>
							<label>OFFICE LEVEL:</label>
												<select name="officelevel" class="form-controls" value="<?php if(isset($_SESSION['officelevel'])){  echo $_SESSION['officelevel'];}?>">
													<option selected="" disabled="">Select Office Level</option>
													<option>NATIONAL</option>
													<option>DIOCESE</option>
													<option>DEANERY</option>
													<option>PARISH</option>
													<option>UNIT</option> 
												</select>
							<label>PASSWORD:</label>
							<input type="password" class="input-block-level"name="password" placeholder="Enter your password" value="<?php if(isset($_SESSION['password'])){  echo $_SESSION['password'];}?>" required>
							<br><br>
								
								<a href="add_crusader.php" class="btn btn-primary">Previous </a>				
								<button class="btn btn-success" name="pages2" ><i class="icon-save icon-large"></i> Next </button>
							
							
                                   
						</div>
						<!--end span 4 -->
						</form>	
						<!---<script >
							$(document).ready(function(){
								$("#region").change(function(){
									var reg_id=$(this).val();
								
									$.ajax({
				                       url: 'checkselect.php',
				                       method: 'POST',
				                       data:{reg_id:reg_id},
				                       success:function(data){
				                       	$('#diocese').html(data);

				                       }

			                    })
                
                               
								});
							
						
							});
						</script>-->

                            </div>
                        </div>

                    <?php include ('Form_reg_main_ajax.php');?>
                    </div>
                </div>
            </div>
		<?php include ('footer.php'); ?>	
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>