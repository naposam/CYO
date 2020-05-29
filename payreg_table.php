<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; 
// $select="SELECT crusader_id,year(curDate())-year(DOB) as age FROM crusaders where crusader_id='$get_id'";
$select="SELECT *,year(curDate())-year(DOB) as age, diocese.diocese_id,deanery.deanery_id,parish.parish_id,unit.unit_id FROM crusaders LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where crusaders.crusader_id='$get_id' ";

 $resultSet=mysqli_query($mysqli,$select);
 $row1=mysqli_fetch_array($resultSet);
 $id=$row1['crusader_id'];
 $unit_id=$row1['unit_id'];
 $diocese_id=$row1['diocese_id'];
 $deanery_id=$row1['deanery_id'];
 $parish_id=$row1['parish_id'];
    $age = $row1['age'];
							if($age>=6){
	      							 $section='INFANT JESUS';
       							}if ($age>=12) {
	      							 $section='YOUNG APOSTLES';
      							 }if ($age>=17){
          							$section='CHRISTIAN SOLDIER';
          						}
?>
<?php  include 'save_pay_reg.php';?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_searchreg.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block" style="width: 70%;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-money icon-large"></i>MAKE PAYMENT</div>
                                <div class="muted pull-right"><a id="view<?php echo $id; ?>" href="manual_payment.php<?php echo '?id='.$id;?>" ><i class="icon-arrow-left icon-large"></i>MANUAL PAYMENT</a></div>
                            </div>
                            <div class="block-content collapse in">
						<?php
						// $query = mysqli_query($mysqli,"select *,year(curDate())-year(DOB) as age, region.name, diocese.diocese_name,deanery.deanery_name, parish.parish_name, unit.unit_name from crusaders LEFT JOIN region ON crusaders.region=region.reg_id LEFT JOIN diocese ON crusaders.diocese=diocese.diocese_id LEFT JOIN deanery ON crusaders.deanery=deanery.deanery_id LEFT JOIN parish ON crusaders.parish=parish.parish_id LEFT JOIN unit ON crusaders.unit=unit.unit_id where id = '$get_id'")or die(mysqli_error($mysqli));
						// $row = mysqli_fetch_array($query);
      //                 	$age = $row ['age'];
                        
						
						?>
						<form id="update_student" class="form-signin" method="post" style="margin-left: 5%">
						<!-- span 4 -->
						                 <?php if(count($errors)>0):?>
                                         <div class="alert alert-danger">
                                         <?php foreach($errors as $error):?>
                                         <li><?php echo $error;?></li>
                                         <?php endforeach; ?>
                                         </div>
                                         <?php endif;?>
										<div class="span4">
										<input type="hidden" value="<?php echo $row['id']; ?>" class="input-block-level"  name="id" required>
										<input type="hidden" value="<?php echo $section; ?>" class="input-block-level"  name="section" required>
										<input type="hidden" value="<?php echo $unit_id; ?>" class="input-block-level"  name="unit_id" required>
										<input type="hidden" value="<?php echo $parish_id; ?>" class="input-block-level"  name="parish_id" required>
										<input type="hidden" value="<?php echo $deanery_id; ?>" class="input-block-level"  name="deanery_id" required>
										<input type="hidden" value="<?php echo $diocese_id; ?>" class="input-block-level"  name="diocese_id" required>
										<label style="margin-left: 65px;">CRUSADER ID:</label>
											<input type="text" class="form-control"  name="crusader_id" value="<?php echo $row1['crusader_id']; ?>" readonly style="margin-left: 65px;">
											<label style="margin-left: 65px">AMOUNT:</label>
										   <select class="form-control"style="margin-left: 65px" name="amount" value="<?php echo $amount;?>">
										   	<option selected="" disabled="">Select Amount</option>
										   	<?php $sql=mysqli_query($mysqli,"select * from amount")or die(mysqli_error($mysqli));
						                                    while($row1=mysqli_fetch_array($sql)){
						                                     //$sec=$row1['section_name'];
						                                     $amount=$row1['amount'];
						 
                          ?>          
										   	<option  value="<?php echo $amount; ?>"><?php echo "GHS " .$amount; ?></option>
										   <?php }?>
										   </select>
										</div>		
						<div class="span4">
							
							<label style="margin-left: 85px">PERIOD:</label>		
									<select name="period" class="form-control" required style="margin-left: 85px">
									<option selected="" disabled="">Select Period</option>
										<?php 
											$result = mysqli_query($mysqli,"select * from period ")or die(mysqli_error($mysqli));
											while($row1 = mysqli_fetch_array($result)){
											$from_date = $row1['from_date'];
											$to_date = $row1['to_date'];				
									     ?>
								<option value="<?php echo $from_date."/".$to_date;?>"> <?php echo $from_date." / ".$to_date?> </option>
									<?php }?>
							</select>
							<label style="margin-left: 70px">TRANSACTION ID:</label>
							<input type="text" class="form-control"  name="trans_id" value="" placeholder="Enter Transaction Id " style="margin-left: 85px">
									
									<br>
									<br>
							<button type='submit' class="btn btn-success" name="pay" ><i class="icon-money icon-large">PAY</i></button> 
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						
						<!--end span 4 -->
						<div class="span12"><hr></div>		
							</form>			
								<!--<script>
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
													$.jGrowl("Member Successfully  Updated", { header: 'Crusader Updated' });
													window.location = 'crusader.php';
												}
											});
										});
									});
								</script>-->
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