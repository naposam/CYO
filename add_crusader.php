<?php include('includes/banner.php'); 
 error_reporting(0);
?>
<?php session_start();?>
<?php include('includes/head.php');?>
<!-- <?php// include 'save_crusader.php';?> -->
<?php include('validation.php');?>
<?php include_once ('LoaduserForm.php');?>

<?php 
   $gender="";
   $errors=array();
   $dob="";
   $datejoi="";
   $dateini="";
   $EmailAddress="";
if(isset($_POST['page1'])){
	$_SESSION['fname']=$_POST['fname'];
	$_SESSION['mname']=$_POST['mname'];
	$_SESSION['lname']=$_POST['lname'];
	$_SESSION['gender']=$_POST['gender'];
	$_SESSION['datejoi']=$_POST['datejoi'];
	$_SESSION['dateini']=$_POST['dateini'];
	$_SESSION['dob']=$_POST['dob'];
	$_SESSION['ResAddress']=$_POST['ResAddress'];
	$_SESSION['EmailAddress']=$_POST['EmailAddress'];
	$_SESSION['contact']=$_POST['contact'];
	if(($_SESSION['dob']>=date('Y')-5)){
		$errors['dob']="Pleasse do not qualify. Your age is below six years";
               }
      if(empty($_SESSION['gender'])){
		$errors['gender']="Please select your gender";
               }
     if($_SESSION['datejoi']<6){
		$errors['datejoi']="Your date joined is not valid";
               }
   if($_SESSION['dateini']-$_SESSION['datejoi']<1){
		$errors['dateini']="Your date initited is not valid";
               }
     if(!filter_var($_SESSION['EmailAddress'],FILTER_VALIDATE_EMAIL)){
    $errors['EmailAddress']="Your $email email address is in invalid";	
       }
if(count($errors)===0){ 
	if(!empty($_SESSION['gender'])){
		echo"<script>
      document.location='add_crusader_page2.php'
		</script>";
	
	}else{
		echo"<script>
      document.location='add_crusader.php'
		</script>";
	}
}
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
						      <?php if(count($errors)>0):?>
                            <div class="alert alert-info">
                          <button class='close' data-dismiss='alert'>&times;</button>
                           <?php foreach($errors as $error):?>
                            <li><?php echo $error;?></li>
                           <?php endforeach; ?>
                         </div>
                          <?php endif;?>
						    
                               <div class="block-content collapse in">						
						<form id="add_crusader" class="form-signin" method="post" enctype='multipart/form-data' autocomplete="off">
						<!-- span 4 -->
										<div class="span4" style="margin-left: 60px">
											
											<div class="form-group">
											<label>FIRST NAME:</label>
											<input type="text" class="input-block-level" id="fname"  name="fname" placeholder="First Name" required="" onkeyup="letteronly(this)"  value="<?php if(isset($_SESSION['fname'])){  echo $_SESSION['fname'];}?>">
											</div>
											<label>MIDDLE NAME:</label>
											<input type="text" class="input-block-level"  name="mname" placeholder="Middle Name"   value="<?php if(isset($_SESSION['mname'])){  echo $_SESSION['mname'];}?>">
											<label>LAST NAME:</label>
											<input type="text" class="input-block-level"  name="lname"  placeholder="Last Name"  required onkeyup="letteronly(this)" value="<?php if(isset($_SESSION['lname'])){  echo $_SESSION['lname'];}?>">
											<label>GENDER:</label>
												<select name="gender" class="input-block-level"  required="">
													<option selected="" disabled="" >Select Gender</option>
													<option <?php if(isset($gender)==="Male"){ echo "selected";}?>value="Male" >Male</option>
													<option <?php if(isset($gender)==="Female"){ echo "selected";}?> value="Female" >Female</option>
												</select>
											
											<label>DATE JOINED:</label>
							<input type="date" class="input-block-level"  name="datejoi" value="<?php if(isset($_SESSION['datejoi'])){  echo $_SESSION['datejoi'];}?>" required>		
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4" style="margin-left: 60px">

											
							<label>DATE INITIATED:</label>
							<input type="date" class="input-block-level"  name="dateini" value="<?php if(isset($_SESSION['dateini'])){  echo $_SESSION['dateini'];}?>" required>
											<label>DATE OF BIRTH:</label>
											<input type="date" name="dob" id="dob" value="<?php if(isset($_SESSION['dob'])){  echo $_SESSION['dob'];}?>" class="input-block-level" required>
											<label>PHONE NUMBER:</label>
							                <input type="text" class="input-block-level"  name="contact" placeholder="Telephone No" onkeyup="numberonly(this)" maxlength ="10" minlength="10" value="<?php if(isset($_SESSION['contact'])){  echo $_SESSION['contact'];}?>">
											<label>RESIDENTIAL ADDRESS:</label>
											<input type="text" Placeholder="Residential Address" name="ResAddress" value="<?php if(isset($_SESSION['ResAddress'])){  echo $_SESSION['ResAddress'];}?>" class="input-block-level" required>
											<label> EMAIL ADDRESS:</label>
											<input type="Email" Placeholder="Email Address" name="EmailAddress" value="<?php if(isset($_SESSION['EmailAddress'])){  echo $_SESSION['EmailAddress'];}?>" class="input-block-level">
											<!--Select from regional Table-->
											
											
							<br><br>
								

								<button class="btn btn-primary form-group" name="page1" ><i class="icon-save icon-large"></i> Next </button>
							
                                   
						</div>
						<!--end span 4 -->
						</form>	
						
						<script type="text/javascript">
							
							function readURL(input){
								if(input.files && input.files[0]){
									var reader = new FileReader();

									reader.onload = function(e){
										$('#pic')
										.attr('src',e.target.result);
									};

									reader.readAsDataURL(input.files[0]);
								}
							}

						</script>
					

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